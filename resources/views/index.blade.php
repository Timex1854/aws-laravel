<!DOCTYPE html>


<html lang="en">
<head>
  <title>Cocacolastic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>

<meta charset="utf-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Cards Hover2</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
              crossorigin="anonymous">
</head>

<style>

body{

font-family: "Quattrocento Sans", sans-serif;
background-color: #000;

}


@import url(https://fonts.googleapis.com/css?family=Quattrocento+Sans);
.loading {

margin-top: 380px;
left: 1000px;
width: 40%;
height: 10%;
background: #333;
font-size: 100px;


}

.loading-text {

position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
text-align: center;
width: 100%;
height: 100px;
line-height: 100px;
}
.loading-text span {
text-shadow: 0 30px 50px rgba(0, 0, 0, 0.7);
display: inline-block;
margin: 0 5px;
color: #ff0057;
font-family: "Quattrocento Sans", sans-serif;
}
.loading-text span:nth-child(1) {
filter: blur(0px);
-webkit-animation: blur-text 1.7s 0s infinite linear alternate;
        animation: blur-text 1.7s 0s infinite linear alternate;
}
.loading-text span:nth-child(2) {
filter: blur(0px);
-webkit-animation: blur-text 1.7s 0.2s infinite linear alternate;
        animation: blur-text 1.7s 0.2s infinite linear alternate;
}
.loading-text span:nth-child(3) {
filter: blur(0px);
-webkit-animation: blur-text 1.7s 0.4s infinite linear alternate;
        animation: blur-text 1.7s 0.4s infinite linear alternate;
}
.loading-text span:nth-child(4) {
filter: blur(0px);
-webkit-animation: blur-text 1.7s 0.6s infinite linear alternate;
        animation: blur-text 1.7s 0.6s infinite linear alternate;
}
.loading-text span:nth-child(5) {
filter: blur(0px);
-webkit-animation: blur-text 1.7s 0.8s infinite linear alternate;
        animation: blur-text 1.7s 0.8s infinite linear alternate;
}
.loading-text span:nth-child(6) {
filter: blur(0px);
-webkit-animation: blur-text 1.7s 1s infinite linear alternate;
        animation: blur-text 1.7s 1s infinite linear alternate;
}
.loading-text span:nth-child(7) {
filter: blur(0px);
-webkit-animation: blur-text 1.7s 1.2s infinite linear alternate;
        animation: blur-text 1.7s 1.2s infinite linear alternate;
}

@-webkit-keyframes blur-text {
0% {
  filter: blur(0px);
}
100% {
  filter: blur(4px);
}
}

@keyframes blur-text {
0% {
  filter: blur(0px);
}
100% {
  filter: blur(4px);
}
}



/* --------------------------------------------------------------------------------- */

.view {

position: absolute;
top: 200px;
left: 0;
right: 0;
bottom: 0;
perspective: 400;
}

.plane {
width: 240px;
height: 240px;
transform-style: preserve-3d;
}
.plane.main {
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
margin: auto;
transform: rotateX(60deg) rotateZ(-30deg);
-webkit-animation: rotate 20s infinite linear;
        animation: rotate 20s infinite linear;
}
.plane.main .circle {
width: 240px;
height: 240px;
position: absolute;
transform-style: preserve-3d;
border-radius: 100%;
box-sizing: border-box;
box-shadow: 0 0 1px 1px black, inset 0 0 1px 1px black;
}
.plane.main .circle::before, .plane.main .circle::after {
content: "";
display: block;
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
margin: auto;
width: 25%;
height: 30%;
border-radius: 0%;
background-color: #ff0057;

background-size: 100%;
background-repeat: no-repeat;
box-sizing: border-box;
box-shadow: 0 0 0px 1px black;
}
.plane.main .circle::before {
transform: translateZ(-220px);
}
.plane.main .circle::after {
transform: translateZ(220px);
}
.plane.main .circle:nth-child(1) {
transform: rotateZ(72deg) rotateX(63.435deg);
}
.plane.main .circle:nth-child(2) {
transform: rotateZ(144deg) rotateX(63.435deg);
}
.plane.main .circle:nth-child(3) {
transform: rotateZ(216deg) rotateX(63.435deg);
}
.plane.main .circle:nth-child(4) {
transform: rotateZ(288deg) rotateX(63.435deg);
}
.plane.main .circle:nth-child(5) {
transform: rotateZ(360deg) rotateX(63.435deg);
}

@-webkit-keyframes rotate {
0% {
  transform: rotateX(0) rotateY(0) rotateZ(0);
}
100% {
  transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
}
}

@keyframes rotate {
0% {
  transform: rotateX(0) rotateY(0) rotateZ(0);
}
100% {
  transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
}
}

/* ------------------------------------------------------------------------------ */


.navbar-inverse{
box-shadow: 0 0 50px #ff0057;
font-size: 20px;
background: black;
margin-bottom: -10px;




transition: all 0.3s ease;
}

li:hover{
  height: 50px;

transition: all 0.3s ease;
  border-bottom: solid rgb(255, 255, 255);
border-radius: 10%;


}

.col-md-3:hover {
transform: translate3d(0px, 0px, -250px);
}
.col-md-3{

  transform:
    perspective(950px)
    translate3d(0px, 0px, -100px)
    rotateX(27deg)
    scale(0.9, 0.9);
  border-radius: 20px;
  border: 5px solid #ff0057;
  box-shadow: 0 20px 50px #ff0057;
  transition: 0.4s ease-in-out transform;
  color: #ff0057;


}

.lum{
font-family: "poppins", sans-serif;
  -webkit-mask-image: linear-gradient(
    75deg,
    rgba(0, 0, 0, 0.6) 30%,
    #000 50%,
    rgba(0, 0, 0, 0.6) 70%
  );
  -webkit-mask-size: 250%;
  animation: shine 1.5s linear infinite;
}

@keyframes shine {
  from {
    -webkit-mask-position: 150%;
  }
  to {
    -webkit-mask-position: -50%;
  }
}

.container-fluid{
  padding-top: 40px;
  height: 50vh;
background-color: #333;
box-shadow: 0 0 50px #ff0057;

}








@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
* {
margin: 0;
padding: 0;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}



.navMenu {
position: absolute;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}

.navMenu a {
  margin-left: 40px;
  color: #a3a3a3;


  font-family: "poppins", sans-serif;
  -webkit-mask-image: linear-gradient(
    75deg,
    rgba(0, 0, 0, 0.6) 30%,
    #000 50%,
    rgba(0, 0, 0, 0.6) 70%
  );
  -webkit-mask-size: 200%;
  animation: shine 1.5s linear infinite;
text-decoration: none;
font-size: 1.2em;
text-transform: uppercase;
font-weight: 500;
display: inline-block;
width: 80px;
-webkit-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
}

.navMenu a:hover {
color: #ff0057;
}

.navMenu .dot {

width: 6px;
height: 6px;
background: #ff0057;
border-radius: 50%;
opacity: 0;
-webkit-transform: translateX(75px);
transform: translateX(260px);
-webkit-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
}

.navMenu a:nth-child(1):hover ~ .dot {
-webkit-transform: translateX(75px);
transform: translateX(75px);
-webkit-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
opacity: 1;
}

.navMenu a:nth-child(2):hover ~ .dot {
-webkit-transform: translateX(195px);
transform: translateX(195px);
-webkit-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
opacity: 1;
}

.navMenu a:nth-child(3):hover ~ .dot {
-webkit-transform: translateX(330px);
transform: translateX(330px);
-webkit-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
opacity: 1;
}

.navMenu a:nth-child(4):hover ~ .dot {
-webkit-transform: translateX(450px);
transform: translateX(450px);
-webkit-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
opacity: 1;
}




.box{

margin-left: 50px;
  width: 1000px;
  position: relative;
  display: flex;
  justify-content: space-between;
}

.box .card{

margin-left: 70px;
  position: relative;
  cursor: pointer;
}

.box .card .face{
box-shadow: 0 0px 30px #ff0057;
border-radius: 10px;

  width: 300px;
  height: 200px;
  transition: 0.5s;
}

.box .card .face.face1{

  position: relative;
  background: #333;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1;
  transform: translateY(100px);
}

.box .card:hover .face.face1{
  background: #ff0057;
  transform: translateY(0);
}

.box .card .face.face1 .content{
  opacity: 0.8;
  transition: 0.5s;
}

.box .card:hover .face.face1 .content{
  opacity: 1;
}

.box .card .face.face1 .content img{
  max-width: 100px;
}

.box .card .face.face1 .content h3{
  margin: 10px 0 0;
  padding: 0;
  color: #fff;
  text-align: center;
  font-size: 1.5em;
}

.box .card .face.face2{

  position: relative;
  background: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  box-sizing: border-box;

  transform: translateY(-100px);
}

.box .card:hover .face.face2{
  transform: translateY(0);
}

.box .card .face.face2 .content p{
  margin: 0;
  padding: 0;
}

.box .card .face.face2 .content a{
  margin: 15px 0 0;
  display:  inline-block;
  text-decoration: none;
  font-weight: 900;
  color: #333;
  padding: 5px;
  border: 1px solid #333;
}

.box .card .face.face2 .content a:hover{
  background: #333;
  color: #fff;
}

</style>



<body>



	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Cocacolastic</span>

					</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <nav class="navMenu">
        <a href="#">Home</a>
        <a href="#">Blog</a>
        <a href="#">Work</a>
        <a href="#">About</a>
        <div class="dot"></div>
      </nav>

		</div>

	  </div>
	</nav>






  <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6" >

                <div class="view">
                    <div class="plane main">
                      <div class="circle"></div>
                      <div class="circle"></div>
                      <div class="circle"></div>
                      <div class="circle"></div>
                      <div class="circle"></div>
                      <div class="circle"></div>
                    </div>
                  </div>

            </div>

            <!-- Contact Info on the Sidebar -->
            <div class="col-md-5">
                <div class="loading">
                    <div class="loading-text">
                        <span class="loading-text-words">N</span>
                        <span class="loading-text-words">E</span>
                        <span class="loading-text-words">T</span>
                        <span class="loading-text-words">F</span>
                        <span class="loading-text-words">L</span>
                        <span class="loading-text-words">I</span>
                        <span class="loading-text-words">X</span>
                    </div>
                </div>


            </div>

        </div>


    </div>
    <br>

<div class="col-md-8">
    <div class="box">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                    <h3>Design</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                    <h3>Code</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                    <h3>Launch</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">

    <div style="font-family: 'Quattrocento Sans', sans-serif; font-size: 70px;;text-align: center;color: rgb(221, 221, 221);">PAGANI</div><br>
    <div class="lum" style="font-family: 'Quattrocento Sans', sans-serif; font-size: 200px;text-align: center;margin-top: -80px;margin-bottom: -30px;"><b>2.0</b>
    <div style="font-family: 'Quattrocento Sans', sans-serif; font-size: 40px;;text-align: center;color: rgb(221, 221, 221);">TDI</div>
    </div><br>

</div>

</body>

</html>
