<!DOCTYPE HTML>
<html> 
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
    <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <?php $this->header(); ?>
</head>
<body>
<div id="header">
    <div class="banner">
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <?php if ($this->options->logoUrl): ?>
            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" class="profile" />
            <?php endif; ?>
            <h1><?php $this->options->title() ?></h1>
        </a>
        <p class="description"><?php $this->options->description() ?></p>
        <div id="copyright">
            &copy; <?php echo date('Y'); ?> <a href="http://leobin.com" title="Optimized by leobin">✿</a> <?php _e('<a href="http://www.typecho.org">Typecho</a>'); ?>
        </div>
    </div>
</div>

<div id="main" role="main">