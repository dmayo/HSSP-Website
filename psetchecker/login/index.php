<?php
require "config/config.php";
require "checklogin.php";
if(checklogin ($db_server, $db_username, $db_password, $db_database, $_COOKIE["upload_user"], $_COOKIE["user_code"])==true){
    echo '<meta http-equiv="refresh" content="0;url=read_dir.php">';
}
else{
    echo '<meta http-equiv="refresh" content="0;url=login.php">';
}
?>
