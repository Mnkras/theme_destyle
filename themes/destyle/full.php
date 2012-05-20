<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
			
	<div id="content-wrap"> 
		<div id="content" class="nobg"> 
			<div class="box-full clearfix"> 
				<?php 
				$a = new Area('Main');
				$a->display($c);
				?>
			</div>
			<div class="clear"></div> 
		</div>
	</div> 

<?php  $this->inc('elements/footer.php'); ?>