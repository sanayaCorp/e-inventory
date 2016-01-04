    <div class="col-md-4 col-md-offset-4 kotak-login">
      <div class="panel panel-success">
        <div class="panel-heading">
            <?php echo lang('login_heading');?>
            <?php echo lang('login_subheading');?>
        </div>    
        <div id="infoMessage"><?php echo $message;?></div>
        <div class="panel-body">
            <?php echo form_open("auth/login");?>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="username" class="form-control" placeholder="Username/Email" aria-describedby="basic-addon1">
            </div>
            <p>
              <?php echo lang('login_identity_label', 'identity');?>
              <?php echo form_input($identity);?>
            </p>

            <p>
              <?php echo lang('login_password_label', 'password');?>
              <?php echo form_input($password);?>
            </p>

            <p>
              <?php echo lang('login_remember_label', 'remember');?>
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            </p>


            <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

          <?php echo form_close();?>

          <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
      </div>
    </div>
  </div>