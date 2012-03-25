# Wordpress Theme: LOH Neue

A Wordpress theme for lightofhopekenya.org

See style.css

## Home Page

This theme is designed to have a static home page. Use the Home Page template when creating your home page.

The home page has two custom fields for additional content:
blog-feed-url: the url to the blog home page
mission: the text that appears under the site logo

### Home Page Slider

Each item in the image slider on the home page is populated by creating a WP page to represent that item. These slider item pages must have page names in the following format: "Home Page: Slider N" where N is a number (1,2,3, etc.). Images will be added to the slider in an order based on their respective page names.

These image pages need to have content in a particular format: 

   <a><img></a><* .caption></*>

All items with class "caption" will be included in the slider caption.

### Home Page Buckets

Like the slider images, bucket content is pulled from other pages with particular names. The home page includes content from the page "Home Page: Sponsorship Bucket 1".

Bucket pages have custom field properties:
bucket-type: the text displayed at the top of the bucket
sponsorship-link: the url to the donation page for this sponsorship bucket
sponsorship name: the name of the person in the sponsorship bucket

## Menus

### Social (LOH Social Media Menu)

The theme supports social media icons for common sites. These icons are displayed based on the url for each link. For example, if the url contains "facebook", the theme will display the Facebook logo icon. The following icons are supported:
Facebook, Twitter, YouTube, Flickr. Additional icons must be added through the stylesheet and theme functions.

### Primary Menu (LOH Primary Navigation Menu)

When on the home page, this menu will hide any menu item with the class "home". It will be visible on all other pages.

### Donation Menu (LOH Donate Button)

It is assumed that this menu will contain a single item — a single link to the donation page. It will be rendered in both the header and the footer.

### Footer Menu (LOH Footer Menu)

A link to the home page behaves the same in this menu as it does in the primary navigation menu. See documentation for that menu.
    
## Footer

This contains a WordPress dynamic sidebar called Footer Credits. It also contains a Hidden Scripts sidebar that allows you to add any JS you want at the end of each page.

## Donation Page

The sponsorship buckets on the donation page are pulled from the pages named "Home Page: Sponsorship Bucket 1" and "Home Page: Sponsorship Bucket 2". See the home page documentation for more information about these buckets.

## Blog/Blog Post Base Template

This contains a Wordpress dynamic sidebar called "Posts Sidebar"
