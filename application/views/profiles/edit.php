<?php
/**
* edit.php view page for generic profile controller
*
*
*view/profiles/edit.php
*
* @package itc260-sp15-gig-central
* @subpackage application/views/profiles
* @author Rattana Neak
* @version 1.0 2016/06/05
* @link 
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Profile_model.php
* @see Profile.php
* @todo none
*/

$this->load->view($this->config->item('theme') . 'header'); //Loads Bootswatch theme and header
?>



<div class="container">

  <div class="col-lg-10">


    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
      <fieldset>
        <?php
        $attributes = array('class' => '', 'id' => '');
        echo form_open('Profile', $attributes);
        ?>

        <div class="form-group">
          <legend><h2><strong>Add Profile</strong></h2></legend>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label">
                    
            </label>
            <div class="col-lg-6">
                <img src="<?=base_url()?>img/<?=$Picture?>" alt="Picture ID" id="pic_id" class="img-responsive">
            </div>
        </div>
        <div class="form-group">
            <label for="userfile" class="col-lg-3 control-label">
                    
            </label>
            
          <div class="col-lg-6">
            <input type="file" class="form-control"  name="userfile" id="userfile">
          </div>
        </div>
        
        <div class="form-group">
            <label for="I_Am_A" class="col-lg-3 control-label">I am <span class="required">*</span></label>
            <?php echo form_error('I_Am_A'); ?>
          <div class="col-lg-6">
            <select name="I_Am_A" id="I_Am_A" class="form-control">
              <option value="employee"><?=$i_am?></option> 
              <option value="employee">Employee</option>
              <option value="employer">Employer</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="FirstName" class="col-lg-3 control-label">First Name <span class="required">*</span></label>
            
          <div class="col-lg-6">
            <input id="FirstName" class="form-control" type="text" name="FirstName"  value="<?=$FirstName?>">
          </div>
          <?php echo form_error('FirstName'); ?>
        </div>

        <div class="form-group">
          <label for="LastName" class="col-lg-3 control-label">Last Name <span class="required">*</span></label>
            
          <div class="col-lg-6">
            <input id="LastName" class="form-control" type="text" name="LastName"  value="<?=$LastName?>">
          </div>
          <?php echo form_error('LastName'); ?>
        </div>

        <div class="form-group">
          <label for="email" class="col-lg-3 control-label">Email <span class="required">*</span></label>
            
          <div class="col-lg-6">
            <input id="email" class="form-control" type="text" name="email"  value="<?=$email ?>">
          </div>
          <?php echo form_error('email'); ?>
        </div>
        <!--
        <div class="form-group">
          <label for="old_password" class="col-lg-3 control-label">Old Password <span class="required">*</span></label>
            
          <div class="col-lg-6">
            <input id="old_password" class="form-control" type="password" name="old_password"  >
          </div>
          <div class="col-lg-3">
          <?php// echo form_error('old_password'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-lg-3 control-label">New Password <span class="required">*</span></label>
            
          <div class="col-lg-6">
            <input id="password" class="form-control" type="password" name="password" >
          </div>
          <div class="col-lg-3">
          <?php// echo form_error('password'); ?>
          </div>
        </div>
        
        <div class="form-group">
          <label for="re_password" class="col-lg-3 control-label">Retype Password <span class="required">*</span></label>
          <div class="col-lg-6">
            <input id="re_password" class="form-control" type="password" name="re_password">
          </div>
          <div class="col-lg-3">
          <?php// echo form_error('re_password'); ?>
          </div>
        </div>
        -->
        <div class="form-group">
          <label for="languages" class="col-lg-3 control-label">Bio<span class="required">*</span></label>
          <div class="col-lg-3">
            <?php echo form_textarea( array( 'name' => 'Bio', 'rows' => '5', 'cols' => '53', 'value' => $Bio ) )?>
          </div>
          <?php echo form_error('Bio'); ?>
        </div>

        
        <div class="form-group">
          <label for="NewsletterSubscriber" class="col-lg-3 control-label">Subscribe to Newsletter?</label>           
          <div class="col-lg-6">
            <input id="NewsletterSubscriber" class="form-control" type="checkbox" name="NewsletterSubscriber" value="1" checked>
          </div>
        </div>
        
        <div class="form-group text-right">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            <?php echo form_submit('Submit', 'Save',"class='btn btn-success'"); ?>
            </div>
        </div>
        <?php echo form_close(); ?>

      </fieldset>
    </form>
  </div>
</div>

<?php
$this->load->view($this->config->item('theme').'footer');
?>
