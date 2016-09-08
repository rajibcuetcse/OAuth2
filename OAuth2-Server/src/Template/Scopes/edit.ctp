<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $oauthScope->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $oauthScope->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Oauth Scopes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="oauthScopes form large-9 medium-8 columns content">
    <?= $this->Form->create($scope) ?>
    <fieldset>
        <legend><?= __('Edit Oauth Scope') ?></legend>
        <?php
            echo $this->Form->input('id',array('type' => 'text'));
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
