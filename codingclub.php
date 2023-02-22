<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="hero h-[450px] pt-[60px]" style="background-image: url(img/coding-club-banner.avif);" title="Run 'cat /dev/random' on your nearest Linux machine!">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center text-white">
      <div>
        <h1 class="mb-5 text-5xl font-bold">Coding Club</h1>
        <p class="mb-5 text-2xl">Learn to code or improve your coding skills</p>
      </div>
    </div>
  </div>
  <div class="hero py-12 lg:py-32 bg-base-100">
        <div class="hero-content flex-col lg:flex-row gap-6 lg:gap-12">
        <img src="img/hero.avif" onerror="this.src='img/hero.png'" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
        <div class="w-full md:w-[500px]">
            <h1 class="text-5xl font-bold mb-5 max-md:text-center">What We Do</h1>
            <div class="mb-5 flex justify-left gap-4 items-center bg-base-200 shadow-xl rounded-full w-100 text-2xl p-4">
              <img src="img/thing1.avif" onerror="this.src='img/thing1.png'" class="w-[40px]">
              <div>
                Coding workshops <br>
                <i class="text-base m-0">Learn a new coding language</i>
              </div>
            </div>
            <div class="mb-5 flex justify-left gap-3 items-center bg-base-200 shadow-xl rounded-full w-100 text-2xl p-4">
              <img src="img/thing2.avif" onerror="this.src='img/thing2.png'" class="w-[40px]">
              <div>
                Coding Competitions<br>
                <i class="text-base m-0">CodeWars, PicoCTF, and maybe more</i>
              </div>
            </div>
            <div class="flex justify-left gap-3 items-center bg-base-200 shadow-xl rounded-full w-100 text-2xl p-4">
              <img src="img/thing3.avif" onerror="this.src='img/thing3.png'" class="w-[40px]">
              <div>
                Internship Opportunities<br>
                <i class="text-base m-0">This website was built paritally in Coding Club</i>
              </div>
            </div>
            
        </div>
        </div>
  </div>
  <div class="hero py-12 lg:py-32 bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse gap-6 lg:gap-24">
      <img src="img/hero.avif" onerror="this.src='img/hero.png'" class="max-md:w-[90%] max-w-sm rounded-lg shadow-2xl" />
      <div class="w-1/2 max-md:w-full max-md:text-center">
        <h1 class="text-5xl font-bold">When and Where Do We Meet?</h1>
        <p class="py-6">Coding Club meets on Wednesdays during lunch at room 209. Our meetings are weekly with the exception of the 2nd week of every month. <br><br> <i>*The 2nd week of every month is reserved for CSHS.</i></p>
      </div>
    </div>
  </div>
  <div class="text-5xl text-center font-bold pt-12">Previous Meetings</div>
  <div class="px-10 flex flex-wrap justify-center gap-10 pb-10">
    <div class="group card card-compact w-[300px] xl:w-1/5 bg-base-200 shadow-xl mt-10 cursor-pointer hover:bg-primary transition duration-300">
      <figure><img src="img/hero.avif" onerror="this.src='img/hero.png'" alt="Shoes" class="group-hover:opacity-75 transition duration-300" /></figure>
      <div class="card-body">
        <div class="badge badge-secondary mx-auto">Month DD, YYYY</div>
        <h2 class="card-title text-xl flex justify-center group-hover:text-white transition duration-300">Name of Meeting</h2>
      </div>
    </div>
    <div class="group card card-compact w-[300px] xl:w-1/5 bg-base-200 shadow-xl mt-10 cursor-pointer hover:bg-primary transition duration-300">
      <figure><img src="img/hero.avif" onerror="this.src='img/hero.png'" alt="Shoes" class="group-hover:opacity-75 transition duration-300" /></figure>
      <div class="card-body">
        <div class="badge badge-secondary mx-auto">Month DD, YYYY</div>
        <h2 class="card-title text-xl flex justify-center group-hover:text-white transition duration-300">Name of Meeting</h2>
      </div>
    </div>
    <div class="group card card-compact w-[300px] xl:w-1/5 bg-base-200 shadow-xl mt-10 cursor-pointer hover:bg-primary transition duration-300">
      <figure><img src="img/hero.avif" onerror="this.src='img/hero.png'" alt="Shoes" class="group-hover:opacity-75 transition duration-300" /></figure>
      <div class="card-body">
        <div class="badge badge-secondary mx-auto">Month DD, YYYY</div>
        <h2 class="card-title text-xl flex justify-center group-hover:text-white transition duration-300">Name of Meeting</h2>
      </div>
    </div>
    <div class="group card card-compact w-[300px] xl:w-1/5 bg-base-200 shadow-xl mt-10 cursor-pointer hover:bg-primary transition duration-300">
      <figure><img src="img/hero.avif" onerror="this.src='img/hero.png'" alt="Shoes" class="group-hover:opacity-75 transition duration-300" /></figure>
      <div class="card-body">
        <div class="badge badge-secondary mx-auto">Month DD, YYYY</div>
        <h2 class="card-title text-xl flex justify-center group-hover:text-white transition duration-300">Name of Meeting</h2>
      </div>
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>