<!-- Starts the PHP Session 
This can only be done at the top of the page
-->
<?php 
session_start();
$_SESSION['signed-up-bool'] = FALSE;
?>
<!DOCTYPE html>
<html>
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/titlebar.html'); ?>
    <title>Hackathon</title>
</head>
<body>
    <!--Title bar div here is optional-->
    <div class="title_bar" style="height:auto;">
        <h1 class="title_bar_title">Hackathon</h1>
        <br>
    </div>

    <div style="" class="primary_div">
        <h2 style="background-color:red;">ALL DETAILS ARE EARLY AND SUBJECT TO CHANGE!</h2>

        <h2>About the hackathon</h2>

        <div class="columns-block">
            <div style=" margin:0px;" class="column-half-width">
                <p> Date: September 23, 2022<br>
                    Time: __:__ PM to __:__ _M<br>
                    Location: The south computer lab (209)
                </p>
            </div>
            <div style="margin:0px; " class="column-half-width">
                <p>The Hackathon is a group programming event
                    where participants are given a theme, then
                    use technology to solve a problem related 
                    to that theme. You only have a short time,
                    so fast thinking and good communication 
                    are critical.
                </p>
            </div>
        </div>

        <h2>Sign up</h2>
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
    <form action="/all-signups.php" method="post" target="form-output">

        <!-- A hidden input that sends the name of the form -->
        <input name="form-name" type="hidden" value="hackathon-signup">
        
        <!-- Simple free-response question. Change "name", "placeholder", and "required" when copying-->
        <label class="form-question-label">Name (First and last):</label><br>
        <input class="form-question" type="text" name="name" placeholder="Yuu Ishigami" required><br>

        <!-- Free response question-->
        <label class="form-question-label">School email:</label><br>
        <input class="form-question" type="text" name="email" placeholder="12345@psdschools.org" required><br>

        <!-- Free response question-->
        <label class="form-question-label">Personal email:</label><br>
        <input class="form-question" type="text" name="personal-email" placeholder="susanne.fischer@hotmail.com"><br>

        <!--Simple multiple-choice question
        When copying, change name (once per question), id, value, for, and text (once per answer)-->
        <label class="form-question">Do you already have a group?</label><br>
        <input type="radio" name="already-has-group" id="yes" value="yes"><label for="yes" class="inline-label">Yes</label><br>
        <input type="radio" name="already-has-group" id="no" value="no"><label for="no" class="inline-label">No</label><br><br>

        <!-- Free response question-->
        <label class="form-question-label">If you already have a group, who else is in your group? Note that they also need to fill out this form.</label><br>
        <input class="form-question" type="text" name="other-group-members" placeholder="Miko Iino, Maki Shijou"><br>

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
    <iframe title="form-output" name="form-output" width="0" height="0" style="border:0;"></iframe>
</body>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>

</html>