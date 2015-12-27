 <?php             
//$this->load->view('header1');
$this->load->view('sidebar');
?>
<div class="col-md-6 ">
<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

      <p>
            <?php $data = array('class' => 'form-control', 'name'=>'first_name', 'id'=>'first_name');
            echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($data);?>
      </p>
      
      <p><?php $data = array('class' => 'form-control', 'name'=>'last_name', 'id'=>'last_name');?>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($data);?>
      </p>

      <p><?php $data = array('class' => 'form-control', 'name'=>'company', 'id'=>'company');?>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($data);?>
      </p>

      <p><?php $data = array('class' => 'form-control', 'name'=>'email', 'id'=>'email');?>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($data);?>
      </p>

      <p><?php $data = array('class' => 'form-control', 'name'=>'phone', 'id'=>'phone');?>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($data);?>
      </p>

      <p><?php $data = array('class' => 'form-control', 'name'=>'password', 'type'=>'password', 'id'=>'password');?>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($data);?>
      </p>

      <p><?php $data = array('class' => 'form-control', 'type'=>'password', 'name'=>'password_confirm', 'id'=>'password_confirm');?>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($data);?>
      </p>


      <p><?php $data = array('class' => 'btn btn-primary btn-xs', 'name'=>'submit', 'id'=>'submit');?>
          <?php echo form_submit($data, lang('create_user_submit_btn'));?></p>

<?php echo form_close();
//$this->load->view('footer');
?>
