<?php
/**
 * 这是一套扒自emlog的UU妹的模版
 * 
 * @package 天空蓝
 * @author 驰子（原作者：UU）
 * @version 1.0
 * @Optimized by leobin
 * @link http://leobin.com
 */
 
 $this->need('header.php');
 ?>

<div id="content">
<?php while($this->next()): ?>
    <div class="post">
        <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<div class="post-content"><?php $this->content('- 阅读剩余部分 -'); ?></div>
		<ul class="post-meta">
			<?php $this->date('F j, Y'); ?><small>|</small>
			<?php $this->category(','); ?><small>|</small>
			<a href="<?php $this->permalink() ?>">永久链接</a><small>|</small>
		</ul>
    </div>
<?php endwhile; ?>

<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php $this->need('footer.php'); ?>
