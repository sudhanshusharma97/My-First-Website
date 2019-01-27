
<html>


<meta charset="utf-8">
<title>La Zat</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="csss/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" user-scalable=0>


<style>

form{
  right:100px;
}

.navbar {
    overflow: hidden;
    background-color: #000000;
    position: sticky;
    top: 0;
    width: 100%;
    height: 100px;
    z-index:999;

}


{box-sizing:border-box}




body{

   background-image: url("pictures/pexels-photo-126590.jpg");
   width: 100%;
height: 100%;
}

h4{
position: sticky;
color: white;
background-color: #fc7a00 ;
padding: 0px;
border-radius:0px
-moz-border-radius: 0px;
-webkit-border-radius: 50px;

}


.container {
    position: relative;
    max-width: 100%;

    margin: 0 auto;
}

.container h1{vertical-align: middle;}

.container .content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}




#bottomfooter{
  position: relative;
      bottom: 0;
      background: rgba(0, 0, 0, 1.5);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
}

#topfooter{
align:center;
text-align: right;
position: fixed;
z-index:8;
    background: rgba(0, 0, 0, 1.5);
    color: #f1f1f1;
    width: 100%;
    padding: 55px;
top: 0;

}



#foodopacitybox{
align:center;
text-align: right;
position: relative;
bottom:200;
    background: rgba(0,0,0,0.5);
    color: #f1f1f1;
    width: 100%;
     right: auto;
    height:550;
    padding: 50px;
    bottom: 5;


}


#middleopacity{
align:center;
text-align: right;
position: relative;

bottom:-200;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    height: 20%;
    padding: 20px;
animation-delay: 2.0s;

}



#middleopacityy{
align:center;
text-align: center;
position: relative;
margin: auto;
bottom:-30;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 50%;
    height: 35%;
    padding: px;
animation-delay: 2.0s;
border-radius: 50%;
}













#menu{
  position: fixed;
  z-index:999;
}

#lazat{
  background-image: url("pictures/Screenshot_2.png");

  background-size: 500px;
  min-height: 90px;

  background-repeat: no-repeat;
  background-attachment:scroll;
  background-position: center;
  background-size: 500;
background-color: white;
width: 300px;

border-radius: 50px;



}




.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}




.fa {
padding:20px;
  font-size:30px;
  width: 50px;
  height:10px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  cursor: pointer;
}

.fa:hover {
    opacity: 0.7;
    color: black;
cursor: pointer;
}

.fa-facebook {
  background: #3B5998;
  color: black;
  cursor: pointer;
}














.containerr {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position:absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: black;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.containerr:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}





.parallax {

    background-image: url("pictures/pexels-photo-126590.jpg");


    min-height: 500px;


    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}














#myDiv {
animation-delay: 0.8s;
text-align: center;
}


h1{
 font-size:60;
color: #white;
margin-left: -150px;

}

p{text-align: justify;
}

h2{
  font-size: 40;
  color: white;
  text-align: left;
}



#p{
  border-radius: 60%;
  height: 200;
width: 200;
text-align: right;

}

#p2{
  border-radius: 60%;
height: 200;
width: 200;
}

#p3{
  border-radius: 60%;
  height: 200;
  width: 200;

}
#inputbox{
  height:40px;
  width:400px;
  border-top:100;
  border-left:100;
  border-bottom:100;
  border-right:100;
  border-color:black;
  border-radius:100px;
  transition :0.4s;
text-align:center;
font-style: oblique;
margin: 0 auto;
}

#inputbox[type=text]:focus{
border-color:#fc7a00;
box-shadow:0 0 15px 0 #fc7a00;
width:500px;

outline: none;
}

#inputbox[type=password]:focus{
border-color:#fc7a00;
box-shadow:0 0 15px 0 #fc7a00;
width:500px;

outline: none;
}

form {
margin: 0 auto;
width:500;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;" class="parallax">
<br/>
<div class="animate-bottom">
<div class="Container slideinLeft animated" id="menu"><center><font size="20"><h4 style="font-family:Trebuchet;" size="20" ><div id="lazat"></div></font><div   class="Container fadeInDown animated" >
  <button type="button" id="button1" class="btn btn-success btn-lg"  onclick="location.href='LaZat.php'">La Zat</button>
    <button type="button" id="button2" class="btn btn-success btn-lg" onclick="location.href='WhyUs.php'">Why us?</button>
    <button type="button" id="button3" class="btn btn-success btn-lg" onclick="location.href='Menu.php'">Menu</button>
    <button type="button" id="button4" class="btn btn-success btn-lg" onclick="location.href='GetConnected.php'">Get Connected</button>
    <button type="button" id="button5" class="btn btn-success btn-lg" onclick="location.href='ContactUs.php'">Contact Us</button>
    <button type="button" id="button5" class="btn btn-danger btn-lg" onclick="location.href='login.php'">Login</button>
<i class="fa fa-facebook-square" style="font-size:44px"></i> <i class="fa fa-instagram" style="font-size:44px"></i> <i class="fa fa-twitter" style="font-size:44px"></i></td></tr></table>
</div></h4></font></center>

</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div id="topfooter"></div>
<div id="foodopacitybox"><form  action="http://localhost/login.inc.php" method="post">
<h1>Welcome to La Zat</h1>
<p>Enter your login details to continue</p>
<br/>

<p>Username<p><input id="inputbox"  type="text" name="uid" >
<p>password <p><input id="inputbox"  type="password" name="pwd" >
  <br/>
  <br/>
<input class="btn btn-danger btn-lg" type="submit" name="submit" value="Login">
<br/>
<br/>
<a href="">forgot your password?</a>
<br/>
<a href="file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/form.html">Haven't registerd yet?</a>
</form></div>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>



























<div id="bottomfooter"><p align="center">	<p text-align"left">Copyright&copy;2018LAZAT</p></p></div>

</div>

<script>
function Enter(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/LaZat.html";

}

function EnterWhyus(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/WhyUs.html";

}


function EnterMenu(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/Menu.html";

}




function EnterContactUs(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/ContactUs.html";

}



function EnterGetConnected(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/ContactUs.html";

}

function Login(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/login.html";

}

</script>












</body>


</html>
