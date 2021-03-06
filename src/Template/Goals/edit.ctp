<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $goal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="goals form large-9 medium-8 columns content">
    <?= $this->Form->create($goal) ?>
    <fieldset>
        <legend><?= __('Edit Goal') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('limit_date');
            echo $this->Form->input('score');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
