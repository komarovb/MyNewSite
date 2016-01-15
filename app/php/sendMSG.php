<?php
    
    require 'mailer/PHPMailerAutoload.php';

    session_start();
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg=$_POST["text"];
    $capt=$_POST["capt"];
    $name_prefix = rand(1, 10000);
    if($_SESSION['code']==$capt)
    {

        //$myfile = fopen("../msgs/".$name_prefix."F".$name.".txt", "w") or die("FERROR");
        $txt = "Name: ".$name."
Email: ".$email."
Message: ".$msg."
END";
        //fwrite($myfile, $txt);
        //fclose($myfile);

        //Email configuration
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username = 'bkstudio80@gmail.com';
        $mail->Password='redoalgo800';
        $mail->SMTPSecure = 'tls';
        $mail->Port='587';

        $mail->CharSet = 'UTF-8';
        $mail->From='bkstudio80@gmail.com';
        $mail->FromName='Borys';
        $mail->addAddress('fisika80@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = 'My Subject';
        $mail->Body='Hello mail! <p>HTML LINE</p>';
        $mail->AltBody='Alternative mail';

        if($mail->send()){
            echo "OK";
        }
        else{
            echo "MAILERROR";
            echo $mail->ErrorInfo;
        }
    }
    else{
        echo "CERROR!";
    }
?>