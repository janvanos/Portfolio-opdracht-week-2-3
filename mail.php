<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

if(mail("steven@stegmann.nl", "Bericht verstuurd vanuit portfolio: ", "Naam: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\Bericht: " . $_POST['message'])){
    echo 'De mail is succesvol verstuurd';
} else {
    echo 'Er is een probleem opgetreden tijdens het mailen...';
}

}

?>