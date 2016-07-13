<?php if (!defined('THINK_PATH')) exit();?>
<link type="text/css" href="/luoji/Public/css/widget/special.css" rel="stylesheet"/>

<div class="wSpecial">
	<div class="wSpecial-title">
		<div>
		</div>
		<a>专辑精选</a>
	</div>
	<ul>
		<?php $__FOR_START_16358__=0;$__FOR_END_16358__=3;for($specialIndex=$__FOR_START_16358__;$specialIndex < $__FOR_END_16358__;$specialIndex+=1){ if($specialImage[$specialIndex] != NULL): ?><li>
					<img class="wSpecial-coverimage" src="<?php echo ($specialImage[$specialIndex]); ?>"/>
					<a href="<?php echo ($specialHrefs[$specialIndex]); ?>" target="_blank" class="wSpecial-maintitle"><?php echo ($specialMaintitle[$specialIndex]); ?></a>
					<a href="<?php echo ($specialHrefs[$specialIndex]); ?>" target="_blank" class="wSpecial-subhead"><?php echo ($specialSubhead[$specialIndex]); ?></a>
				</li><?php endif; } ?>
	</ul>
</div>