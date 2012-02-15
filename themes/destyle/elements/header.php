<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" >
<head profile="http://gmpg.org/xfn/11">
<?php  Loader::element('header_required'); ?>
<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/style.css" type="text/css" media="screen" />
<link rel='stylesheet' id='superfish-css'  href='<?php echo $this->getThemePath()?>/superfish/superfish.css?ver=1.4.8' type='text/css' media='all' />
</head>

<body class="noise grey">
<div id="wrapper">
<div id="main">
	<div id="header-top-wrap"> 
 		<div class="ts-menu-top">
		<div id="header-top">		
		    <div id="social"> 	    	
		    	<a href="#" id="social-twitter">Follow me</a> 
		    	<a href="#" id="social-rss">Subscribe RSS</a> 
		    </div> 
		</div> 
	</div>
	</div> 
	<div id="header" class="clearfix">
		
		<div id="logo" class="clearfix">		
			<h1><a href="<?php echo DIR_REL?>/"><?php 
				$block = Block::getByName('My_Site_Name');  
				if( $block && $block->bID ) $block->display();   
				else echo SITE;
			?></a></h1>
		</div>
	
	</div>
	
	<div id="menu-wrap">
	
		<div class="ts-menu-main">
			<?php 
				$bt = BlockType::getByHandle('autonav');
				$bt->controller->displayPages = 'top';
				$bt->controller->orderBy = 'display_asc';                    
				$bt->controller->displaySubPages = 'all'; 
				$bt->controller->displaySubPageLevels = 'custom';
				$bt->controller->displaySubPageLevelsNum = '3';   
				$bt->render('templates/header_menu_dropdown');
			?>
		</div>	
	</div>
	
	<div id="content-top"></div>