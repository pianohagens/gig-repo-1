<?php
/**
* edit.php is the edit gigs page for Gigs controller
*
* views/gigs/edit.php
*
* @package ITC 260 Gig Central CodeInitor
* @subpackage Gig Controller
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 2.1 2015/06/11
* @link http://www.tcbcommercialproperties.com/sandbox/codeignitor/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gig_model.php
* @see Gig.php
* @todo none
*/
//error messages for form validation

?>


<?php $this->load->view($this->config->item('theme') . 'header'); ?>
<script>    
            function showForm($formId) {
            var x = document.getElementById($formId);
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
            }
</script>
<div class="container">
    <h1><strong>Edit Your Gigs</strong></h1><br />
  <div class="col-lg-10">
      <!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
       <!-- <?php echo '<pre>'; 
        var_dump($gigs); 
        echo '</pre>' ?>-->
 
        <?php foreach ($gigs as $gig): ?>
            <h3><?php echo $gig['Name'] ?></h3>
            <p><?php echo $gig['CompanyCity'] . ", " . $gig['State'] ?></p>
            <p><?php echo $gig['GigOutline'] ?></p>
            <button onclick=<?php echo "showForm('edit" . $gig['GigID'] . "')" ?>>Edit this gig</button>
            
        <form class="form-horizontal" role="form" method="post" action="edit">
    <div style="display:none;" <?php echo "id='edit" . $gig['GigID'] . "'" ?>>    
    <fieldset>
            <p>Edit Detail and Click Update Button</p>
            <div class="form-group">
                
                <legend><h3><strong>Company Information</strong></h3></legend>
            </div>
            <?php echo $gig['CompanyID']; ?>
            <div class="form-group">
                <label for="Name" class="col-lg-3 control-label"><em>Company Name</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('Name'); ?>
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Company Name" value="<?php echo $gig['Name']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="CompanyAddress" class="col-lg-3 control-label"><em>Company Address</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('CompanyAddress'); ?>
                        <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" value="<?php echo $gig['Address']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="CompanyCity" class="col-lg-3 control-label"><em>City</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('CompanyCity'); ?>
                        <input type="text" class="form-control" id="CompanyCity" name="CompanyCity" placeholder="City" value="<?php echo $gig['CompanyCity']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="State" class="col-lg-3 control-label"><em>State</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('State'); ?>
                        <input type="text" class="form-control" id="State" name="State" placeholder="State" value="<?php echo $gig['State']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="ZipCode" class="col-lg-3 control-label"><em>Zip Code</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="ZipCode" name="ZipCode" placeholder="Zip Code" value="<?php echo $gig['ZipCode']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="CompanyPhone" class="col-lg-3 control-label"><em>Company Phone</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('CompanyPhone'); ?>
                        <input type="text" class="form-control" id="CompanyPhone" name="CompanyPhone" placeholder="Phone Number" value="<?php echo $gig['CompanyPhone']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="Website" class="col-lg-3 control-label"><em>Company Website</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('Website'); ?>
                        <input type="text" class="form-control" id="Website" name="Website" placeholder="Company Website" value="<?php echo $gig['Website']; ?>">
                    </div>
            </div>
            <br>            
            <br>
 
                <fieldset>
                <legend><h3><strong>Company Gig Contact</strong></h3></legend>
            <div class="form-group">
                <label for="FirstName" class="col-lg-3 control-label"><em>First Name</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('FirstName'); ?>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" value="<?php echo $gig['FirstName']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="LastName" class="col-lg-3 control-label"><em>Last Name</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('LastName'); ?>
                        <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" value="<?php echo $gig['LastName']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="Email" class="col-lg-3 control-label"><em>Email</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('Email'); ?>
                        <input type="text" class="form-control" id="Email" name="Email" placeholder="Gig Contact Email" value="<?php echo $gig['Email']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="Phone" class="col-lg-3 control-label"><em>Phone</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('Phone'); ?>
                        <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Gig Contact Phone" value="<?php echo $gig['Phone']; ?>">
                    </div>
            </div>
            </fieldset>
 
            <fieldset>
            <div class="form-group">
                <label for="EmploymentType" class="col-lg-3 control-label"><em>Employment Type</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('EmploymentType'); ?>
                        <select class="form-control" id="EmploymentType" name="EmploymentType" value=<?php echo $gig[‘EmploymentType’]; ?>>
                            <option value="0">Select One</option>
                            <option value="contract" <?php echo set_select('EmploymentType', 'contract'); ?>>Contract</option>
                            <option value="intern" <?php echo set_select('EmploymentType', 'intern'); ?>>Intern</option>
                            <option value="temporary" <?php echo set_select('EmploymentType', 'temporary'); ?>>Temporary</option>
                            <option value="permanent" <?php echo set_select('EmploymentType', 'permanent'); ?>>Permanent</option>
                        </select>
                    </div>
            </div>
                </fieldset>
                <fieldset>
            <div class="form-group">
                <label for="PayRate" class="col-lg-3 control-label"><em>Pay rate</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('PayRate'); ?>
                        <input type="text" class="form-control" id="PayRate" name="PayRate" placeholder="Pay rate" value="<?php echo $gig['PayRate']; ?>">
                    </div>
            </div>
                </fieldset>
        <br>
        <br>
                 <fieldset>
                <legend><h3><strong>Gig Description</strong></h3></legend>
            <div class="form-group">
                <label for="GigOutline" class="col-lg-3 control-label hidden-label"><em>Gig Outline</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('GigOutline'); ?>
                        <textarea class="form-control" rows="15" cols="25" id="GigOutline" name="GigOutline" placeholder="Project/Gig Description" ><?php echo $gig['GigOutline']; ?></textarea>
 
                    </div>
            </div>
                </fieldset>
            <br>
            <br>
                <fieldset>
                <legend><h3><strong>Gig Qualifications</strong></h3></legend>
            <div class="form-group">
                <label for="GigQualify" class="col-lg-3 control-label hidden-label"><em>Qualifications</em></label><br>
                    <div class="col-md-6">
                        <?php echo form_error('GigQualify'); ?>
                        <textarea  rows="15" cols="25" class="form-control" id="GigQualify" name="GigQualify" placeholder="Qualifications"><?php echo $gig['GigQualify']; ?></textarea>
                    </div>
            </div>
                </fieldset>
        <br>
        <br>
                <fieldset>
                <legend><h3><strong>Gig Special Instructions</strong></h3></legend>
            <div class="form-group">
                <label for="SpInstructions" class="col-lg-3 control-label hidden-label"><em>Special Instructions</em></label><br>
                    <div class="col-md-6">
                        <?php echo form_error('SpInstructions'); ?>
                        <textarea rows="15" cols="25" class="form-control" id="SpInstructions" name="SpInstructions" placeholder="Special Instructions"><?php echo $gig['SpInstructions']; ?></textarea>
                    </div>
            </div>
                </fieldset>
        <br>
            
        <fieldset>
            <div class="col-xs-12 col-md-6 col-lg-9">
                <button type="submit" name="submit" value=<?php echo $gig['GigID']; ?>"btn btn-default pull-right">Submit Changes</button>
            </div>
        </fieldset>
        </div>        
        </form>
        <?php endforeach; ?>
    </div>
</div>
<?php $this->load->view($this->config->item('theme') . 'footer'); ?>
