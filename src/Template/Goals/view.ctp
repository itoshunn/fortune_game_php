<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Goal'), ['action' => 'edit', $goal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Goal'), ['action' => 'delete', $goal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="goals view large-9 medium-8 columns content">
    <h3><?= h($goal->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($goal->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $goal->has('user') ? $this->Html->link($goal->user->name, ['controller' => 'Users', 'action' => 'view', $goal->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($goal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Score') ?></th>
            <td><?= $this->Number->format($goal->score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Limit Date') ?></th>
            <td><?= h($goal->limit_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($goal->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($goal->modified) ?></td>
        </tr>
    </table>
</div>
