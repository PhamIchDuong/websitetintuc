<?php
	class Timkiem extends Controller{
		function SayHi(){
	        $master_model1 = $this->model("TinModel");
	        $master_model2 = $this->model("TheLoaiModel");
	        $master_model3 = $this->model("LoaitinModel");
	        // echo "<pre>";
	        // print_r(list_Menu(json_decode($master_model2->danhSachTheLoai(),true)));
	        // echo "</pre>";
	        // echo print_r($arr["0"]["0"]);

	        $this->view("master1", [
	            "Page"=>"timkiem",
	            "theloai"=>json_decode($master_model2->danhSachTheLoai(),true),	            
	            "loaitin1"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(1),true),
	            "loaitin2"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(2),true),
	            "loaitin3"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(3),true),
	            "loaitin4"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(4),true),
	            "loaitin5"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(5),true),
	            "loaitin6"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(6),true),
	            "loaitin7"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(7),true),
	            "loaitin8"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(8),true),
	            "loaitin9"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(9),true),
	            "tintheotheloai1_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(1),true),
	            "tintheotheloai1_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(1),true),
	            "tintheotheloai2_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(2),true),
	            "tintheotheloai2_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(2),true),
	            "tintheotheloai3_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(3),true),
	            "tintheotheloai3_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(3),true),
	            "tintheotheloai4_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(4),true),
	            "tintheotheloai4_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(4),true),
	            "tintheotheloai5_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(5),true),
	            "tintheotheloai5_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(5),true),
	            "tintheotheloai6_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(6),true),
	            "tintheotheloai6_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(6),true),
	            "tintheotheloai7_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(7),true),
	            "tintheotheloai7_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(7),true),
	            "tintheotheloai8_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(8),true),
	            "tintheotheloai8_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(8),true),
	            "tintheotheloai9_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(9),true),
	            "tintheotheloai9_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(9),true),
	            "tinmotnhat_Mottin"=>json_decode($master_model1->tinmoinhat_Mottin(),true),
	            "tinmotnhat_Namtin"=>json_decode($master_model1->tinmoinhat_Namtin(),true),
	            "tinxemnhieu_Sautin"=>json_decode($master_model1->tinxemnhieu_Sautin(),true),
	            "select_LoaiTin" =>json_decode($master_model3->Select_LoaiTin(),true),
	            "tinmoinhat_loaitin5_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(5),true),
	            "tinmoinhat_loaitin5_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(5),true),
	            "tinmoinhat_loaitin6_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(6),true),
	            "tinmoinhat_loaitin6_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(6),true),
	            "tinmoinhat_loaitin11_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(11),true),
	            "tinmoinhat_loaitin11_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(11),true)

	        ]);
	    }
	    function TheoTuKhoa($trang,$sotinmottrang){
			if(isset($_POST["q"]))
			{
				$tukhoa = $_POST["q"];
			}
			if($tukhoa == "")
			{
				$tukhoa = "Tìm";
			}

	        $master_model1 = $this->model("TinModel");
	        $master_model2 = $this->model("TheLoaiModel");
	        $master_model3 = $this->model("LoaitinModel");
	        // echo "<pre>";
	        // print_r(list_Menu(json_decode($master_model2->danhSachTheLoai(),true)));
	        // echo "</pre>";
	        // echo print_r($arr["0"]["0"]);

	        $this->view("master1", [
	            "Page"=>"timkiem",
	            "tukhoa"=>$tukhoa,
	            "from"=>$sotinmottrang *($trang-1),
	            "trang"=>$trang,
	            "sotinmottrang"=>$sotinmottrang,
	            "theloai"=>json_decode($master_model2->danhSachTheLoai(),true),	            
	            "loaitin1"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(1),true),
	            "loaitin2"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(2),true),
	            "loaitin3"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(3),true),
	            "loaitin4"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(4),true),
	            "loaitin5"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(5),true),
	            "loaitin6"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(6),true),
	            "loaitin7"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(7),true),
	            "loaitin8"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(8),true),
	            "loaitin9"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(9),true),
	            "tintheotheloai1_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(1),true),
	            "tintheotheloai1_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(1),true),
	            "tintheotheloai2_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(2),true),
	            "tintheotheloai2_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(2),true),
	            "tintheotheloai3_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(3),true),
	            "tintheotheloai3_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(3),true),
	            "tintheotheloai4_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(4),true),
	            "tintheotheloai4_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(4),true),
	            "tintheotheloai5_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(5),true),
	            "tintheotheloai5_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(5),true),
	            "tintheotheloai6_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(6),true),
	            "tintheotheloai6_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(6),true),
	            "tintheotheloai7_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(7),true),
	            "tintheotheloai7_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(7),true),
	            "tintheotheloai8_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(8),true),
	            "tintheotheloai8_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(8),true),
	            "tintheotheloai9_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(9),true),
	            "tintheotheloai9_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(9),true),
	            "tinmotnhat_Mottin"=>json_decode($master_model1->tinmoinhat_Mottin(),true),
	            "tinmotnhat_Namtin"=>json_decode($master_model1->tinmoinhat_Namtin(),true),
	            "tinxemnhieu_Sautin"=>json_decode($master_model1->tinxemnhieu_Sautin(),true),
	            "select_LoaiTin" =>json_decode($master_model3->Select_LoaiTin(),true),
	            "tinmoinhat_loaitin5_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(5),true),
	            "tinmoinhat_loaitin5_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(5),true),
	            "tinmoinhat_loaitin6_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(6),true),
	            "tinmoinhat_loaitin6_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(6),true),
	            "tinmoinhat_loaitin11_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(11),true),
	            "tinmoinhat_loaitin11_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(11),true),
	            "timkiemcophantrang"=>json_decode($master_model1->timkiemcophantrang($tukhoa,$sotinmottrang *($trang-1),$sotinmottrang),true),
	            "timkiemkhongphantrang"=>json_decode($master_model1->timkiemkhongphantrang($tukhoa),true)

	        ]);
	    }
	    function TinTheoTuKhoa($trang,$sotinmottrang,$tukhoa){
	        $master_model1 = $this->model("TinModel");
	        $master_model2 = $this->model("TheLoaiModel");
	        $master_model3 = $this->model("LoaitinModel");

	        $this->view("master1", [
	            "Page"=>"timkiem",
	            "tukhoa"=>$tukhoa,
	            "from"=>$sotinmottrang *($trang-1),
	            "trang"=>$trang,
	            "sotinmottrang"=>$sotinmottrang,
	            "theloai"=>json_decode($master_model2->danhSachTheLoai(),true),	            
	            "loaitin1"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(1),true),
	            "loaitin2"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(2),true),
	            "loaitin3"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(3),true),
	            "loaitin4"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(4),true),
	            "loaitin5"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(5),true),
	            "loaitin6"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(6),true),
	            "loaitin7"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(7),true),
	            "loaitin8"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(8),true),
	            "loaitin9"=>json_decode($master_model2->danhSachLoaiTin_Theo_TheLoai(9),true),
	            "tintheotheloai1_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(1),true),
	            "tintheotheloai1_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(1),true),
	            "tintheotheloai2_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(2),true),
	            "tintheotheloai2_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(2),true),
	            "tintheotheloai3_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(3),true),
	            "tintheotheloai3_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(3),true),
	            "tintheotheloai4_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(4),true),
	            "tintheotheloai4_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(4),true),
	            "tintheotheloai5_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(5),true),
	            "tintheotheloai5_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(5),true),
	            "tintheotheloai6_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(6),true),
	            "tintheotheloai6_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(6),true),
	            "tintheotheloai7_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(7),true),
	            "tintheotheloai7_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(7),true),
	            "tintheotheloai8_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(8),true),
	            "tintheotheloai8_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(8),true),
	            "tintheotheloai9_Mottin"=>json_decode($master_model2->tinmoinhat_theotheloai_Mottin(9),true),
	            "tintheotheloai9_Haitin"=>json_decode($master_model2->tinmoinhat_theotheloai_Haitin(9),true),
	            "tinmotnhat_Mottin"=>json_decode($master_model1->tinmoinhat_Mottin(),true),
	            "tinmotnhat_Namtin"=>json_decode($master_model1->tinmoinhat_Namtin(),true),
	            "tinxemnhieu_Sautin"=>json_decode($master_model1->tinxemnhieu_Sautin(),true),
	            "select_LoaiTin" =>json_decode($master_model3->Select_LoaiTin(),true),
	            "tinmoinhat_loaitin5_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(5),true),
	            "tinmoinhat_loaitin5_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(5),true),
	            "tinmoinhat_loaitin6_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(6),true),
	            "tinmoinhat_loaitin6_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(6),true),
	            "tinmoinhat_loaitin11_mottin"=>json_decode($master_model3->tinmoinhat_LoaiTin_mottin(11),true),
	            "tinmoinhat_loaitin11_batin"=>json_decode($master_model3->tinmoinhat_LoaiTin_batin(11),true),
	            "timkiemcophantrang"=>json_decode($master_model1->timkiemcophantrang($tukhoa,$sotinmottrang *($trang-1),$sotinmottrang),true),
	            "timkiemkhongphantrang"=>json_decode($master_model1->timkiemkhongphantrang($tukhoa),true)

	        ]);
	    }
	    
	    
	    
	}


?>