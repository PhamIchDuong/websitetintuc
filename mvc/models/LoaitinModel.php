<?php
    class LoaitinModel extends DB{
        public function Select_LoaiTin(){
            $sql="
				SELECT * FROM loaitin
				ORDER BY idLT DESC
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }
        public function DanhSachLoaiTin(){
            $sql="
				SELECT * FROM loaitin,theloai
				WHERE loaitin.idTL = theloai.idTL
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }
        public function tinmoinhat_LoaiTin_mottin($idLT){
            $sql="
				SELECT * FROM tin
				WHERE idLT = $idLT
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
        public function tinmoinhat_LoaiTin_batin($idLT){
            $sql="
				SELECT * FROM tin
				WHERE idLT = $idLT
				ORDER BY idTin DESC
				LIMIT 1,3
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }

        public function tin_theoloaitin($idLT){
            $sql="
				SELECT * FROM tin
				WHERE idLT = $idLT
				ORDER BY idTin DESC
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }

        public function tindangxem_phantrang($idLT,$from,$sotinmottrang){
            $sql="
				SELECT * FROM tin
				WHERE idLT = $idLT
				ORDER BY idTin DESC
				LIMIT $from,$sotinmottrang
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }
        public function breadCrumb($idLT){
            $sql="
				SELECT TenTL,Ten 
				FROM theloai,loaitin
				WHERE theloai.idTL = loaitin.idTL AND idLT = $idLT
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }



        public function ChiTietLoaiTin($idLT){
            $sql="
				SELECT * FROM loaitin
				WHERE idLT = $idLT
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }

        public function Them($Ten,$Ten_KhongDau,$ThuTu,$AnHien,$idTL){
            $sql="
				INSERT INTO loaitin	
				VALUES(null,'$Ten','$Ten_KhongDau','$ThuTu','$AnHien','$idTL')
			";
			mysqli_query($this->con,$sql);
        }

        public function Update($idLT,$Ten,$Ten_KhongDau,$ThuTu,$AnHien,$idTL){
            $sql="
				UPDATE `loaitin` 
				SET `Ten`='$Ten',
				`Ten_KhongDau`='$Ten_KhongDau',
				`ThuTu`= '$ThuTu',
				`AnHien`= '$AnHien',
				`idTL`='$idTL' 
				WHERE idLT = $idLT
			";
			$result = false;
			if(mysqli_query($this->con,$sql))
				$result = true;
			return $result;
        }

        public function Delete($idLT){
            $sql="
				DELETE FROM loaitin 
				WHERE idLT = $idLT
			";

			mysqli_query($this->con,$sql);
        }

    }
?>