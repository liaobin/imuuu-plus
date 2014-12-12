<?php $this->need('header.php'); ?>

<div id="content">
    <div class="post">
        <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <div class="post-content"><?php $this->content(); ?></div>
        <ul class="post-meta">
			<?php $this->date('F j, Y'); ?><small>|</small>
			<?php $this->category(','); ?><small>|</small>
	        <?php $this->tags(', ', true, ''); ?>
        </ul>
    </div>
</div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
