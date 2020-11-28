<?php
session_start();
if (isset($_SESSION['user'])) {
	echo 'مرحبا : ' . $_SESSION['user'].'<br>';

}else{
	header('location:login.php');
}
?>
<a href="logout.php">تسجيل الخروج</a>


  <html>

       <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>awesome house</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
       </head>
	   <body>
	    <div class="hero">
		<div class="nav-bar">
		<div class="nav-logo">
		</div>

		</div>
		<div class="content-row">
		    <div class="left-col">
			   <div class="search">
			      <i class="fa fa-search"></i>
				  <input type=""text>
			   </div>
			   <hr>
			  
			   <h1>مرحباً بك على موقعنا لتصميم  الديكور </h1>
			   <p>اذا كنت مستخدم/ة جديد على موقعنا </p>
			   <p>سوف تظهر صفحتك على  الموقع خلال ثلاثة ايام </p>
			    <p> ويمكنك تعديل بياناتك من خلال التواصل مع الدعم </p>
				<p> عبر الايميل  homedecor@gmail.com </p>
				<p>شكراً لتسجيل بموقعنا   </p>
			</div>
			
		</div>
		
	   </body>
	   </html>