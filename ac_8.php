<?php 
session_start();
if (isset($_SESSION['location']))
{
	unset($_SESSION['location']);
}
$_SESSION['location']='training1';
?>
<!doctype html>
<html>
<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">
<link href="css/smoothness/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title></title>
<link href="css/survey.css" rel="stylesheet" type="text/css" media="all"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript">
    $(document).ready(function() {
            $("header").css("display", "none");
            $("header").show(1000);
	
			
			$('a').click(function(e) {
		
			$("#two").css("display", "none");
            $("#two").show(1000);
    
		});

	});
</script>
</head>

<body>
<div id="content">
<div class="container">
  <div class="completed">
<?php echo $_SESSION['location'];?>
<br>
  <br>
  <br>
  <header>You have completed Training Phase 1.<!--<a href="ac_2.php" class="transition">LINK</a>-->
<br>
<br>


Please click the Red Arrow To Continue.<br>
<br>
<br>
</header>
</div>
<br>
<br>
<br>

<div id="submit"><a href="ac_training.php" class="transition"><img src="assets/next_o.jpg" width="19" height="19" alt="continue"></a>  <sup> continue</sup>
  </span>
</div>
</div>
</body>
</html>