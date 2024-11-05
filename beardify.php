<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    <script src="js/beardify.js"></script>
</head>
<body data-theme="night">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="pt-[60px] flex flex-col justify-between min-h-screen">
    
    <!-- Mobile view: Change Teacher and Beard -->
    <div class="lg:hidden p-10 flex flex-wrap justify-center gap-12 max-md:gap-6">
      <div class="flex justify-center items-center gap-10">
        <button class="btn btn-primary" onclick="showMenu('teachers')">Change Teacher</button>
        <div class="avatar">
          <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
            <img src="img/beardify/Dannahower.png" onerror="this.src='img/beardify/Dannahower.png'" id="current_teacher" />
          </div>
        </div>
      </div>
      <div class="flex justify-center items-center gap-10">
        <button class="btn btn-secondary" onclick="showMenu('beards')">Change Beard</button>
        <div class="avatar">
          <div class="w-24 mask mask-squircle">
            <img src="img/beardify/Beard_1.png" id="current_beard" />
          </div>
        </div>
      </div>
    </div>

    <!-- Main content grid -->
    <div class="h-[calc(100vh-100px)] max-lg:max-h-max w-[calc(100%-2rem)] grid grid-cols-5 gap-4 mt-6 max-lg:mt-0 mx-auto">

      <!-- Teachers Menu -->
      <div id="teachers" class="bg-base-200 rounded-lg overflow-y-scroll max-lg:fixed max-lg:h-[calc(100vh-60px)] z-10 left-0 top-[60px] max-lg:w-3/4 max-lg:hidden">
        <button class="btn btn-square btn-outline lg:hidden mt-5 mr-5 float-right" onclick="removeMenu(this)">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
        <div class="text-center text-3xl max-xl:text-2xl mt-2 font-semibold">Teachers</div>
        <div class="flex flex-wrap justify-center mt-5">
          <?php
            // Array of teachers (image stem and name)
            $teachers = [
              ["Dannahower", "Mr. Dannahower"], 
              ["Menefee", "Mr. Menefee"], ["Peardot", "Mr. Peardot"], 
              ["Ruffer", "Mr. Ruffer"], ["Stone", "Dr. Stone"], 
              ["Degear", "Mr. Degear"], ["Jackson", "Mr. Jackson"],
              ["Reimers", "Mr. Reimers"], ["Brown", "Mr. Brown"]
            ];

            // Loop through teachers and generate the cards
            foreach ($teachers as $teacher) {
              $imgStem = $teacher[0];
              $name = $teacher[1];
              echo "
                <div class='group card w-[200px] max-xl:w-[90%] mb-5 bg-base-100 cursor-pointer shadow-xl hover:bg-base-300 transition' onclick='changeTeacher(\"$imgStem\")'>
                  <figure class='px-2 pt-2'>
                    <img src='img/beardify/{$imgStem}.png' onerror='this.src=\"img/beardify/{$imgStem}.png\"' alt='Picture of {$name}' class='rounded-xl h-[200px] max-xl:h-full w-full object-fill' />
                  </figure>
                  <div class='card-body p-3 items-center text-center'>
                    <h2 class='font-semibold text-xl max-xl:text-base'>{$name}</h2>
                  </div>
                </div>
              ";
            }
          ?>
        </div>
      </div>

      <!-- Main Content: Teacher and Beard Images -->
      <div class="col-span-3 max-lg:col-span-5 bg-base-200 rounded-lg overflow-hidden relative">
        <div class="touch-none resize-drag w-80 max-lg:w-1/2 z-48 absolute box-border hover:outline hover:outline-white hover:outline-2">
          <img id="beard_img" src="img/beardify/Beard_1.png" class="w-full">
        </div>
        <img style="height:100%" id="teacher_img" src="img/beardify/Dannahower.png" onerror="this.src='img/beardify/Dannahower.png'" class="max-lg:w-full mx-auto">
      </div>

      <!-- Beards Menu -->
      <div id="beards" class="bg-base-200 rounded-lg overflow-y-scroll max-lg:fixed max-lg:h-[calc(100vh-60px)] left-0 top-[60px] max-lg:w-3/4 max-lg:hidden">
        <button class="btn btn-square btn-outline lg:hidden mt-5 mr-5 float-right" onclick="removeMenu(this)">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
        <div class="text-center text-3xl mt-2 font-semibold">Beards</div>
        <div class="flex flex-wrap justify-center mt-5">
          <?php
            // Array of beard images
            $beards = [
              ["Beard_1", "Beard 1"], ["Beard_2", "Beard 2"], ["Beard_3", "Beard 3"]
            ];

            // Loop through beards and generate the cards
            foreach ($beards as $beard) {
              $imgStem = $beard[0];
              $name = $beard[1];
              echo "
                <div class='group card w-[200px] max-xl:w-[90%] mb-5 bg-base-100 cursor-pointer shadow-xl hover:bg-base-300 transition' onclick='changeBeard(\"$imgStem\")'>
                  <figure class='px-2 pt-2'>
                    <img src='img/beardify/{$imgStem}.png' alt='{$name}' class='rounded-xl h-[200px] max-xl:h-full w-full object-fill' />
                  </figure>
                  <div class='card-body p-3 items-center text-center'>
                    <h2 class='font-semibold text-xl max-xl:text-base'>{$name}</h2>
                  </div>
                </div>
              ";
            }
          ?>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
