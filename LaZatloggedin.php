<?php
session_start() ?>
<html>
<?php
  if (isset($_SESSION['u_id'])) {
  } else {
exit();
  }
?>

<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1  user-scalable=no">
<title>La Zat</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="csss/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>


<style>

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


h4{
position: sticky;
color: white;
background-color: #fc7a00;
width: 100%
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
z-index:8;
    background: rgba(0, 0, 0, 1.5);
    color: #f1f1f1;
    width: 100%;
    padding: 55px;
top: 0;







}


#foodopacityboxx{
align:center;
text-align: center;
position: relative;
bottom:200;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    height: 300;
    padding: 40px;


}




#foodopacitybox{
align:center;
text-align: center;
position: relative;
bottom:200;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    height: 300;
    padding: 40px;


}


#middleopacity{
align:center;
text-align: right;
position: relative;
bottom:-200;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;


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


#food{
  position: relative;
  border-radius: 50%;
    right:30;
float: right;
}

#foodd{
position: static;
border-radius: 50%;
  right:50;
float: center;
}


#fooddd{
position: relative;
border-radius: 50%;
  left:30;
float: left;
}



















#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 50 solid #8CDB21;
  border-radius: 50%;


border-top:20px solid #f76200;
border-bottom: 20px solid #8CDB21;

  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
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

#myDiv {
  display: none;
  text-align: center;
}

.parallax {

    background-image: url("pictures/vegetables-landscape-2943500_1920.jpg");


    min-height: 500px;


    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

#Eventpicture{
width:500;
height: 250;
margin-left:-800;
margin-top: -100;
}
#Eventtext{
margin-left: 800;
}

@media (min-width:701px) and (max-width:1024px){


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




  #food{

  margin:center;
  width:200px;
  height: 200px;
  }

  #foodd{

  margin:center;
  width: 200px;
  height: 200px;
  }
  #fooddd{

  margin:center;
  width: 200px;
  height: 200px;
  }


  #Eventtext{

    margin:auto;

  }


  #Eventpicture{

  height: 150;
  width: 150;
    margin: auto;
  }


  #foodopacitybox{

  width: auto;
  height: 500px;
  }




  #foodopacityboxx{

  width: auto;
  height: 300px;
  }


  .topnav {
    overflow: hidden;
    background-color: #333;
  }

  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .active {
    background-color: #4CAF50;
    color: white;
  }

  .topnav .icon {
    display: none;
  }

  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }

  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }











}


@media (min-width:300px) and (max-width:700px){


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




#food{

margin:center;
width: 100px;
height: 100px;
}

#foodd{

margin:center;
width: 100px;
height: 100px;
}
#fooddd{

margin:center;
width: 100px;
height: 100px;
}


#Eventtext{

  margin:auto;

}


#Eventpicture{

height: 150;
width: 150;
  margin: auto;
}


#foodopacitybox{

width: auto;
height: 500px;
}




#foodopacityboxx{

width: auto;
height: 300px;
}

}



</style>

</head>


<body  class="parallax">

<br/>
<div   class="animate-bottom">
<div class="Container slideinLeft animated" id="menu"><center><font size="20"><h4 style="font-family:Trebuchet;" size="20" ><img id="lazat" ></font><div   class="Container fadeInDown animated" >
<table align="center" ><tr><td></td><td>
  <button type="button" id="button1" class="btn btn-success btn-lg"  onclick="location.href='LaZat.php'">LaZat</button>
  <button type="button" id="button2" class="btn btn-success btn-lg" onclick="location.href='WhyUs.php'">Why us?</button>
  <button type="button" id="button3" class="btn btn-success btn-lg" onclick="location.href='Menu.php'">Menu</button>
  <button type="button" id="button4" class="btn btn-success btn-lg" onclick="location.href='GetConnected.php'">Get Connected</button>
  <button type="button" id="button5" class="btn btn-success btn-lg" onclick="location.href='ContactUs.php'">Contact Us</button>
  <button type="button" id="button5" class="btn btn-danger btn-lg" >Login</button>


<i id="socialmediaicons" class="fa fa-facebook-square" style="font-size:44px"></i><i id="socialmediaicons" class="fa fa-instagram" style="font-size:44px"></i><i id="socialmediaicons" class="fa fa-twitter" style="font-size:44px"></i></td></tr></table>
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

<?php
  if (isset($_SESSION['u_id'])) {
    echo '<form action="logout.inc.php" method="POST">
      <button id="button5" type="submit" class="btn btn-info btn-lg" name="submit">Logout</button>
    </form>';
  } else {
exit();
  }
?>
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

<div id="topfooter"></div>



















<div id="bottomfooter"><p align="center">	<p text-align"left">Copyright&copy;2018LAZAT</p></p></div>

</body>


</html>
