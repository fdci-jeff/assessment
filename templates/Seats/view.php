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
            <?= $this->Html->link(__('Edit Seat'), ['action' => 'edit', $seat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Seat'), ['action' => 'delete', $seat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Seats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Seat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="seats view content">
            <h3><?= h($seat->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($seat->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($seat->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seat Number') ?></th>
                    <td><?= $this->Number->format($seat->seat_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($seat->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($seat->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Booking') ?></h4>
                <?php if (!empty($seat->booking)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Seat Id') ?></th>
                            <th><?= __('Booking Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($seat->booking as $booking) : ?>
                        <tr>
                            <td><?= h($booking->id) ?></td>
                            <td><?= h($booking->user_id) ?></td>
                            <td><?= h($booking->seat_id) ?></td>
                            <td><?= h($booking->booking_date) ?></td>
                            <td><?= h($booking->created) ?></td>
                            <td><?= h($booking->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Booking', 'action' => 'view', $booking->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Booking', 'action' => 'edit', $booking->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Booking', 'action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
