<?php
session_start() ?>
<html>


<meta charset="utf-8">
<title>La Zat</title>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="csss/animate.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<head>
<meta name="viewport" content="width=device-width, initial-scale= 1.0"  user-scalable=0>


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
    height:350;
    padding: 50px;
    bottom: 5;


}


#foodopacityboxx{
align:center;
text-align: right;
position: relative;
bottom:200;
    background: rgba(0,0,0,0.5);
    color: #f1f1f1;
    width: 100%;
     right: auto;
    height:350;
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

    background-image: url("Backgroundpictures/mediterranean-cuisine-2378758_1920.jpg");


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

p{
text-align:justify;


}

h2{
  font-size: 40;
  color: white;
  text-align: center;
}
h4{
  text-align: center;
}


#p{
  border-radius:0;
  height: 349;
width: 107.5%;
text-align: right;
margin:-50;
margin-top: -17.8%;
background:url("pictures/pexels-photo-196643.jpg");
background-size:cover;



background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;




}

#p2{

  border-radius:0;
  height: 365;
width: 107.5%;
text-align: right;
margin:-50;
margin-top: -17.8%;
background:url("pictures/pexels-photo-417005.jpg");
background-size:cover;
border-bottom-left-radius:0%;
border-bottom-right-radius:0%;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;



}

#p3{
  border-radius:0;
  height: 365;
width: 107.5%;
text-align: right;
margin:-50;
margin-top: -18.8%;
background:url("pictures/container.jpg");
background-size:cover;
border-bottom-left-radius:0%;
border-bottom-right-radius:0%;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;



}



#p4{
  border-radius: 60%;
  height:150;
width: 700;
text-align: right;
margin-left: auto;
margin-top: -18%;
background:url("pictures/pexels-photo-802221.jpg");
background-size:cover;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;

}



#p5{
  border-radius:60%;
  height: 150;
width: 700;
text-align: right;
margin-left: auto;
margin-top: -16.0%;
background:url("pictures/pexels-photo-196643.jpg");
background-size:cover;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;


}




#button{

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
/*pictures*/
#p{
width:100%;
border-radius:50%;
height:200;
margin:auto;
margin-top: 10;
background-size:cover;

background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;









}
#p2{
  width:100%;
  border-radius:50%;
  height:200;
  margin:auto;
  margin-top: 95;
  background-size:cover;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;




}

#p3{
  width:100%;
  border-radius:50%;
  height:200;
  margin:auto;
  margin-top: 95;
  background-size:cover;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;

}

#p4{
  width:100%;
  border-radius:50%;
  height:200;
  margin:auto;
  margin-top: 55;
  background-size:cover;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;

}


#p5{
  width:100%;
  border-radius:50%;
  height:200;
  margin:auto;
  margin-top: 95;
  background-size:cover;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;

}



/*text p and h2 */
#foodopacityboxx{
font-size: 13;
  height:450;
}
#foodopacitybox{
font-size: 13;
  height:625;
}
h2{
  font-size:25;
}

.btn {
  border:none;
  height:50;
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
  /*pictures*/
  #p{
  width:225;
  border-radius:50%;
  height:150;
  margin:auto;

  }
  #p2{
    width:225;
    border-radius:50%;
    height:150;
    margin:auto;
    margin-top: 65;
    background-size: contain;

  }

  #p3{
    width:225;
    border-radius:50%;
    height:150;
    margin:auto;


  }

  #p4{
    width:250;
    border-radius:50%;
    height:150;
    margin:0;

  }


  #p5{
    width:250;
    border-radius:50%;
    height:150;
    margin:0;


  }



  /*text p and h2 */
  #foodopacityboxx{
  font-size: 13;
    height:450;
  }
  #foodopacitybox{
  font-size: 13;
    height:625;
  }
  h2{
    font-size:25;
  }

  .btn {
    border:none;
    height:25;
    width:auto;
  }
  #button1{
    font-size:10;
    margin-left:10;

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
}



/*Why us mobile website*/

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
/*pictures*/
#p{
width:100%;
border-radius:50%;
height:200;
margin:auto;
margin-top: 10;
background-size:cover;

background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;









}
#p2{
  width:100%;
  border-radius:50%;
  height:200;
  margin:auto;
  margin-top: 95;
  background-size:cover;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;




}

