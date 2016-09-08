<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Oauth Scope'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="oauthScopes index large-9 medium-8 columns content">
    <h3><?= __('Oauth Scopes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scopes as $oauthScope): ?>
            <tr>
                <td><?= h($oauthScope->id) ?></td>
                <td><?= h($oauthScope->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $oauthScope->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $oauthScope->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $oauthScope->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oauthScope->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
