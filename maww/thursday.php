<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thursday</title>
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night" class="text-center lg:text-left">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/thursday-cornhole.jpg);">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center text-white">
      <div>
        <h1 class="mb-5 text-5xl font-bold">Thursday April 6th</h1>
        <p class="mb-5 text-2xl">Candy grams, Corn Hole Tourney, and more!</p>
      </div>
    </div>
  </div>
  <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-12">
        <img src="images/thursday-sandler.jpg" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-5xl font-bold">Spirit Day: Adam Sandler</h1>
          <p class="pt-7 text-lg"><strong>Candy Gram Delivery <span class="badge badge-secondary ml-2">4th period</span></strong></p>
          <p>All previously purchased candy grams get delivered!</p>
          <p class="pt-6 text-lg"><strong>Corn Hole Tournament <span class="badge badge-secondary ml-2">7 PM</span></strong></p>
          <p>Come to the commons for a fun night of corn hole, drinks, pizza, and prizzes. Hosted by Key Club!</p>
        </div>
      </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>