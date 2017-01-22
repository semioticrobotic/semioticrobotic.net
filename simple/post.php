<article class="single <?php echo($post_status); ?>">

<div id="wrapper">
<div id="main">

<h1><?php echo($post_title); ?></h1>
<?php echo($post_content); ?>

</div>

<div id="footer">

<p><a href="<?php echo($post_link); ?>">Permalink</a></p>

<p>

Published <?php echo($published_date); ?> in <?php foreach($post_categories_links as $key => $post_category_link): ?><a href="<?php echo($post_category_link); ?>"><?php
echo($post_categories[$key]); ?></a> <?php endforeach; ?>

<br>

© Bryan Behrenshausen (<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode">CC-BY-NC-SA</a>)

</p>

</div>

<div id="menu">

<ul>

<li><a href="<?php echo($blog_url); ?>">Back</a></li>

</ul>

</div>

</div>
</article>
