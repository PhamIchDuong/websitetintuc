<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php
        $tinxemnhieu = $data["tinxemnhieu_Sautin"];
       
        foreach ($tinxemnhieu as $key => $value) {
            # code...
        ?>
            <div class="col1">
            	<div class="news">
                  <img class="images_news" src="<?=PATH?>/public/upload/tintuc/<?php echo $value['urlHinh'] ?>"  />
                    <h3 class="title" ><a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $value['idTin']?>"><?php echo $value['TieuDe'] ?></a><span class="hit"><?php echo $value['SoLanXem'] ?></span></h3>
                    <div class="clear"></div>
				</div>
            </div>
            
            
        <?php } ?>

            
        </div>
    </div>
</div>
<div class="clear"></div>

