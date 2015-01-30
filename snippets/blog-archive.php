<div class="well">
	<div class="headline headline-md headline-border">
		<h4><?php echo $header; ?></h4>
		<?php if(URL::match('archive/')): ?>
		<?php echo HTML::anchor(URL::frontend('blog'), UI::icon('times'), array('class' => 'pull-right')); ?>
		<?php endif; ?>
	</div>
    <ul class="nav nav-pills nav-stacked">		
        <?php foreach ($archive as $data): ?>
        <li role="presentation" <?php if(URL::match($data['date'])): ?>class="active"<?php endif; ?>>
            <a href="<?php echo URL::frontend('/blog/archive/' . $data['date']); ?>"><?php echo Date::format(strtotime(strtr($data['date'], '/', '-')), 'F Y'); ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
