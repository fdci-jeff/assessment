<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seat $seat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Seats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="seats form content">
            <?= $this->Form->create($seat) ?>
            <fieldset>
                <legend><?= __('Book a Seat') ?></legend>
                <?php
                    echo $this->Form->control('seat_number');
                    
                    echo $this->Form->control('status', [
                        'type' => 'select',
                        'options' => [
                            'available' => 'Available',
                            'booked' => 'Booked',
                        ],
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
