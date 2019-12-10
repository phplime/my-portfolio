 <?php $st = settings(); ?>
<div class="login-box" style="min-height: 470px;">
  <div class="login-logo">
    <a href="#"><?= isset($st->site_name) && $st->site_name !=""?substr($st->site_name,0,18):"AdminLTE";  ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><b>Login</b> to start your session</p>
	 <span class="reg_msg"></span>

   <?php if ($this->session->flashdata('verify')) { ?>
    <div class="alert alert-success alert-dismissible" id="successMessage" style="margin-bottom: 5px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4>
            <i class="icon fa fa-check"></i>
            success!
        </h4>
        <?php echo $this->session->flashdata('verify'); ?>
    </div>
    <?php } ?>

    <form action="<?php echo base_url('admin/home/user_login') ?>" method="post" id="user_login_form">


      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox" value="1"> Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
     
    </div>
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br> -->
    <a href="<?php echo base_url('admin/home/register') ?>" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>