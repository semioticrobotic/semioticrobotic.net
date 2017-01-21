<article class="author">

<div id="wrapper"
<div id="main">

<h2><?php echo($author['name']); ?></h2>
<p><?php echo($author['about']); ?></p>

<br>

<?php foreach($author['posts'] as $post): ?>
<p><a href="<?php echo($post['url']);  ?>"><?php echo($post['post_title']); ?></a></p>

</div>

<div id="footer">

<p>
<?php echo($post['post_date']); ?> 
<?php if($post['post_category']): ?>
<a href="<?php echo($post['post_category_link']); ?>"><?php echo($post['post_category']); ?></a>
              <?php endif ?>
              </p>
            <? endforeach ?>
</div>
</div>
</article>

