<?
/**
* Assets
*/
class SiteAssets
{
	
	function __construct()
	{
		
	}

	public function tmp ()
	{
		$dir = "assets/templates/";
		$bootstrap = $dir."bootstrap/css";
   		$catalog = opendir($bootstrap);

   		while ($filename = readdir($catalog )) // перебираем наш каталог 
   		{  
      		$filename = $dir."/".$filename;  
      		$inc .= '<>'.$filename; // один раз подрубаем, чтоб не повторяться 
   		}

   		closedir($catalog);
		
		return $view;
	}
}
?>