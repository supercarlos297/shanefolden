<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel = "stylesheet" href = "sfolden.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body class = "mainBack" onresize="setLogoWidth()">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
        <img src="logo.svg" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects.html">Projects</a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link" href="lights.html">Lights Form</a>
        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0 active">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="contact.html">Contact</a>
          </li>
        </ul>



      </form>
    </div>
  </nav>



  <h1 class = "makeCent conTitle">Give me a shout.</h1>
  <h2 class = "makeCent conTitle2">Use the form to drop me a line. </h2>


  <form action="https://formspree.io/footballshane@gmail.com"
  method="POST">




  <div class="form-group conpad">
    <input type="text" style="color: black"class="form-control setConMarg" name="name" id="nameinput"placeholder="John Smith">
  </div>
  <div class="form-group">
    <input type="email" style="color: black"class="form-control setConMarg" id="emailinput" name = "reply_to"placeholder="name@example.com">
  </div>
  <div class="form-group conpad2">
    <textarea name = "message" style="color: black"class="form-control setConMarg" id="exampleFormControlTextarea1" placeholder="Wow Shane you're super cool we should hang out sometime"rows="3"></textarea>
    <div class="wrapper">


    <input type="submit" class ="btn btn-secondary newbutt" value="Send">
      </div>
  </div>


</form>


<!--
  <div class="container">
    <div class="row">
      <div class="col-sm">
          <img src="phone.svg" class="coLogos" >
      </div>
      <div class="col-sm">
        <h4 class = "num">(650)-417-8821</h2>
      </div>
      <div class="col-sm">
        <img src="mail.svg" class="coLogos">
      </div>
      <div class="col-sm">
      <h4 class = "email">footballshane@gmail.com</h2>
      </div>
    </div>
  </div> -->



  <p class = "makeCent botcon">Shane Folden | 650-417-8821</p>

  <p class = "makeCent botcon2">footballshane@gmail.com</p>



  <a href="https://www.linkedin.com/in/shanefolden" class = "td" target = "blank">
    <img src="linkedLogo.svg"  id = "leftLogo"class = "lilo td" alt = "instagram logo">

  <a href="https://www.github.com/supercarlos297"class = "td" target = "blank">
    <img src="gitLogo.svg" class = "ghlo td" alt = "instagram logo">
  </a>
  <a href="https://www.instagram.com/shanefolden" class = "td"target = "blank">
    <img src="instaLogo.svg" id = "logo"class = "iglo td" alt = "instagram logo">
  </a>
  <a href="https://www.facebook.com/shanefolden29"class = "td" target = "blank">
    <img src="fbLogo.svg"  class = "fblo td" alt = "facebook logo">
  </a>
  <a href="https://www.youtube.com/channel/UC0yCxsV0D_td1BH6uZHe6-Q" class = "td"target = "blank">
    <img src="ytLogo.svg" id = "rightLogo" class = "ytlo td" alt = "instagram logo">
  </a>




  <!-- Optional JavaScript -->
  <script src="sfolden.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
