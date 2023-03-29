<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <link rel="icon" type="image/png" href="images/icon.png" />
    <title>Make-A-Wish Week</title>
  </head>
  <body class="text-center lg:text-left">
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

    <div class="hero h-[450px] pt-[60px]" style="background-image: url(images/fossil-ridge-high-school.jpg);">
      <div class="hero-overlay bg-opacity-50"></div>
      <div class="hero-content text-center text-white">
        <div>
          <h1 class="mb-5 text-5xl font-bold">Make-A-Wish Week</h1>
          <p class="mb-5 text-2xl">at Fossil Ridge High School</p>
        </div>
      </div>
    </div>

    <div class="flex justify-center gap-5 py-10 bg-base-200">
      <a href="" target="_blank">
        <button class="btn gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
          Donate Here
        </button>
      </a>
      <a href="/maww/dares">
        <button class="btn gap-2">
          Teacher Dares
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
        </button>
      </a>
    </div>

    <h1 class="bg-base-100 pb-4 pt-7 md:pt-14 text-4xl font-bold text-center">Events Summary</h1>
    <div class="p-5 md:pb-14 bg-base-100 flex justify-center items-center shadow-xl">
      <div class="flex flex-col justify-center w-[700px] bg-base-200 p-5 gap-5 rounded-2xl">
        <div class="bg-base-100 flex flex-col md:flex-row md:justify-between gap-2 md:gap-4 px-2 md:px-6 py-3 rounded-2xl md:rounded-full shadow-lg">
          <div class="flex justify-center items-center gap-1 flex-col md:flex-row flex-col md:flex-row">
            <img class="mask mask-squircle w-14 h-14 md:h-12 md:w-12 object-cover" src="images/dog-walking.webp" />
            <span class="text-md md:text-lg font-semibold ml-1 md:ml-2">April 2nd <span class="hidden md:inline">|</span> </span> 
            <span class="text-sm md:text-md">Walk-A-Dog-A-Thon & Bowling Night</span>
          </div>
          <div class="flex justify-center items-center">
            <a href="/maww/sunday"><button class="btn btn-xs md:btn-sm btn-outline">View</button></a>
          </div>
        </div>
        <div class="bg-base-100 flex flex-col md:flex-row md:justify-between gap-2 md:gap-4 px-2 md:px-6 py-3 rounded-2xl md:rounded-full shadow-lg">
          <div class="flex justify-center items-center gap-1 flex-col md:flex-row">
            <img class="mask mask-squircle w-14 h-14 md:h-12 md:w-12 object-cover" src="images/gaming.jpg" />
            <span class="text-md md:text-lg font-semibold ml-1 md:ml-2">April 3rd <span class="hidden md:inline">|</span> </span> 
            <span class="text-sm md:text-md">Game Night & Resturant Night at Panera</span>
          </div>
          <div class="flex justify-center items-center">
            <a href="/maww/monday"><button class="btn btn-xs md:btn-sm btn-outline">View</button></a>
          </div>
        </div>
        <div class="bg-base-100 flex flex-col md:flex-row md:justify-between gap-2 md:gap-4 px-2 md:px-6 py-3 rounded-2xl md:rounded-full shadow-lg">
          <div class="flex justify-center items-center gap-1 flex-col md:flex-row">
            <img class="mask mask-squircle w-14 h-14 md:h-12 md:w-12 object-cover" src="images/dodgeball-crop.webp" />
            <span class="text-md md:text-lg font-semibold ml-1 md:ml-2">April 4th <span class="hidden md:inline">|</span> </span> 
            <span class="text-sm md:text-md">Dodgeball Tournament & Resturant Night at BJ's</span>
          </div>
          <div class="flex justify-center items-center">
            <a href="/maww/tuesday"><button class="btn btn-xs md:btn-sm btn-outline">View</button></a>
          </div>
        </div>
        <div class="bg-base-100 flex flex-col md:flex-row md:justify-between gap-2 md:gap-4 px-2 md:px-6 py-3 rounded-2xl md:rounded-full shadow-lg">
          <div class="flex justify-center items-center gap-1 flex-col md:flex-row">
            <img class="mask mask-squircle w-14 h-14 md:h-12 md:w-12 object-cover" src="images/candygrams.webp" />
            <span class="text-md md:text-lg font-semibold ml-1 md:ml-2">April 5th <span class="hidden md:inline">|</span> </span> 
            <span class="text-sm md:text-md">Last chance for Candy Grams</span>
          </div>
          <div class="flex justify-center items-center">
            <a href="/maww/wednesday"><button class="btn btn-xs md:btn-sm btn-outline">View</button></a>
          </div>
        </div>
        <div class="bg-base-100 flex flex-col md:flex-row md:justify-between gap-2 md:gap-4 px-2 md:px-6 py-3 rounded-2xl md:rounded-full shadow-lg">
          <div class="flex justify-center items-center gap-1 flex-col md:flex-row">
            <img class="mask mask-squircle w-14 h-14 md:h-12 md:w-12 object-cover" src="images/dares.webp" />
            <span class="text-md md:text-lg font-semibold ml-1 md:ml-2">April 6th <span class="hidden md:inline">|</span> </span> 
            <span class="text-sm md:text-md">Checkout Teacher Dares</span>
          </div>
          <div class="flex justify-center items-center">
            <a href="/maww/thursday"><button class="btn btn-xs md:btn-sm btn-outline">View</button></a>
          </div>
        </div>
        <div class="bg-base-100 flex flex-col md:flex-row md:justify-between gap-2 md:gap-4 px-2 md:px-6 py-3 rounded-2xl md:rounded-full shadow-lg">
          <div class="flex justify-center items-center gap-1 flex-col md:flex-row">
            <img class="mask mask-squircle w-14 h-14 md:h-12 md:w-12 object-cover" src="images/trivia-night-banner.jpg" />
            <span class="text-md md:text-lg font-semibold ml-1 md:ml-2">April 7th <span class="hidden md:inline">|</span> </span> 
            <span class="text-sm md:text-md">Trivia Night & Foodtruck Rally</span>
          </div>
          <div class="flex justify-center items-center">
            <a href="/maww/friday"><button class="btn btn-xs md:btn-sm btn-outline">View</button></a>
          </div>
        </div>
        <div class="bg-base-100 flex flex-col md:flex-row md:justify-between gap-2 md:gap-4 px-2 md:px-6 py-3 rounded-2xl md:rounded-full shadow-lg">
          <div class="flex justify-center items-center gap-1 flex-col md:flex-row">
            <img class="mask mask-squircle w-14 h-14 md:h-12 md:w-12 object-cover" src="images/popcorn.jpg" />
            <span class="text-md md:text-lg font-semibold ml-1 md:ml-2">April 10th <span class="hidden md:inline">|</span> </span> 
            <span class="text-sm md:text-md">Movie Night & Cornhole Tournament</span>
          </div>
          <div class="flex justify-center items-center">
            <a href="/maww/movienight_cornhole"><button class="btn btn-xs md:btn-sm btn-outline">View</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-200">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-24">
        <img
          src="images/blue-logo.png"
          alt="blue Make-A-Wish logo"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold">What Is It?</h1>
          <p class="py-6">
            From April 1st to April 7th, Fossil Ridge High School will hold its
            annual Make-A-Wish Week. The school has organized a series of
            fundraising events and spirit days to support the Make-A-Wish
            Foundation. The Make-A-Wish Foundation creates life-changing wishes
            for children with critical illnesses.
          </p>
        </div>
      </div>
    </div>

    <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-14">
        <img
          src="images/avery.jpg"
          alt="Avery"
          class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl"
        />
        <div>
          <h1 class="text-5xl font-bold">Who Are We Supporting?</h1>
          <p class="py-6">
            This year's Make-A-Wish Week at Fossil Ridge High School is focused
            on Avery, a 15-year-old with a heart condition whose wish is to
            visit Hawaii.
          </p>
          <a href="/maww/Avery_Page"><button class="btn btn-primary font-bold">Learn More</button></a>
        </div>
      </div>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
  </body>
</html>
