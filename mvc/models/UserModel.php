<?php
    class UserModel extends DB{
        
        public function CheckDangnhap($un,$pa){
            $sql="
				SELECT * FROM Users
				WHERE Username = '$un' 
				AND Password = '$pa' 
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			if(mysqli_num_rows($data) == 1)
			{
				$row_data = mysqli_fetch_array($data);
				array_push($arr, $row_data);
				//$arr = "dang nhap dung";
			}
			
			return $arr;
        }
    }
?>