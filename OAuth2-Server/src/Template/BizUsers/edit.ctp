<div class="row">

    <!-- right column -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                                                        <?= $this->Form->create($bizUser,['class' => 'form-horizontal']) ?>
                                                        <?php 
                                                        $myTemplates = [
                                                            'inputContainer' => '<div class="col-sm-10">{{content}}</div>',
                                                            'submitContainer' => '{{content}}',
                                                        ];
                                                        $this->Form->templates($myTemplates);
                                                        ?>
            <div class="box-body">
                <div class="row">

                    <!-- right column -->
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">
                                <?php echo (__("Username"));?>
                            </label>

                            <?php echo $this->Form->input('username',['class' =>'form-control','label' => false]);?>        
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">
                                <?php echo (__("Password"));?>
                            </label>

                            <?php echo $this->Form->input('password',['class' =>'form-control','label' => false]);?>        
                        </div>
                        <div class="form-group">
                            <label for="role" class="col-sm-2 control-label">
                                <?php echo (__("Role"));?>
                            </label>

                            <?php echo $this->Form->input('role',['class' =>'form-control','label' => false,
            'options' => ['admin' => 'Admin', 'author' => 'Author']]);?>        
                        </div>

                        <div class="form-group">   
                            <div class="col-sm-offset-2 col-sm-10">
                                <?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary custom-button-width .navbar-right']) ?>                                    
                                <?= $this->Html->link(__('Cancle'), ['action' => 'index'],['class' => 'btn btn-info custom-button-width .navbar-right']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer"></div>
            <!-- /.box-footer -->
							<?= $this->Form->end() ?>
        </div>
        <!-- /.box -->

    </div>
    <!--/.col (right) -->
</div>