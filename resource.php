<?php //echo "hi satya";die;
include "config.php";
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

</head>
<body>
<br/>
<br/>
<br/>
<div class="container">
<h1 class="display-6">Resources Center</h1>
<br/>
<br/>
<ul class="list-unstyled">
  <li class="media">
    <img class="mr-3" src="icon.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href= "https://www.africau.edu/images/default/sample.pdf"> Click here to download</a> </h5>
      Description of Resource whose link is provided above
    </div>
  </li>
  <br/>
  <li class="media">
    <img class="mr-3" src="icon.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href= "https://www.africau.edu/images/default/sample.pdf"> Click here to download</a> </h5>
      Description of Resource whose link is provided above
    </div>
  </li>
  <br/>
  <li class="media">
    <img class="mr-3" src="icon.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href= "https://www.africau.edu/images/default/sample.pdf"> Click here to download</a> </h5>
      Description of Resource whose link is provided above
    </div>
  </li>
  <br/>
  <li class="media">
    <img class="mr-3" src="icon.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href= "https://www.africau.edu/images/default/sample.pdf"> Click here to download</a> </h5>
      Description of Resource whose link is provided above
    </div>
  </li>
  <br/>
  <li class="media">
    <img class="mr-3" src="icon.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href= "https://www.africau.edu/images/default/sample.pdf"> Click here to download</a> </h5>
      Description of Resource whose link is provided above
    </div>
  </li>
  <br/>
  <li class="media">
    <img class="mr-3" src="icon.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href= "https://www.africau.edu/images/default/sample.pdf"> Click here to download</a> </h5>
      Description of Resource whose link is provided above
    </div>
  </li>
  <br/>
  <li class="media">
    <img class="mr-3" src="icon.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href= "https://www.africau.edu/images/default/sample.pdf"> Click here to download</a> </h5>
      Description of Resource whose link is provided above
    </div>
  </li>
  <br/>
</ul>
  
</div>
</body>
</html>