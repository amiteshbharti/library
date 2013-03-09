<html>
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" href="view/styles/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="view/styles/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="view/styles/style1.css" type="text/css"/>
<!-- 	/* importing jquery library*/ -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script> 
<script type="text/javascript" src="view/javascripts/slide.js"></script>
<script type="text/javascript" src="view/javascripts/import_div_signup.js"></script>
<script type="text/javascript" src="view/javascripts/import_div_forgot.js"></script>


<style type="text/css">
#container {
	height:750;
width:1250px;
	border:1px solid;
	background-color:grey;
	font-color:red;
}

#b {
	height: 60px;
	width: 1250px;
	border: 1px solid;
	font-size: 30px;
}

#c {
	height:687px;
	width:624px;
	border:1px solid;
	float:left;
	
}

#c img{
	
    zoom: 2;  //increase if you have very small images

    display: block;
    margin: auto;

   
   height: 100%;

   width: 100%;
}



#login{
	height: 687px;
	width: 622px;
	border: 1px solid;
	float: right;
	background-color:white;
	overflow:scroll;
}

#at1 {
	text-align: center;
	border: 3px solid;
	height: 250px;
	width: 400px;
	align: justify;
	margin: 150px 100px 100px 100px;
	padding: 70px 20px 20px 20px;
}
</style>
</head>
<body>
	<div id="container">

		<img src="view/images/mine.gif" alt="mine pic" height="57px" width="236px">
<!-- 		<script type="text/javascript" src="view/javascripts/slide.js">
		</script> -->

	<div id="menu">

			<ul>

				<li><a id="menu1" href="#">HOME</a></li>
				<li><a id="menu2" href="#" > ABOUT US</a></li>
				<li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#"> CERTIFICATION <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<!-- links -->
					</ul></li>
				<li><a id="menu4" href="#">CONTACT US </a></li>

			</ul>
	</div>

	<div id="c">

			<img src="view/images/java1.jpg" name="slide" width="100%" height="100%"   />
			<script>
			
// 			var image1=new Image()
// 			image1.src="view/images/java1.jpg"
// 			var image2=new Image()
// 			image2.src="view/images/java2.jpg"
// 			var image3=new Image()
// 			image3.src="view/images/java3.jpg"
// 			var image4=new Image()





// 			//variable that will increment through the images
// 			var step=1
// 			function slideit(){
// 			//if browser does not support the image object, exit.
// 			if (!document.images)
// 			return
// 			document.images.slide.src=eval("image"+step+".src")
// 			if (step<3)
// 			step++
// 			else
// 			step=1
// 			//call function "slideit()" every 2.5 seconds
// 			setTimeout("slideit()",2500)
// 			}

						
			slideit();
			
		   </script>
	      
	</div>
		<div id="login">
		
		
		
		
		
		
			<form id="at1">
				SIGN IN!</br>
				</br> EMAIL ID &nbsp;&nbsp;&nbsp;<input type="text" name="text1"></br>
				</br> PASSWORD&nbsp;<input type="text" name="text2"></br>
				</br>
				</br> <a href="userhome.php">LOGIN</a></br>
				</br> <a href="#" onClick="loadForgot()">FORGOT PASSWORD &nbsp;&nbsp;</a>
				<a href="#" onClick="loadSignup()">SIGN UP</a>
			</form>
		
		
		
		
		
		
		
		</div>
	</div>
	
</body>
</html>
