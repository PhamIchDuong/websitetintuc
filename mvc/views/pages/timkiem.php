<div>Từ khóa đang tìm kiếm: <?php echo $data["tukhoa"] ?></div>
<div>Số kết quả tìm thấy: <?php echo count($data["timkiemkhongphantrang"]) ?></div>

<?php
foreach ($data["timkiemcophantrang"] as $value) {
    # code...
?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $value['idTin']?>"><?php echo $value['TieuDe'] ?></a></h3>
                    <img class="images_news" src="<?=PATH?>/public/upload/tintuc/<?php echo $value['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $value['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<div class="clear"></div>
<?php }
?>

<style>
    #phantrang{text-align: center}
    #phantrang a {background-color:rgba(0, 66, 66, 1);color: rgba(204, 255, 255, 1);padding: 5px;margin-right: 3px; margin-bottom: 3px;display: inline-block;}
    #phantrang a:hover{background-color: #09F;}
</style>
<div id ="phantrang">
    

<?php 
    $t = $data["timkiemkhongphantrang"];
            // echo "<pre>";
            // print_r($t);
            // echo "</pre>";
    $tongsotin = count($t);
    $tongsotrang = ceil($tongsotin/$data["sotinmottrang"]);
    for($i = 1 ; $i<=$tongsotrang; $i++){
?>
    <a <?php if($i == $data["trang"]) echo " style ='background-color: red' "?> href="/laptrinhmvc/Timkiem/TinTheoTuKhoa/<?php echo $i ?>/<?php echo $data["sotinmottrang"] ?>/<?php echo $data["tukhoa"] ?>" title=""><?php echo $i ?></a>

<?php 
    }
?>
</div>