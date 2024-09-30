<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <script src="js/carousel.js"></script>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body class="text-center lg:text-left">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

<div class="logo py-12 lg:py-32 bg-base-100">
    <div class="logo-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
      <img src="img/logo.png" onerror="this.src='img/logo.png'" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
      <div>
        <h1 class="text-5xl font-bold">Why is?</h1>
        <p class="py-6">A Hackathon is a competition where you create an app to a theme in a short duration of time. Tons of big companies have hackathons yearly to find new talent!</p>
      </div>
    </div>
  </div>
    
  
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>
