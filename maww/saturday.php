<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <title>Saturday</title>
  </head>
  <body class="text-center lg:text-left">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

  <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/dog-walking.webp);">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center text-white">
      <div>
        <h1 class="mb-5 text-5xl font-bold">Saturday, April 1st</h1>
        <p class="mb-5 text-2xl">Walk-A-Dog-A-Thon</p>
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
          <h1 class="text-5xl font-bold">Who Is Hosting It?</h1>
          <p class="py-6">
            Join FRESH Club as they host this paw-some event! $10 fee at the
            door.
          </p>
        </div>
    </div>
  </div>

  <div class="hero py-12 lg:py-32 bg-base-100">
    <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
      <img
        src="images/twin-silo-park.avif" onerror="this.src='images/twin-silo-park.jpg'"
        alt="Twin Silo Park"
        class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
      />
      <div>
        <h1 class="text-5xl font-bold">
          Where and When Is It?
        </h1>
        <p class="py-6">
          Come to Twin Silo Park at 10 AM with your furry friend and walk for
          a cause!
        </p>
      </div>
    </div>
  </div>

    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>
