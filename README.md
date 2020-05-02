WordPress Theme which will be used for website https://neuroskoki.pl

# Features
- Related articles by tag
- Recommended articles on the top of homepage (See how to use it below)
- Made in Polish and includes translation to English
- Compatible with Polylang plugin
- Build with Material Design for Bootstrap (more info below) with minor changes 
- One widget area in right sidebar
- Page.php template without sidebar and comments
- Custom thumbnail sizes
- Custom pagination
- SEO friendly
- Disabled friendly (100 points in Google Lighthouse audit)

## Recommended articles on the top of homepage
At homepage there is a place for recommended articles. You can set posts to display in this section by adding it to category "polecane" (in English "recommended"). You can change the name of category to display posts in this area in ```index.php```. 

The name of category "polecane" or "recommended" is not displayed in breadcrumbs and post meta, but note, that to make it work, you have to place the category id (in all languages, it's two in my files) in ```breadcrumb.php``` and in ```functions.php``` (function ```neuro_categories```). 

The place is made for 4 articles. They display in 4 columns on desktop and in 2 columns on mobile. If you want to display different amount of posts, you have to manipulate properly Bootstrap ```col``` classes in ```index.php``` to make it look good on all devices.

____

Material Design for Bootstrap - Version: MDB FREE 4.15.0

Documentation:
https://mdbootstrap.com/

Getting started:
https://mdbootstrap.com/docs/jquery/getting-started/download/

Tutorials:
MDB-Bootstrap: https://mdbootstrap.com/education/bootstrap/
MDB-Wordpress: https://mdbootstrap.com/education/wordpress/

Templates:
https://mdbootstrap.com/templates/

License:
https://mdbootstrap.com/general/license/

Support:
https://mdbootstrap.com/forums/forum/support/

Contact:
office@mdbootstrap.com

