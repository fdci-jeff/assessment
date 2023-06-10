<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingFixture
 */
class BookingFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'booking';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'seat_id' => 1,
                'booking_date' => '2023-06-10',
                'created' => '2023-06-10 07:15:33',
                'modified' => '2023-06-10 07:15:33',
            ],
        ];
        parent::init();
    }
}
