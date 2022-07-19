<!-- Starts the PHP Session 
This can only be done at the top of the page
-->
<?php 
session_start();
// The server saves a session varible that says that the user hasn't signed up yet
$_SESSION['signed-up-bool'] = FALSE;
?>
<!DOCTYPE html>

<html>
<head>

	<?php include('titlebar.html'); ?>
    <title>Join CSHS!</title>
</head>
<body>


<h1 style="text-align:center;">Join CSHS!</h1>

<div style="" class="primary_div">
    <!--
    This is a complete form
    It's somewhat scary, but its really just copy/paste once you get going

    Parameters you need to know:
        name: the name that gets sent to the output .csv file. the user never sees this
        id: each element can be assigned its own unique id.
        for: ties a label to an element with a specific id.
            the input's "id" and label's "for" should have the same value to tie them together.
        text: idk what to call it, but the thing inside the <p>tag</p>. this is what the user will see.
        placeholder: the greyed out text that appears in an input box that you haven't typed anything into.
    -->

    <!--
    Shows what will be done with the form.
    I'm somewhat confident that all forms will be able to use the same php file and output to the same csv file.
    That way you don't need to change any more files than needed when making new forms.
    They will all be output to the same .csv file, however.
    -->
    <form action="all-signups.php" method="post" target="form-output" id="signups-form">

    <!-- A hidden input that sends the name of the form -->
    <input name="form-name" type="hidden" value="CSHS-signup">

    <!-- Simple free-response question. Change "name", "placeholder", and "required" when copying-->
    <label class="form-question-label">Name (First and last):</label><br>
    <input class="form-question" type="text" name="name" placeholder="Kouhei Imamura" required><br>

    <!-- Free response question-->
    <label class="form-question-label">School email:</label><br>
    <input class="form-question" type="text" name="email" placeholder="12345@psdschools.org" required><br>

    <!-- Free response question-->
    <label class="form-question-label">Personal email:</label><br>
    <input class="form-question" type="text" name="personal-email" placeholder="susanne.fischer@hotmail.com"><br>

    <!--Simple multiple-choice question
    When copying, change name (once per question), id, value, for, and text (once per answer)-->
    <label class="form-question">Grade level:</label><br>
    <input type="radio" name="grade" id="g9" value="9"><label for="g9" class="inline-label">9th</label><br>
    <input type="radio" name="grade" id="g10" value="10"><label for="g10" class="inline-label">10th</label><br>
    <input type="radio" name="grade" id="g11" value="11"><label for="g11" class="inline-label">11th</label><br>
    <input type="radio" name="grade" id="g12" value="12"><label for="g12" class="inline-label">12th</label><br>
    <br><br>

    <!-- Large text box question
    When copying, change text, name, rows, placeholder, and required-->
    <label class="form-question-label">Completed Computer Science classes and grades:</label><br>
    <textarea class="form-question" name="completed-classes" rows="6" placeholder="Intro to Programming I - B+ &#10;Intro to Programming II - A-"></textarea><br>

    <!--Checkboxes question
    In order for all selected answers to appear, you need a different name for each one.
    When copying, change name, id, value, for, and text.
    -->
    <label class="form-question">Areas of Interests:</label><br>
    <input type="checkbox" name="areas-of-interests1" id="arvr" value="AR/VR"><label for="arvr" class="inline-label">AR/VR</label><br>
    <input type="checkbox" name="areas-of-interests2" id="cs-systems" value="Computing Systems"><label for="cs-systems" class="inline-label">Computing Systems</label><br>
    <input type="checkbox" name="areas-of-interests3" id="data-analysis"value="Data and Analysis"><label for="data-analysis" class="inline-label">Data and Analysis</label><br>
    <input type="checkbox" name="areas-of-interests4" id="impacts-of-computing" value="Impacts of Computing"><label for="impacts-of-computing" class="inline-label">Impacts of Computing</label><br>
    <input type="checkbox" name="areas-of-interests5" id="networks-and-the-internet" value="Networks and the Internet"><label for="networks-and-the-internet" class="inline-label">Networks and the Internet</label><br>
    <input type="checkbox" name="areas-of-interests6" id="cybersecurity" value="Cybersecurity"><label for="cybersecurity" class="inline-label">Cybersecurity</label><br>
    <input type="checkbox" name="areas-of-interests7" id="mlal" value="Machine Learning/AI"><label for="mlal" class="inline-label">Machine Learning/AI</label><br>
    <input type="checkbox" name="areas-of-interests8" id="video-games" value="Video Games"><label for="video-games" class="inline-label">Video Games</label><br>
    <input type="checkbox" name="areas-of-interests9" id="Blockchain-Cryptocurrency-NFTs" value="Blockchain/Cryptocurrency/NFTs"><label for="Blockchain-Cryptocurrency-NFTs" class="inline-label">Blockchain/Cryptocurrency/NFTs</label><br>
    <input type="checkbox" name="areas-of-interests10" id="rust" value="Rust (The future of programming)"><label for="rust" class="inline-label">Rust (The future of programming)</label><br>
    <input type="checkbox" name="areas-of-interests11" id="other" value="Other"><label for="other" class="inline-label">Other</label><br>
    <br><br>

    <!-- Free response question-->
    <label class="form-question-label">What languages are you able to program in?</label><br>
    <input class="form-question" type="text" name="programming-languages" placeholder="C++, Python, Java, Rust" required><br>

    <!-- Free response question-->
    <label class="form-question-label">Why would you like to join our school's Computer Science Honor Society?</label><br>
    <input class="form-question" type="text" name="why-join-cshs" placeholder="" required><br>

    <!-- Free response question-->
    <label class="form-question-label">How will you support computer science being accessible, or equitable, to all students regardless of background, ethnicity, or gender?</label><br>
    <input class="form-question" type="text" name="diversity-support" placeholder="" required><br>

    <!--Submit button-->
    <input style="font-size:50px; width: 100%;" type="submit">
    </form>

    

</div>

<!--This iframe is important. It needs to be copied to every form.
    This is because forms open the all-signups.php file when they send data.
    Unfortunately, this involves both the sending data part and the (blank) webpage part.
    So it wants to open the page in a new window (like a confirmation page).
    So to avoid this, we tell it to dump that all-signups.php into an iframe instead of a new page.
-->
 <iframe title="form-output" name="form-output" width="0%" height="0%" style="border:0;"></iframe>
</body>

<?php include('footer.php'); ?>



</html>