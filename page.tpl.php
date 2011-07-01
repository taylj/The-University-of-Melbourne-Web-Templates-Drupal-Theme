<?php
// $Id: d7unimelb2011.info,v 1.0 2011/06/22 00:00:00 media insights Exp $

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system folder.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * regions[homepage1]   = Homepage1
 * regions[homepage2]   = Homepage2
 * regions[dropdown]    = Dropdown
 * regions[help]        = Help
 * regions[content]     = Content
 * regions[navigation]  = Navigation
 * regions[aside]  		= Aside
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 */

?><!DOCTYPE HTML>
<html lang="en">
<head>

<!-- start Drupal head -->

<?php print $head; ?>

<title><?php print $head_title; ?></title>

<?php print $styles; ?>

<?php print $scripts; ?>

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- end Drupal head -->

<!-- start Unimelb head -->

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Content Template - WBG Templates</title>  
  <!-- SEO relevant meta data to describe content of page -->
      <meta name="DC.Title" content="">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="DC.Description" content="">
    <!-- End SEO relevant meta data -->
    <!-- Authoriser and maintainer related meta data - developers, don't forget humans.txt   -->
      <meta name="DC.Creator" content="The University of Melbourne">
      <meta name="DC.Contributor" content="">
      <meta name="author" content="">
      <meta name="UM.Authoriser.Name" content="">
      <meta name="UM.Authoriser.Title" content="">
      <meta name="UM.Maintainer.Name" content="">
      <meta name="UM.Maintainer.Department" content="">
      <meta name="UM.Maintainer.Email" content="">
    <!-- End authoriser and maintainer meta data -->
    <!-- Static meta data   -->
      <meta name="DC.Rights" content="http://www.unimelb.edu.au/disclaimer">
      <meta name="DC.Publisher" content="The University of Melbourne">
      <meta name="DC.Format" content="text/html">
      <meta name="DC.Language" content="en">
      <meta name="DC.Identifier" content="http://www.unimelb.edu.au/">
    <!-- End static meta data -->
    <!-- Meta data to be autofilled -->
      <meta name="DC.Date" content="">
      <meta name="DC.Date.Modified" content="">
  <!-- End meta data to be autofilled -->
    <meta content="width=device-width; initial-scale=0.67;" name="viewport">

    <!-- GLOBAL RESOURCES -->
    <!-- DO NOT CHANGE -->  
      <link rel="stylesheet" href="http://brand.unimelb.edu.au/web-templates/EDGE/css/complete.css">  
      <script src="http://brand.unimelb.edu.au/web-templates/EDGE/js/complete.js"></script>
      <script src="http://brand.unimelb.edu.au/global-header/js/injection.js"></script>
    <!-- /GLOBAL RESOURCES -->
    <link rel="stylesheet" href="/sites/all/themes/d7unimelb2011/css/custom.css" media="screen">

<!-- end Unimelb head -->

</head>

<body class="<?php if($is_front) { print 'headingblock no-logo home'; } else { print 'no-logo blue'; } ?> <?php print $classes; ?>"<?php if($attributes) { print ' ' . $attributes; } ?>>
  <?php print $page_top; ?>


<div class="wrapper">

	<div class="header">

		<div class="hgroup">
			<!-- <p><a href="http://www.unimelb.edu.au">The University of Melbourne</a></p> -->
			<h1><a href="<?php print $front_page; ?>"  title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
		</div><!-- end hgroup -->

		<?php if ($is_front && $site_slogan): ?>
		<div id="headingtext">
			<!-- need a dynamic source for headingtext title - for now this is just set to static "Who we are" -->
			<p class="title col-1">Who we are</p>
			<p class="col-5"><?php print $site_slogan; ?></p>
			<hr>
		</div><!-- end headingtext -->
		<?php endif; ?>

        <?php if(!$is_front && $page['content']) { print '<hr>'; } ?>

	</div><!-- end header -->

	<?php if ($page['dropdown']): ?>
	<div class="col-8 dropdown">
		<?php print $dropdown; ?>
	</div><!-- end dropdown -->
	<?php endif; ?>

	<?php if ($is_front && $homepage1): ?>
	<div id="newsbanner">
		<?php print $homepage1; ?>
    </div><!-- end homepage1 -->
	<?php endif; ?>

	<?php if ($is_front && $page['homepage2']): ?>
	<div id="main-content" class="main col-6" role="main">
		<?php print $page['homepage2']; ?>
    </div><!-- end homepage2 -->
	<?php endif; ?>

	<?php if(!$is_front && $content) { ?>

	<div class="main col-6" id="main-content" role="main">
		<!-- <?php print $breadcrumb; ?> -->
		<?php print $title_prefix; ?>
		<?php if ($title): ?>
			<h1 class="title" id="page-title"><?php print $title; ?></h1>
		<?php endif; ?>
		<?php print $title_suffix; ?>
		<?php print $messages; ?>
		<?php if ($tabs): ?>
			<div class="tabs"><?php print $tabs; ?></div>
		<?php endif; ?>
		<?php print $page['help']; ?>
		<?php if ($action_links): ?>
			<ul class="action-links"><?php print $action_links; ?></ul>
		<?php endif; ?>
		<?php print $content; ?>
		<?php print $feed_icons; ?>
	</div><!-- end main -->

	<?php } ?>

	<?php if($content) { ?>

	<div class="<?php if($is_front) { print 'aside '; } ?>col-2">

	<?php if (!$is_front && $page['navigation']): ?>
	<div class="nav first" role="navigation">
		<?php print $navigation; ?>
	</div><!-- end navigation -->
	<?php endif; ?>

	<?php if ($page['aside']): ?>
	<?php if(!$is_front) { print '<div class="aside" role="complementary">'; } ?>
		<?php print $page['aside']; ?>
	<?php if(!$is_front) { print '</div><!-- end aside -->'; } ?>
	<?php endif; ?>

	</div><!-- end col-2 -->

	<?php } ?>

	<hr>
	
</div><!-- end wrapper -->

<hr>

<div class="footer">
    <div id="local" class="wrapper">
      <p class="footertitle">The Graduate School of Foo</p>
      <div id="org-details" class="col-2">
        <p><strong>The Faculty of Bar</strong></p>
        <p class="location">Level 4, 198 Berkely Street <br> The University of Melbourne <br>Parkville 3010 VIC Australia</p>
      </div>

      <ul class="col-2">
        <li><strong>Phone:</strong> +61 3 8344 1670</li>
        <li><strong>Fax:</strong> +61 3 8344 1670</li>
        <li><strong>Email:</strong> <a href="#">Make an enquiry</a></li>
        <li class="social">
          <a href="#" class="icon facebook">Facebook</a>
          <a href="#" class="icon twitter">Twitter</a>
        </li>
      </ul>

      <ul class="col-2">
        <li><strong>Authoriser:</strong>
          <br>Communcations Manager</li>
        <li><strong>Maintainer:</strong><br>
          Pat Doe, Faculty of Bar</li>
      </ul>

      <hr>
    </div>
  </div><!-- end footer -->

  <?php print $page_bottom; ?>
</body>
</html>
