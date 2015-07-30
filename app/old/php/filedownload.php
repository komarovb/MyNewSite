    <?php  

    session_start();

     function jsOnResponse($obj)  
     {  
     echo ' 
     <script type="text/javascript"> 
     window.parent.onResponse("'.$obj.'"); 
     </script> 
     ';  
     }  
      
	 $dir = '/home/c/ce42928/komarovb/public_html/files/';  
     $name = basename($_FILES['image']['name']);  
     $file = $dir . $name;  
      
     $success = move_uploaded_file($_FILES['image']['tmp_name'], $file); 
     echo $_FILES['image']['tmp_name'];
	 echo $_SERVER['DOCUMENT_ROOT'];
     $_SESSION['imgname']=$_FILES['image']['name'];
     jsOnResponse("{'filename':'" . $name . "', 'success':'" . $success . "'}");  
      
    ?>  