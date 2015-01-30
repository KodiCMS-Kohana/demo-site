<div class="blog-post">
	<div class="post-summary">
		<div class="blog-info">
			<ul class="list-unstyled list-inline text-muted">
				<li><?php echo UI::icon('calendar'); ?> <?php echo Date::format($doc['created_on']); ?></li>
			</ul>
		</div>


	</div>
	<div class="row">
		<?php if (!empty($doc['image'])): ?>
			<div class="col-lg-12">
				<?php
				echo HTML::anchor(URL::frontend($doc['href']), HTML::image(PUBLIC_URL . $doc['image'], array(
							'class' => 'img-responsive img-thumbnail'
				)));

				?>
			</div>
		<?php endif; ?>


		<div class="col-lg-12">
			<div class="post-text"><?php echo $doc['text']; ?></div>
		</div>
	</div>
</div>