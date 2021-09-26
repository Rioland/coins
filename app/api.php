<?php
require("Database.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_REQUEST['action']) and $_REQUEST['action'] == "currency") {
        $currency = htmlentities($_REQUEST['currency']);
        $_SESSION['currency'] = $currency;
    }
// crypto
    if (isset($_REQUEST['action']) and $_REQUEST['action'] == "crypto") {
        $crypto = htmlentities($_REQUEST['crypid']);
        $_SESSION['crypoid'] = $crypto;
    }

// pages
if (isset($_REQUEST['page']) and !empty($_REQUEST['page'])) {
    $_SESSION['page'] = $_REQUEST['page'];
    $_SESSION['title'] = $_REQUEST['title'];
   echo json_encode(array("code" => 200, "message" => "set"));

}





}
