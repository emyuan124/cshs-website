<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <script src="js/carousel.js"></script>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body class="text-center lg:text-left">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>

  <div class="carousel w-full pt-[60px]" id="carousel">
    <div id="slide0" class="carousel-item relative w-full">
      <a href="https://forms.gle/S9Zj1aTc13AQUdGr7">
        <img src="img/Coding Club-2024-25-Banner.png" class="w-full" />
      </a>
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a onclick="scrollCarousel('#slide3')" class="btn btn-circle max-md:hidden">❮</a>
        <a onclick="scrollCarousel('#slide1')" class="btn btn-circle max-md:hidden">❯</a>
      </div>
    </div>

    <!--<div id="slide0" class="carousel-item relative w-full">
      <a href="/sabercatscare/">
        <img src="img/2w2g-banner.webp" title="2 weeks of events for various charities from fossil clubs!" class="w-full" />
      </a>
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a onclick="scrollCarousel('#slide3')" class="btn btn-circle max-md:hidden">❮</a>
        <a onclick="scrollCarousel('#slide1')" class="btn btn-circle max-md:hidden">❯</a>
      </div>
    </div>-->
    
    <div id="slide1" class="carousel-item relative w-full">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSeVCnBeLAZINfsuv_O8p_GJ2DRyue_IZFRPbi2frTV--aFJJw/viewform">
        <img src="img/cshs-banner.webp" class="w-full" />
      </a>
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a onclick="scrollCarousel('#slide0')" class="btn btn-circle max-md:hidden">❮</a>
        <a onclick="scrollCarousel('#slide2')" class="btn btn-circle max-md:hidden">❯</a>
      </div>
    </div>

    <div id="slide2" class="carousel-item relative w-full">
      <a href="/codingclub">
        <img src="img/Coding-Club-2024-25-Banner.png" class="w-full" />
      </a>
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a onclick="scrollCarousel('#slide1')" class="btn btn-circle max-md:hidden">❮</a>
        <a onclick="scrollCarousel('#slide3')" class="btn btn-circle max-md:hidden">❯</a>
      </div>
    </div>

    <div id="slide3" class="carousel-item relative w-full">
      <a href="/instagram">
        <img src="img/slide1.avif" onerror="this.src='img/slide1.png'" class="w-full" />
      </a>
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a onclick="scrollCarousel('#slide2')" class="btn btn-circle max-md:hidden">❮</a>
        <a onclick="scrollCarousel('#slide0')" class="btn btn-circle max-md:hidden">❯</a>
      </div>
    </div> 
    

  </div>
  <div class="flex justify-center w-full py-4 gap-4 bg-base-200">
    <a onclick="scrollCarousel('#slide0')" class="slide-btn btn btn-xs btn-secondary">1</a>
    <a onclick="scrollCarousel('#slide1')" class="slide-btn btn btn-xs btn-primary">2</a> 
    <a onclick="scrollCarousel('#slide2')" class="slide-btn btn btn-xs btn-primary">3</a> 
    <a onclick="scrollCarousel('#slide3')" class="slide-btn btn btn-xs btn-primary">4</a> 
  </div>
  <div class="hero py-12 lg:py-32 bg-base-100">
      <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-12">
        <img src="img/hero.avif" onerror="this.src='img/hero.png'" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-5xl font-bold">Who We Are</h1>
          <p class="py-6">Computer Science Honor Society and Coding Club were started by different students in the 2021-2022 school year to promote Computer Science in the school. Both boards realized that the two organizations were working towards the same goal, so we decided to begin working together to create an even stronger Computer Science program at Fossil Ridge. As part of our merger, we decided on a few key principles on how we continued to operate. <br><br> <strong>Everything we do will work to promote enthusiasm in Computer Science, increase Computer Science service opportunities, and honor excellence in any field of Computer Science.</strong></p>
          <a href="board"><button class="btn btn-primary">Meet The Board</button></a>
        </div>
      </div>
  </div>
  <div class="bg-base-200">
  <div class="text-5xl text-center font-bold pt-12">Our Clubs</div>
  <div class="flex flex-wrap justify-center pb-24 pt-10 gap-10 px-5">
      <div class="group card max-md:w-[95%] w-80 bg-base-100 shadow-xl cursor-pointer hover:bg-primary transition duration-300" onclick="window.location.href='cshs'">
        <figure><img src="img/cshs.avif" onerror="this.src='img/cshs.png'" alt="CSHS Logo" class="group-hover:opacity-75 transition duration-300" /></figure>
        <div class="card-body group-hover:text-white transition duration-300">
          <h2 class="card-title max-lg:justify-center">
            Computer Science Honor Society
          </h2>
          <p>Promoting Excellence in Computer Science</p>
          <div class="card-actions justify-end">
            <div class="badge badge-outline">Honor Society</div> 
          </div>
        </div>
      </div>
      <div class="group card max-md:w-[95%] w-80 bg-base-100 shadow-xl hover:bg-primary cursor-pointer  transition duration-300" onclick="window.location.href='codingclub'">
        <figure><img src="img/codingclub.avif" onerror="this.src='img/codingclub.png'" alt="Coding Club Logo" class="group-hover:opacity-75 transition duration-300" /></figure>
        <div class="card-body group-hover:text-white transition duration-300">
          <h2 class="card-title max-lg:justify-center">
            Coding Club
          </h2>
          <p>For everything CS related. Focus is on Python.</p>
          <div class="card-actions justify-end">
            <div class="badge badge-outline">General Club</div> 
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="hero py-12 lg:py-32 bg-base-100">
    <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
      <img src="img/hero2.avif" onerror="this.src='img/hero2.png'" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
      <div>
        <h1 class="text-5xl font-bold">Why Should I Join?</h1>
        <p class="py-6">5C's is dedicated to making promoting Computer Science in Fossil Ridge. By joining one of the 5C's club, you'll be able to recieve early and priority access to our various events while furthering your knowledge in Computer Science. You'll also have the oppurtunity to work on our in-house service projects and internships, making our organizations a great addition to for college applications. If that sounds a bit difficult, worry not! We provide our own workshops to teach you real Computer Science skills, and we will be providing numerous guest speakers to come in and give you an idea on what it is like to do Computer Science as a career.</p>
      </div>
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>
