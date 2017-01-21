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

<h2><?php echo($intro_title); ?></h2>
        
<p><?php echo($intro_text); ?></p>

</div>
</div>

</article>

<?php } ?>

<?php echo($content); ?>

<?php get_footer(); ?>

</body>
</html>
