<div id="blog-posts">
	<?php foreach($docs as $doc): ?>
	<div class="blog-post">
		<div class="row">
			<?php if(!empty($doc['image'])): ?>
			<div class="col-lg-4">
				<?php echo HTML::anchor($doc['href'], HTML::image(PUBLIC_URL . $doc['image'], array('class' => 'img-responsive img-thumbnail'))); ?>
			</div>
			<?php endif; ?>
			<div class="<?php if(!empty($doc['image'])): ?>col-lg-8<?php else: ?>col-md-12<?php endif; ?>">
				<div class="post-summary">
					<div class="blog-info">
						<ul class="list-unstyled list-inline text-muted">
							<li><i class="fa fa-calendar"></i> <?php echo Date::format($doc['published_on']); ?></li>

							<?php if(!empty($doc['author']['id'])): ?>
							<li><i class="fa fa-pencil"></i> <?php echo HTML::anchor(URL::frontend('user/profile/' . $doc['author']['id']), $doc['author']['username']); ?></li>
							<?php endif; ?>
							
							<?php if(!empty($doc['category']['id'])): ?>
							<li>
								<i class="fa fa-fw fa-folder"></i> <?php echo HTML::anchor(URL::frontend('blog/category/' . $doc['category']['slug']), $doc['category']['header']); ?>
							</li>
							<?php endif; ?>
			
							<li><i class="fa fa-comment-o"></i> <?php echo HTML::anchor(URL::frontend($doc['href'] . '#disqus_thread'), __('Comments')); ?></li>
							
							<?php if(!empty($doc['rating'])): ?>
							<li><?php echo str_repeat(UI::icon('star fa-fw text-primary'), $doc['rating']); ?></li>
							<?php else: ?>
							<li><?php echo UI::icon('star-o fa-fw text-danger'); ?></li>
							<?php endif; ?>
						</ul>
					</div>
					<h3><?php echo HTML::anchor(URL::frontend($doc['href']), $doc['header']); ?></h3>
					<p><?php echo $doc['anounce']; ?></p>
					
					<?php if(!empty($doc['tags'])): ?>
					<ul class="list-unstyled list-inline blog-tags">
						<li><i class="fa fa-tags fa-fw fa-lg"></i></li>
						<?php foreach ($doc['tags'] as $tag): ?>
						<li><?php echo HTML::anchor(URL::frontend('/blog/tag/' . $tag), $tag); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>