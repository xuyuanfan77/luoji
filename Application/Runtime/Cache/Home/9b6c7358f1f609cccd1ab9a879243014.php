<?php if (!defined('THINK_PATH')) exit();?>
<link type="text/css" href="/luoji/Public/css/widget/experts.css" rel="stylesheet"/>

<div class="experts">
	<div class="experts-title">
		<div>
		</div>
		<a>专家名榜</a>
	</div>
	<ul>
		<?php $__FOR_START_244__=0;$__FOR_END_244__=5;for($expertsIndex=$__FOR_START_244__;$expertsIndex < $__FOR_END_244__;$expertsIndex+=1){ if($expertImage[$expertsIndex] != NULL): ?><li>
					<img src="<?php echo ($expertImage[$expertsIndex]); ?>"/>
					<a href="<?php echo ($expertHref[$expertsIndex]); ?>" target="_blank" class="experts-name"><?php echo ($expertNickname[$expertsIndex]); ?></a>
					<a class="experts-jobs"><?php echo ($expertJobs[$expertsIndex]); ?></a>
					<a class="experts-company"><?php echo ($expertCompany[$expertsIndex]); ?></a>
				</li><?php endif; } ?>
	</ul>
</div>