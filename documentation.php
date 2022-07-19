<?php require_once('microProtector.php'); ?>

<!DOCTYPE html>
<html>
<head>
<?php include('titlebar.html'); ?>
<title>CSHS Documentation</title>
</head>

<body>
<div class="title_bar" style="height:auto;">
    <h1 class="title_bar_title">The big page of CSHS technical documentation</h1>
    <br>
</div>

<div style="" class="primary_div">
    <br>
    <h2>Server</h2>
    <p>The website is hosted on a <a href="https://www.linode.com/">Linode server</a> running Debian 11.
    Apache webserver is running on top of that. At one point, it had a WordPress install, but I thought
    WordPress sucks (despite what Kerem may tell you), so I stopped using it. Some remnants may be left behind because
    they're everywhere.</p><br>

    <p>The server can only be accessed using SSH.</p><br>

    <p>SSH is a way to run commands on the Linux command line build into Debian 11. To use it, generate an rsa
    public/private key pair on your system. On most linux systems, you can simply use rsa-keygen and that's it.
    Generating keys on windows seems to be
    <a href="https://www.howtogeek.com/762863/how-to-generate-ssh-keys-in-windows-10-and-windows-11/">more complicated. </a>
    Also note that school laptops seem to restrict SSH. As of year 2021-22, SSH works on school laptops, but only at home
    </p><br>

    <p>Once you've connected to SSH using ssh root@frhs.tech, you can use all standard unix/linux commands just like you
    would on your system.</p>
    <table style=width:100%;>
      <tr>
        <td><h3 style="text-align:center;">Command</h3></td>
        <td><h3 style="text-align:center;">Description</h3></td>
        <td><h3 style="text-align:center;">Example</h3></td>
      </tr>

      <tr>
        <td><code>cd</code></td>
        <td><p>Changes working directory. "cd .." goes up 1 level.<p></td>
        <td><code>cd /srv/http</code></td>
      </tr>

      <tr>
        <td><code>ls</code></td>
        <td><p>Lists items in your current directory<p></td>
        <td><code>ls</code></td>
      </tr>

      <tr>
        <td><code>rm</code></td>
        <td><p>Deletes items<p></td>
        <td><code>rm hackathon2012.php</code></td>
      </tr>

      <tr>
        <td><code>cp</code></td>
        <td><p>Copies a file (or folder with cp -r)<p></td>
        <td><code>cp hackathon.php hackathon-backup.php</code></td>
      </tr>

      <tr>
        <td><code>mv</code></td>
        <td><p>Moves or renames a file<p></td>
        <td><code>mv hackathon.php hackathon-2022.php</code></td>
      </tr>

      <tr>
        <td><code>nano</code></td>
        <td><p>A simple text editor<p></td>
        <td><code>nano index.php</code></td>
      </tr>

      <tr>
        <td><code>rsync</code></td>
        <td><p>A tool to transfer files over SSH (run this on your system, not over SSH)<p></td>
        <td><code>rsync bacon-event.php root@frhs.tech:/srv/http</code></td>
      </tr>
    </table><br>

    <h2>Website contents</h2>
    <p>This website was made entirely using the base web technologies of HTML/CSS/Javascript and PHP for some basic
    server-side content. No frameworks were used. Every CSHS board member should have some experience with this, so
    there is no need for additional tools that remove basic web functionality for "user-friendliness".</p><br>

    <p>The website's contents are all located at the directory /srv/http of the server. This includes all
    publicly-accessible files (images, css, pages, scripts, etc.). For example, if there was a file
    /srv/http/hackathon-pic.png, it could be accessed at frhs.tech/hackathon-pic.png.</p><br>

    <p>The website shares code for a common title bar in the file titlebar.html. This allows for easy modifications
    to the title bar that effect the entire website. It also adds the CSS and dark mode JS used by every page on the
    website. To add it to a page, add this line to the &lthead&gt tag</p>
    <code>&lt?php include('titlebar.html'); ?&gt</code><br>

    <p>To make a password-protected page, the microProtector script can be used in a very similar fashion</p>
    <code>&lt?php require_once('microProtector.php'); ?&gt</code><br>

    <p>CSS formatting is primarily divided into 3 files - styles.css, light.css, and dark.css. styles.css rules are
    always used, regardless of dark mode choice, while light.css and dark.css are only used if their mode is selected.
    Within styles.css, there is a section for mobile and pc formatting. Rules added within these only apply to their
    respective platforms.</p><br>

    <h2>Setting up a development environment</h2>

    <div class="columns-block">
        <div style="min-height:20vw; margin:0px; " class="column-half-width">
            <p>While you are able to write html code in a simple text editor, then open it in a browser from your computer,
            it is highly recommended that you install a web server to test your pages on. This allows you to work with styles,
            shared files (PHP includes), and JS files. On Linux, you can just install apache from your package manager, then
            set up PHP using <a href="https://wiki.archlinux.org/title/Apache_HTTP_Server#PHP">this guide</a>. I don't use
            windows, so you'll need to find some guide for that. Please test things here before sending them to
            production with rsync.</p><br>

            <p>Note that the .php file extension is read just like .html, but it can be parsed for things like the titlebar
            include</p>
        </div>
        <div style="margin:0px; " class="column-half-width">
            <img src="/images/html-ide.png" alt="Pycharm viewing HTML code." title="Pycharm does a pretty good job" style="width:100%; height:100%;object-fit: contain;">
        </div>
    </div>

    <h2>Forms</h2>
    <p>I have developed a system where forms all use 1 php file. This allows forms to be made by copy/pasting other forms and
    changing a few values. The trade-off of this system is that they all output to the same file. If you were so
    inclined, you could duplicate the script and change the output file without too much work. However, after seeing
    what other honor societies have done to their file organization over time, I think it may be best to keep things as
    simple as possible. You can view the copy/paste-able code on any existing form. Please remember to copy the comments.</p><br>

    <p>You can view the output of all forms in CSV format in the file signup-list.csv</p>
    <br>

    <h2>Domain</h2>
    <p>The website domain was purchased through .tech. This was done for several reasons:</p>
    <ul>
        <li>.tech was running a promotion that allowed 3 years for $30.</li>
        <li>The .tech namespace was almost empty, which allowed for a very short URL. frhs.tech looks a lot better on posters than fossilridgecshonorsociety.com.</li>
        <li>As a CS group, the .tech fits our group more than any other domain extension. frhs.me or frhs.co would look like very obvious cheap-outs</li>
    </ul>
    <br><br>
</div>
</body>

<?php include('footer.php'); ?>

</html>
