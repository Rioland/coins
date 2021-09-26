<?php
session_start();
class Database 
{
    
   public static function getBTCPrice($currency)
    {
        try {
            $content = file_get_contents("https://www.blockonomics.co/api/price?currency=" . $currency);
            $content = json_decode($content);
            $price = $content->price;
            if ($price > 0) {
                $_SESSION['btcprice'] = $price;
                return $price;
            } else if (isset($_SESSION['btcprice']) and !empty($_SESSION['btcprice'])) {
                return $_SESSION['btcprice'];
            }
            return $price;
        } catch (Exception $e) {
            print $e;
        }
    }

}


?>