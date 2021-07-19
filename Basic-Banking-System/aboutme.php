<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
#main{
	background-color: #D2B4DE ;
	border:8px solid purple;
	position: absolute;
	top: 50%;
	left:50%;
	transform: translate(-50%,-50%);
	width:900px;
	padding: 30px;
	box-sizing: border-box;
	border-radius: 25px;
	box-shadow:0 15px 50px rgba(0,0,0,.2);
	/*background-color: #e5e4d7;
	margin-left: 10px;
	margin-right: 320px;
	margin-bottom: 10px;
	margin-top:10px;
	border-radius: 5px;
	padding: 20px;
	font-size: 110%;*/
}
#main2{
	width:180px;
	height: 200px;
	background: url(img/1.png);
	border-radius: 50%;
	float:left;
	shape-outside:circle();
	margin: 60px 30px 30px 0; 
	box-shadow: 0 0 15px #999999;

}
p{
	margin:25px;
	padding: 5px;
	text-align: justify;
	line-height: 22px;
}
h1{
	margin: 0 0 20px;
	padding: 0;
	font-size: 30px;
}
.social-menu ul {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0;
    margin-top: 150px;
    display: flex;
}
.social-menu ul li {
    list-style: none;
    margin: 0 10px;
}
.social-menu ul li .fa {
    color: #000000;
    font-size: 25px;
    line-height: 50px;
    transition: .5s;
}
.social-menu ul li .fa:hover {
    color: #ffffff;
}
.social-menu ul li a {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: white;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
}
.social-menu ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}
.social-menu ul li:nth-child(2) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}
.social-menu ul li:nth-child(3) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}

img{margin-top: 9px; 
 } 
 .nv ul{
 	float:right;
			list-style-type: none;
			margin-top: 25px;
			margin-right: 100px;
 }
 .nv ul li{
display:inline-block;
 }
 .nv ul li a{
 text-decoration: none;
			padding:5px 10px;
			border:1px solid black;
			border-width: 2px;
			transition: 0.6s ease;
			position: relative;
		    display: inline-block;
		    padding: 12px 36px;
		    margin: 10px 0;
		    text-decoration: none;
		    text-transform: uppercase;
		    font-size: 30px;
		    letter-spacing: 2px;
		    border-radius: 20px;
		    color: black;
			background-color:brown;
		    
    
 }
 .nv ul li a:hover{
 	color: white;
 	background-color: #2471A3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
		}
  
body{

	background-color:#d3e7b1;
	/*border:20px solid #2F576C;
	width:100%;
	height:100%;*/
	
}

active{

}

	</style>
	<title>About Us</title>
 
 
</head>
<body>
	<div  class="nv">
	<ul >
				<li class="active"><a  href="index.php" >Home</a></li> </ul></div>
	
			<div id="main">
				<div id="main2"></div>
				<h2 style="font-family:Copper black;"> ..JYOTI MAHTO..</h2>
                                <h5><i>                                     Intern at GRIP sparks foundation!!</i></h5>
				    <img id="1" align="left"-->

			    <p> I am a student of btech CSE 4TH year at PARUL UNIVERSITY .I am  interested in web development and also have knowledge about HTML,CSS,Javascript.
			
			<br>I have also done various projects in different subjects and technologies. And I am currently doing internship at GRIP which is a great opportuniy i got.And now looking for an organization which can provide me a chance to enhance my skills and knowledge. <br>I want to succeed in an environment of growth and excellence to meet personal and organizational goals.
			<br><center><h3 style="margin-top:-30px;">Social Media Info</h3></center>
			  </p>

			</div>
<div class="social-menu">
  <ul>
    <li><a href=""><i class="fa fa-facebook"><img src="img/fb.png"></i></a></li>
    <li><a href=""><i class="fa fa-twitter"><img src="img/youtube.png"></i></a></li>
    <li><a href=""><i class="fa fa-instagram"><img src="img/twitter.png"></i></a></li>
    
  </ul>
</div>





</body>
</html>