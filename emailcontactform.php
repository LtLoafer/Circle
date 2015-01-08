    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Contact form</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- CSS - Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>    
        
    <section id="enquirysent" name="enquirysent">
	<div id="enquirywrap">
		<div class="container">
            <div class="introtext">
                <div class="row">
                    <div class="col-lg-12 name">
                        <img src="assets/img/Circle-logo-med2.png" alt="Responsive image"><br><br>
                                       
  
<?php

// Declare variables from the Contact form //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$Name= $_POST["InputName"];
$Email= $_POST["InputEmail"];
$Phone= $_POST["InputPhone"];
$Message = $_POST["InputMessage"];

    
$Message =wordwrap($Message, 70);
    
$info ='Email: '.$Email.' Phone: '.$Phone;    

// Send Email //
mail ("neilbaker26@hotmail.com", $Name,$info,$Message);    
mail ("Hi@madebycircle.co.uk",$Name,$info,$Message);
mail ("ben@cazot.com",$Name,$info,$Message);
// header("Location: http://localhost/Ben/index.php");    
echo ("<h1>Hi $Name </h1> <p>"); 
echo ("<h1>Thanks for the enquiry. <br> We'll get back to you shortly.<h1>");    

} ?>  
                        
<a href="http://www.madebycircle.co.uk/ben" class="smoothScroll"><h2>Click here to return to Circle</h2></a>            
                        
                    </div>

     
                </div><!-- /row -->
            </div>
		</div><!-- /container -->
	</div><!-- /aboutwrap -->
</section>

    
        
        

</body>
</html>

        
        