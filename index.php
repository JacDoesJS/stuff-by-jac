<DOCTYPE! html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="styless.css" rel="stylesheet">
    <title>Warp Calculator</title>
 </head>
 <body>
 <header>
    
    <nav class="navbar navbar-expand-lg navbar-light">
        
        <a class="navbar-brand" href="index.html">
            <img src="logo.jpg" alt="weaveunique logo" width=130px>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

<li class="nav-item">
  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="latest.html">Latest Collection</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="catalogue.html">Catalogue</a>
</li>


<li class="nav-item active">
  <a class="nav-link" href="index.php">Calculator<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="https://www.etsy.com/uk/shop/WeaveUnique" target="blank">Etsy Shop</a>
</li>

</ul>
          
        </div>
      </nav>
    </header>

  <main> 

    <div class="heading">
      <h2>Welcome to the Metric Warp Calculator</h2>
    </div>
    
    <div class="forms">
      <form action="./index.php" method="post" autoComplete="off" id="formy"> 
        <p>required finished length (cm)  : <input type="text" name="length"></p><br>
        <p>loom waste (cm): <input type="text" name="waste"></p><br>
        <a href="index.html">
        <input type="submit" id="button"  class="submit">
        </a>
      </form>
    </div>

    <div class="next">
      <p>You want it to be <?php echo $_POST["length"]; ?>cm long, with <?php echo $_POST["waste"];?>  
      cm loom waste. </p>

<?php 
$length = $_POST["length"];
$warpLength = $length / 10;
?>

<p>You will need to add <?php echo $warpLength;?>cm extra to account for shrinkage.</p>
</div>

<?php
$waste = $_POST["waste"];
$fullWarpLength = $warpLength + $length + $waste;
?>

      <div class="full">
        <p>You will need to warp: <?php echo $fullWarpLength;?> cm in total.</p>
      </div>
      
      <div class="gap">
<button type="button" id="button" onClick="window.location.reload();">Reset</button>
<br>
</div>

<div class="info">
      <p>Weavers have to be excellent mathematicians. We need to calculate all manner of things in order to 
        know we have enough yarn or that the resulting fabric will have the required drape or stiffness. This calculator performs
        just one of these tasks, in that it takes into account the shrinkage of cotton fibres after their removal from the loom 
      and lets you know how long the warp threads need to be when you are setting up your loom.</p>
    </div>



  
</div>

</main>

<footer>

<div class="holding">
     <div class="text">
        <p>myemail@website.com</p>
        <p>The Weaving Shed, 12 Loom Lane, Fabrictown</p>
      </div>

      <div class="icons">

<!--CodePen-->
        <a href="https://codepen.io/JacdoesJavascript" target="_blank">
          <img class="buttons" src="https://jacdoesjavascript.files.wordpress.com/2022/02/1298732_codepen_icon.png" alt="CodePen icon"/>

<!--WordPress-->
        <a href="https://jacdoesjavascript.wordpress.com" target="_blank">
          <img class="buttons" src="https://jacdoesjavascript.files.wordpress.com/2022/02/386751_wordpress_word-press_icon.png" alt="Wordpress icon"/>

<!--Instagram-->
        <a href="https://www.instagram.com/weaveuniqueboutique" target="_blank">
          <img class="buttons" src="https://jacdoesjavascript.files.wordpress.com/2022/02/1298747_instagram_brand_logo_social-media_icon.png" alt="Instagram icon"/>

<!--Etsy-->
        <a href="https://www.etsy.com/uk/shop/WeaveUnique?" target="_blank">
          <img class="buttons" src="https://jacdoesjavascript.files.wordpress.com/2022/02/386620_etsy_icon.png" alt="Etsy icon"/>
  </div>
      </div>
      <div class="copy">
        <p>© 2022 Jac McKeigue</p>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>