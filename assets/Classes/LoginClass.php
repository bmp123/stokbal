<?
session_start();
include_once("dbClass.php");
/**
* Login
*/  

        if(!empty($_POST))
        {
            # Вытаскиваем из БД запись, у которой логин равняеться введенному
            $table = 'users';
            $rows  = '*';
            $where = "user_login='".$_POST['login']."' LIMIT 1";
            $order = null;
// ".mysql_real_escape_string($_POST['login'])."
            $query = db::Select($table, $rows, $where, $order);
            $data = mysqli_fetch_assoc($query);
            
            # Соавниваем пароли md5(md5($_POST['password']))
            if($data['user_login'] === $_POST['login'])
            {
                if ($data['user_password'] === $_POST['password']) 
                {
                    $_SESSION['login']= $data['user_login'];
                    $_SESSION['password']= $data['user_password'];
                    $_SESSION['id']= $data['user_id'];
                    echo check ($data);
                }
                else
                {
                    print "Пароли не совпадают";
                }  
            }
            else
            {
                print "Неверно введен логин";
            }

                # Генерируем случайное число и шифруем его
                // $hash = md5(generateCode(10));

                # Записываем в БД новый хеш авторизации и IP
                // $r= "user_hash='".$hash."'";
                // $w = "user_id='".$data['user_id']."'";
                // $q = db::Insert($table, $r, $w, $condition);

                # Ставим куки
                // setcookie("id", $data['user_id'], time()+60*60*24*30);
                // setcookie("hash", $hash, time()+60*60*24*30);

                # Переадресовываем браузер на страницу проверки нашего скрипта
            // }
            // else
            // {   
            //     print "Вы ввели неправильный логин/пароль";
            // }
        }
    

        // Страница авторизации


    function generateCode($length=6) 
    {

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";

        $code = "";

        $clen = strlen($chars) - 1;  
        while (strlen($code) < $length) {

            $code .= $chars[mt_rand(0,$clen)];  
        }

        return $code;
    }

    function check ($data) 
    {
        if ($_SESSION['login']===$data['user_login']) 
        {
            if ($_SESSION['password']===$data['user_password']) 
            {
                print "1";
            }
            else
            {
                print "2";
            }
        }
        else
        {
            print "2";
        }
        // if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
        // {   
// ".intval($_COOKIE['id'])."
        //     $table = 'users';
        //     $rows  = '*';
        //     $where = "user_id = '".$data['user_id']."' LIMIT 1";
        //     $order = null;

        //     $query = db::Select($table, $rows, $where, $order);
        //     $userdata = mysqli_fetch_assoc($query);

        //     if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id']))
        //     {
        //         setcookie("id", "", time() - 3600*24*30*12, "/");
        //         setcookie("hash", "", time() - 3600*24*30*12, "/");
        //         print "Хм, что-то не получилось";
        //     }
        //     else
        //     {
        //         return 1;
        //     }
        // }
        // else
        // {
        //     print "Включите куки";
        // }


    }

?>