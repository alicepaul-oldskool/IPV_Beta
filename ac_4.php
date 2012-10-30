<?php 
session_start();
?>
<?php require_once('includes/ac_header.php'); ?>

  <header>Abstract vs. Concrete</header>
<br>


<div>In the following module, you will see a series of images. 
<br><br>


</div>
    <div>
Your task is to rate each image on how <span class="bold_text">abstract</span> or how <span class="bold_text">concrete</span> you precieve each
image to be.<br>

<br>
<div id="one">
The scale ranges from <span class="bold_text">1</span> to <span class="bold_text">6</span>, with scores representing the following:<br>      
     <?php //require_once('ac_instructions_ratings.php'); ?>

     <?php require_once('includes/rating_table.php'); ?>

     </div><div id="submit"><a href="ac_5.php" class="transition"><img src="assets/next_o.png" width="19" height="19" alt="continue"></a>  <sup> NEXT</sup>
</div>
</div>
</div>
</div>
</body>
</html>