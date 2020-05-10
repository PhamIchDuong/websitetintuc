<?php

	class AdminHome extends Controller{
		function SayHi(){
			if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{

				header("location:/laptrinhmvc/");
			}
			print_r($_SESSION);
			$this->view("Admin", [
				"Page"=> "trangchuadmin"]);
	    }
	    //quản lí thể loại
	    function TheLoai(){
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}
			$admintheloai = $this->model("TheLoaiModel");
			$this->view("Admin", [
				"Page"=> "theloai",
				"danhsachtheloai"=>json_decode($admintheloai->danhSachTheLoai(),true)
				],
			);
	    }
	    function ThemTheLoai($theloai){
	    	$admintheloai = $this->model("TheLoaiModel");

	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}

			if(isset($_POST['txtThem'])){
				$TenTL = $_POST['TenTL'];
				$TenTL_KhongDau = changeTitle($TenTL);
				$ThuTu = $_POST['ThuTu'];
				settype($ThuTu, 'int');
				$AnHien = $_POST['AnHien'];
				settype($AnHien, 'int');
				$admintheloai->Them($TenTL,$TenTL_KhongDau,$ThuTu,$AnHien);
				header("location:/laptrinhmvc/AdminHome/TheLoai");
			}
			


			
			$this->view("Admin", [
				"Page"=> $theloai,
				"danhsachtheloai"=>json_decode($admintheloai->danhSachTheLoai(),true)
				],
			);
	    }

	    function SuaTheLoai($theloai,$idTL){
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}
			$admintheloai = $this->model("TheLoaiModel");
			if(isset($_POST['txtSua'])){
				$TenTL = $_POST['TenTL'];
				$TenTL_KhongDau = changeTitle($TenTL);
				$ThuTu = $_POST['ThuTu'];
				settype($ThuTu, 'int');
				$AnHien = $_POST['AnHien'];
				settype($AnHien, 'int');
				$admintheloai->Update($idTL,$TenTL,$TenTL_KhongDau,$ThuTu,$AnHien);
				header("location:/laptrinhmvc/AdminHome/TheLoai");
			}



			$this->view("Admin", [
				"Page"=> $theloai,
				"danhsachtheloai"=>json_decode($admintheloai->danhSachTheLoai(),true),
				"chitiettheloai"=>json_decode($admintheloai->ChiTietTheLoai($idTL),true)
				]
			);
	    }

	    function XoaTheLoai($theloai,$idTL){
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}
			$admintheloai = $this->model("TheLoaiModel");
			
			$admintheloai->Delete($idTL);
			header("location:/laptrinhmvc/AdminHome/TheLoai");

			$this->view("Admin", [
				"Page"=> $theloai,
				"danhsachtheloai"=>json_decode($admintheloai->danhSachTheLoai(),true)
				
				]
			);
	    }


















	    //quản lí loại tin
	    function LoaiTin(){
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}
			$adminloaitin = $this->model("LoaitinModel");

			$this->view("Admin", [
				"Page"=> "loaitin",
				"danhsachloaitin"=>json_decode($adminloaitin->Select_LoaiTin(),true)
			]);
	    }

	    function ThemLoaiTin($loaitin){
	    	$adminloaitin = $this->model("LoaitinModel");
	    	$admintheloai = $this->model("TheLoaiModel");
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}

			if(isset($_POST['txtThem'])){
				$Ten = $_POST['Ten'];
				$Ten_KhongDau = changeTitle($Ten);
				$ThuTu = $_POST['ThuTu'];
				settype($ThuTu, 'int');
				$AnHien = $_POST['AnHien'];
				settype($AnHien, 'int');
				$idTL = $_POST['idTL'];
				settype($idTL, 'int');
				$adminloaitin->Them($Ten,$Ten_KhongDau,$ThuTu,$AnHien,$idTL);
				header("location:/laptrinhmvc/AdminHome/LoaiTin");
			}
			
			$this->view("Admin", [
				"Page"=> $loaitin,
				"danhsachloaitin"=>json_decode($adminloaitin->Select_LoaiTin(),true),
				"danhsachtheloai"=>json_decode($admintheloai->danhSachTheLoai(),true)
			]);
	    }

	    function SuaLoaiTin($tenfile,$idLT){
	    	$adminloaitin = $this->model("LoaitinModel");
	    	$admintheloai = $this->model("TheLoaiModel");
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}

			if(isset($_POST['txtSua'])){
				$Ten = $_POST['Ten'];
				$Ten_KhongDau = changeTitle($Ten);
				$ThuTu = $_POST['ThuTu'];
				settype($ThuTu, 'int');
				$AnHien = $_POST['AnHien'];
				settype($AnHien, 'int');
				$idTL = $_POST['idTL'];
				settype($idTL, 'int');
				// echo "UPDATE `loaitin` 
				// SET `Ten`='$Ten',
				// `Ten_KhongDau`='$Ten_KhongDau',
				// `ThuTu`= '$ThuTu',
				// `AnHien`= '$AnHien',
				// `idTL`='$idTL' 
				// WHERE idLT = $idLT";
				$adminloaitin->Update($idLT,$Ten,$Ten_KhongDau,$ThuTu,$AnHien,$idTL);
				header("location:/laptrinhmvc/AdminHome/LoaiTin/");
			}
			
			$this->view("Admin", [
				"Page"=> $tenfile,
				"danhsachtheloai"=>json_decode($admintheloai->danhSachTheLoai(),true),
				"chitietloaitin"=>json_decode($adminloaitin->ChiTietLoaiTin($idLT),true)
			]);
	    }

	    function XoaLoaiTin($tenfile,$idLT){
	    	$adminloaitin = $this->model("LoaitinModel");
	    	$admintheloai = $this->model("TheLoaiModel");
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}

			$adminloaitin->Delete($idLT);
			header("location:/laptrinhmvc/AdminHome/LoaiTin/");
			
			$this->view("Admin", [
				"Page"=> $tenfile,
				"danhsachtheloai"=>json_decode($admintheloai->danhSachTheLoai(),true),
				"chitietloaitin"=>json_decode($adminloaitin->ChiTietLoaiTin($idLT),true)
			]);
		}


	    // quản lí tin tức
	    function TinTuc(){
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}

			$admintintuc = $this->model("TinModel");

			$this->view("Admin", [
				"Page"=> "tintuc",
				"danhsachtintuc" => json_decode($admintintuc->DanhSachTinTuc(),true)

			]);
	    }

	    function XoaTin($tenfile,$idTin){
	    	if(!isset($_SESSION["idUser"]) || !$_SESSION["idGroup"] == 1)
			{
				header("location:/laptrinhmvc/");
			}

			$admintintuc = $this->model("TinModel");
			echo $admintintuc->Delete($idTin);
			header("location:/laptrinhmvc/AdminHome/TinTuc/");
			$this->view("Admin", [
				"Page"=> "tintuc",
				"danhsachtintuc" => json_decode($admintintuc->DanhSachTinTuc(),true)

			]);
	    }

	    
	}


?>