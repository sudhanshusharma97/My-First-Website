
<html>



<meta charset="utf-8">
<title>La Zat</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="csss/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<meta name="viewport" content="device-width initial-scale=1.0"  user-scalable=0>


<style>



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

   background-image: url("pexels-photo-267350.jpeg");
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

    background: rgba(0, 0, 0, 1.5);
    color: #f1f1f1;
    width: 100%;
    padding: 55px;
top: 0;
z-index:8;
}



#foodopacitybox{
align:center;
text-align: right;
position: relative;
bottom:100;
    background: rgba(0,0,0,0.5);
    color: #f1f1f1;
    width: 100%;
     right: auto;
    height:200;
    padding: 50px;
    bottom: 5;



}
#foodopacityboxx{
align:center;
text-align: right;
position: relative;
bottom:100;
    background: rgba(0,0,0,0.5);
    color: #f1f1f1;
    width: 100%;
     right: auto;
    height:200;
    padding: 50px;
    bottom: 5;



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
    cursor: pointer;
}

.fa-facebook {
  background: #3B5998;
  color: white;
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
  top: 100%;
  left: 0;
  right: 0;
  background-color: black;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
  z-index: 1;
}

.containerr:hover .overlay {
  top: 100%;
  height: 300;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);

}





.parallax {

    background-image: url("Backgroundpictures/adventure-ball-shaped-blur-346885.jpg");


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
 font-size:120;
color: #FF4900;

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

#pr1{
  color:#0087FF;
cursor: pointer;
}


#pr2{

cursor: pointer;
}

#pr3{
  color:#00CDFF;
cursor: pointer;
}






#socialmedia1{
  cursor: pointer;
margin-left: 45;

}
#socialmedia2{
  cursor: pointer;
margin-left: 50;
}
#socialmedia3{
  cursor: pointer;
margin-left: 75;
}


#fbfeed{
  border:solid;
  border-color: black;
  border-width:20;
  height: 740;
  width:540;
  bottom:200;
  margin: auto;
  animation-delay:3.0s;
}


#button1{
  font-size:20;
  margin-left:15;
}
#button2{
  font-size:20;
  margin-left:0;
}

#button3{
  font-size:20;
  margin-left:0;
}
#button4{
  font-size:20;
  margin-left: 0;
}

#button5{
  font-size:20;
  margin-left: 0;

}

#button6{
  font-size:20;
  margin-left: 0;

}



#socialmediaicons{

}




@media (min-width:350px) and (max-width:1024px){

  .btn {
    border:none;
    height:30;
    width:auto;
  }
  #button1{
    font-size:13;
    margin-left:15;
  }
  #button2{
    font-size:13;
    margin-left:0;
  }

  #button3{
    font-size:13;
    margin-left:0;
  }
  #button4{
    font-size:13;
    margin-left: 0;
  }

  #button5{
    font-size:13;
    margin-left: 0;

  }

  #button6{
    font-size:13;
    margin-left: 0;

  }


  #menu{
    position: fixed;
    z-index:999;
  width:100%;
  }

  #myDiv{
  animation-delay: 0.8s;
  text-align: center;
  font-size:40;
  width:100%;
  }



  h4{
  position: sticky;
  color: white;
  background-color: #fc7a00 ;
  padding: 0px;
  border-radius:0px
  -moz-border-radius: 0px;
  -webkit-border-radius:0px;
  width: 100%;

  }



  #socialmediaicons{

  display: none;
  margin-top: 200;
  }



#foodopacitybox{
width: 100%;
height: 300;
}
#foodopacityboxx{
width: 100%;
height: 500;
}
#fbfeed{
display: none;
}

#lazat{
  background-image: url("pictures/Screenshot_2.png");

  background-size: 500px;
  min-height: 90px;

  background-repeat: no-repeat;
  background-attachment:scroll;
  background-position: center;

background-color: white;
width: 100%;

border-radius: 50px;}


.text {
  color: white;
  font-size: 12px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);

}


h1{
font-size: 20;
}



}

