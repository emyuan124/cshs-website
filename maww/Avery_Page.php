<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Avery</title>
        <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
        <!--The section below is for the fonts-->
        <style>
                  @font-face { font-family: Lato; src: url('Lato-Black.TTF'); } 
        h1 {
            font-family: Lato
            }
            
            @font-face { font-family: Droid; src: url('DroidSerif-Regular.TTF'); } 
        h2 {
            font-family: Droid
            }
        </style>
    </head>
        <body>
            <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
            <div class="pt-[60px] flex flex-col justify-between min-h-screen">
            
              <hr>
              <!--This section is for Avery's picture and some text-->
                <center>
                    <img src="images/avery.avif" onerror="this.src='images/avery.jpg'" style = "width: 27%; padding: 3%; border-radius: 25%;">
                    <p style="font-family:Droid; font-size: 150%; padding-left: 3%; padding-right: 3%">Despite her heart condition, Avery is determined to live life to the fullest. She finds joy in the simple things, like the colors sage green and army green, and playing her favorite card game, UNO. Her palate is eclectic, with a love for both sushi and mac and cheese, and she has a few go-to spots for dining out, including The Rio and Sushi Salsa. She satisfies her sweet tooth with ice cream and enjoys snacking on yogurt and Goldfish. When she's not indulging in her favorite foods, she loves to watch movies, visit bookstores, and listen to music. Her favorite actor is Adam Sandler, and she's an active sports enthusiast, enjoying tennis, skiing, and swimming. She's also an animal lover, especially of dogs, horses, and cows, and enjoys spending time with her family, especially her mom. Her hobbies also include camping, sledding, and skiing, and her wish is to one day visit Hawaii.</p>
                </center>
            </div>
            <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
        </body>
    </html>