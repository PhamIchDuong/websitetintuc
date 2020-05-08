<?php
    class TheLoaiModel extends DB{
        public function danhSachTheLoai(){
            $sql="
				SELECT * FROM theloai
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }


        public function danhSachLoaiTin_Theo_TheLoai($idTL){
            $sql="
				SELECT * FROM loaitin
				WHERE idTL = $idTL
			";
			$data = mysqli_query($this->con,$sql);
			$arr = [];
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }


        public function tinmoinhat_theotheloai_Mottin($idTL){
            $sql="
				SELECT * FROM tin
				WHERE idTL = $idTL    
				ORDER BY idTin DESC
				LIMIT 0,1
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }

        
        public function tinmoinhat_theotheloai_Haitin($idTL){
            $sql="
				SELECT * FROM tin
				WHERE idTL = $idTL    
				ORDER BY idTin DESC
				LIMIT 1,2
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }
    }
?>