@media (min-width:1px) and (max-width:322px){

  .btn {
    border:none;
    height:25;
    width:auto;
  }
  #button1{
    font-size:10;
    margin-left:15;
  }
  #button2{
    font-size:10;
    margin-left:0;
  }

  #button3{
    font-size:10;
    margin-left:0;
  }
  #button4{
    font-size:10;
    margin-left: 0;
  }

  #button5{
    font-size:10;
    margin-left: 0;

  }

  #button6{
    font-size:10;
    margin-left: 0;

  }


  #menu{
    position: fixed;
    z-index:999;
  width:100%;
  }

  #myDiv{
  animation-delay: 0.8s;
  text-align: center;
  font-size:40;
  width:100%;
  }



  h4{
  position: sticky;
  color: white;
  background-color: #fc7a00 ;
  padding: 0px;
  border-radius:0px
  -moz-border-radius: 0px;
  -webkit-border-radius:0px;
  width: 100%;

  }



  #socialmediaicons{

  display: none;
  margin-top: 200;
  }



#foodopacitybox{
width: 100%;
height: 300;
}
#foodopacityboxx{
width: 100%;
height: 500;
}
#fbfeed{
display: none;
}

#lazat{
  background-image: url("pictures/Screenshot_2.png");

  background-size: 500px;
  min-height: 90px;

  background-repeat: no-repeat;
  background-attachment:scroll;
  background-position: center;

background-color: white;
width: 100%;

border-radius: 50px;}

.text {
  color: white;
  font-size: 12px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);

}




h1{
font-size: 20;
}


}

</style>

</head>

<body style="margin:0;" class="parallax">

<br/>
<div class="animate-bottom">
<div class="Container slideinLeft animated" id="menu"><center><font size="20"><h4 style="font-family:Trebuchet;" size="20" ><img id="lazat" /></font><div   class="Container fadeInDown animated" >
<table align="center" ><tr><td>
  <button type="button" id="button1" class="btn btn-success btn-lg"  onclick="location.href='LaZat.php'">La Zat</button>
    <button type="button" id="button2" class="btn btn-success btn-lg" onclick="location.href='WhyUs.php'">Why us?</button>
    <button type="button" id="button3" class="btn btn-success btn-lg" onclick="location.href='Menu.php'">Menu</button>
    <button type="button" id="button4" class="btn btn-success btn-lg" onclick="location.href='GetConnected.php'">Get Connected</button>
    <button type="button" id="button5" class="btn btn-success btn-lg" onclick="location.href='ContactUs.php'">Contact Us</button>
    <button type="button" id="button5" class="btn btn-danger btn-lg" onclick="location.href='login.php'">Login</button>
<i class="fa fa-facebook-square" id="socialmediaicons" style="font-size:44px"></i> <i class="fa fa-instagram" id="socialmediaicons" style="font-size:44px"></i> <i class="fa fa-twitter" id="socialmediaicons" style="font-size:44px"></i></td></tr></table>
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
<br>
<br>
<br>
<h1 class="Container fadeInDown animated"text-align="center" id="myDiv"style="font-family:Times;">Get Connected</h1>
<br/>
<br/>
<br>
<div id="foodopacitybox" class="containerr" > <h2>Get in touch with us<img src="socialmedia/people.png" draggable="false" height="150" width="150"></h2>
  <div class="overlay">
    <div class="text"><p>Get conneted through our social media accounts</p><p id="pr1" onclick="fb()">facebook<img id="socialmedia2" src="socialmedia/facebook.png" draggable="false" height="40" width="40" ></p>
       <p id="pr2" onclick="insta()">Instagram<img id="socialmedia1" src="socialmedia/Instagram.png" draggable="false" height="40" width="40"></p>
    <p id="pr3"onclick="twitter()">Twitter<img draggable="false" id="socialmedia3" src="socialmedia/twitter.png" height="40" width="40"></p></div>
</div>

</div>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
<div id="foodopacityboxx"><h2>Get live updates from our social media accounts <img src="socialmedia/share.png" draggable="false" height="150" width="150"></h2></div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>


  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>

  <br/>
  <br/>

  <br/>
  <br/>



  <br/>
  <br/>






  <br/>
  <br/>
  <br/>
  <br/>

  <br/>
  <br/>

  <br/>
  <br/>



  <br/>
  <br/>



  <br/>
  <br/>
  <br/>
  <br/>

  <br/>
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
location.href ="file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/WhyUs.html";

}


function EnterMenu(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/Menu.html";

}




function EnterContactUs(){
location.href ="file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/ContactUs.html";

}


function fb(){
location.href ="file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/ContactUs.html";

}

function insta(){
location.href ="file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/ContactUs.html";

}

function twitter(){
location.href ="file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/ContactUs.html";

}

function Login(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/login.html";

}
</script>












</body>


</html>
