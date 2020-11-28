<?php
session_start();
include 'connDB.php';
if (isset($_SESSION['user'])) {
	header('location:index1.php');
}
if (isset($_POST['login'])) {
	$user = $_POST['username'];
	$pass = sha1($_POST['password']);
	$q = $conn->prepare("SELECT user , pass FROM users 
					WHERE user = '$user' AND  pass = '$pass' ");

	 	$q->execute();
	$count = $q->rowCount();
	if ($count == 1) {
		$_SESSION['user']=$user;
		header('location:index1.php');
	}else{
		echo "خطأ في كلمةالمرور أو اسم المستخدم";
	}
}
 ?>

 <html>

       <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>project</title>


        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       </head>
	   <body>
	   
	   
 <div class="hero">
		<div class="nav-bar">
		<div class="nav-logo">
		</div>
		<nav>
		 <ul>
				<li><a href="afterabefore.html">قبل و بعد</a></li>
        <li><a href="bro.html">المصممين</a></li>
        <li>تصاميم الغرف
          <i class="fa fa-caret-down"></i>
          <div class="sub-drop">
               <ul>
                  <div class="sub-content">
                  <li><a href="proo.html">غرفة الجلوس</a>
                  <li><a href="PROJECT.html">المطبخ</a>
                   <li><a href="pro2.html">غرفة الطعام</a>
                  <li><a href="pro.html">غرفة النوم</a>
                 <li><a href="proo2.html">الكماليات</a>
                </div>
               </ul>
             </div>
        </li>
        <li><a href="أثاث خارجي.html">تصميم الحديقة </a></li>
				<li><a href="interface.html"class="act">الرئيسية</a></li>
         </ul>
		 </nav>
		</div>
		<div class="content-row">
		    <div class="left-col">
			   <div class="search">
			      <i class="fa fa-search"></i>
				  <input type=""text>
			   </div>
			   <hr>
			   <h1>يمكننا مساعدتك في تأثيث منزل أحلامك</h1>
			   <h3>البحث عن الإلهام.العثور على المهنيين</h3>
			</div>
			<div class="right-col"></div>
			</div>
		</div>
		
		 <form method="POST">
		<div class="login-box">
	   <h1>تسجيل الدخول</h1>
	     <div class="textbox">
		 <i class="fa fa-user" aria-hidden="true"></i>
		 <input dir="rtl" align="right"  type="text" placeholder="اسم المستخدم" name="username" value="" required>
		 </div>
		  <div class="textbox">
		  <i class="fa fa-lock" aria-hidden="true"></i>
		 <input dir="rtl" align="right" type="password" placeholder="كلمة المرور" name="password" value="" required>
		 </div>
	
		 <input class="btn" type="submit"  name="login" value="دخول">
		  
		   <i class="btn">
		 <a href="signup.php">تسجيل</a> </i>
		 </div>
		  </form>
		 
	   </body>
	   </html>
	  