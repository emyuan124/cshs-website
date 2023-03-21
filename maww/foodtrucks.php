<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food Trucks</title>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="pt-[60px] px-10 flex flex-wrap justify-center gap-10 pb-10">
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
      <img src="images/charlottes.avif" onerror="this.src='images/charlottes.png'" alt="Album" class="rounded-xl object-cover md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0"/>
      <div class="card-body flex justify-center items-center text-center lg:w-1/2">
        <div>
          <h2 class="card-title justify-center text-2xl">Charlotte's Lil Kitchen</h2>
          <div class="badge badge-secondary my-2">Mediterranean Cuisine</div>
          <p>Charlotte's lil Kitchen is a food truck that specializes in Mediterranean-inspired cuisine made with locally sourced, healthy ingredients. Some of the popular items on their menu include Gyros, Falafel wraps, and Hummus plates, all of which are made with fresh ingredients and served with homemade sauces.  </p>
          <a class="mt-5 flex justify-center" href="https://charlottes-lil-kitchen.square.site/" target="_blank">
            <button class="btn btn-primary">Look at Menu</button>
          </a>
        </div>
      </div>
    </div>
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
      <img src="images/brightside.avif" onerror="this.src='images/brightside.png'" alt="Album" class="rounded-xl object-cover md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0"/>
      <div class="card-body flex justify-center items-center text-center lg:w-1/2">
        <div>
          <h2 class="card-title justify-center text-2xl">Brightside Coffee</h2>
          <div class="badge badge-secondary my-2">Coffee and Pastries</div>
          <p>They offer a variety of coffee drinks, including espresso, latte, cappuccino, and cold brew, made with high-quality beans roasted locally in Austin. They also serve tea, hot chocolate, and chai. Their menu includes a selection of pastries such as croissants, scones, muffins, and cookies, baked fresh daily. </p>
          <a class="mt-5 flex justify-center" href="https://www.brightsidecoffeetrailer.com/menu/" target="_blank">
            <button class="btn btn-primary">Look at Menu</button>
          </a>
        </div>
      </div>
    </div>
    <div class="card lg:card-side bg-base-200 shadow-xl p-2 w-[600px] 2xl:w-2/5 mt-10">
        <img src="images/mommaperez.avif" onerror="this.src='images/mommaperez.jpg'" alt="Album" class="rounded-xl object-cover md:w-1/2 lg:w-1/2 mx-auto md:mt-10 lg:mt-0"/>
        <div class="card-body flex justify-center items-center text-center lg:w-1/2">
          <div>
            <h2 class="card-title justify-center text-2xl">Momma Perez Burritos</h2>
            <div class="badge badge-secondary my-2">Mexican Cuisine</div>
            <p>Their menu includes a variety of burritos, including classic breakfast burritos, carne asada, and vegetarian options. They also offer tacos, quesadillas, and tostadas, all made with the same care and attention to detail. They specialize in hand-rolled burritos made with fresh ingredients and cooked to perfection.</p>
            <a class="mt-5 flex justify-center" href="https://mommaperezburritos.com/" target="_blank">
              <button class="btn btn-primary">Look at Menu</button>
            </a>
          </div>
        </div>
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>