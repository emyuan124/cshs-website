  <div class="hidden text-center  fixed flex justify-center items-center z-20 top-0 left-0 w-3/4 h-screen bg-base-300" id="sidebar">
    <div class="text-xl font-semibold">
      <a href="/beardify"><div class="p-5 border-b border-base-content">Beardify</div></a>
      <a href="/cshs"><div class="p-5 border-b border-base-content">CSHS</div></a>
      <a href="/codingclub"><div class="p-5 border-b border-base-content">Coding Club</div></a>
      <a href="/404"><div class="p-5 border-b border-base-content" >CyberCats</div></a>
      <ul class="menu p-3 border-b border-base-content">
        <li tabindex="0">
          <span><a class="ml-3">MAAW</a></span>
          <ul class="rounded-box bg-base-100">
            <li><a href="/maww/">About</a></li>
            <li><a href="/maww/Avery_Page">Meet Avery</a></li>
            <li><a href="/maww/foodtrucks">Food Trucks</a></li>
            <li><a href="/maww/saturday">Saturday's Event</a></li>
            <li><a href="/maww/sunday">Sunday's Event</a></li>
            <li><a href="/maww/Monday_Event">Monday's Event</a></li>
            <li><a href="/maww/Tuesday_Event">Tuesday's Event</a></li>
          </ul>
        </li>
      </ul>
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
      <a class="btn btn-ghost normal-case text-2xl" href="/index">
        <img src="/img/logo.avif" onerror="this.src='/img/logo.png'" class="w-10 mr-2">FRHS CS</a>
    </div>
    <div class="flex-none hidden md:flex">
      <ul class="menu menu-horizontal p-0">
        <li><a class="rounded-lg" href="/beardify.php">Beardify</a></li>
        <li tabindex="0" class="rounded-lg">
          <a class="rounded-lg">
            Clubs
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
          </a>
          <ul class="p-2 bg-base-100 z-10">
            <li><a class="rounded-lg" href="/cshs">CSHS</a></li>
            <li><a class="rounded-lg" href="/codingclub">Coding Club</a></li>
            <li><a class="rounded-lg" href="/cybercats">Cybercats</a></li>
          </ul>
        </li>
        <li tabindex="0" class="rounded-lg">
          <a class="rounded-lg" href="/maww/">
            MAWW
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
          </a>
          <ul class="p-2 bg-base-100 z-10">
            <li><a class="rounded-lg" href="/maww/Avery_Page">Meet Avery</a></li>
            <li><a class="rounded-lg" href="/maww/foodtrucks">Food Trucks</a></li>
            <li><a class="rounded-lg" href="/maww/saturday">Saturday's Event</a></li>
            <li><a class="rounded-lg" href="/maww/sunday">Sunday's Event</a></li>
            <li><a class="rounded-lg" href="/maww/Monday_Event">Monday's Event</a></li>
            <li><a class="rounded-lg" href="/maww/Tuesday_Event">Tuesday's Event</a></li>
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