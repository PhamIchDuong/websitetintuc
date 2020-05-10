<?php
    class TheLoaiModel extends DB{
        public function danhSachTheLoai(){
            $sql="
				SELECT * FROM theloai
				ORDER BY idTL DESC
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }
		public function ChiTietTheLoai($idTL){
            $sql="
				SELECT * FROM theloai
				WHERE idTL = $idTL
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

        public function Them($TenTL,$TenTL_KhongDau,$ThuTu,$AnHien){
            $sql="
				INSERT INTO theloai	
				VALUES(null,'$TenTL','$TenTL_KhongDau','$ThuTu','$AnHien')
			";
			mysqli_query($this->con,$sql);
        }
        public function Update($idTL,$TenTL,$TenTL_KhongDau,$ThuTu,$AnHien){
            $sql="
				UPDATE `theloai` 
				SET `TenTL`='$TenTL',
				`TenTL_KhongDau`='$TenTL_KhongDau',
				`ThuTu`= '$ThuTu',
				`AnHien`= '$AnHien' 
				WHERE idTL = $idTL
			";

			mysqli_query($this->con,$sql);
        }
        public function Delete($idTL){
            $sql="
				DELETE FROM theloai 
				WHERE idTL = $idTL
			";

			mysqli_query($this->con,$sql);
        }


    }
?>