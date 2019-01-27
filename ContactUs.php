<?php
session_start() ?>
<html>


<meta charset="utf-8">
<title>LAZAT</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="csss/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=0>


<style>








body{

   background-image: url("mediterranean-cuisine-2378758_1920.jpg");
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
-webkit-border-radius: 40px;

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
bottom:200;
    background: rgba(0,0,0,0.5);
    color: #f1f1f1;
    width: 100%;
     right: auto;
    height:400;
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
cursor: pointer;
    opacity: 0.7;
}

.fa-facebook {
cursor: pointer;
  background: #3B5998;
  color: white;
}



















.parallax {

    background-image: url("Backgroundpictures/klcity.jpg");


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
color: white;
}

h2{
  font-size: 40;
  color: white;
  text-align: left;
}




#socialmediapic{
  cursor: pointer;
}



#locationtext{
  font-size: 40;
  color: white;
  text-align: center;
}
#googlemap{
border: solid;
border-color: black;
border-width:20;
height: 400;
width:800;
bottom:200;
margin-right:260px;
}

@media (min-width:700px) and (max-width:1024px){


#menu{
  position: fixed;
  z-index:999;
width:100%;
}




/*WhyUs*/

#myDiv{
animation-delay: 0.8s;
text-align: center;
font-size:40;
}


.btn {
  border:none;
  height:50;
  width:auto;
}
#button1{
  font-size:15;
  margin-left:15;

}
#button2{
  font-size:15;
  margin-left:0;

}



#button3{
  font-size:15;
  margin-left:0;

}


#button4{
  font-size:15;
  margin-left: 0;

}

#button5{
  font-size:15;
  margin-left: 0;

}

#button6{
  font-size:15;
  margin-left: 0;

}








#socialmediaicons{

display: none;
margin-top: 200;
}



h4{
position: sticky;
color: white;
background-color: #fc7a00 ;
padding: 0px;
border-radius:0px
-moz-border-radius: 0px;
-webkit-border-radius:0px;

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

p{
  text-align: justify;
}



h1{
font-size: 20;
}





#googlemap{
border: solid;
border-color: black;
border-width:20;
height: 350;
width:680;
bottom:200;
margin-top:50;
margin:center;
}

}





@media (min-width:350px) and (max-width:700px){


#menu{
  position: fixed;
  z-index:999;
width:100%;
}




/*WhyUs*/

#myDiv{
animation-delay: 0.8s;
text-align: center;
font-size:40;
}


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








#socialmediaicons{

display: none;
margin-top: 200;
}



h4{
position: sticky;
color: white;
background-color: #fc7a00 ;
padding: 0px;
border-radius:0px
-moz-border-radius: 0px;
-webkit-border-radius:0px;

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

p{
  text-align: justify;
}



h1{
font-size: 20;
}





#googlemap{
border: solid;
border-color: black;
border-width:20;
height: 350;
width:300;
bottom:200;
margin-top:50;
margin:auto;
}

}


@media (min-width:1px) and (max-width:322px){

  #menu{
    position: fixed;
    z-index:999;
  width:100%;
  }




  /*WhyUs*/

  #myDiv{
  animation-delay: 0.8s;
  text-align: center;
  font-size:40;
  }


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








  #socialmediaicons{

  display: none;
  margin-top: 200;
  }



  h4{
  position: sticky;
  color: white;
  background-color: #fc7a00 ;
  padding: 0px;
  border-radius:0px
  -moz-border-radius: 0px;
  -webkit-border-radius:0px;

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

  p{
    text-align: justify;
  }



  h1{
  font-size: 20;
  }





  #googlemap{
  border: solid;
  border-color: black;
  border-width:20;
  height: 350;
  width:250;
  bottom:200;
  margin-top:50;
  margin:auto;
  }


}





















</style>
</head>
<body  style="margin:0;" class="parallax">
<br/>
<div class="animate-bottom">
<div class="Container slideinLeft animated" id="menu"><center><font size="20"><h4 style="font-family:Trebuchet;" size="20" ><img id="lazat" ></font><div   class="Container fadeInDown animated" >
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
<div id="topfooter"></div>
<br>
<br>
<br>
<h1 class="Container fadeInDown animated"text-align="center" id="myDiv"style="font-family:Times;">ContactUs</h1>
<div id="foodopacitybox"><table><tr><td><h2>Email us at</h2> <p>lazatkayelle@gmail.com</p></td></tr><tr><td><h2>Contact us at</h2> <p>0166747945</p></td></tr></td></tr></table></div>
 <br/>
 <br/>
 <br/>

<center><h2 id="locationtext" style="font-family:Georgia">Our location</h2></center>
<center><img src="socialmedia/Googlemaps.png" draggable="false"></center><br/><br/>
<div id="foodopacitybox"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.285090407222!2d101.56203235015357!3d3.0178707319874243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb2dd23791a9d%3A0x6bd188844f9efd86!2sTaman+Bunga+Negara%2C+40400+Shah+Alam%2C+Selangor!5e0!3m2!1sen!2smy!4v1523024689072" id="googlemap" width="300" height="300" frameborder="0" style="border:5" allowfullscreen></iframe></div>


<br>
<br>
<br>
<br>



















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
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/GetConnected.html";

}

function Login(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/login.html";

}




</script>












</body>


</html>
