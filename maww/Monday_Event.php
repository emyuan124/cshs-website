<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Monday</title>
        <link rel="icon" type="image/x-icon" href="Images/MAW_Star.avif" onerror="this.src='Images/MAW_Star.jpg'">
        <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
    </head>
    <body data-theme="night" class="text-center lg:text-left">
        <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
        <div class="pt-[60px] flex flex-col justify-between min-h-screen">
        <!--Overview image-->
        <div
            class="hero h-[600px]"
            style="background-image: url(images/gaming.jpg)"
            >
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold text-white">
                    Monday, April 3rd
                </h1>
                <p class="mb-5 text-xl text-white">Game Night</p>
                </div>
            </div>
        </div>

            <!--List of Events/Spirit Days-->
            <hr>
            <p style="padding:3%;font-size: 300%; color: white; font-family:Lato; background-color: #00BAB3;text-align: center;">Anything but a Backpack Day!</p>
            <hr>
            <p style="padding:3%;font-size: 300%; color: white; font-family:Lato; background-color: #75787B;text-align: center;">Game Night! 4:30 PM-7:30 PM</p>
            <hr>
            <p style="font-family: Droid; font-size: 150%;text-align: center; padding: 1.5%">Come to the FRHS media center for a fun game night hosted by Computer Science Honor Society, Rho Kappa, and Games and Simulations Society!</p>
            <p style="font-family: Droid; font-size: 150%;text-align: center; padding: 1.5%">There will be board and video games, prizes, concessions, and minigame events! There is a $5 entry fee; come support MAW and have some fun!</p>
            <hr>
            <p style="padding:3%;font-size: 300%; color: white; font-family:Lato; background-color: #75787B;text-align: center;">Restaurant Night at Panera! 4-8pm</p>
            <hr>
            <p style="font-family: Droid; font-size: 150%;text-align: center; padding: 1.5%">Come to Panera for a fun night of food band fundraising! Bring a digital or physical flyer to donate your proceeds to Make-A-Wish Colorado!</p>
        </div>
        <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
    </body>
</html>