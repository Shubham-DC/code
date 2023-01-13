<?php //echo "hi satya";die;
include "config.php";
if(isset($_POST['submit'])){
if($_FILES["attachement1"]["name"]){
  $now = time();
  $attachement1=$now.$_FILES["attachement1"]["name"];
  move_uploaded_file($_FILES["attachement1"]["tmp_name"],"docs/".$attachement1);
  echo '<script type="text/javascript"> alert("File uploaded successfully!");
        </script>';
}
else {
  $attachement1 ='';
}
}
//include ".htaccess";
    //Check user login or not

    
    if(!isset($_SESSION['uname'])){
        header('Location: login.php');
    }

?>	
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudra</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
</head>
<body>
<body>
<img src="https://mudraindia.com/img/logo.svg" alt="Girl in a jacket" width="710" height="510" align="right">
</body>

<br/>
<br/>
<br/>
<div class="container">
<h1 class="display-6">Resources Center</h1>
<br/>
  <br/>
</ul>
<br/>
	<form method="POST" action="index.php">
      <input class="w-25 btn btn-lg btn-primary mx-auto" type="submit" value="Home"/>
    </form>
	<br/>  

	  <form method="post" enctype="multipart/form-data">
  <div class="form-group">
  <div class="col-4">
         <input type="file" name="attachement1" class="form-control" value="" >
   </div>
   <br/>
<button type="submit" name="submit" class="btn btn-primary mb-2 col-2">
   <h5>Submit</h5>
</button>
</div>
 </form>
</div>
</body>
<body>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<center>
				    <marquee width="100%" behavior="scroll" bgcolor="yellow">  
              <b><i><u> Harmonizing man and machine </b></i></u>
         
	</center>
</body>
</html>