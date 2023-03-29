<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <title>Tuesday</title>
  </head>
  <body class="text-center lg:text-left">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/dodgeball-crop.webp);">
      <div class="hero-overlay bg-opacity-50"></div>
      <div class="hero-content text-center text-white">
        <div>
          <h1 class="mb-5 text-5xl font-bold">Tuesday, April 4th</h1>
          <p class="mb-5 text-2xl">Dodgeball Tournament & BJ's Night</p>
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-200">
      <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
        <img
          src="images/dodgeball.jpg"
          alt="Chipper's Lanes"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold pb-6">Spirit Day: Night In vs Night Out</h1>
          <hr/>
          <h3 class="text-3xl font-bold mt-6">Dodgeball Tournament</h3>
          <p class="pt-1 text-lg font-bold">
            In the Fossil Gym 
          </p>
          <p><span class="my-2 badge badge-secondary font-bold">6 - 8 PM</span></p>
          <p>Come to the fossil ridge gym to partcipate in an exiting dogeball tournament. Sign up through the NHS website!</p>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSeu5TWFlQST4o9ze9gg9ayhXvEmk_6uIFfUcHfYRnVGule9yw/viewform" target="_blank"><div class="btn btn-primary mt-2 font-bold">Sign-Up</div></a> 
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-24">
        <img
          src="images/bjs.avif"
          alt="Chipper's Lanes"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold">BJ's Night</h1>
          <p><span class="my-3 badge badge-secondary font-bold mr-1">4 - 8 PM</span></p>
          <p>Come to BJ's for a fun night of food and fundraising! Bring a digital or physical flyer to donate your proceeds to Make-A-Wish Colorado!</p>
        </div>
      </div>
    </div>

    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>