<?php foreach ($docs as $doc): ?>
	<h5 id="q<?php echo $doc['id']; ?>"><?php echo $doc['header']; ?></h5>
	<p><?php echo $doc['answer']; ?></p>
	<a href="#faq-top" class="pull-right"><i class="fa fa-arrow-circle-up"></i> <?php echo __('Top'); ?></a>
	<div class="clearfix"></div>
	<?php if($doc != end($docs)): ?><hr /><?php endif; ?>
<?php endforeach; ?>