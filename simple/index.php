<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        
<title><?php echo($blog_title); ?> | <?php echo($page_title); ?></title>
        
<?php echo($page_meta); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
        
<link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        
<?php get_header(); ?>

</head>

<body>

<?php if($is_home) { ?>

<article>

<div id="wrapper">
<div id="main">

<h1><?php echo($blog_title); ?></h1>

</div>
</div>

</article>

<?php } ?>

<?php echo($content); ?>

<?php if($is_home) { ?>

<div id="wrapper">
<div id="footer">

<p>© <a href="http://www.semioticrobotic.net">Bryan Behrenshausen</a> (<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode">CC-BY-NC-SA</a>)</p>

</div>
</div>

<?php } ?>

<?php get_footer(); ?>

</body>
</html>
