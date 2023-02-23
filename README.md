# cshs-website
These files are automatically synced to [frhs.tech](https://frhs.tech) every minute. This repo will allow for easier collaboration than sending files over google drive or discord.
Currently, this is just getting started, so expect some minor breakage.

## Making a development version
In order to run this, you will need a web server (I recommend [Apache](https://httpd.apache.org/) with PHP and RewriteEngine (or similar)

### PHP
PHP is a server-side rendering system that is very easy to integrate into normal HTML and is often completely invisible to browsers. Here, it is primarily used to reduce code duplication. Instead of copy/pasting code, you can simply put the shared code into 1 file, then insert it using e.g. `<?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>`. Outside of where PHP is being used, `.php` files are read the exact same as `.html`files.

In order to use it, you need to install PHP for your webserver. Many distros ship PHP with apache, so it may be as simple as turning it on in a config file.

### Rewrite engine
The RewriteEngine is a module used in Apache web server to modify the URL of a website. It is used by developers to create user-friendly URLs that are easy to remember and understand. RewriteEngine is used to convert complex URLs into simple, easy-to-read URLs that are more user-friendly.

For example, an ugly URL like "https://frhs.tech/cshs.php" can be rewritten as "https://frhs.tech/cshs". This makes it easier for users to remember and share URLs.

Installation varies widely by distro, but it is generally found in one of the apache config files as a module that you can enable by uncommenting it.
