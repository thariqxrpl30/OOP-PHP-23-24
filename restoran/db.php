<?php 

    class DB{

        //properti

        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        public function __construct()
        {
            echo "construct";
        }

        //method
        public function selectdata()
        {
            echo 'selamat datang';
        }

        public function getDatabase()
        {
            return $this->database;
        }

        public function tampil()
        {
            $this->selectdata();
        }

        public static function insert()
        {
            echo "static function";
        }
    }

    DB::insertData();

    $db = new DB;

    echo '<br>';

    $db->selectdata();

    echo '<br>';

    echo $db->host;

    echo '<br>';

    echo $db->getDatabase().'<br>';

    $db->tampil();
?>