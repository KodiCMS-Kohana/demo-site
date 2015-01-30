<div class="blog-post">
	<div class="blog-info">
		<ul class="list-unstyled list-inline text-muted well">
			<li><i class="fa fa-fw fa-calendar"></i> <?php echo Date::format($doc['published_on']); ?></li>

			<?php if(!empty($doc['author']['id'])): ?>
			<li>
				<i class="fa fa-fw fa-user"></i> <?php echo HTML::anchor(URL::frontend('user/profile/' . $doc['author']['id']), $doc['author']['username']); ?>
			</li>
			<?php endif; ?>
			
			<?php if(!empty($doc['category']['id'])): ?>
			<li>
				<i class="fa fa-fw fa-folder"></i> <?php echo HTML::anchor(URL::frontend('blog/category/' . $doc['category']['slug']), $doc['category']['header']); ?>
			</li>
			<?php endif; ?>
		</ul>
	</div>

	<?php echo HTML::image(PUBLIC_URL . $doc['image'], array('class' => 'img-responsive img-thumbnail')); ?>
	<?php echo $doc['text']; ?>
</div>

<div class="socials">
	<a href="#" class="rounded-icon social fa fa-facebook"><!-- facebook --></a>
	<a href="#" class="rounded-icon social fa fa-twitter"><!-- twitter --></a>
	<a href="#" class="rounded-icon social fa fa-google-plus"><!-- google plus --></a>
	<a href="#" class="rounded-icon social fa fa-pinterest"><!-- pinterest --></a>
	<a href="#" class="rounded-icon social fa fa-linkedin"><!-- linkedin --></a>
</div>
<br />

<?php if(!empty($doc['source_url'])): ?>
<div class="well">
	<div class="headline headline-sm">
		<h5><?php echo __('Source'); ?></h5>
	</div>
	<?php echo HTML::anchor($doc['source_url'], NULL, array('target' => 'blank')); ?>
</div>
<?php endif; ?>

<?php if(!empty($doc['tags'])): ?>
<div class="well">
	<div class="headline headline-sm">
		<h5><?php echo __('Tags'); ?></h5>
	</div>
	<ul class="list-unstyled list-inline blog-tags">
		<?php foreach ($doc['tags'] as $tag): ?>
		<li><?php echo HTML::anchor(URL::frontend('/blog/tag/' . $tag), $tag); ?></li>
		<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>

<?php if(isset($doc['rating'])): ?>
<div class="well">
	<div class="headline headline-sm">
		<h5><?php echo __('Rating'); ?></h5>
	</div>

	<div class="control-group">
		<div class="controls">
			<div class="rating-star" data-score="<?php echo (int) $doc['rating']['rating']; ?>"></div>
			<small><?php echo __('Total votes:'); ?> <span class="votes_count"><?php echo $doc['rating']['votes']; ?></span></small>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if(!empty($doc['related_entries'])): ?>
<div class="well">
	<div class="headline headline-border">
		<h4><?php echo __('Related entries'); ?></h4>
	</div>
	<?php Snippet::render('blogs', array('docs' => $doc['related_entries'])); ?>
</div>
<?php endif; ?>

<script type="text/javascript">
$(function() {
	$('div.rating-star').raty({ 
		number: 5,
		click: function(score, evt) {
			var self = this;
			$.post('/handler/39', {doc_id: <?php echo $doc['id']; ?>, rating: score}, function(resp) {

				if(!resp.status) {
					var score = $(self).data('score');
					$(self).raty('score', $(self).data('score')); 
				} else {
					var score = score;
				}

				if(resp.code == 200) {
					$('.votes_count').text(parseInt($('.votes_count').text()) + 1);
				}
				
				if(resp.code != 201) {
					$(self).raty('readOnly', true);
				}
					
				
				$(self).raty('score', score);
			}, 'json');
		},
		score: function() {
			if($(this).data('score')) {
				return parseInt($(this).data('score'));
			}
		}
	});
})
</script>