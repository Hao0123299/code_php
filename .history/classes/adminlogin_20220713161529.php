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
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function checkLogin($user, $pass)
        {
            $user = $this->fm->validation($user);
            $pass = $this->fm->validation($pass);

            $user = mysqli_real_escape_string($this->db->link, $user);
            $pass = mysqli_real_escape_string($this->db->link, $pass);

            if(empty($user) || empty($pass) ||
        }
    }
?>