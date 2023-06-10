<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Seats Controller
 *
 * @method \App\Model\Entity\Seat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeatsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $seats = $this->paginate($this->Seats);

        $this->set(compact('seats'));
    }

    /**
     * View method
     *
     * @param string|null $id Seat id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seat = $this->Seats->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('seat'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seat = $this->Seats->newEmptyEntity();
        if ($this->request->is('post')) {
            $seat = $this->Seats->patchEntity($seat, $this->request->getData());
            if ($this->Seats->save($seat)) {
                $this->Flash->success(__('The seat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seat could not be saved. Please, try again.'));
        }
        $this->set(compact('seat'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Seat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('Booking');

        $status = $this->Seats->find('all', [
            'conditions' => [
                'seats.id' => $id,
                'seats.status' => 'booked',
            ]
        ])->first();

        if ($status) {
            $this->Flash->error(__('Seat is already booked.'));
            return $this->redirect(['action' => 'index']);
        }

        $boo = new \DateTime();
        $seat = $this->Seats->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            // create check if auth user has already booked a seat
            $check = $this->Booking->find('all', [
                'conditions' => [
                    'Booking.user_id' => $this->Auth->user('id'),
                    'Booking.booking_date' => $boo->format('Y-m-d')
                ]
            ])->first();
           
            if ($check) {
                $this->Flash->error(__('You Already booked a seat for this day. Please come back tomorrow.'));
            } else {
                $seat = $this->Seats->patchEntity($seat, $this->request->getData());
                if ($this->Seats->save($seat)) {
                    $booking = $this->Booking->newEmptyEntity();
                    $booking->user_id = $this->Auth->user('id');
                    $booking->seat_id = $seat['id'];
    
                    $booking->booking_date = $boo->format('Y-m-d H:i:s');
                    $this->Booking->save($booking);
    
                    $this->Flash->success(__('The seat has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The seat could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('seat'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Seat id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seat = $this->Seats->get($id);
        if ($this->Seats->delete($seat)) {
            $this->Flash->success(__('The seat has been deleted.'));
        } else {
            $this->Flash->error(__('The seat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
