<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Tuesday</title>
        <link rel="icon" type="image/x-icon" href="Images/MAW_Star.avif" onerror="this.src='Images/MAW_Star.jpg'">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
        <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
        <!--The section below is for the fonts-->
        <style>
            @font-face { font-family: Lato; src: url('Lato-Black.TTF'); }            
            @font-face { font-family: Droid; src: url('DroidSerif-Regular.TTF'); } 
        </style>
    </head>
    <body>
        <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
        <div class="pt-[60px] flex flex-col justify-between min-h-screen">
            <!--Overview image-->
            <div
                class="hero h-[600px]"
                style="background-image: url(images/dodgeball-crop.webp)"
            >
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold text-white">
                        Tuesday, April 4th
                    </h1>
                    <p class="mb-5 text-xl text-white">Dodgeball Tournament</p>
                    </div>
                </div>
            </div>    
        <hr>
              <p style="padding:3%;font-size: 300%; color: white; font-family:Lato; background-color: #00BAB3;text-align: center;">Spirit Day: Night in VS Night out (Cozy v.s. Fancy!)</p>
            <hr>
            <p style="padding:3%;font-size: 300%; color: white; font-family:Lato; background-color: #75787B;text-align: center;">Dodgeball Tournament! 6-8 & 7-9 PM</p>
            <hr>
            <p style="font-family: Droid; font-size: 150%;text-align: center; padding: 1.5%">Come to the fossil ridge gym to partcipate in an exiting dogeball tournament Sign up through the NHS website!</p>
            <hr>
            <p style="padding:3%;font-size: 300%; color: white; font-family:Lato; background-color: #75787B;text-align: center;">Restaurant Night at BJs! 4-8pm</p>
            <hr>
            <p style="font-family: Droid; font-size: 150%;text-align: center; padding: 1.5%">Come to BJ's for a fun night of food and fundraising! Bring a digital or physical flyer to donate your proceeds to make-a-wish colorado!</p>
        </div>
        <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
        </body>
    </html>