<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]--> 
<!--[if IE 7 ]>	<html lang="en" class="ie ie7"> <![endif]--> 
<!--[if IE 8 ]>	<html lang="en" class="ie ie8"> <![endif]--> 
<!--[if IE 9 ]>	<html lang="en" class="ie ie9"> <![endif]--> 
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>OMG Button</title>
<meta name="description" content="">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/font.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- responsive style -->

<link rel="stylesheet" type="text/css" href="css/media.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
(function(window) {
  if (window.location !== window.top.location) {
    window.top.location = window.location;
  }
})(this);
</script>

</head>

<?php 

	$basename = basename($_SERVER['PHP_SELF'],'.php');

	if($basename != 'index') {
		$bodyclass = $basename;
	} else {
		$bodyclass = 'home';
	}

?>

<body class="<?php echo $bodyclass; ?>">

	<section class="container">
		
		<a href="index.php"><img class="logo" src="images/logo.png"></a>