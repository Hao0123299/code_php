<?php
	include '../lib/session.php';
	include '../lib/database.php';
	include '../helpers/format.php';
?>
<?php
	
	class category
	{
		private $db; // database
		private $fm; //format
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		
		public function insert_Category($catName)
		{
			$catName = $this->fm->validation($catName);
			$catName = mysqli_real_escape_string($this->db->link, $catName);
			if (empty($catName)) {
				$alert = "<span class='error'>Tên danh mục không được để trống</span>";
				return $alert;
			} else {
				$query = "INSERT INTO category(catName) VALUES('$catName')";
				$result = $this->db->insert($query);
				if ($result) {
					$alert = "<span class='success'>Thêm danh mục thành công</span>";
					return $alert;
				} else {
					$alert = "<span class='error'>Thêm danh mục thất bại</span>";
					return $alert;
				}
			}
		}
	}

?>