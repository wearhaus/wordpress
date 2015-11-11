Wearhaus Wordpress Theme
===
2015 Wearhaus Blog using wordpress

Installation
---
First, download MAMP and create a database on myPHP. Follow the tutorial online on how to host wordpress locally using [MAMP](https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP)

In wp-content/themes, clone the github repo. This is where all the theme files, images, etc are located.

### Note
Plugins and plugin settings must be done by themselves, they are not part of the github repo


Wordpress Posts
---
Some notes for formatting wordpress posts to display properly.

### Posting Titles
When posting titles for a blog post, you must retype the title and date in the content portion of the wordpress backend.

Encase the title in the following tags:
```
<div class="post_title">
	(TYPE THE TITLE HERE)
</div>
<div class="date">
	(ENTER DATE HERE)
</div>
```

If you wish to have a specific category(ie. Wearhaus Featured Artist), follow th outline below:
```
<div class="post_title">
	<p id="wfa">
		Wearhaus Featured Artist:
	</p>
	(TYPE REST OF TITLE HERE)
</div>
<div class="date">
	(ENTER DATE HERE)
</div>
```

Uploading Theme to Wordpress
---
Login to bluehost.com

On the File Manager, go to themes. Delete the entire wearhaus theme folder.

Zip the locally hosted theme files.

Go to the Wordpress Dashboard of the blog.

Add a new theme, and upload the zip file. Activate the theme, and voila, it should work.

Location of Wordpress files
---

- Header
 - header.php
 - navbar.css
- Blog homepage
 - index.php
 - homepage.css
- Article pages
 - single.php
 - single.css
- Category pages
 - category.css
- How each result is displayed
 - loop.php
- Search page
 - search.php
 - search.css
- Featured Posts page used by main website
 - page.php
- Sidebar
 - sidebar.php
 - sidebar.css
 - (the sidebar on the blog is on index.php)
- Footer
 - footer.php
 -footer.css
- Responsive css
 - responsive.css
- All custom php functions
 - functions.php
