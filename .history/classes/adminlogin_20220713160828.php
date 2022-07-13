<?php
    include '../lib/session.php';
    Session::checkLogin();
    include '../lib/database.php';
    include '../helpers/format.php';
?>
<?php
    class adminlogin
    {
        private $db; // database
        private $fm; //format
        public function __construct()
        {
            $this->db = new 
        }
        public function checkLogin()
        {

        }
    }
?>