<?php
//views/profiles/view.php
$this->load->view($this->config->item('theme') . 'header');

//echo '<pre>' . var_dump($profile) . '</pre>';?>
<p><?php echo anchor('profile/', 'Back to Profiles List')?></p>
<div class="col-sm-12 col-md-6 col-lg-4">
        <div class="col-sm-4">
            <img src="<?=base_url()?>img/<?=$profile['Picture']?>" alt="Profile Picture" class="img-circle  img-responsive">    
        </div>
        <div class="col-sm-8">
            <h3><?php echo $profile['FirstName']." ". $profile['LastName'] ?></h3>
			<p><?php echo $profile['email'] ?></p>
            <p><?php echo $profile['Bio'] ?></p>   
        </div>
</div>

<?php
$this->load->view($this->config->item('theme') . 'footer');
