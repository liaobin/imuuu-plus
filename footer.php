</div>
<div id="footer" role="contentinfo">
<div id="nav">
    <ul>
        <li><a<?php if($this->is('index')): ?><?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
        <?php $this->widget('Widget_Metas_Category_List')
        ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <li>
        <a<?php if($this->is('page', $pages->slug)): ?><?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
        </li>
    </ul>
</div>
</div>
<?php $this->footer(); ?>
</body>
</html>
