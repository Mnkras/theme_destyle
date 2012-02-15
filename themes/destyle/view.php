<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	<div id="content-wrap">
		
		<div id="content">
<div id="content-left">		
			<?php 
			print $innerContent;
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