<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bizUserBalance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bizUserBalance->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Biz User Balance'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Biz Users'), ['controller' => 'BizUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biz User'), ['controller' => 'BizUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bizUserBalance form large-9 medium-8 columns content">
    <?= $this->Form->create($bizUserBalance) ?>
    <fieldset>
        <legend><?= __('Edit Biz User Balance') ?></legend>
        <?php
            echo $this->Form->input('biz_user_id', ['options' => $bizUsers]);
            echo $this->Form->input('balance');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
