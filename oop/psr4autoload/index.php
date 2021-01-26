<?php

require_once "vendor/autoload.php";
use app\auth\class_auth;
use app\class_public as ppc;
use app\admin\class_admin;

class index{
    public function __construct(){

        $admin = new class_admin();

        $auth = new class_auth("Zin Zin","123456");
        $auth->accessinfo();

        $public = new ppc();
        $public->myfun();
        $public->mydate();

    }
}
$obj = new index();
?>
