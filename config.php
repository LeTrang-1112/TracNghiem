<?php 
DEFINE('INDEX_URL','http://localhost/demo_doan_tracnghiem/');

DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','tracnghiem');
DEFINE('DB_USERNAME','root');
DEFINE('DB_PASSWORD','');

DEFINE('CONTROLLER_ARRAY',array(
    "admin"=>"admin",
    "trang-chu"=>"trangchu",
    "tracnghiem"=>"tracnghiem"
));

DEFINE('CONTROLLER_DEFAULT','trangchu');
DEFINE('ACTION_DEFAULT','index');

DEFINE('TIME_OUT', 1800);
DEFINE('TIME_ONLINE', 60);
?>