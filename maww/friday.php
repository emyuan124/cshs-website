<!DOCTYPE html>
<html lang="en">
<head>
    <title>Friday</title>
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night" class="text-center lg:text-left">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/friday-banner.jpg);">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center text-white">
      <div>
        <h1 class="mb-5 text-5xl font-bold">Friday April 7th</h1>
        <p class="mb-5 text-2xl">Trivia Night, Food Trucks, and more!</p>
      </div>
    </div>
  </div>
  <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-12">
        <img src="images/friday-hero.jpg" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-5xl font-bold">Spirit Day: Tropical</h1>
          <p class="pt-7 text-lg"><strong>Trivia Night <span class="badge badge-secondary ml-2">6:30-9:30 PM</span></strong></p>
          <p>
            Join Mu Alpha Thetain the fossil commons
            for an exiting trivia night, complete with
            food and drinks. There are four to five
            people per team, and only about 40 spots, so
            sign up fast
          </p>
          <p><strong>$15 on schoolpay <br/>$20 at the door</strong></p>
          <p class="pt-6 text-lg"><strong>Food Truck Night<span class="badge badge-secondary ml-2">4-6 PM</span></strong></p>
          <p>More info on the 3 foodtrucks coming on the foodtrucks page!</p>
        </div>
      </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>