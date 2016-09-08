<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Oauth Scope'), ['action' => 'edit', $oauthScope->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Oauth Scope'), ['action' => 'delete', $oauthScope->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oauthScope->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Oauth Scopes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Oauth Scope'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="oauthScopes view large-9 medium-8 columns content">
    <h3><?= h($oauthScope->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($oauthScope->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($oauthScope->description) ?></td>
        </tr>
    </table>
</div>
