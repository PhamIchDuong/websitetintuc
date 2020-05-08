<?php 
	function tinmoinhat_Mottin(){
		$sql="
			SELECT * FROM tin
			ORDER BY idTin DESC
			LIMIT 0,1
		";
		return $sql;
	}
	function tinmoinhat_Namtin(){
		$sql="
			SELECT * FROM tin
			ORDER BY idTin DESC
			LIMIT 1,7
		";
		return $sql;
	}
	function tinxemnhieu_Sautin(){
		$sql="
			SELECT * FROM tin
			ORDER BY SoLanXem DESC
			LIMIT 0,6
		";
		return $sql;
	}
	function tinmoinhat_theoloaitin_Mottin($idLt){
		$sql="
			SELECT * FROM tin
			WHERE idLT = $idLt
			ORDER BY idTin DESC
			LIMIT 0,1
		";
		return $sql;
	}
	function tinmoinhat_theoloaitin_Namtin($idLt){
		$sql="
			SELECT * FROM tin
			WHERE idLT = $idLt
			ORDER BY idTin DESC
			LIMIT 1,6
		";
		return $sql;
	}
	function tenLoaiTin($idLt){
		$sql="
			SELECT Ten FROM loaitin
			WHERE idLT = $idLt
		";
		return $sql;
	}
	function quangCao($vitri){
		$sql="
			SELECT * FROM quangcao
			WHERE vitri = $vitri
		";
		return $sql;
	}
	function danhSachTheLoai(){
		$sql="
			SELECT * FROM theloai
		";
		return $sql;
	}
	function danhSachLoaiTin_Theo_TheLoai($idTL){
		$sql="
			SELECT * FROM loaitin
			WHERE idTL = $idTL
		";
		return $sql;
	}
	function tinmoinhat_theotheloai_Mottin($idTL){
		$sql="
			SELECT * FROM tin
			WHERE idTL = $idTL
			ORDER BY idTin DESC
			LIMIT 0,1
		";
		return $sql;
	}
	function tinmoinhat_theotheloai_Haitin($idTL){
		$sql="
			SELECT * FROM tin
			WHERE idTL = $idTL
			ORDER BY idTin DESC
			LIMIT 1,2
		";
		return $sql;
	}
	function tin_theoloaitin($idLt){
		$sql="
			SELECT * FROM tin
			WHERE idLT = $idLt
			ORDER BY idTin DESC
		";
		return $sql;
	}
	function tin_theoloaitin_phantrang($idLt,$from,$sotrang){
		$sql="
			SELECT * FROM tin
			WHERE idLT = $idLt
			ORDER BY idTin DESC
			LIMIT $from,$sotrang
		";
		return $sql;
	}
	function breadCrumb($idLT){
		$sql="
			SELECT TenTL,Ten 
			FROM theloai,loaitin
			WHERE theloai.idTL = loaitin.idTL AND idLT = $idLT
		";
		return $sql;
	}
	function chitiettin($idTin){
		$sql="
			SELECT * 
			FROM tin
			WHERE idTin = $idTin
		";
		return $sql;
	}
	function tincungloaitin($idTin,$idLT){
		$sql="
			SELECT * 
			FROM tin
			WHERE idTin <> $idTin AND idLT= $idLT
			ORDER BY RAND()
			LIMIT 0,3
		";
		return $sql;
	}
	function capnhatsolanxemtin($idTin){
		$sql="
			UPDATE tin 
			SET SoLanXem = SoLanXem + 1
			WHERE idTin = $idTin
		";
		return $sql;
	}
	function timkiemphantrang($tukhoa,$from,$sotrang){
		$sql = "  
			SELECT * FROM tin
			WHERE TieuDe REGEXP '$tukhoa'
			ORDER BY idTin DESC
			LIMIT $from,$sotrang
		";
		return $sql;
	}
	function timkiem($tukhoa){
		$sql = "  
			SELECT * FROM tin
			WHERE TieuDe REGEXP '$tukhoa'
			ORDER BY idTin DESC
		";
		return $sql;
	}

?>