<?php 
session_start();
?>

<?php require_once('includes/ac_header.php'); ?>
  <header>Abstract vs. Concrete</header>
<br>
<div>In the following module, you will see a series of images. 
<br>
<br>
</div>
    <div>
Your task is to rate each image on how <span class="bold_text">abstract</span> or how <span class="bold_text">concrete</span> you precieve each
image to be.<br>
<br>
<div>
  The scale ranges from <span class="bold_text">1</span> to <span class="bold_text">6</span>, with scores representing the following:<br>      
          <?php require_once('includes/rating_table.php'); ?>

</div>
<div class="underline-big"><strong>Guidelines For Ratings</strong></div>
<span class="bold_text"><br>
ABSTRACT</span><br>
        
     <span class="underline">Very abstract</span> images are typically non-realistic depictions<br>
 that do not necessarily associate to any particular object, place, or thing. <br>
 <div id="one">
   <p><strong>
       <span class="bold_text">CONCRETE</span></strong><br>
     Very concrete images are typically realistic depictions that associate with objects,
        places or things.</p>

        <div id="submit"><a href="ac_8.php" class="transition"><img src="assets/next_o.jpg" width="19" height="19" alt="continue"></a>  <sup> continue</sup>
</div>
</div>
</div>
</div></div></body>
</html>