#p3{
  width:100%;
  border-radius:50%;
  height:200;
  margin:auto;
  margin-top: 95;
  background-size:cover;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;

}

#p4{
  width:100%;
  border-radius:50%;
  height:200;
  margin:auto;
  margin-top: 55;
  background-size:cover;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;

}


#p5{
  width:100%;
  border-radius:50%;
  height:200;
  margin:auto;
  margin-top: 95;
  background-size:cover;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;

}



/*text p and h2 */
#foodopacityboxx{
font-size: 13;
  height:450;
}
#foodopacitybox{
font-size: 13;
  height:625;
}
h2{
  font-size:25;
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
  /*pictures*/
  #p{
  width:225;
  border-radius:50%;
  height:150;
  margin:auto;

  }
  #p2{
    width:225;
    border-radius:50%;
    height:150;
    margin:auto;
    margin-top: 65;
    background-size: contain;

  }

  #p3{
    width:225;
    border-radius:50%;
    height:150;
    margin:auto;


  }

  #p4{
    width:250;
    border-radius:50%;
    height:150;
    margin:0;

  }


  #p5{
    width:250;
    border-radius:50%;
    height:150;
    margin:0;


  }



  /*text p and h2 */
  #foodopacityboxx{
  font-size: 13;
    height:450;
  }
  #foodopacitybox{
  font-size: 13;
    height:625;
  }
  h2{
    font-size:25;
  }

  .btn {
    border:none;
    height:25;
    width:auto;
  }
  #button1{
    font-size:10;
    margin-left:10;

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

  }



</style>
</head>
<body style="margin:0;" class="parallax">
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
<br/>
<br/>
<br/>
<br/>
<h1 class="Container fadeInDown animated"text-align="center" id="myDiv"style="font-family:Times;">WhyUs?</h1><br>
<div id="topfooter"></div>
<div id="foodopacityboxx"><table><tr><td><h2>The first plant based authentic Malay cuisine</h2><td><tr></table><br/><br/><p>The long awaited 100% plant-based authentic Malay dishes are finally here! LaZat will be the first ever to serve your favourite Malay food</p><p>but this time there will be 0% animal products used. The recipe is kept to the original authentic Malay recipe and cooked by our own local Malaysian cooks.</p><div id="p"></div>
</div>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <div id="foodopacityboxx"><table><tr><td><h2>Right at where you want it</h2><td><tr></table><br/><br/><p>Why choose to waste your time and energy by going out just to get your food, when you can just order? You can order through our partners with Ubereats and foodpanda. Your food will be there right at your door in no time.</p><div id="p2"></div></div>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <div id="foodopacitybox"><table><tr><td><h2>Bring back the kampung tingkat culture</h2></td></tr></table><br/><br/><p>Remember those days we use those silver tingkat pack lunch to go to work or school? Also we use it to pass our friendly neighbours and friends if we have extra food or if they are in help to cook because they can't due to some reasons? Yes we are bringing that back! With La Zat you can pre order your food by making a payment for weekly or monthly subscription hence you just need to choose what are the dates and time you want us to deliver so you can enjoy the goodness with your family and friends without worrying about having no food to eat.<p/><div id="p3"></div></div>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
<div id="foodopacitybox"><table><tr><td><h2>Working towards Zero Waste</h2></td></tr></table><br/><br/><p>All of us know that plastic is not biodegradable and takes 200 years to break down into toxic micro plastics. This is very damaging to the environment hence La Zat will be choosing reusable plastic containers as our packaging and we will advocate in reusing the package by bringing it back to us so we can send for proper cleaning and to be reused. This way customers can get discounts for their next order.</p><div id="p4"></div></div>
<div id="foodopacitybox"><table><tr><td><h2>Byobac Culture</h2></td></tr></table><br/><br/><p>Bring your own bag and container (byobac) for the less use of plastic bags and plastic containers.This way you can get the food at a cheaper price. This way we can help the environment better.</p><div id="p5"></div></div>



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
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/GetConnected.html";

}


function Login(){
location.href = "file:///C:/Users/sudhanshu%20sharma/Desktop/LAZAT/login.html";

}


</script>












</body>


</html>
