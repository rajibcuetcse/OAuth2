<div class="row">

    <!-- right column -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('List Clients') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                                                                <?php foreach ($clients as $oauthClient): ?>
                        <tr>
                            <td><?= h($oauthClient->name) ?></td>
                            <td class="actions">
                                                                        <?= $this->Html->link(__('View'), ['action' => 'view', $oauthClient->id]) ?>
                                                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $oauthClient->id]) ?>
                                                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $oauthClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oauthClient->id)]) ?>
                            </td>
                        </tr>
                                                                <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    <div class="pull-right">
        <?= $this->Html->link(__('Add Clients'), ['action' => 'add'],['class' => 'btn btn-info pull-left']) ?>
        <!--<button type="submit" class="btn btn-info pull-left"><?php echo (__('Add Clients')); ?></button>-->
    </div>
        <!-- /.box -->
    </div>
    
    <!--/.col (right) -->
</div>