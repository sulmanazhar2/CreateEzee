<?php
//$response = array('status'=>false);

if( isset($_GET['file'])) {
    echo 'hi';
    unlink($_GET['file']);
}
else{
    echo ($_GET['file']);
    
}

// Send JSON Data to AJAX Request
