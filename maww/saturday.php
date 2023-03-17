<!DOCTYPE html>
<html lang="en" data-theme="maw">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <title>Saturday</title>
  </head>
  <body class="font-[lato]">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div
      class="hero h-[600px]"
      style="background-image: url(images/dog-walking.webp)"
    >
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold text-white">
            Saturday, April 1st
          </h1>
          <p class="mb-5 text-xl text-white">Walk-A-Dog-A-Thon</p>
        </div>
      </div>
    </div>

    <div class="hero my-[50px] h-[400px]">
      <div class="hero-content flex-col lg:flex-row">
        <img
          src="images/fresh-club.avif" onerror="this.src='images/fresh-club.png'"
          alt="Fresh Club"
          class="max-w-sm rounded-lg shadow-2xl h-[300px]"
        />
        <div class="pl-24">
          <h1 class="text-5xl font-bold text-secondary">Who Is Hosting It?</h1>
          <p class="py-6 text-[#75787B]">
            Join FRESH Club as they host this paw-some event! $10 fee at the
            door.
          </p>
        </div>
      </div>
    </div>

    <div class="hero my-[50px] h-[400px]">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <img
          src="images/twin-silo-park.avif" onerror="this.src='images/twin-silo-park.jpg'"
          alt="Twin Silo Park"
          class="max-w-sm rounded-lg shadow-2xl h-[300px]"
        />
        <div class="pr-24">
          <h1 class="text-5xl font-bold text-secondary">
            Where and When Is It?
          </h1>
          <p class="py-6 text-[#75787B]">
            Come to Twin Silo Park at 10 AM with your furry friend and walk for
            a cause!
          </p>
        </div>
      </div>
    </div>

    <footer class="footer footer-center p-4 mt-8 bg-[#75787B] text-base-content">
      <div>
        <p class="text-white">
          This site was made for Make-A-Wish Week at Fossil Ridge High School.
        </p>
      </div>
    </footer>
  </body>
</html>
