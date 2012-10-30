<?php 
session_start();
if (isset($_SESSION['location']))
{
	unset($_SESSION['location']);
}
$_SESSION['location']='training';
?>


<?php require_once('includes/ac_header.php'); ?>



<div id="one">Abstract vs. Concrete
    (CLICK ON NEXT ARROW AFTER YOU HAVE READ EACH INSTRUCTION)<div id="submit"><a href="ac_2.php" class="transition"><img src="assets/next_o.png" width="19" height="19" alt="continue"></a>  <sup> NEXT</sup>
  </span> </div>
</div>
</div>

</body>
</html>