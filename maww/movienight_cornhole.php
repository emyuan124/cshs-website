<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Night & Cornhole</title>
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night" class="text-center lg:text-left">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/popcorn.jpg);">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center text-white">
      <div>
        <h1 class="mb-5 text-5xl font-bold">Monday, April 10th</h1>
        <p class="mb-5 text-2xl">Movie Night and Cornhole Tournament</p>
      </div>
    </div>
  </div>
  <div class="hero py-12 lg:py-32 bg-base-200">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-12">
        <img src="images/movienight.jpg" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-5xl font-bold">Movie Night</h1>
          <p class="pt-7 text-xl font-bold">Hosted at Timberline Cinemark</p>
          <p><span class="badge badge-secondary my-2 font-bold">7 PM</span></p>
          <p>Come see Despicable Me as a special FRHS Make-A-Wish week fundraiser! Hosted by NEHS</p>
          <p>Location: <i>Cinemark 16 theatre located at 4721 S Timberline Rd, Fort Collins, CO 80528</i></p>
          <p><strong>Tickets are on schoopay for $5</strong></p>
          <a href="https://psdschools.schoolpay.com/pay/for/MakeAWish-Movie-Night-202223/ScSmc9d" target="_blank"><div class="btn btn-primary mt-3 font-bold">Get Tickets</div></a>
        </div>
      </div>
  </div>
  <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-12">
        <img src="images/cornhole.jpg" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-5xl font-bold">Cornhole Tournament</h1>
          <p class="pt-7 text-xl font-bold">In the Fossil Commons</p>
          <p><span class="badge badge-secondary my-2 font-bold">4:30 - 6:00 PM</span></p>
          <p>Enter a tournament for a chance to win! (TEAMS OF TWO)</p>
          <p><strong>Fee per entry is $7 on schoolpay!</strong></p>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLScRExJwQ9wlUr1Orsg525VCAN1h0aybEI-Hz6qaYZkI5PQEug/viewform?usp=sf_link" target="_blank"><div class="btn btn-primary mt-3 font-bold">Sign-Up</div></a>
        </div>
      </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>