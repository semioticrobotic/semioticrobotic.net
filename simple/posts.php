<article class="<?php echo($post_status); ?>">

<div id ="wrapper">
<div id="main">

<h2><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

<?php if ($category) { ?>
<p><?php echo($post_intro); ?></p>                

</div>

<div id="menu">

<ul>

<li><a href="<?php echo($blog_url); ?>">Back</a></li>

</ul>

</div>

<?php } ?>

<div id="footer">

<p><?php echo($published_date); ?></p>

</div>

</div>
</article>
