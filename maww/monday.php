<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <link rel="icon" type="image/png" href="images/icon.avif" onerror="this.src='images/icon.png'" />
    <title>Monday</title>
  </head>
  <body class="text-center lg:text-left">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/gaming.jpg);">
      <div class="hero-overlay bg-opacity-50"></div>
      <div class="hero-content text-center text-white">
        <div>
          <h1 class="mb-5 text-5xl font-bold">Monday, April 3rd</h1>
          <p class="mb-5 text-2xl">Game Night & Panera Night</p>
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-200">
      <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
        <img
          src="images/gamenight.jpg"
          alt="Chipper's Lanes"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold pb-6">Spirit Day: Anything But a Backpack</h1>
          <hr/>
          <h3 class="text-3xl font-bold mt-6">Game Night</h3>
          <p class="pt-1 text-lg font-bold">
            Location in Fossil's Media Center
          </p>
          <p><span class="my-2 badge badge-secondary font-bold">4:30 - 7:30 PM</span></p>
          <p>Hosted by Rho Kappa, CSHS, and Games Society, in Game Night you play board games, video games, and minigames with your friends! It includes an arcade room as well as special prizes for winners of minigames. Concessions are also avaliable for purchase</p>
          <p><strong>Entry is $5 either on schoolpay or at the door!</strong></p>
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-24">
        <img
          src="images/panera.jpeg"
          alt="Chipper's Lanes"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold">Panera Night</h1>
          <p><span class="my-3 badge badge-secondary font-bold mr-1">4 - 8 PM</span></p>
          <p> Come to Panera for a fun night of food band fundraising! Enter the code FUND4U during online checkout or bring a physical/digital flyer to donate your proceeds to Make-A-Wish Colorado! The address is <i>2721 Council Tree Ave #143</i></p>
        </div>
      </div>
    </div>

    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>
