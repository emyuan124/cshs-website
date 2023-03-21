<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="pt-[60px] min-h-screen">
    <div class="mt-10 w-4/5 mx-auto">
      <div tabindex="0" class="collapse collapse-arrow border border-primary bg-base-300 rounded-box">
        <input type="checkbox" class="peer" /> 
        <div class="collapse-title text-xl font-medium flex items-center gap-4">
          Game Night at FRHS <span class="badge badge-lg badge-secondary">UPCOMING</span>
        </div>
        <div class="collapse-content"> 
          <div class="flex justify-center gap-5">
            <div class="w-1/4">
            <div class="stats stats-vertical shadow w-full h-full">
              <div class="stat">
                <div class="stat-title">Tickets</div>
                <div class="stat-value">Free</div>
                <div class="stat-desc">Purchase tickets in the front</div>
              </div>
              <div class="stat">
                <div class="stat-title">Start Time</div>
                <div class="stat-value">5:00 PM</div>
                <div class="stat-desc">Bring money for tickets!</div>
              </div>
              <div class="stat">
                <div class="stat-title">End Time</div>
                <div class="stat-value">9:00 PM</div>
                <div class="stat-desc">Hope you had fun :]</div>
              </div>
            </div>
            </div>
            <div class="w-1/2 flex items-center flex-col gap-5 bg-base-100 p-7 rounded-xl">
              <div>
                <div class="text-xl font-semibold mb-2">Description</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id nibh suscipit, cursus ipsum eget, efficitur ligula. Aliquam eros nibh, bibendum a vehicula iaculis, rhoncus at purus. Etiam elit neque, ultricies facilisis neque vel, malesuada euismod mauris. Vestibulum lobortis odio mattis augue pellentesque, a rutrum ex pellentesque. Ut faucibus dictum condimentum.</p>
                <div class="text-xl font-semibold mt-2 mb-2">Payment</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id nibh suscipit, cursus ipsum eget, efficitur ligula. Aliquam eros nibh, bibendum a vehicula iaculis, rhoncus at purus.</p>
              </div>              
              <button class="btn btn-secondary text-xl">RVSP Here</button>
            </div>
            <div class="w-1/4 flex justify-center bg-base-100 rounded-xl">
              <img class="mask mask-circle w-3/4" src="https://daisyui.com/images/stock/photo-1567653418876-5bb0e566e1c2.jpg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>