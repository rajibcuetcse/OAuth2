<h1>Login to Web App</h1>

<?= $this->Form->create(null,array('autocomplete' => 'off')) ?>
<input style="display:none">
<input type="password" name="password" style="display:none">
<?php $this->Form->templates([
    'inputContainer' => '{{content}}',
    'submitContainer' => '{{content}}'
]); ?>
    <p>
        <?= $this->Form->input('username',array('label' => false,'placeholder' => "Username",'autocomplete' => 'off','value' => '')) ?>
        <!-- <input type="text" name="login" value="" placeholder="Username or Email"> -->
    </p>
    <p>
        <?= $this->Form->input('password',array('label' => false,'placeholder' => "Password")) ?>
        <!-- <input type="password" name="password" value="" placeholder="Password"> -->
    </p>
    <p class="remember_me">
        <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          Remember me on this computer
        </label>
    </p>
    <p class="submit">
        <?= $this->Form->submit(__('Login'),array('div' => false,'label' => false)); ?>
        <!-- <input type="submit" name="commit" value="Login"> -->
    </p>
<?= $this->Form->end() ?>