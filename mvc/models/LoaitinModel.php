<?php
    class LoaitinModel extends DB{
        public function Select_LoaiTin(){
            $sql="
				SELECT * FROM loaitin
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


    }
?>