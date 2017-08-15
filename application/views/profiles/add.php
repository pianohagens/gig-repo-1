<?php
/**
* index.php view page for generic profile_form controller
*
*
*view/profile_form/index.php
*
* @package MediumLARGE_PIECE_OF_PROGRAM
* @subpackage Profile_form
* @author Evan Smyth <evsmyth@yahoo.com>
* @version 1.0 2015/05/21
* @link http://www.example.com/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Profile_form_model.php
* @see Profile_form.php
* @todo none
*/

$this->load->view($this->config->item('theme') . 'header'); //Loads Bootswatch theme and header
?>

<!--
/**
* Form that accepts data
*
*
* @param none
* @return void
* @todo none
*/
-->

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
            <label for="I_Am_A" class="col-lg-3 control-label">
                    
            </label>
            <div class="col-lg-6">
                <img src="<?=base_url()?>img/picID.jpg" alt="Picture ID" id="pic_id">
            </div>
        </div>
        <div class="form-group">
            <label for="I_Am_A" class="col-lg-3 control-label">
                    
            </label>
            
          <div class="col-lg-6">
            <input type="file" class="form-control"  name="userfile" id="userfile">
          </div>
        </div>
        
        <div class="form-group">
            <?php echo form_error('I_Am_A'); ?>
            <label for="I_Am_A" class="col-lg-3 control-label">I am</label>
          <div class="col-lg-6">
            <select name="I_Am_A" id="I_Am_A" class="form-control">
              <option value="employee">Employee</option>
              <option value="employer">Employer</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="FirstName" class="col-lg-3 control-label">First Name</label>
            
          <div class="col-lg-6">
            <?php echo form_error('FirstName'); ?>
            <input id="FirstName" class="form-control" type="text" name="FirstName"  value="<?php echo set_value('FirstName'); ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="LastName" class="col-lg-3 control-label">Last Name</label>
            
          <div class="col-lg-6">
            <?php echo form_error('LastName'); ?>
            <input id="LastName" class="form-control" type="text" name="LastName"  value="<?php echo set_value('LastName'); ?>">
          </div>
          
        </div>

        <div class="form-group">
          <label for="email" class="col-lg-3 control-label">Email</label>
            
          <div class="col-lg-6">
            <?php echo form_error('email'); ?>
            <input id="email" class="form-control" type="text" name="email"  value="<?php echo set_value('email'); ?>">
          </div>
          
        </div>
        <div class="form-group">
          <label for="password" class="col-lg-3 control-label">Password</label>
            
          <div class="col-lg-6">
            <?php echo form_error('password'); ?>
            <input id="password" class="form-control" type="password" name="password"  value="<?php echo set_value('password'); ?>">
          </div>
          <div class="col-lg-3">
          </div>
        </div>
        
        <div class="form-group">
          <label for="re_password" class="col-lg-3 control-label">Retype Password</label>
          <div class="col-lg-6">
            <?php echo form_error('re_password'); ?>
            <input id="re_password" class="form-control" type="password" name="re_password">
          </div>
          <div class="col-lg-3">
          
          </div>
        </div>
        
        <div class="form-group">
          <label for="languages" class="col-lg-3 control-label">Bio</label>
          <div class="col-lg-3">
            <?php echo form_error('Bio'); ?>
            <?php echo form_textarea( array( 'name' => 'Bio', 'rows' => '5', 'cols' => '53', 'value' => set_value('Bio') ) )?>
          </div>
          
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
            <?php echo form_submit('Submit', 'Add',"class='btn btn-success'"); ?>
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
