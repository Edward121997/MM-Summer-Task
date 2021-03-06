<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: login");
}
?>
<head>
<title>Admin Page</title>
<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			 <link rel="stylesheet" href="css/bootstrap-override.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<style>
.fa {
    padding: 20px;
    font-size: 30px;
    width: 70px;
    text-align: center;
    text-decoration: none;
}

.fa:hover {
    opacity: 0.7;}

	.fa-facebook {
background: #3B5998;
color: white;
}
 	.fa-twitter {
background: #55ACEE;
color: white;
}

 	.fa-google {
background: #dd4b39;
color: white;
}

#round{
    padding: 20px;
    font-size: 15px;
    width: 50px;
    text-align: center;
    text-decoration: none; 
	border-radius:75%;

}
#bar{
font-size:20px;
color:#D6D6D6;}

.glyphicon{
 font-size:20px;
}

.footpart
{background:#020104;
border:3px solid rgb(22,77,100);
padding:40px;
color:#D6D6D6;
margin:40px 0px 10px 0px;
font-family:times;
font-weight:bold;
font-size:16px;
}	

.content{
border:4px groove;
padding:20px 20px 20px 4px;
font-weight:bold;
color:rgb(94,47,26);
font-family:Georgia;
}

form{
padding:10px 10px 10px 10px;}

.navbar-default{
color:rgb(7,24,5);
background-color:rgb(42,93,13);
}

.logopart{
padding 20px 10px 20px 10px;
margin:40px 0px 10px 0px; }


#profile{
padding:50px;
border:1px groove grey;
font-size:20px;
background-color:rgb(34,13,22);
color:#fff;
}

	
	
</style>






<body>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>

<div class='row'>
<div class='col-md-12'>
<nav class='navbar navbar-default navbar-fixed-top'>
<div class='container-fluid'>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  
	  <div class='collapse navbar-collapse' id='myNavbar'>
<ul class='nav navbar-nav'>
<li><a href='#'><strong style='color:rgb(255,255,255)'>HOME</strong></a></li>

 <li class='dropdown'><a class="dropdown-toggle" data-toggle="dropdown" href='#'><strong style='color:rgb(255,255,255)'>NATIONAL</strong>
<span class='caret'></span></a>
<ul class='dropdown-menu'>
<li><a href='#'>Breaking-News</a></li>
<li class="divider"></li>
<li><a href='#'>Politics</a></li>
<li class="divider"></li>
<li><a href='#'>Crime</a></li>
<li class="divider"></li>
<li><a href='#'>Weather</a></li>
</ul>
</li> 



<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><strong style='color:rgb(255,255,255)'>INTERNATIONAL</strong>
<span class='caret'></span></a> 
<ul class='dropdown-menu'>
<li><a href='#'>Europe</a></li>
<li class="divider"></li>
<li><a href='#'>Asia</a></li>
<li class="divider"></li>
<li><a href='#'>America</a></li>
<li class="divider"></li>
<li><a href='#'>Middle east</a></li>
<li class="divider"></li>
<li><a href='#'>Autralia</a></li>
</ul>
</li>

<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><strong style='color:rgb(255,255,255)'>ENTERTAINMENT</strong>
<span class='caret'></span></a>
<ul class='dropdown-menu'>
<li><a href='#'>Awards</a></li>
<li class="divider"></li>
<li><a href='#'>Movies</a></li>
<li class="divider"></li>
<li><a href='#'>Music</a></li>
<li class="divider"></li>
<li><a href='#'>Celebrity</a></li>
</ul>
</li>

 
<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><strong style='color:rgb(255,255,255)'>SPORTS</strong>
<span class='caret'></span></a>
<ul class='dropdown-menu'>
<li><a href='#'>Cricket</a></li>
<li class="divider"></li>
<li><a href='#'>Football</a></li>
<li class="divider"></li>
<li><a href='#'>Hockey</a></li>
<li class="divider"></li>
<li><a href='#'>IPL</a></li>
</ul>
</li>
 </ul>

<ul class='nav navbar-nav navbar-right'><li class='active'> <a href='#'><span class='glyphicon glyphicon-user'></span> <strong style='color:rgb(255,255,255)'>SIGN UP</strong></a></li>
<li > <a href='#'><span class='glyphicon glyphicon-log-in'></span> <strong style='color:rgb(255,255,255)'>LOG IN</strong></a></li>
</ul>
</div>
</div>
</nav>
</div>
</div>

</br>
</br>

</body></br>
</br>



<div id="profile">
<?php
echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
echo "<br/>";
echo "<br/>";
echo "Welcome to Admin Page";
echo "<br/>";
echo "<br/>";
echo "Your Username is " . $username;
echo "<br/>";
echo "Your Email is " . $email;
echo "<br/>";
?>
<b id="logout"><a href="logout">Logout</a></b>
</div>
<br/>
<!--footer content part-->
<div class='container-fluid'>
<div class='footpart'>
<div class='row'>
<div class='col-md-3'>
<h3 style='font-size:30px'>About Us</h3>
<p>You are associated with india's most widely connected News channel.You</br> can get all the updates all over the</br> world just with your finger tips.</p>
</br>
<h4>Stay connected with us for more updates</h4>

<a href='#' class='fa fa-facebook' id='round' ></a>
<a href='#' class='fa fa-twitter' id='round'></a>
<a href='#' class='fa fa-google' id='round'></a>
</br>
</br>
</div>
<div class='col-md-2 col-md-offset-2'>
<h3 style='font-size:30px'>Short Links</h3>
<ul>
<li id='bar'><a href='#'>Home</a></li>
<li id='bar'><a href='#'>International</a></li>
<li id='bar'><a href='#'>National</a></li>
<li id='bar'><a href='#'>Entertainment</a></li>
<li id='bar'><a href='#'>Sports</a></li>
</ul>
</div>

<div class='col-md-2 col-md-offset-3'>
<h3 style='font-size:30px'>Contact Us</h3>
<span class='glyphicon glyphicon-map-marker'></span>
221 Baker Street </br> <strong style='font-size:22px'>&nbsp &nbsp NewDelhi,India</strong>
</br>
</br>
<span class='glyphicon glyphicon-earphone'></span><strong style='font-size:18px'>+91-555-123456</strong>
</br></br>
<span class='glyphicon glyphicon-envelope'></span><a href='support@newsIndia.com'><strong style='font-size:18px'>support@newsIndia.com</strong></a>
</div>

</div>


<div class='row'>
<center><h4 style='font-size:24px'>copyright @2011-2018 Kaliprasad</h4></center>
</div>
</div>
</div>





</body>
</html>