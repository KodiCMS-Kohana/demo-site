<div id="blog-posts">
	<?php if(!empty($docs)): ?>
	<?php foreach ($docs as $doc): ?>
	<div class="blog-post">
		<div class="row">
			<?php if(!empty($doc['image'])): ?>
			<div class="col-lg-4">
				<?php echo HTML::anchor(URL::frontend($doc['href']), HTML::image(PUBLIC_URL . $doc['image'], array(
					'class' => 'img-responsive img-thumbnail'
				))); ?>
			</div>
			<?php endif; ?>
			<div class="<?php if(!empty($doc['image'])): ?>col-lg-8<?php else: ?>col-lg-12<?php endif; ?>">
				<div class="post-summary">
					<div class="blog-info">
						<ul class="list-unstyled list-inline text-muted">
							<li><?php echo UI::icon('calendar'); ?> <?php echo Date::format($doc['created_on']); ?></li>
						</ul>
					</div>
					<h3>
						<?php echo HTML::anchor(URL::frontend($doc['href']), $doc['header']); ?>
					</h3>
					<div class="post-intro"><?php echo $doc['intro']; ?></div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
	<?php else: ?>
	<h1>Blog posts not found</h1>
	<?php endif; ?>
</div>