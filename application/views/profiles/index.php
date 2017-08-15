<?php
//views/profiles/index.php
$this->load->view($this->config->item('theme') . 'header');

//php echo '<pre>' . var_dump($profiles) . '</pre>';?>

<ul class="breadcrumb">
  <li><a href="<?=base_url()?>">Home</a></li>
  <li class="active">Profiles</li>
</ul>

<h2><?php echo $title ?></h2>
<?php foreach ($profiles as $profile): ?>
<div class="col-sm-12 col-md-6 col-lg-4">
        <div class="col-sm-4">
            <img src="<?=base_url()?>img/<?=$profile['Picture']?>" alt="Profile Picture" class="img-circle  img-responsive">    
        </div>
        <div class="col-sm-8">
            <h3><?php echo $profile['FirstName']." ". $profile['LastName'] ?></h3>
            <?php echo $profile['email'] ?>
            <p>
            <?php
                  echo anchor('profile/view/' . $profile['id'],'View Profile');
            ?>
            </p>    
        </div>
</div>
<?php endforeach; ?>
        
        





<?php
$this->load->view($this->config->item('theme') . 'footer');
?>
