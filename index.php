<?php //echo "hi satya";die;
include "config.php";
//include ".htaccess";
    //Check user login or not

    
    if(!isset($_SESSION['uname'])){
        header('Location: login.php');
    }

    //logout
    if(isset($_POST['but_logout'])){
        session_destroy();
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



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
</head>
<body>
<body class="text-center">
    <br/>
    <br/>
    <div class="container sm">     
        <br/>
    </div>

    <div class="container">
    <form method="POST" action="">
                    <button type="submit" class="btn btn-primary" disabled> Hello <?php echo $_SESSION['uname']; ?></button> |
                    <input type="submit" class="btn btn-primary" value="Logout" name="but_logout" id="but_logout"> 
</form>


        <!-- <div class="row col-4">
            <label for="inputState" class="form-label"><strong>Select one option from Dropdown</strong></label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option id="tags" >Implementing Agencies</option>
            <option id="tags1" >SHUBHAM</option>
            <option id="tags2" >05291316</option>
            <option id="tags33" >Other option2</option>
            </select>
            </div>  -->
          
                <!-- <div class="col-md-2">
                    <button type="button" name="search" class="btn btn-primary" id="search">Search</button>
                </div> -->

    <br/>

    <h1 class="display-6">MUDRA ELECTRONICS LTD. IS YOUR
PREFERRED PARTNER FOR ALL IOT, OT
AND CYBER SECURITY RELATED
SOLUTIONS.</h1>
	<br/>
		<h1> Let's harmonize man & Machine </h1>
            <img src="hero-img.png" alt="">
            <br/>
            <br/>
<form method="POST" action="button.php">
      <input class="w-25 btn btn-lg btn-primary mx-auto" type="submit" value="Resource Center"/>
    </form>
    <br/>
	 <form method="POST" action="button1.php">
      <input class="w-25 btn btn-lg btn-primary mx-auto" type="submit" value="Submission & Feedback"/>
    </form>
    <br/>
	<form method="POST" action="team.php">
      <input class="w-25 btn btn-lg btn-primary mx-auto" type="submit" value="Our Team"/>
    </form>
	<br/>
	<form method="POST" action="vulnerability.php">
      <input class="w-25 btn btn-lg btn-primary mx-auto" type="submit" value="Let's Get Familiar r_xss"/>
    </form>
	<br/>
		<form method="POST" action="stored.php">
      <input class="w-25 btn btn-lg btn-primary mx-auto" type="submit" value="Testimonial s_xss"/>
    </form>
	<br/>
            <div class="text-center">
            <blockquote class="blockquote text-center">
  <p class="mb-0">Equipped with a high level of technical expertise, the Company began
manufacturing the Analog range of computers in 1989, simultaneously
honing its skills in the development of software technology. Mudra
soon began blazing new trails in the field of system integration. Indeed,
in 1997 Mudra designed and installed some of the largest Networking
Solutions in North India. This trend has continued. Today, Mudra
Electronics has burgeoned into a total IT solution provider, designing
and installing some of the biggest and most complex LAN, WAN and
Wireless solutions for a wide range of clients including corporate /
business houses, financial institutions and banks, public sector units,
educational institutes, government establishments, on government
organizations, foreign establishments and hospitals<br/></p>

</br>

  <footer class="blockquote-footer">Mudra Electronics Ltd. <cite title="Source Title">at your service</cite></footer>
</blockquote>
</div>  
</div>  
<br/>
</div>
<body>
<center>
				    <marquee width="100%" behavior="scroll" bgcolor="yellow">  
              <b><i><u> This web server is built to be hacked!!!!!! DO NOT PUT ANY SENSITIVE/CONFIDENTIAL INFORMATION HERE</b></i></u>
         
	</center>
</body>
</body>
</html>