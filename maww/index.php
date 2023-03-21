<!DOCTYPE html>
<html lang="en" data-theme="maw">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <link rel="icon" type="image/png" href="images/icon.png" />
    <title>Make-A-Wish Week</title>
  </head>
  <body class="font-[lato]">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div
      class="hero h-[600px]"
      style="background-image: url(images/fossil-ridge-high-school.jpg)"
    >
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold text-white">Make-A-Wish Week</h1>
          <p class="mb-5 text-xl text-white">at Fossil Ridge High School.</p>
          <a href="saturday"
            ><button class="btn btn-primary">Today's Event</button></a
          >
        </div>
      </div>
    </div>

    <div class="hero my-[50px] h-[400px]">
      <div class="hero-content flex-col lg:flex-row">
        <img
          src="images/blue-logo.png"
          alt="blue Make-A-Wish logo"
          class="max-w-sm rounded-lg shadow-2xl"
        />
        <div class="pl-24">
          <h1 class="text-5xl font-bold text-secondary">What Is It?</h1>
          <p class="py-6 text-[#75787B]">
            From April 1st to April 7th, Fossil Ridge High School will hold its
            annual Make-A-Wish Week. The school has organized a series of
            fundraising events and spirit days to support the Make-A-Wish
            Foundation. The Make-A-Wish Foundation creates life-changing wishes
            for children with critical illnesses.
          </p>
        </div>
      </div>
    </div>

    <div class="hero my-[100px]">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <img
          src="images/avery.jpg"
          alt="Avery"
          class="max-w-sm rounded-lg shadow-2xl h-[300px]"
        />
        <div class="pr-24">
          <h1 class="text-5xl font-bold text-secondary">
            Who Are We Supporting?
          </h1>
          <p class="py-6 text-[#75787B]">
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
