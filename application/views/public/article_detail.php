<?php include_once('public_header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6">
		<h1>
			<?= $article->title ?>
		</h1>
	</div>
	<div class="col-lg-6">
		<span class="pull-right">
			<?= date('d M y H:i:s', strtotime($article->created_at) ); ?>
		</span>
	</div>
</div>
	
	
	<hr>
	<p>
		<?= $article->body ?>
	</p>
	<?php if( ! is_null($article->image_path ) ): ?>
	<img src="<?= $article->image_path ?>" alt="">
	<?php endif; ?>
</div>

<?php include_once('public_footer.php'); ?>