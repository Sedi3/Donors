
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Blood Donor</title>
  </head>
  <body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <h3>Social Donors<br>Saving Lives!</h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link active" id="TabActive" aria-current="page" href="index.php">Home</a>
              </li>
                <a class="nav-link" href="index.php#stock">Blood Stock </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#save">Can I Save Lives</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profiles.php">Profile</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="login.php">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin</a>
              </li>
              
              
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

<div class="main">        
    <div class="con">
    <p class="para">
       
       <img class="pic1" src="images/sanbs.png" width="400px" height="200px" align="right"> 
       The South African National Blood Service (SANBS) is an independent non-profit organisation, and one of the leaders in the discipline of blood transfusion.
SANBS operates in eight out of nine provinces in South Africa,excluding the Western Cape, which is serviced by the
Western Cape Blood Services. It also provides crucial support to countries in the SADC region.
    </p>
    <center>
      <div class="picbar">		
        <div class="barpic1"><img class= "pic" src="images/center.jpg">Blood center</div> 
        <div class="barpic1"><img class= "pic" src="images/intra.jpg">Intravenous</div>
        <div class="barpic1" ><img class= "pic" src="images/syr.jpg">Syringe</div>
        <div class="barpic1"><img class= "pic" src="images/type.jpg">Blood type </div>
        <div class="barpic1"><img class= "pic" src="images/old.jpg">Blood</div>
        <div class="barpic1" ><img class= "pic" src="images/her.jpg">heart</div>
      </div>
      </center>
</div>

<div class="mainMission">

<center><br><h2>Mission</h2><br>
<p class="para01">As the leaders in the discipline of blood transfusion in Africa, the SANBS is currently rated among the top blood 
  services in the world. This pedigree comes, as a result of world-class testing and collection protocols which ensure 
  that the blood which is transfused is always of top quality.</p><br></center>

<div class="con1">
  <div class="conPic">
    <img src="images/words.jpg" class="photo" width="300px" height="300px">
  </div>
    <div class="mainThree" width="60%" height="400px">
    
        <div class="con2">
          <center><img src="images/heart.png" height=90px width="160px"></center><br>
          <p class="para02"  id="stock">To reliably provide trusted blood products and services to all patients at a world classs level of cost and quality while innovating 
            new treatments to enhance human healthcare.</p>
        </div>
    
        <div class="con2">
          <center><img src="images/doc.jpg" height=90px width="160px"></center><br>
          <p class="para02">To be a cornerstone of healthcare services in South Africa, through the gift of life.</p>
        </div>

        <div class="con2">
          <center><img src="images/scope.jpg" height=90px width="160px"></center><br>
          <p class="para02">Trusted to save lives!</p>
        </div>
      </div>
  </div>
  </div>

  <!--div class="tain1">
      <button type="button" class="btn btn-primary btn-sm">Learn more</button>
     </div></div-->
    
      <br><br><br>

<div class="ten">
<div class="tain2">
  <center>
  <h3>Blood stock levels</h3>
  <h3>Our current blood stock is at</h3>
  <h4 >Blood stocks are critically low, we need group AB- donors to donate.</h4><br><br>
  </center>
</div>
 
<div class="con5">
      <img src="images/a lot.jpg"height="100px" width="190px"><br><br>
      <p>5 days=adequate stock</p>
    </div>

    <div class="con6">
      <img src="images/transfusion.jpg"height="100px" width="190px"><br><br>
      <p>3.5 days=significantly low</p>
    </div>

    <div class="con7">
      <img src="images/tube.jpg"  height="100px" width="190px"><br><br>
      <p >Less than 3 days=critical</p><br><br>
    </div>
  </div>

  <div class="conSaves">
  <div class="con9">
    <img src="images/two.jpg">
  </div>

  <div class="tain3">
   <h4>Where can i donate</h4><br>
   <h5 >Your blood saves lives.</h5><br>
   <p id="save">SANBS aims to collect 300 units of blood per day to ensure a safe and suuficinet blood supply in the healthcare system. This is the journey of 1 unit of donated blood.
     Every unit of blood can save a minimum of three lives as blood is separated into red blood cells, plasma and platelets.
   </p>
   
  <div class="tain1">
    <center><button type="button" class="btn btn-primary btn-sm">Learn more</button></center><br><br>
 </div>
 </div>
 
 <!-- End of where can i donate -->
  </div>

 <div class="Main00"> 
  <h1>Can i save lives?</h1><br><br>
  <div class="max00">
        <center><img src="images/file.jpg" height=90px width="160px"></center><br>
        <p>We will need to confirm your name, address and date of birth.</p>
          <br>

      
        <center><img src="images/patient.jpg" height=90px width="160px"></center><br>
        <p>Your blood pressure and iron are checked by the doctor before any donation takes place</p>
      
  </div>

<div class="max00">
    
      <center><img src="images/band aid.jpg" height=90px width="160px"></center><br>
      <p>The needle will be removed and a sterile dressing applied to your arm</p>
     <br>
    
      <center><img src="images/syringe.png" height=90px width="160px"></center><br>
      <p>Donation only takes 5-15 minutes</p><br>
</div>
<div class="max00">
  <img src="images/ball.jpg" height="200%" width="100%">
</div>
</div>
 
<div class="Main01">
 <div class="max001">
    <img src="images/prevent.png" width="300px" height="180px">
  </div>

  <div class="max01">
  <p id="paragraph">Take our two-minutes quiz to find out if you meet the requirements to donate blood. Final eligibility 
    will be dteremined by our staff at our donation centers.<br><br> 
  There are many SANBS blood donation centers open to the public. To find the location nearest to you,visit our website. 
  Or you may consider motivating your employer to host a blood drive at your offices for the convenience of all staff memebers.</p>

  <a href="sign up.html"><button type="button" class="btn btn-primary btn-sm">Donate Now</button></a><br>
 </div>
</div>
</div>

<div class="footerBottom">
  <div class="max002">
    <p>About Blood<br>Blood type<br>Types of donation</p>
  </div>

  <div class="max002">
    <p>Where to donate<br>Donor centers<br>Plasma and Platelets<br>Blood drives<br>Book a blood drive</p>
  </div>

  <div class="max002">
    <p>Where to donate<br>Donor centers<br>Plasma and Platelets<br>Blood drives<br>Book a blood drive</p>
  </div>

  <div class="max002">
    <i<p>Where to donate<br>Donor centers<br>Plasma and Platelets<br>Blood drives<br>Book a blood drive</p>
  </div>
</div>

<div class="footerBottom1">
  <hr>
  <img class="footerIcons" src="images/face.png" width="30px" height="30px">
  <img class="footerIcons" src="images/twitter.png" width="30px" height="30px">
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>