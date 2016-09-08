<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Biz User Balance'), ['action' => 'edit', $bizUserBalance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Biz User Balance'), ['action' => 'delete', $bizUserBalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bizUserBalance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Biz User Balance'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biz User Balance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Biz Users'), ['controller' => 'BizUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biz User'), ['controller' => 'BizUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bizUserBalance view large-9 medium-8 columns content">
    <h3><?= h($bizUserBalance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Biz User') ?></th>
            <td><?= $bizUserBalance->has('biz_user') ? $this->Html->link($bizUserBalance->biz_user->id, ['controller' => 'BizUsers', 'action' => 'view', $bizUserBalance->biz_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Balance') ?></th>
            <td><?= h($bizUserBalance->balance) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($bizUserBalance->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($bizUserBalance->id) ?></td>
        </tr>
    </table>
</div>
