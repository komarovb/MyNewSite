<?php
 
session_start();
 
$code=$_SESSION['code'];
 
if($_POST['capt']=="" || $_POST['capt']==" ")
{
    echo "WRONG";
}
else
{
          $p_code=$_POST['capt'];
          if($p_code!=$code)
          {
             
             echo "WRONG";
          }
          echo "OK";

}
 
?>