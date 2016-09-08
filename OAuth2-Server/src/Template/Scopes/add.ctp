<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Oauth Scopes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="oauthScopes form large-9 medium-8 columns content">
    <?= $this->Form->create($oauthScope) ?>
    <fieldset>
        <legend><?= __('Add Oauth Scope') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
