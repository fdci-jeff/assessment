<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $assessment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Assessment'), ['action' => 'edit', $assessment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assessment'), ['action' => 'delete', $assessment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assessments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assessment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assessments view content">
            <h3><?= h($assessment->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($assessment->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assessment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($assessment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($assessment->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($assessment->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
