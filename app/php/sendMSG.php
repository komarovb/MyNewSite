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
        //$txt = "Name: ".$name."Email: ".$email."Message: ".$msg."END";
        //fwrite($myfile, $txt);
        //fclose($myfile);

        //Email configuration
        $mailSecond = new PHPMailer;
        $mailSecond->isSMTP();
        $mailSecond->Host='smtp.gmail.com';
        $mailSecond->SMTPAuth=true;
        $mailSecond->Username = 'bkstudio80@gmail.com';
        $mailSecond->Password='redoalgo800';
        $mailSecond->SMTPSecure = 'tls';
        $mailSecond->Port='587';

        $mailSecond->CharSet = 'UTF-8';
        $mailSecond->From='bkstudio80@gmail.com';
        $mailSecond->FromName='Borys';
        $mailSecond->addAddress($email);

        $mailSecond->isHTML(true);

        $mailSecond->Subject = 'Contact me confirmation email';
        $mailSecond->Body='<p>Dear Siк/Madam</p>
            I have received your message and will answer it as soon as possible!';
        $mailSecond->AltBody='<p>This version appears when your mail client does not support HTML in emails.</p>
        Basically I just wanted to inform you that I had received your message.';

        $mailFirst = new PHPMailer;
        $mailFirst->isSMTP();
        $mailFirst->Host='smtp.gmail.com';
        $mailFirst->SMTPAuth=true;
        $mailFirst->Username = 'bkstudio80@gmail.com';
        $mailFirst->Password='redoalgo800';
        $mailFirst->SMTPSecure = 'tls';
        $mailFirst->Port='587';

        $mailFirst->CharSet = 'UTF-8';
        $mailFirst->From='bkstudio80@gmail.com';
        $mailFirst->FromName='Borys';
        $mailFirst->addAddress('fisika80@gmail.com');

        $mailFirst->isHTML(true);

        $mailFirst->Subject = $name.' wants to contact you';
        $mailFirst->Body='<p>Bob,</p>
            Message:<p>'.$msg.'</p>
            From:<p>'.$email.'</p>';

        if($mailFirst->send()){
            if($mailSecond->send()){
                echo "OK";
            }
            else{
                echo "MAILERROR2\n-";
                echo $mailSecond->ErrorInfo;
            }
        }
        else{
            echo "MAILERROR1\n-";
            echo $mailFirst->ErrorInfo;
        }
    }
    else{
        echo "CERROR!";
    }
?>