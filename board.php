<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
  <div class="hidden text-center  fixed flex justify-center items-center z-20 top-0 left-0 w-3/4 h-screen bg-base-300" id="sidebar">
    <div class="text-xl font-semibold">
      <a href="beardify"><div class="p-5 border-b border-base-content">Beardify</div></a>
      <a href="cshs"><div class="p-5 border-b border-base-content">CSHS</div></a>
      <a href="codingclub"><div class="p-5 border-b border-base-content">Coding Club</div></a>
      <a href="404"><div class="p-5 border-b border-base-content" >CyberCats</div></a>
      <div class="p-5">
        <label class="swap swap-rotate px-3">
          <input id="theme_switch" type="checkbox" onchange="changeTheme(this)"/>
            <svg class="swap-on fill-current w-7 h-7" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
            <svg class="swap-off fill-current w-7 h-7" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
        </label>
      </div>
    </div>
  </div>
  <div class="fixed z-10 navbar bg-base-200 shadow-xl" id="nav">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-2xl" href="index">
        <img src="img/logo.png" class="w-10 mr-2">FRHS CS</a>
    </div>
    <div class="flex-none hidden md:flex">
      <ul class="menu menu-horizontal p-0">
        <li><a class="rounded-lg" href="beardify">Beardify</a></li>
        <li tabindex="0" class="rounded-lg">
          <a class="rounded-lg">
            Clubs
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
          </a>
          <ul class="p-2 bg-base-100 z-10">
            <li><a class="rounded-lg" href="cshs">CSHS</a></li>
            <li><a class="rounded-lg" href="codingclub">Coding Club</a></li>
            <li><a class="rounded-lg" href="cybercats">Cybercats</a></li>
          </ul>
        </li>
        <label class="swap swap-rotate px-3">
          <input id="theme_switch" type="checkbox" onchange="changeTheme(this)"/>
            <svg class="swap-on fill-current w-6 h-6" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
            <svg class="swap-off fill-current w-6 h-6" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
        </label>
      </ul>
    </div>
    <div class="flex-none flex md:hidden">
      <label class="btn btn-circle swap swap-rotate border-none">
        <input type="checkbox" onchange="sidebar_open(this)"/>
        <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/></svg>
        <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/></svg>
      </label>
    </div>
  </div>
  <div class="pt-[60px] px-10 flex flex-wrap justify-center gap-10 pb-10">
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
      <figure class="md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0" ><img src="img/kerem.avif" onerror="this.src='img/kerem.jpg'" alt="Kerem" class="rounded-xl"/></figure>
      <div class="card-body flex justify-center items-center text-center lg:w-1/2">
        <div>
          <h2 class="card-title justify-center text-2xl">Kerem Gurkan</h2>
          <div class="badge badge-secondary my-2">President</div>
          <p>Kerem's a student by day, a film producer by afternoon, a web designer and Cybersecurity analyst by night, and asleep by morning.</p>
        </div>
      </div>
    </div>
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
      <figure class="md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0" ><img src="img/brandon.avif" onerror="this.src='img/brandon.jpg'" alt="Album" class="rounded-xl"/></figure>
      <div class="card-body flex justify-center items-center text-center lg:w-1/2">
        <div>
          <h2 class="card-title justify-center text-2xl">Brandon Winecki</h2>
          <div class="badge badge-secondary my-2">Vice-President</div>
          <p>Brandon is an avid twisty puzzle collector and speedcuber. He can solve the Rubik's cube in 15 seconds, and hopes to participate in local competitions as COVID winds down.</p>
        </div>
      </div>
    </div>
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
      <figure class="md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0" ><img src="img/caroline.avif" onerror="this.src='img/caroline.jpg'" alt="Album" class="rounded-xl"/></figure>
      <div class="card-body flex justify-center items-center text-center lg:w-1/2">
        <div>
          <h2 class="card-title justify-center text-2xl">Caroline Menten</h2>
          <div class="badge badge-secondary my-2">Vice-President</div>
          <p>Caroline has been to 10 concerts in the past year, and plans to continue going to as many concerts as she can!</p>
        </div>
      </div>
    </div>
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
      <figure class="md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0" ><img src="img/allen.avif" onerror="this.src='img/allen.jpg'" alt="Album" class="rounded-xl"/></figure>
      <div class="card-body flex justify-center items-center text-center lg:w-1/2">
        <div>
          <h2 class="card-title justify-center text-2xl">Allen Macfarland</h2>
          <div class="badge badge-secondary my-2">Developer</div>
          <p>Allen advocates for rust, the future of programming, every day because he is not afraid of the future, but instead welcomes it with open arms</p>
        </div>
      </div>
    </div>
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
      <figure class="md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0" ><img src="img/connor.avif" onerror="this.src='img/connor.jpg'" alt="Album" class="rounded-xl"/></figure>
      <div class="card-body flex justify-center items-center text-center lg:w-1/2">
        <div>
          <h2 class="card-title justify-center text-2xl">Connor Dietrich</h2>
          <div class="badge badge-secondary my-2">Secretary</div>
          <p>I started programming in Java when I was 8½</p>
        </div>
      </div>
    </div>
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
      <figure class="md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0" ><img src="img/danny.avif" onerror="this.src='img/danny.jpg'" alt="Album" class="rounded-xl"/></figure>
      <div class="card-body flex justify-center items-center text-center lg:w-1/2">
        <div>
          <h2 class="card-title justify-center text-2xl">Danny Jeong</h2>
          <div class="badge badge-secondary my-2">Cybercats Liaison</div>
          <p>Danny is trilingual and loves listening to music</p>
        </div>
      </div>
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>