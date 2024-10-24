# cshs-website
These files are automatically synced to [frhs.tech](https://frhs.tech) every minute. This repo will allow for easier collaboration than sending files over google drive or discord.
Currently, this is just getting started, so expect some minor breakage.

## Making a development version

Note: The instructions below are EXTREMELY complicated and there are much easier ways to work on a PHP webpage on your own machine. I (Elijah) will work on re-writing these instructions soon

Note 2: In order to work on the website, you do need your own personal computer

Note 3: All instructions are intended for windows users. Linux users probably are 5 steps ahead of me and I have not tested any of these instructions on a Mac. 

In order to run this, you will need a web server (I recommend [Apache](https://httpd.apache.org/) with PHP and RewriteEngine (or similar)

### PHP
PHP is a server-side rendering system that is very easy to integrate into normal HTML and is often completely invisible to browsers. Here, it is primarily used to reduce code duplication. Instead of copy/pasting code, you can simply put the shared code into 1 file, then insert it using e.g. `<?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>`. Outside of where PHP is being used, `.php` files are read the exact same as `.html`files.

In order to use it, you need to install PHP for your webserver. Many distros ship PHP with apache, so it may be as simple as turning it on in a config file.

### Rewrite engine
The RewriteEngine is a module used in Apache web server to modify the URL of a website. It is used by developers to create user-friendly URLs that are easy to remember and understand. RewriteEngine is used to convert complex URLs into simple, easy-to-read URLs that are more user-friendly.

For example, an ugly URL like "https://frhs.tech/cshs.php" can be rewritten as "https://frhs.tech/cshs". This makes it easier for users to remember and share URLs.

Installation varies widely by distro, but it is generally found in one of the apache config files as a module that you can enable by uncommenting it.

## Style guide

### Images

Images should generally be in AVIF format with a backup PNG or JPEG for browsers that don't support AVIF. AVIF drastically reduces page load times (often by 2-4x). Here's an example of how this would look:

```html
<img src="img/cybercats.avif" onerror="this.src='img/cybercats.png'" alt="CyberCats Logo"  />
```

### Don't copy/paste the titlebar

Please use PHP to include the titlebar in each page. This makes it so that the titlebar can be changed in one file and the entire site will update.

#### Basic page outline

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="pt-[60px] flex flex-col justify-between min-h-screen">
    <div class="text-center mt-12">
        Content
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>
```

## Contributing

The preferred way to contribute a page or edit is through a github pull request. To do this, make your own fork and branch, add any changes, then click the button to send a pull request. See [this video](https://youtu.be/8lGpZkjnkt4) for a brief tutorial. If this doesn't work for you, or is too complicated, you may also email it to [cshs@frhs.tech](mailto:cshs@frhs.tech).

## Programming pages

We are currently trying to build a database of Fossil programming knowledge. If you would like to contribute, you can get hours equal to the amount of time you spend on pages, up to 4 hours for each page submitted. They can be on any programming topic of any level:
* Variables
* Functions
* Inheritance vs composition
* Garbage collection
* Static vs Dynamic typed languages
* Literally anything else
