<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>The Pivot App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Ranga|Sedgwick+Ave" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!--[if it IE9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
    <![endif]-->

</head>
<body>

<div class="main-color">
    <h2><center>OH sNaP! POP QUIZ!</center></h2>
<form action="index.php" method="post">
	<label for="formGroupExampleInput">
		<h1>Whats 3 times 12? </h1></br> <h3>(P.S. I'll let you know if your close)</h3>
	</label>
    <input type="text" name="ansr" class="form-control" placeholder="Insert your answer">
    </br>
	</br>
    <input type="submit" class="btn-lg button1 btn-block">
    </br>
    <input type="reset" class="btn-lg button2 btn-block">
    </br>
</form>
</div>   


<div class="jumbotroncolor2">
</br>
    <h2>
<center>
<?php
   $Ansr = 0;
   If(isset($_POST['ansr'])) {
	   $Ansr = $_POST['ansr'];
   }
	
	switch($Ansr) {
		case '36': 
		echo "You are CORRECT!";
		break;
		default: 
		echo "My friend.... Your not even close! <br> You are etheir using a big number or your using words. <br> Numbers ONLY, Try Again!";
		break;
		case ($Ansr>=1 && $Ansr <= 20):
		echo "Guess SOME WHAT HIGHER!";
		break;	
		case ($Ansr>=21 && $Ansr <= 32):
		echo "GETTING CLOSE guess Higher!";
		break;	
		case ($Ansr>=33 && $Ansr <= 35):
		echo "JUST A LITTLE BIT HIGHER!";
		break;	
		case ($Ansr>=37 && $Ansr <= 40):
		echo "JUST A LITTLE BIT LOWER!";
		break;
		case ($Ansr>=41 && $Ansr <= 70):
		echo "GETTING CLOSE guess Lower!";
		break;
		case ($Ansr>=71 && $Ansr <= 100):
		echo "Guess SOME WHAT LOWER!";
		break;
		
	}
	
?>
		</center>	
		
	</h2>
</br>
</br>

</body>
</html>