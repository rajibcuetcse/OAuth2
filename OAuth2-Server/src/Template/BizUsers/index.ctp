<div class="row">

    <!-- right column -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('List Users') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('username') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                                                                <?php foreach ($bizUsers as $bizUser): ?>
                        <tr>
                            <td><?= h($bizUser->username) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $bizUser->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bizUser->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bizUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bizUser->id)]) ?>
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
            

        </div>
        
    <div class="pull-right">
        <?= $this->Html->link(__('Add Users'), ['action' => 'add'],['class' => 'btn btn-info pull-left']) ?>
        <!--<button type="submit" class="btn btn-info pull-left"><?php echo (__('Add Clients')); ?></button>-->
    </div>
        <!-- /.box -->
    </div>
    
    <!--/.col (right) -->
</div>