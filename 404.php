<?php $this->need('header.php'); ?>

        <div class="error-page">
            <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
            <p><?php _e('你想查看的页面已被转移或删除了，要不要搜索看看：'); ?></p>
            <form method="post">
                <p><input type="text" name="s" class="text" autofocus /><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
            </form>
            <script type="text/javascript" src="http://www.qq.com/404/search_children.js" charset="utf-8"></script>
        </div>

	<?php $this->need('footer.php'); ?>