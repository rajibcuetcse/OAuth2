<div class="row">

    <!-- right column -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Rest API</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                                                        <?= $this->Form->create('clients',['class' => 'form-horizontal']) ?>
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
                            <label for="api_key" class="col-sm-2 control-label">
                                <?php echo (__("Name"));?>
                            </label>

                            <?php echo $this->Form->input('name',['class' =>'form-control','label' => false]);?>        
                        </div>
                        <div class="form-group">
                            <label for="api_key" class="col-sm-2 control-label">
                            <?php echo (__("Redirect URI"));?>
                            </label>

                            <?php echo $this->Form->input('redirect_uri',['class' =>'form-control','label' => false]); ?>
                        </div>

                        <!--											<div class="form-group">
                                                                                                                        <label for="api_secret" class="col-sm-2 control-label">API
                                                                                                                                Secret</label>
                        
                                                                                                                        <div class="col-sm-10">
                                                                                                                                <input type="text" name="api_secret" class="form-control" id="api_secret" placeholder="API Secret">
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                        <div class="col-sm-offset-2 col-sm-10">
                                                                                                                                <button type="submit" class="btn btn-info pull-left">Generate
                                                                                                                                        Token</button>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                        <div class="col-sm-offset-2 col-sm-10">
                                                                                                                                <p>
                                                                                                                                        <strong>Your Token is :</strong>---------------------------
                                                                                                                                </p>
                                                                                                                        </div>
                                                                                                                </div>-->
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
