<?
include("dbClass.php");
/**
* Main Class
*/
class Site extends db
{
	public function newslow()
	{
		$table = 'news';
		$rows  = '*';
		$where = "level = 'low'";
		$order = null;

		$query = db::Select($table, $rows, $where, $order);

		$result = mysqli_fetch_assoc($query);
		do
		{
			$view .= '<div class="thumbnail">';
			// $view .= '<img data-src="holder.js/300x200" alt="Здесь типо картинка">';
			$view .= '<div class="caption">';
			$view .= "<h3>".$result['title']."</h3>";
			$view .= "<p>".$result['content']."</p>";
			$view .= '<p><a href="#" class="btn btn-primary" role="button">Подробнее</a></p>';
			$view .= "</div></div>";
		}while ($result = mysqli_fetch_assoc($query));
		return $view;
	}
	public function newsmedium () 
	{
    	$table = 'news';
		$rows  = '*';
		$where = "level = 'medium'";
		$order = null;

		$query = db::Select($table, $rows, $where, $order);

		$result = mysqli_fetch_assoc($query);
		do
		{
			$view .= '<div class="col-md-4 col-lg-4 col-sm-4">';
			$view .= '<div class="thumbnail">';
			// $view .= '<img data-src="holder.js/300x200" alt="Здесь типо картинка">';
			$view .= '<img src="..." alt="...">';
			$view .= '<div class="caption">';
			$view .= "<h3>".$result['title']."</h3>";
			$view .= "<p>".$result['content']."</p>";
			$view .= '<p><a href="#" class="btn btn-primary" role="button">Подробнее</a></p>';
			$view .= "</div></div></div>";
		}while ($result = mysqli_fetch_assoc($query));
		return $view;
	}
	public function newstop ()
	{
		$table = 'news';
		$rows  = '*';
		$where = "level = 'top'";
		$order = null;

		$query = db::Select($table, $rows, $where, $order);

		$result = mysqli_fetch_assoc($query);
		do
		{
			$view .= '<div class="thumbnail">';
			$view .= '<img data-src="holder.js/300x200" alt="Здесь типо картинка">';
			$view .= '<div class="caption">';
			$view .= "<h3>".$result['title']."</h3>";
			$view .= "<p>".$result['content']."</p>";
			$view .= '<p><a href="#" class="btn btn-primary" role="button">Подробнее</a></p>';
			$view .= "</div></div>";
		}while ($result = mysqli_fetch_assoc($query));
		return $view;
	}

	public function namen ()
	{
		$num = 1;
		$v = $_GET['view'];
		$s = $_GET['search'];
		$i = $_GET['id'];
		$table = 'namen';
		$rows  = '*';
		if(empty($s)) $where = null;
		elseif(!empty($s)) $where = $i."='".$s."'";
		$order = null;

		$query = db::Select($table, $rows, $where, $order);
		$result = mysqli_fetch_assoc($query);
		
		do{
      		$view .= '<tr>';
        	$view .= "<td>".$num."</td>";
        	$view .= "<td><a href=\"?view=".$v."&&search=".$result['category']."&&id=category\">".$result['category']."</a></td>";
        	$view .= "<td><a href=\"?view=".$v."&&search=".$result['firm']."&&id=firm\">".$result['firm']."</a></td>";
        	$view .= "<td><a href=\"?view=".$v."&&search=".$result['name']."&&id=name\">".$result['name']."</a></td>";
        	// $view .= "<td>".$result['price']."</td>";
        	// $view .= "<td>".$result['qu']."</td>";
      		$view .= '</tr>';
      		$num++;
		}while ($result = mysqli_fetch_assoc($query));
		
		return $view;
	}

	public function url ()
	{
		$url = "http://".$_SERVER['SERVER_NAME'];
		return $url;
	}
	public function search () 
	{
		$num = 1;
		$v = $_GET['view'];
		$s = $_GET['search'];
		$table = 'namen';
		$rows  = '*';
		if(empty($s)) $where = null;
		elseif(!empty($s)) $where = " category LIKE '".$s."%' OR firm LIKE '".$s."%' OR name LIKE '".$s."%' OR category LIKE '%".$s."%' OR firm LIKE '%".$s."%' OR name LIKE '%".$s."%'";
		$order = null;

		$query = db::Select($table, $rows, $where, $order);
		$result = mysqli_fetch_assoc($query);
		do{
      		$view .= '<tr>';
        	$view .= "<td>".$num."</td>";
        	$view .= "<td><a href=\"?view=".$v."&&search=".$result['category']."\">".$result['category']."</a></td>";
        	$view .= "<td><a href=\"?view=".$v."&&search=".$result['firm']."\">".$result['firm']."</a></td>";
        	$view .= "<td><a href=\"?view=".$v."&&search=".$result['name']."\">".$result['name']."</a></td>";
        	// $view .= "<td>".$result['price']."</td>";
        	// $view .= "<td>".$result['qu']."</td>";
      		$view .= '</tr>';
      		$num++;
		}while ($result = mysqli_fetch_assoc($query));
		
		return $view;
	}
}

?>