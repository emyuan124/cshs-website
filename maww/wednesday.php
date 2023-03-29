<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <title>Wednesday</title>
  </head>
  <body class="text-center lg:text-left">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/candygrams-banner.jpg);">
      <div class="hero-overlay bg-opacity-50"></div>
      <div class="hero-content text-center text-white">
        <div>
          <h1 class="mb-5 text-5xl font-bold">Wednesday, April 5th</h1>
          <p class="mb-5 text-2xl">Last Chance for Candy Grams</p>
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-200">
      <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
        <img
          src="images/twins.jpg"
          alt="Chipper's Lanes"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold pb-6">Spirit Day: Twin Day</h1>
          <hr/>
          <h3 class="text-3xl font-bold mt-6">Candy Grams</h3>
          <p class="pt-1 text-lg font-bold">
            Last day to signup!
          </p>
          <p><span class="my-2 badge badge-secondary font-bold">$3 on schoolpay</span></p>
          <p>Purchase a candy gram for a special someone. Visit the commons during lunch to sign up!</p>
        </div>
      </div>
    </div>

    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>