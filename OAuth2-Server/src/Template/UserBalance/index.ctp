<div class="row">

    <!-- right column -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('List Client Balance') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('client.name',['label' => 'Client Name']) ?></th>
                            <th><?= $this->Paginator->sort('balance') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                                                                <?php foreach ($userBalance as $bal):?>
                        <tr>
                            <td><?= h($bal['client']->name) ?></td>
                            <td><?= h($bal->balance) ?></td>
                            <td class="actions">
                                                                        <?= $this->Html->link(__('View'), ['action' => 'view', $bal->id]) ?>
                                                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bal->id]) ?>
                                                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bal->id)]) ?>
                            </td>
                        </tr>
                                                                <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    <div class="pull-right">
        <?= $this->Html->link(__('Add Balance'), ['action' => 'add'],['class' => 'btn btn-info pull-left']) ?>
        <!--<button type="submit" class="btn btn-info pull-left"><?php echo (__('Add Clients')); ?></button>-->
    </div>
        <!-- /.box -->
    </div>
    
    <!--/.col (right) -->
</div>