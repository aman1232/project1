<!DOCTYPE html>
<html>
<head>
	<title>
    
  </title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
/* Container needed to position the button. Adjust the width as needed */

.contain {

position: relative;

width: 78%;

}

/* Make the image responsive */

.contain img {

width: 100%;

height: auto;

margin-left: 50px;

}

/* Style the button and place it in the middle of the container/image */

.contain .btn {

position: absolute;

top: 80%;

left: 50%;

transform: translate(-50%, -50%);

-ms-transform: translate(-50%, -50%);

background-color: white;

color: black;

font-size: 16px;

padding: 12px 24px;

border: none;

cursor: pointer;

border-radius: 5px;

margin-right: 50px;

}

.contain .btn:hover {

background-color: red;

}
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 10px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}


  /*Trigger Button*/
.login-trigger {
  font-weight: bold;
  color: #fff;
  background: linear-gradient(to bottom right, #B05574, #F87E7B);
  padding: 15px 30px;
  border-radius: 30px;
  position: relative; 
  top: 50%;
  float: right;
  margin: 20px;
}

/*Modal*/
h4 {
  font-weight: bold;
  color: #fff;
}
.close {
  color: #fff;
  transform: scale(1.2)
}
.modal-content {
  font-weight: bold;
  background: linear-gradient(to bottom right,#F87E7B,#B05574);
}
.form-control {
  margin: 1em 0;
}
.form-control:hover, .form-control:focus {
  box-shadow: none;  
  border-color: #fff;
}
.username, .password {
  border: none;
  border-radius: 0;
  box-shadow: none;
  border-bottom: 2px solid #eee;
  padding-left: 0;
  font-weight: normal;
  background: transparent;  
}
.form-control::-webkit-input-placeholder {
  color: #eee;  
}
.form-control:focus::-webkit-input-placeholder {
  font-weight: bold;
  color: #fff;
}
.login {
  padding: 6px 20px;
  border-radius: 20px;
  background: none;
  border: 2px solid #FAB87F;
  color: #FAB87F;
  font-weight: bold;
  transition: all .5s;
  margin-top: 1em;
}
.login:hover {
  background: #FAB87F;
  color: #fff;
}
    }
	</style>
</head>
<body>
		   <div style="min-height: 100px; ">
    <img src="logo.png" height="100px" width="100px" style="float: left;">
    <<a class="login-trigger" href="#" data-target="#login" data-toggle="modal">Login</a>

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Login</h4>
        <form>
          <input type="text" name="username" class="username form-control" placeholder="Username"/>
          <input type="password" name="password" class="password form-control" placeholder="password"/>
          <input class="btn login" type="submit" value="Login" />
        </form>
      </div>
    </div>
  </div>  
</div>


    <form class="form-inline" style="float: right; padding: 10px;">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="float:right;">Search</button>
        </form>
    </div>
      
      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div>

       <ul class="dropdown"> <a href="index.php" class="a">Home</a></ul>
      <ul class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="about.php">ABOUT SUNWAY</a></li>
                <li><a href="#">OUR TEAM</a></li>
                <li><a href="message.php">MESSAGE</a></li>
                <li><a href="#">ABOUT<br>INFRASTRUCTURE</a></li>
                <li><a href="#">PRIVACY POLICY</a></li>
              </ul>
            </ul>
            
       <ul class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PROGRAMMES <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="bcs.php">BCS(HONS)</a></li>
                <li><a href="mba.php">MBA</a></li>
                <li><a href="club.php">STUDENT CLUBS</a></li>
                <li><a href="#">CREDIT TRANSFER</a></li>
              </ul>
            </ul>
        <ul class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">GALLERY <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="album.php">ALBUM</a></li>
              </ul>
            </ul>
            <ul class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">APPLY NOW <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="scholar.php">SCHOLARSHIP FOR <br>2019 INTAKE</a></li>
                <li><a href="freeit.php">FREE IT CLASSES</a></li>
                </ul>

        <ul><a href="student.php">STUDENT BLOG</a></ul>
            <ul><a href="contact.php">CONTACT US</a></ul>
            <ul><a href="#">FSERVER</a></ul>
<!--       <div style="float:right;">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="float:right;">Search</button>
        </ul>
        </form> -->
      </div>

       

        <!-- <input type="text" name="se" class="b" placeholder="Search"></div> -->
      </nav>
    </div>
 

<!--   <input type="text" name="se" class="b" placeholder="Search">
 --></div>
</nav> 
    <h1></h1>
     <div class="banner"> 
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="banner1.jpg" class="d-block w-100" alt="..." width="200px" height="450px">
      <div class="carousel-caption d-none d-md-block">
    <h4 class="text-success   ,h5"><b>Welcome to Sunway</b></h4>
    <h5 class="text-success">College of IT and MBA</h5>
  </div>
    </div>
    <div class="carousel-item">
      <img src="banner2.jpg" class="d-block w-100" alt="..." width="200px" height="450px">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="text-primary">Go Higher with</h5>
    <p class="text-primary">International Degree</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="banner3.jpg" class="d-block w-100" alt="..." width="200px" height="450px">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="text-success">Good Education with Experts</h5>
    <p>Go Higher with International Degree</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
</div><!--banner end-->
<div class="main-content">
  <h1>Clubs of Sunway</h1><br>
  
  <h2>*Events and sport club:</h2>
  We are not only a club, we are a family. We create values by working together, having faith on each other and make things happen in all possible ways. Being part of Sunway Events and Sports Club, we always look up to grow significantly in all perspective by organizing sports (physical) to life skill workshops both inside and outside of an organization.
Nawa Jwala,
President, Sunway Events and Sports Club

  <h2>*Learning and IT club:</h2> 
  Sunway Learning Community, a new chapter established within Sunway College with the mantra of “Let’s grow together” envisions to make education and cutting-edge technologies accessible to every student to enhance their education experience. We encourage students to participate in group activities that allow them to develop personal and professional relationships, learn leadership and team values, skills and serve the community.
Debendra Adhikari,
President, Sunway Learning Community
College Ambassador AlDevNepal.org


  
  <h2>*Youth club:</h2>
We conduct different IT
Trainings, gaming competitions for FIFA / Counter Strike and other popular games, events to support social causes and many more. Information is abundant, it flows through so many sources that what was once a river one waded through is now a flood we struggle to keep afloat in. IT leaders have to practice transformational leadership, situational leadership and innovative leadership all the way in order to lead digital transformation seamlessly.
Today’s youth, given better opportunities, are sure lead us to a better future.
Xitiz Basnet,
President, Sunway IT And Youth Club

  <h2>*Competitive coding community:</h2>
Sunway Competitive coding Community, a new chapter established within Sunway College with the mantra of “Let’s grow together” envisions to make education and cutting-edge technologies accessible to every student to enhance their education experience. We encourage students to participate in group activities that allow them to develop personal and professional relationships, learn leadership and team values, skills and serve the community with their coding skills.
Jagriti Srivastava,
President, Sunway coding Community

  <h2>*Viral multimedia community:</h2>
Sunway Viral multimedia Community, a new chapter established within Sunway College with the mantra of “Let’s grow together” envisions to make education and cutting-edge technologies accessible to every student to enhance their education experience. We encourage students to participate in group activities that allow them to develop personal and professional relationships, learn leadership and team values, skills and serve the community with their coding skills.
Pushparaj Adhikari,
President, Sunway Viral multimedia Community

  
</div>

<footer class="page-footer font-small teal pt-4" style="background-color: lightblue;">

  <div class="container-fluid text-center text-md-left">

    <div class="row">

      
      <div class="col-md-6 mt-md-0 mt-3">
       <h3 class="text-dark"><b>Contact Us</b></h3>
       <hr style="border:2px solid black;">
       <ul class="footer_contact_us_details">
                <li class="title">Sunway International Business School</li>
                <li><i class="fa fa-map-marker"></i>Behind Maitidevi Temple, Maitidevi,</br>Kathmandu, Nepal</li>
                <li><i class="fa fa-dropbox"></i>Po.Box No: 21900</li>
                <li><i class="fa fa-phone"></i>01-4431725, 9861344434</li>
                <li><i class="fa fa-globe"></i>info@sunway.edu.np</br>sunway.ibs@gmail.com</li>
              </ul>

      </div>
      

      <hr class="clearfix w-100 d-md-none pb-3">

    
      <div class="col-md-6 mb-md-0 mb-3">

              <img src="map.png"><div><button><a href="https://www.google.com/maps/place/Sunway+College/@27.705559,85.334292,15z/data=!4m5!3m4!1s0x0:0xef773857c30983e2!8m2!3d27.7055592!4d85.334292?hl=en-US">View Map</a></div></button>        
       
      </div>
      

    </div>
  

  </div>
  

  
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> abc.com</a>
  </div>
</footer>
  <div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
  
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</nav>
</body>
</html>