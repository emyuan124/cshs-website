<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <title>Sunday</title>
  </head>
  <body class="text-center lg:text-left">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

  <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/dog-walking.webp);">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center text-white">
      <div>
        <h1 class="mb-5 text-5xl font-bold">Sunday, April 2nd</h1>
        <p class="mb-5 text-2xl">Walk-A-Dog-A-Thon & Bowling Night</p>
      </div>
    </div>
  </div>

  <div class="hero py-12 lg:py-32 bg-base-200">
    <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-24">
        <img
          src="images/fresh-club.avif" onerror="this.src='images/fresh-club.png'"
          alt="Fresh Club"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold">Walk-A-Dog-A-Thon</h1>
          <p class="pt-6">
            Join FRESH Club as they host this paw-some event! $10 fee at the door. Come to Twin Silo Park at 10 AM with your furry friend and walk for a cause!
          </p>
          <p><strong>Attendance costs $7 in advance via SchoolPay and $10 day-of</strong></p>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSec5tIVM0CxfLtPSofSOdI3X23XituR4cY1sHCHaN1ay1r1pw/viewform" target="_blank"><div class="btn btn-primary mt-3">Sign-Up</div></a>
        </div>
    </div>
  </div>

  <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
        <img
          src="images/chippers-lanes.avif" onerror="this.src='images/chippers-lanes.jpg'"
          alt="Chipper's Lanes"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold">Bowling Night</h1>
          <p class="pt-6 text-lg">
            Visit Chipper's Lanes for a fun night of bowling and fundraising!
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf6BN-oTdROOQn8bEp7n3ZMKFe-dOuItPCUzTzHySKnNhTpdQ/viewform" target="_blank"><div class="btn btn-primary mt-3">Sign-Up</div></a>
          </p>
        </div>
      </div>
  </div>

    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>
