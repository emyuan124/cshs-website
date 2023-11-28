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
    <div class="lg:hidden p-10 flex flex-wrap justify-center gap-12 max-md:gap-6">
      <div class="flex justify-center items-center gap-10"">
        <div class="flex justify-center items-center">
          <button class="btn btn-primary" onclick="showMenu('teachers')">Change Teacher</button>
        </div>
        <div class="flex justify-center items-center">
          <div class="avatar">
            <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img src="img/beardify/Dannahower.avif" onerror="this.src='img/beardify/Dannahower.png' id="current_teacher" />
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center items-center gap-10"">
        <div class="flex justify-center items-center">
          <button class="btn btn-secondary" onclick="showMenu('beards')">Change Beard</button>
        </div>
        <div class="flex justify-center items-center">
          <div class="avatar">
            <div class="w-24 mask mask-squircle">
              <img src="img/beardify/Beard_1.avif" id="current_beard" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="h-[calc(100vh-100px)] max-lg:max-h-max w-[calc(100%-2rem)] grid grid-cols-5 gap-4 mt-6 max-lg:mt-0 mx-auto">
      <div id="teachers" class="bg-base-200 rounded-lg overflow-y-scroll max-lg:fixed max-lg:h-[calc(100vh-60px)] z-10 left-0 top-[60px] max-lg:w-3/4 max-lg:hidden">
        <button class="btn btn-square btn-outline lg:hidden mt-5 mr-5 float-right" onclick="removeMenu(this)">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
        <div class="text-center text-3xl max-xl:text-2xl mt-2 font-semibold clear-right">Teachers</div>
        <div class="flex flex-wrap justify-center mt-5">

        <?php
          // Format is [TeacherImageStem, TeacherName]
          // An image stem is the thing before an image
          // e.g. "Picture" would be the image stem for Picture.png
          // This is done because images should be in both .avif and .png formats
          // AVIF images are much better, but PNGs are more widely supported as of 2023
          $teachers = [["Dannahower", "Mr. Dannahower"], 
                      ["Forster", "Mr. Forster"],
                      ["Menefee","Mr. Menefee"],
                      ["Peardot","Mr. Peardot"],
                      ["Ruffer","Mr. Ruffer"],
                      ["Stone","Mr. Stone"],
                      ["Forkner","Mr. Forkner"],
                      ["Degear","Mr. Degear"],
                      ["Reimers","Mr. Reimers"],
                      ["Brown","Mr. Brown"]
          ];

          //Loops through each teacher and makes an icon to change to them
          foreach($teachers as $teacher){
            // Seperate the variables from the tuple for readability
            $imgStem = $teacher[0];
            $name = $teacher[1];
            ?>

            <div class="group card w-[200px] max-xl:w-[90%] mb-5 bg-base-100 cursor-pointer shadow-xl hover:bg-base-300 transition" onclick="changeTeacher('<?php echo($imgStem) ?>')">
              <figure class="px-2 pt-2">
                <img 
                    src="img/beardify/<?php echo($imgStem)?>.avif" 
                    onerror="this.src='img/beardify/<?php echo($imgStem)?>.png' 
                    alt="Picture of <?php echo($name) ?>" 
                    class="rounded-xl h-[200px] max-xl:h-full w-full object-fill" />
              </figure>
              <div class="card-body p-3 items-center text-center">
                <h2 class="font-semibold text-xl max-xl:text-base"><?php echo($name) ?></h2>
              </div>
            </div>
            
            <?php
          }
        ?>

        </div>
      </div>
      <div class="col-span-3 max-lg:col-span-5 bg-base-200 rounded-lg overflow-hidden relative">
        <div class="touch-none resize-drag w-80 max-lg:w-1/2 z-48 absolute box-border hover:outline hover:outline-white hover:outline-2">
          <img id="beard_img" src="img/beardify/Beard_1.avif" class="w-full">
        </div>
        <img style="height:100%" id="teacher_img" src="img/beardify/Dannahower.avif" onerror="this.src='img/beardify/Dannahower.png'" class="max-lg:w-full mx-auto">
      </div>
      <div id="beards" class="bg-base-200 rounded-lg overflow-y-scroll max-lg:fixed max-lg:h-[calc(100vh-60px)] left-0 top-[60px] max-lg:w-3/4 max-lg:hidden">
        <button class="btn btn-square btn-outline lg:hidden mt-5 mr-5 float-right" onclick="removeMenu(this)">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
        <div class="text-center text-3xl mt-2 font-semibold clear-right">Beards</div>
        <div class="flex flex-wrap justify-center mt-5">
          <div class="group card w-[200px] max-xl:w-[90%] mb-5 bg-base-100 cursor-pointer shadow-xl hover:bg-base-300 transition" onclick="changeBeard('Beard_1')">
            <figure class="px-2 pt-2">
              <img src="img/beardify/Beard_1.avif" alt="Shoes" class="rounded-xl h-[200px] max-xl:h-full w-full object-fill" />
            </figure>
            <div class="card-body p-3 items-center text-center">
              <h2 class="font-semibold text-xl max-xl:text-base">Beard 1</h2>
            </div>
          </div>
          <div class="group card w-[200px] max-xl:w-[90%] mb-5 bg-base-100 cursor-pointer shadow-xl hover:bg-base-300 transition" onclick="changeBeard('Beard_2')">
            <figure class="px-2 pt-2">
              <img src="img/beardify/Beard_2.avif" alt="Shoes" class="rounded-xl h-[200px] max-xl:h-full w-full object-fill" />
            </figure>
            <div class="card-body p-3 items-center text-center">
              <h2 class="font-semibold text-xl max-xl:text-base">Beard 2</h2>
            </div>
          </div>
          <div class="group card w-[200px] max-xl:w-[90%] mb-5 bg-base-100 cursor-pointer shadow-xl hover:bg-base-300 transition" onclick="changeBeard('Beard_3')">
            <figure class="px-2 pt-2">
              <img src="img/beardify/Beard_3.avif" alt="Shoes" class="rounded-xl h-[200px] max-xl:h-full w-full object-fill" />
            </figure>
            <div class="card-body p-3 items-center text-center">
              <h2 class="font-semibold text-xl max-xl:text-base">Beard 3</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>