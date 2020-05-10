<?php
    class TinModel extends DB{
        public function tinmoinhat_Mottin(){
            $sql="
				SELECT * FROM tin
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

        public function tinmoinhat_Namtin(){
            $sql="
				SELECT * FROM tin
				ORDER BY idTin DESC
				LIMIT 1,9
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }


        public function tinxemnhieu_Sautin(){
            $sql="
				SELECT * FROM tin
				ORDER BY SoLanXem DESC
				LIMIT 0,6
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }
        public function tindangxem($idTin){
            $sql="
				SELECT * FROM tin
				WHERE idTin = $idTin
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }
        public function timkiemcophantrang($tukhoa,$from,$sotinmottrang){
            $sql="
				SELECT * FROM tin
				WHERE TieuDe REGEXP '$tukhoa'
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
        public function timkiemkhongphantrang($tukhoa){
            $sql="
				SELECT * FROM tin
				WHERE TieuDe REGEXP '$tukhoa'
				ORDER BY idTin DESC
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }


        public function DanhSachTinTuc(){
            $sql="
				SELECT tin.*,TenTL,Ten 
				FROM tin,theloai,loaitin
				WHERE tin.idTL = theloai.idTL
				AND tin.idLT = loaitin.idLT
				ORDER BY idTin DESC
				LIMIT 0,20
			";
			$data = mysqli_query($this->con,$sql);
			$arr = array();
			while($row_data = mysqli_fetch_array($data)){
				array_push($arr, $row_data);
			}
			return json_encode($arr);
        }

        public function Delete($idTin){
            $sql="
				DELETE FROM tin 
				WHERE idTin = $idTin
			";
			$result = false;
			if(mysqli_query($this->con,$sql)){
				$result = true;
			}
			return $result;
        }



        
    }
?>