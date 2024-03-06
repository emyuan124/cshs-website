<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <link rel="icon" type="image/png" href="images/icon.png" />
    <title>Sabercats Care</title>
    <script>
    tailwind.config = {
      theme: {
        extend: {
        animation: {
          marquee: 'marquee 25s linear infinite',
          marquee2: 'marquee2 25s linear infinite',
        },
        keyframes: {
          marquee: {
            '0%': { transform: 'translateX(0%)' },
            '100%': { transform: 'translateX(-100%)' },
          },
          marquee2: {
            '0%': { transform: 'translateX(100%)' },
            '100%': { transform: 'translateX(0%)' },
          },
        },
      }
      }
    }
    </script>
  </head>
  <body class="text-center lg:text-left">
    <style>
      .dark_gradient {
          background: linear-gradient(to bottom, transparent 0%, transparent 25%, #191e24 100%);
      }
      .light_gradient {
          background: linear-gradient(to bottom, transparent 0%, transparent 25%, #f0f6ff 100%);
      }
    </style>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/FRHS.jpeg);">
      <div class="hero-overlay bg-opacity-90"></div>
      <div class="hero-content text-center text-white">
        <div>
          <h1 class="mb-5 text-5xl font-bold">SaberCats Care</h1>
          <p class="mb-5 text-xl">This year's Charity Month is marked by multiple honor socities donating to many non-profits in need. Join us in making a difference!</p>
        </div>
      </div>
    </div>

    <div class="px-5 sm:px-10 bg-base-200 pt-16 py-5 text-center">
      <div class="text-5xl font-bold">Who are we supporting?</div>
      <div class="mt-3">Make-A-Wish, Against Malaria Foundation, St. Judes, Reach out and Read Colorado, Trees Water and People, Center for Family Outreach, and Kayla Foundation</div>
    </div>

    <div class="bg-base-200 relative flex overflow-x-hidden">
      <div class="flex py-12 animate-marquee items-center gap-3">
        <span class="mx-4 text-4xl"><img class="w-96" src="images/white-logo.png" /></span>
        <span class="mx-4 text-4xl"><img class="w-56" src="images/Against_Malaria_Foundation.png" /></span>
        <span class="mx-4 text-4xl"><img class="w-96" src="images/St-Jude-Symbol.png" /></span>
        <span class="mx-4 text-4xl"><img class="w-72" src="images/reach_out.png" /></span>
        <span class="mx-4 text-4xl"><img class="w-56 rounded-full" src="images/trees.jpg" /></span>
        <span class="mx-4 text-4xl"><img class="w-56 rounded-full" src="images/family.jpeg" /></span>
        <span class="mx-4 text-4xl"><img class="w-96" src="images/kayla.png" /></span>
      </div>

      <div class="flex absolute top-0 py-12 animate-marquee2 items-center gap-3">
        <span class="mx-4 text-4xl"><img class="w-96" src="images/white-logo.png" /></span>
        <span class="mx-4 text-4xl"><img class="w-56" src="images/Against_Malaria_Foundation.png" /></span>
        <span class="mx-4 text-4xl"><img class="w-96" src="images/St-Jude-Symbol.png" /></span>
        <span class="mx-4 text-4xl"><img class="w-72" src="images/reach_out.png" /></span>
        <span class="mx-4 text-4xl"><img class="w-56 rounded-full" src="images/trees.jpg" /></span>
        <span class="mx-4 text-4xl"><img class="w-56 rounded-full" src="images/family.jpeg" /></span>
        <span class="mx-4 text-4xl"><img class="w-96" src="images/kayla.png" /></span>
      </div>
    </div>

    <h1 class="bg-base-100 pb-10 pt-7 md:pt-14 text-4xl font-bold text-center">Events Summary</h1>

    <?php
      $dayData = file_get_contents('days.json');
      $days = json_decode($dayData, true);

      // Gets the theme if a cookie exists, otherwise default to dark
      if (isset($_COOKIE['theme'])){
        $theme = $_COOKIE['theme'];
      } else {
        $theme = 'dark';
      }

      if ($theme === 'dark') {
        $gradient_color = 'dark_gradient';
      } else {
        $gradient_color = 'light_gradient';
      }
    ?>

    <div class="px-4 sm:px-10 pb-16 flex justify-center items-center flex-wrap gap-5 sm:gap-10">

      <?php foreach ($days as $index => $day): ?>

        <?php if ($day['Event'] !== null): ?>
          <dialog id="day_<?= $index ?>" class="modal modal-bottom sm:modal-middle">
            <div class="modal-box">
              <h3 class="font-bold text-lg"><?= $day['Event']['Name'] ?></h3>
                <div class="pt-4 pb-2 flex flex-row flex-wrap gap-y-4 text-sm">
                  <div class="basis-1/2 flex justify-start gap-2 items-center">
                      <i class="fi fi-rr-marker"></i>
                      <?php echo $day['Event']['Location']; ?>
                  </div>
                  <div class="basis-1/2 flex justify-start gap-2 items-center">
                      <i class="fi fi-rr-calendar-clock"></i>
                      <?php echo $day['Event']['Time']; ?>
                  </div>
                  <div class="basis-1/2 flex justify-start gap-2 items-center">
                      <i class="fi fi-rr-at"></i>
                      <?php echo $day['Event']['Club']; ?>
                  </div>
                  <div class="basis-1/2 flex justify-start gap-2 items-center">
                      <i class="fi fi-rr-link-alt"></i>
                      <?php if (!empty($day['Event']['Signup'])): ?>
                          <a href="<?php echo $day['Event']['Signup']; ?>" class="link border-none outline-none" target="_blank">Sign-Up Link</a>
                      <?php else: ?>
                          <span>No Signup Required</span>
                      <?php endif; ?>
                  </div>
                  <div class="basis-1/2 flex justify-start gap-2 items-center">
                    <i class="fi fi-rr-coins"></i>
                    <?php if (!empty($day['Event']['Fee'])): ?>
                      <?php if($index == count($days) - 1 || $index == 0 || $index == 3): ?>
                        <span><?= $day['Event']['Fee'] ?></span>
                      <?php else: ?>
                        <span>$<?= $day['Event']['Fee'] ?> Entry Fee</span>
                      <?php endif; ?>
                    <?php else: ?>
                      <span>No Entry Fee</span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="divider">Description</div>
                <div class="text-center">
                  <?= $day['Event']['Description'] ?>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
              <button>close</button>
            </form>
          </dialog>
        <?php endif; ?>

        <div class="bg-base-200 w-96 h-48 shadow-xl rounded-xl flex justify-center">
          <div class="flex basis-1/3 justify-center items-center flex-col h-full text-center bg-base-300 rounded-l-xl">
            <div class="text-lg font-bold">MAR</div>
            <div class="text-4xl font-bold"><?= $day['Date'] ?></div>
          </div>
          <div class="relative basis-2/3 p-4 overflow-hidden">
            <div class="absolute w-full h-full <?php echo $gradient_color; ?> top-0 left-0 z-20"></div>
            <div><?= $day['Spirit'] ?></div>
            <?php if ($day['Event'] !== null): ?>
              <div class="text-2xl font-bold mt-1"><?= $day['Event']['Name'] ?></div>
              <p class="mt-2 text-sm">
                <?= $day['Event']['Description'] ?>
              </p>
              <div class="absolute bottom-5 right-5 btn btn-sm glass btn-primary text-white z-20" onclick="day_<?= $index ?>.showModal()">Learn More</div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>
