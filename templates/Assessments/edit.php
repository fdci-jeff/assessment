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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assessment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assessment->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Assessments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assessments form content">
            <?= $this->Form->create($assessment) ?>
            <fieldset>
                <legend><?= __('Edit Assessment') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
