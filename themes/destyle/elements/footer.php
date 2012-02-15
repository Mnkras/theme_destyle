<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
	<div id="content-bottom"></div>
	
	<div id="footer">
		<a href="http://www.concrete5.org" title="<?php echo t('concrete5 - open source content management system for PHP and MySQL')?>"><?php echo t('concrete5 - open source CMS')?></a>
			&copy; <?php echo date('Y')?> <a href="<?php echo DIR_REL?>/"><?php echo SITE?></a>.
			&nbsp;&nbsp;
			<?php echo t('All rights reserved.')?>
			<?php 
			$u = new User();
			if ($u->isRegistered()) { ?>
				<?php  
				if (Config::get("ENABLE_USER_PROFILES")) {
					$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
				} else {
					$userName = $u->getUserName();
				}
				?>
				<?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a>
			<?php  } else { ?>
				<a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In to Edit this Site')?></a>
			<?php  } ?>-
		Theme by <a href="http://themeshift.com" title="ThemeShift.com">ThemeShift.com</a> Converted by <a href="http://mnkras.com" title="mnkras.com">Mnkras</a>
	</div>
	
</div>

<script type='text/javascript' src='<?php echo $this->getThemePath()?>/superfish/superfish.js?ver=1.4.8'></script>
<script type='text/javascript' src='<?php echo $this->getThemePath()?>/superfish/supersubs.js?ver=1.4.8'></script>
</div>
<?php  Loader::element('footer_required'); ?>
</body>
</html>