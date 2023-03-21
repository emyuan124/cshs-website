<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <link rel="icon" type="image/png" href="images/icon.png" />
    <title>Make-A-Wish Week</title>
  </head>
  <body class="text-center lg:text-left">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/fossil-ridge-high-school.jpg);">
      <div class="hero-overlay bg-opacity-50"></div>
      <div class="hero-content text-center text-white">
        <div>
          <h1 class="mb-5 text-5xl font-bold">Make-A-Wish Week</h1>
          <p class="mb-5 text-2xl">at Fossil Ridge High School</p>
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-200">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-24">
        <img
          src="images/blue-logo.png"
          alt="blue Make-A-Wish logo"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold">What Is It?</h1>
          <p class="py-6">
            From April 1st to April 7th, Fossil Ridge High School will hold its
            annual Make-A-Wish Week. The school has organized a series of
            fundraising events and spirit days to support the Make-A-Wish
            Foundation. The Make-A-Wish Foundation creates life-changing wishes
            for children with critical illnesses.
          </p>
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-14">
        <img
          src="images/avery.jpg"
          alt="Avery"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold">Who Are We Supporting?</h1>
          <p class="py-6">
            This year's Make-A-Wish Week at Fossil Ridge High School is focused
            on Avery, a 15-year-old with a heart condition whose wish is to
            visit Hawaii.
          </p>
          <a href="/maww/Avery_Page"><button class="btn btn-primary">Learn More</button></a>
        </div>
      </div>
    </div>
    
    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>
