<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/w3.css" type="text/css">
    <link rel="stylesheet" href="fontawesome/css/all.css" type="text/css">
    <!-- <link rel="stylesheet" href="fontawesome/css/all.css" type="text/css"> -->
    <title>Find Me</title>
</head>
<body>
<header>
    <div class="connect-icon">
        <div><a class="btn btn-primary inscription" href="inscription.php">
          <!-- <i class="fa fa-user-plus"></i></a> -->
          <span>s'inscrire</span>
        </div>
        <div><button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-blue w3-padding-large">se connecter</button></div>
    </div>
</header>

<div id="id01" class="w3-modal" style="cursor: pointer; display: block;">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;cursor:auto">
  
    <div class="w3-center"><br>
   <span onclick="document.getElementById('id01').style.display='none'" title="Close Modal" class="w3-button w3-hover-text-grey w3-container w3-display-topright w3-xxlarge">×</span>
     <img src="img_avatar2.png" alt="Avatar" style="width:40%" class="w3-circle w3-margin-top">
    </div>

    <div class="w3-container">
      <div class="w3-section">
        <label><b>Username</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username">

        <label><b>Password</b></label>
        <input class="w3-input w3-border" type="password" placeholder="Enter Password">
        
        <button class="w3-button w3-block w3-green w3-section w3-padding" onclick="document.getElementById('id01').style.display='none'">Login</button>
        <label><input type="checkbox" checked="checked"> Remember me</label>
      </div>
    </div>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='none'">password?</a></span>
    </div>

  </div>
</div>

<section>
    <center><div class="title-name white-c">Find Me</div></center>



    <center><div class="under-tittle white-c">Lorem ipsum dolor sit amet consectetur.</div></center>


<section>
    <div class="content-option">
        <div class="w-50">
            <div class="option option1 white-c">
                <a href=""> Je Propose Une prestation</a></div>
        </div>
        <div class="w-50">
            <div class="option option2 white-c">
               <a href="#">Je cherche Une prestation</a> 
            </div>
        </div>

    </div>
</section>


<footer>
    <div class="social-media">

        <p class="white-c">suivez-nous: </p>  
        <p><i class="fab fa-facebook media"></i></p>
        <p><i class="fab fa-twitter media"></i></p>
        <p><i class="fab fa-instagram media"></i></p>

    </div>

</footer>
    
    <script src="js/app.js"></script>
</body>
</html>