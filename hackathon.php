<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <script src="js/carousel.js"></script>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body class="text-center lg:text-left">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

  <div class="hero h-[900px] pt-[60px]" style="background-image: url(img/banners/Hackathon24.jpg);">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center text-white">
      <div>
        <h1 class="mb-5 text-5xl font-bold">Hack-A-Thon</h1>
        <p class="mb-5 text-2xl">Birthplace of Innovation</p>
        <!--Need to make this a button that connects to the registration-->
        <!--<button class="btn btn-primary">Requirements</button>-->
      </div>
    </div>
  </div>

  </div>
  <div class="hero py-12 lg:py-32 bg-base-100">
    <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
      <img src="img/AdoptACoral.jpg" onerror="this.src='img/hero2.png'" class="w-[500px] rounded-lg shadow-2xl"/>
      <div>
        <h1 class="text-5xl font-bold">What is a Hackathon</h1>
        <p class="py-6">A Hackathon is a competition where you create an app to a theme in a short duration of time. Tons of big companies have hackathons yearly to find new talent! Big ideas like Twitter and GroupME have come out of big HackAThons.</p>
      </div>
    </div>
  </div>
    
  
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>
