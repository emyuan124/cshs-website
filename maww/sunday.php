<!DOCTYPE html>
<html lang="en" data-theme="maw">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <link rel="icon" type="image/png" href="images/icon.png" />
    <title>Sunday</title>
  </head>
  <body class="font-[lato]">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div
      class="hero h-[600px]"
      style="background-image: url(images/bowling.jpg)"
    >
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold text-white">Sunday, April 2nd</h1>
          <p class="mb-5 text-xl text-white">Bowling Night</p>
        </div>
      </div>
    </div>

    <div class="hero my-[50px] h-[400px]">
      <div class="hero-content flex-col lg:flex-row">
        <img
          src="images/chippers-lanes.png"
          alt="Chipper's Lanes"
          class="max-w-sm rounded-lg shadow-2xl"
        />
        <div class="pl-24">
          <h1 class="text-5xl font-bold text-secondary">What Is It?</h1>
          <p class="py-6 text-[#75787B]">
            Visit Chipper's Lanes for a fun night of bowling and fundraising!
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
    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>
