<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wednesday</title>
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night" class="text-center lg:text-left">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/wednesday-popcorn.jpg);">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center text-white">
      <div>
        <h1 class="mb-5 text-5xl font-bold">Wednesday April 5th</h1>
        <p class="mb-5 text-2xl">Movie Night, Candy Grams, and more!</p>
      </div>
    </div>
  </div>
  <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-12">
        <img src="images/wednesday-twins.jpg" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-5xl font-bold">Spirit Day: Twins</h1>
          <p class="pt-7 text-lg"><strong>Movie Night <span class="badge badge-secondary ml-2">7 PM</span></strong></p>
          <p>Watch a fun movie for a cause! Hostsed by NEHS at Fossil.</p>
          <p class="pt-6 text-lg"><strong>Candy Gram Signups <span class="badge badge-secondary ml-2">$3 on schoolpay</span></strong></p>
          <p>Go on schoolpay to purchase a candy gram for a special someone</p>
          <p>Visit the commons during lunch to sign up!</p>
        </div>
      </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>