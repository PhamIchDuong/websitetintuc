<!-- box cat -->
<div class="box-cat">
	<div class="cat">
        <?php
        $idLT = 5;
        foreach ($data["select_LoaiTin"] as $key => $value) {
            # code...
            if($value['idLT'] == $idLT)
                break;
        }

        ?>
    	<div class="main-cat">
        	<a href="#"><?php echo $value['Ten']; ?> </a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
                <?php 
                    foreach ($data["tinmoinhat_loaitin".$idLT."_mottin"] as $key1 => $value1) {
                        # code...
                ?>
            	<div class="news">
                <h3 class="title" ><a href="/laptrinhmvc/Chitiettin/Xemtin/<?php echo $value1['idTin']?>"> <?php echo $value1['TieuDe']?> </a></h3>
                  <img class="images_news" src="<?=PATH?>/public/upload/tintuc/<?php echo $value1['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $value1['TomTat']?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>

                <?php } ?>
            </div>
            <div class="col2">
                <?php 
                    foreach ($data["tinmoinhat_loaitin".$idLT."_batin"] as $key2 => $value2) {
                        # code...
                ?>
                        <h3 class="tlq"><a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $value2['idTin']?>"><?php echo $value2['TieuDe']?></a></h3>
            
                <?php } ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<!-- box cat -->
<div class="box-cat">
    <div class="cat">
        <?php
        $idLT = 11;
        foreach ($data["select_LoaiTin"] as $key => $value) {
            # code...
            if($value['idLT'] == $idLT)
                break;
        }

        ?>
        <div class="main-cat">
            <a href="#"><?php echo $value['Ten']; ?> </a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <?php 
                    foreach ($data["tinmoinhat_loaitin".$idLT."_mottin"] as $key1 => $value1) {
                        # code...
                ?>
                <div class="news">
                <h3 class="title" ><a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $value1['idTin']?>"> <?php echo $value1['TieuDe']?> </a></h3>
                  <img class="images_news" src="<?=PATH?>/public/upload/tintuc/<?php echo $value1['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $value1['TomTat']?></div>
                  
                  
                    <div class="clear"></div>
                   
                </div>

                <?php } ?>
            </div>
            <div class="col2">
                <?php 
                    foreach ($data["tinmoinhat_loaitin".$idLT."_batin"] as $key2 => $value2) {
                        # code...
                ?>
                        <h3 class="tlq"><a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $value2['idTin']?>"><?php echo $value2['TieuDe']?></a></h3>
            
                <?php } ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


<!-- box cat -->
<div class="box-cat">
    <div class="cat">
        <?php
        $idLT = 6;
        foreach ($data["select_LoaiTin"] as $key => $value) {
            # code...
            if($value['idLT'] == $idLT)
                break;
        }

        ?>
        <div class="main-cat">
            <a href="#"><?php echo $value['Ten']; ?> </a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <?php 
                    foreach ($data["tinmoinhat_loaitin".$idLT."_mottin"] as $key1 => $value1) {
                        # code...
                ?>
                <div class="news">
                <h3 class="title" ><a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $value1['idTin']?>"> <?php echo $value1['TieuDe']?> </a></h3>
                  <img class="images_news" src="<?=PATH?>/public/upload/tintuc/<?php echo $value1['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $value1['TomTat']?></div>
                  
                  
                    <div class="clear"></div>
                   
                </div>

                <?php } ?>
            </div>
            <div class="col2">
                <?php 
                    foreach ($data["tinmoinhat_loaitin".$idLT."_batin"] as $key2 => $value2) {
                        # code...
                ?>
                        <h3 class="tlq"><a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $value2['idTin']?>"><?php echo $value2['TieuDe']?></a></h3>
            
                <?php } ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->



