<?php 

    define ("TITLE", "Team | Franklin's Fine Dining ");
    include('includes/header.php');
  
?>


<div id="team-members" class="cf">
    <h1>Our team at Franklin's</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aspernatur libero adipisci quisquam, ab inventore natus tempora, voluptatibus voluptatum, doloribus placeat vitae quos quam. Laborum eaque alias sed nam, adipisci.
    </p>
    
    <hr/>
    
    <?php 
    
        foreach ($teamMembers as $member) {
    ?>
    
    <div class="member">
        <img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
        <h2><?php echo $member["name"]; ?></h2>
        <p><?php echo $member["bio"]; ?></p>
    </div>
    
    
    
    
    <?php
        }
    ?>
</div>


<?php include('includes/footer.php'); ?>