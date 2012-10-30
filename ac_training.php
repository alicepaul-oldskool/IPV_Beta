<?php
/**
* @todo remove old training file
* use this one for both
*/
session_start();
//require_once('config.php');
require_once('helpers.php');

$choice=$_POST['radio'];
$training_ceiling=constant(TRAINING_COUNTER);

$num_tries = (isset($_POST["num_tries"])) ? $_POST["num_tries"]  + 1 : 1;
if ($_POST["num_tries"]> 6 )
{
	header("Location:training_complete.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Abstractness vs. Concreteness</title>
<script type="text/javascript">
function clickHandle(buttonNum){
    enableButtons(false);
    document.forms['survey'].answer.value = buttonNum;
    document.forms['survey'].submit();
}

function enableButtons(truefalse) {
    var number = document.forms['survey'].answer;
    var buttons = document.getElementsByClassName('surveybutton');
    for(var i=0; i<buttons.length; i++){
	buttons[i].disabled = !truefalse;
    }
}

window.onload = function() {
   var image = document.getElementById('survey_image');
   if(!image.complete){
       var refresh = window.setTimeout('function\(\)', 100);
   }
   else{
       window.setTimeout('enableButtons\(true\)', <?php echo $g_button_disable_time_ms;?>); 
       window.setTimeout('document.forms[\'survey\'].submit\(\)', 5000);
   }

}

</script>
<script>
    $(function() {
        $( "#radio1" ).buttonset();
    });
    </script>

<link href="css/survey.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div id="content">
<?php 
echo $choice;

echo $training_ceiling;
print_r($_POST);?>
<form id="survey" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<p></p>
<p>&nbsp;</p>

<table width="547" height="114" border="0" cellpadding="0" cellspacing="0">
       <tr>
         <td width="16.6%" height="22"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(1)" value="1"onchange='this.form.submit()' />
    
    
         </div></td>
         <td width="16.6%" ><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(2)" value="2" onchange='this.form.submit()'/>
         </div></td>
         <td width="16.6%"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(3)" value="3" onchange='this.form.submit()'/>
         </div></td>
         <td width="16.6%"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(4)" value="4" />
         </div></td>
         <td width="16.6%"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(5)" value="5" onchange='this.form.submit()'/>
         </div></td>
         <td width="16.6%"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(6)" value="6" onchange='this.form.submit()' />
         </div></td>
       </tr>
       <tr>
         <td height="90" ><label for="radio1">
           <div align="center">1 <br>
             Very Abstract</div>
           </label></td>
         <td><label for="radio2">
           <div align="center">2 <br>
             Abstract</div>
           </label></td>
         <td><label for="radio3">
           <div align="center">3<br>
             Somewhat Abstract</div>
           </label></td>
         <td><label for="radio4">
           <div align="center">4<br>
             Somewhat Concrete</div>
           </label></td>
         <td><label for="radio1">
           <div align="center">5 <br>
             Concrete</div>
           </label></td>
         <td><label for="radio1">
           <div align="center">6 <br>
             Very Concrete</div>
           </label></td>
       </tr>
</table>
     </p>
           	  <input type="hidden" name="answer" value='0' />
              	  <input type="hidden" name="pic_num" value="" />
<input type="hidden" name="formid" value="<?php echo $_COOKIE['submit1'];?>" />

<input type="hidden" name="answer<?php $_COOKIE['submit1'];?>" value='0' />
<?php echo $_COOKIE['submit1'];?>
   	     
   	
<input type="hidden" name="num_tries" value="<?php echo $num_tries; ?>" />
<noscript><input type="submit" value="Submit"></noscript>

</form>

</div>

<?
if($_POST['submit'])
{ 
	if(isset($_COOKIE['submit1']))
	{ 
		if($_COOKIE['submit1'] >= 2)
		{ 
	header("Location:ac_training_complete.php");
		 
		}
	}
	else 
	{ 
	$_COOKIE['submit'] += 1; 
	} 
}
else 
{ 
setcookie('submit1', 1, 86400);  
} 
  
 ?>       
</p>
<?php echo 'Iterations:'.$_POST["num_tries"];?><br>
<br>
<br>
<br>

</div>
<footer>
 
</footer>

</body>
</html>