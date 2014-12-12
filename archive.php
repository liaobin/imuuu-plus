<?php $this->need('header.php'); ?>
    <div id="content">
    <h2 class="archive-title"><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
    ), '', ''); ?></h2>
    <?php if ($this->have()): ?>
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
    <?php else: ?>
        <div class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </div>
    <?php endif; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>
<?php $this->need('footer.php'); ?>
