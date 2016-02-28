<?
include ("SiteAssets.php");
/**
* db Class
*/
class db extends SiteAssets
{
	// function __construct()
	// {
		
	// }

	static private function Connect ()
	{
		/* Подключение к серверу MySQL */ 
		$link = mysqli_connect( 
            "localhost",  /* Хост, к которому мы подключаемся */ 
            "root",       /* Имя пользователя */ 
            "",   /* Используемый пароль */ 
            "tmp");     /* База данных для запросов по умолчанию */ 

		if (!$link) { 
   			printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
   			exit; 
		} else {
			return $link;
		}
	}

	//Выбор
	static public function Select ($table, $rows = '*', $where = null, $order = null)
	{
		//Составление sql запроса
		$sql = 'SELECT '.$rows.' FROM '.$table;
		if($where != null) $sql .= ' WHERE '.$where;
        if($order != null) $sql .= ' ORDER BY '.$order;
        // if($limit != null) $sql .= ' LIMIT '.$limit;
		$link = self::Connect();
		/* Посылаем запрос серверу */ 
		if ($result = mysqli_query($link, $sql)) { 
    		/* Выборка результатов запроса */ 
    		return $result;
    		/* Освобождаем используемую память */ 
    		mysqli_free_result($result); 
		} 

		/* Закрываем соединение */ 
		mysqli_close($link); 
	}

	//Добавление
	static public function Insert ($table, $values, $rows = null)
	{
		$sql = 'INSERT INTO '.$table;
        if($rows != null) $sql .= ' ('.$rows.')';
        for($i = 0; $i < count($values); $i++)
        {
        	if(is_string($values[$i])) $values[$i] = '"'.$values[$i].'"';
        }
            $values = implode(',',$values);
            $sql .= ' VALUES ('.$values.')';
            
        $link = self::Connect();
		/* Посылаем запрос серверу */ 
		if ($result = mysqli_query($link, $sql)) { 
    		/* Выборка результатов запроса */ 
    		return $result;
    		/* Освобождаем используемую память */ 
    		mysqli_free_result($result); 
		} 

		/* Закрываем соединение */ 
		mysqli_close($link); 
	}

	//Удаление
	static public function Delete ($table, $where = null)
	{
		$link = self::dbConnect();

		if($where == null)  $sql = 'DELETE '.$table;
        else $sql = 'DELETE FROM '.$table.' WHERE '.$where;
		/* Посылаем запрос серверу */ 
		if ($result = mysqli_query($link, $sql)) { 
    		/* Выборка результатов запроса */ 
    		return $result;
    		/* Освобождаем используемую память */ 
    		mysqli_free_result($result); 
		} 
		/* Закрываем соединение */ 
		mysqli_close($link); 
	}

	//Обновление
	static public function update ($table, $rows, $where, $condition)
    {
    	$link = self::dbConnect();

        for($i = 0; $i < count($where); $i++)
        {
            if($i%2 != 0)
            {
                if(is_string($where[$i]))
                {
                    if(($i+1) != null)
                        $where[$i] = '"'.$where[$i].'" AND ';
                    else
                        $where[$i] = '"'.$where[$i].'"';
                }
            }
        }
        $where = implode($condition,$where);
        $sql = 'UPDATE '.$table.' SET ';
        $keys = array_keys($rows);
        for($i = 0; $i < count($rows); $i++)
        {
            if(is_string($rows[$keys[$i]]))
            {
                $sql .= $keys[$i].'="'.$rows[$keys[$i]].'"';
            }
            else
            {
                $sql .= $keys[$i].'='.$rows[$keys[$i]];
            }
            // Parse to add commas
            if($i != count($rows)-1)
            {
                $sql .= ',';
            }
        }
        $sql .= ' WHERE '.$where;
        echo $sql;
        /* Посылаем запрос серверу */ 
		if ($result = mysqli_query($link, $sql)) { 
    		/* Выборка результатов запроса */ 
    		return $result;
    		/* Освобождаем используемую память */ 
    		mysqli_free_result($result); 
		} 
		/* Закрываем соединение */ 
		mysqli_close($link); 
    }
}

?>