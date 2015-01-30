<div class="row">
	<div class="col-md-6 animated fadeInDown">
		<div class="error404">
			<span>404</span>
		</div>
	</div>
	<div class="col-md-6 animated fadeInDown">
		<div class="details404">
			<h3><?php echo Request::current()->query('message'); ?></h3>
			
			<p><?php echo __('Please try to search to look for more information on this site.'); ?></p>

			<a href="/" class="btn btn-default btn-lg"><i class="icon-long-arrow-left"></i> <?php echo __('Back to Home'); ?></a>
		</div>
	</div>
</div>