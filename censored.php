<?php 

$parag = $_GET['text'];
$toCensored = $_GET['toCensored'];
// var_dump($_GET);
?>

<p><?php echo $parag ?></p>

<?php echo strlen($parag); ?>

<p><?php echo $toCensored ?> </p>

<?php $censored = str_replace($toCensored,'***',$parag) ?>

<p><?php echo $censored ?></p>

<p><?php echo strlen($censored) ?></p>