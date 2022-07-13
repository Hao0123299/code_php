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

            if(empty($user) ||   empty($pass))
            {
                $alert = "Tài khoản hoặc mật khẩu không được để trống";
                return $alert;
            }
            else
            {
                $query = "SELECT * FROM admin WHERE user = '$user' AND pass = '$pass' limit 1";
                $result = $this->db->select($query);

                if($result != false)
                {
                    $value = $result->fetch_assoc();
                    Session::set('login', true); // chỉnh trong session

                    Session::set('id', $value['id']);
                    Session::set('user', $value['user']);
                    Session::set('name', $value['name']);
                    header("Location:index.php");

                }
                else
                {
                    $alert = "Tài khoản hoặc mật khẩu không đúng";
                    return $alert;
                }
            }
        }
    }
?>