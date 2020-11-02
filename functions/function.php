<?php
    //verifInput
    function verifInput($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

    // debug
    function debug($var)
        {
            echo '<pre>';
            var_dump($var);
            echo '</pre>';
        }

    //str_secure
    function str_secure($string)
        {
            return $string = trim(htmlspecialchars($string));
        }

    // isLogged
    function isLogged()
        {
            if(!isset($_SESSION['user']))
                {
                    header('location:login');
                    exit();
                }
        }

    function verifEmail($var)
        {
            return filter_var($var, FILTER_VALIDATE_EMAIL);
        }

    function verifPhone($var)
        {
            return preg_match('/^[0-9 ]+$/', $var);
        }

        
    function checkInput($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    function importImg($path, $img)
        {
            $image = checkInput($img['name']);
            $imageExtension = pathinfo($path.$image,PATHINFO_EXTENSION);
            if(strtolower($imageExtension) == "jpg" || $imageExtension == "png" || $imageExtension == "jpeg" || $imageExtension == "gif")
                {
                    $tmp_name = $img['tmp_name'];
                    move_uploaded_file($tmp_name, $path.$image);
                }
        }

        function importImg2($img,$titre){
            $image = checkInput($img['name']);
            $imageExtensions = strrchr($image, '.');
            $arrayExtensions = array('.PNG', '.png', '.JPEG', '.jpeg', '.jpg', '.JPG', '.gif', '.GIF');
            if (in_array($imageExtensions,$arrayExtensions)) {
                // $c = md5('assets/images/pubs/');
                $address = 'assets/images/pubs/'.$titre. $imageExtensions;
                $tmp_name = $img['tmp_name'];
                move_uploaded_file($tmp_name, $address);
                return $address;
            }
        }
        
        
        function isAdmin()
        {
            if ($_SESSION['user']['isAdmin'] != 1) {
                header('location:home');
                exit();
            }
        
        }


        

