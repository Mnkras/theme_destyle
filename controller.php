<?php    

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeDestylePackage extends Package {

	protected $pkgHandle = 'theme_destyle';
	protected $appVersionRequired = '5.3.3';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Installs the Destyle theme.");
	}
	
	public function getPackageName() {
		return t("Destyle");
	}
	
	public function install() {
		$pkg = parent::install();
		
		PageTheme::add('destyle', $pkg);
		
				
	}
	
}