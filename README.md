# wordpress

2015 Wearhaus Blog using wordpress

POSTING TITLES:
When posting titles for a blog post, you must retype the title and date in the content portion of the wordpress backend.
Encase the title in the following tags:

<div class="post_title">
	(TYPE THE TITLE HERE)
</div>
<div class="date">
	(ENTER DATE HERE)
</div>

If you wish to have a specific category(ie. Wearhaus Featured Artist), follow th outline below:

<div class="post_title">
	<p id="wfa">
		Wearhaus Featured Artist:
	</p>
	(TYPE REST OF TITLE HERE)
</div>
<div class="date">
	(ENTER DATE HERE)
</div>


THE WORDPRESS STUFF

Hosting locally:
	First, download MAMP and create a database on myPHP. There is a tutorial online on how to download wordpress locally via MAMP:https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP
	In wp-content/themes, clone the github repo. This is where all the theme files, images, etc are located.
	IMPORTANT: plugins and plugin settings must be done by themselves, they are not part of the github repo

Where stuff is:

Header: header.php, navbar.css
Blog homepage: index.php, homepage.css
Article pages: single.php, single.css
Category pages: category.css
	How each result is displayed:loop.php
Search page: search.php, search.css
Featured Posts page used by main website: page.php
Sidebar: sidebar.php, sidebar.css
	(the sidebar on the blog is on index.php)
Footer: footer.php, footer.css

Responsive css: responsive.css

All custom php functions: functions.php


BEST WAY TO UPLOAD LOCAL STUFF TO BLUEHOST:
	Go to bluehost file manager, and go to themes. Delete the entire wearhaus theme folder.
	Zip the locally hosted file.Go to the Wordpress Dashboard of the blog.  Add a new theme, and upload the zip file. Activate the theme, and voila, it should work.

