<?php if (!defined('THINK_PATH')) exit();?>
<link type="text/css" href="/luoji/Public/css/widget/article.css" rel="stylesheet"/>

<div class="wArticle">
	<div class="wArticle-title">
		<div>
		</div>
		<a>精图排行</a>
	</div>
	<ul>
		<?php $__FOR_START_3789__=0;$__FOR_END_3789__=8;for($articleIndex=$__FOR_START_3789__;$articleIndex < $__FOR_END_3789__;$articleIndex+=1){ if($wArticleMaintitle[$articleIndex] != NULL): ?><li>
					<a class="wArticle-index"><?php echo ($articleIndex+1); ?></a>
					<a href="<?php echo ($wArticleHref[$articleIndex]); ?>" target="_blank" class="wArticle-maintitle"><nobr><?php echo ($wArticleMaintitle[$articleIndex]); ?></nobr></a>
				</li><?php endif; } ?>
	</ul>
</div>