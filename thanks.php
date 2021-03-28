<?php
$name= $_POST['user_name'];
$surename= $_POST['user_surname'];
$toto= $_POST['toto'];
$mail= $_POST['user_email'];
$phone= $_POST['téléphone'];
$message= $_POST['user_message']
?>
<br/>



<?php echo "Merci " .  $surename . " " . $name . " de nous avoir contacté à propos de " . $toto; ?> <br/>

<?php echo "Un de nos conseiller vous contactera soit à l’adresse $mail ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : 

$message";

?>