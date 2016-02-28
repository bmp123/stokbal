<?
include("SiteClass.php");
/**
* View Class
*/
class View extends Site
{
	
	function __construct($v = " ")
	{	
		if (empty($v)) 
		{
			$view .= include_once("assets/templates/header.tpl");
			$view .= include_once("assets/templates/head.tpl");
			$view .= include_once("assets/templates/body_main.tpl");
			$view .= include_once("assets/templates/footer.tpl");
			// $view .= new SiteAssets();
		} 
		if (!empty($v))
		{
			$view .= include_once("assets/templates/header.tpl");
			$view .= include_once("assets/templates/head.tpl");
			$view .= include_once("assets/templates/body_".$v.".tpl");
			$view .= include_once("assets/templates/footer.tpl");
		}
			return $view;
	}

	public function viewNewsmedium() 
	{
		$view = Site::newsmedium();
		return $view;
	}
	public function viewNewstop() 
	{
		$view = Site::newstop();
		return $view;
	}
	public function viewNewslow() 
	{
		$view = Site::newslow();
		return $view;
	}
	public function viewNamen ()
	{
		$view = Site::namen();
		return $view;
	}
	public function viewSearch ()
	{
		$view = Site::search();
		return $view;
	}
}

?>