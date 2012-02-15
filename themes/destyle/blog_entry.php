<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	<div id="content-wrap">
		
		<div id="content">
<div id="content-left">		
			<?php 
			$a = new Area('Blog Post Header');
			$a->display($c);
			?>
			<h1><?php  echo $c->getCollectionName(); ?></h1>
			<p class="meta"><?php  echo t('Posted by')?> <?php  echo $c->getVersionObject()->getVersionAuthorUserName(); ?> on <?php  echo $c->getCollectionDatePublic('F j, Y'); ?></p>	
			<?php 
			$a = new Area('Main');
			$a->display($c);

			$a = new Area('Blog Post More');
			$a->display($c);

			$a = new Area('Blog Post Footer');
			$a->display($c);
			?>
</div>

<div id="content-right">
	 		<?php 
	 		if ($c->isEditMode()) { ?>
			<div class="box-right">
	 		<?php  } 
	 		
			$am = new Area('Sidebar');
			$am->setBlockWrapperStart('<div class="box-right">');
			$am->setBlockWrapperEnd('</div>');
			$am->display($c);
			
	   		if ($c->isEditMode()) { ?>
			</div>
	 		<?php  } ?>		
</div>
		<div class="clear"></div>
	
		</div>
	
	</div>
	
<?php  $this->inc('elements/footer.php'); ?>