<?php
//php data object
//singleton design pattern
//data abstraction layer
require_once "vendor/autoload.php";

use app\database\class_db;
use app\database\class_dbabslayer;


class index
{
    private $db;

    public function __construct()
    {
//        $this->db = new class_db();

//        $db1 = new class_db();
//        var_dump($db1);
//        echo "<br/>";
//
//        $db2= new class_db();
//        var_dump($db2);
//        echo "<br/>";
//
//        $db3 = new class_db();
//        var_dump($db3);
//        echo "<br/>";
//
//        $db4 = new class_db();
//        var_dump($db4);
//        echo "<br/>";
//
//        $db5 = new class_db();
//        var_dump($db5);
//        echo "<br/>";


//        $this->db = class_db::getinstance()->getdatabase();

//        $db1 = class_db::getinstance()->getdatabase();
//        var_dump($db1);
//        echo "<br/>";
//
//        $db2= class_db::getinstance()->getdatabase();
//        var_dump($db2);
//        echo "<br/>";
//
//        $db3 = class_db::getinstance()->getdatabase();
//        var_dump($db3);
//        echo "<br/>";
//
//        $db4 = class_db::getinstance()->getdatabase();
//        var_dump($db4);
//        echo "<br/>";
//
//        $db5 = class_db::getinstance()->getdatabase();
//        var_dump($db5);
//        echo "<br/>";


        $this->db = new class_dbabslayer();

        $this->db->getallusers(2);

        echo "<hr/>";

        $this->db->getsguser(1);

        echo "<hr/>";

        $this->db->deletesguser(36);

        echo "<hr/>";

//        $this->db->insertsguser("popo@gmail.com","123456",1);
//
//   echo "<hr/>";

        $users = [
            ["vovo@gmail.com", "123456", 1],
            ["bovo@gmail.com", "123456", 1],
            ["novo@gmail.com", "123456", 1],
            ["rovo@gmail.com", "123456", 1],
            ["tovo@gmail.com", "123456", 1],
        ];
//        $this->db->insertmultiusers($users);

//        $this->db->updateuserstatus(40,42);

        $this->db->getalluserbystatusname(1);
    }
}

$obj = new index();
?>














