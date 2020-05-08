
<?php 
    foreach ($data["theloai"] as$key =>  $value) {
        # code...
        $idTL = $value['idTL'];
?>


<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $value['TenTL']?></a>
        </div>
         
        <div class="child-cat">
        <?php
            
            foreach ($data["loaitin$idTL"] as $key => $value) {
                 # code...
            
        ?>
        	<a href="./Tintrongloai/Loaitin/<?php echo $value['idLT']?>"><?php echo $value['Ten']?></a>
        <?php 
            }
        ?>
            
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
                <?php
                foreach ($data["tintheotheloai".$idTL."_Mottin"] as $key1 => $value1) 
                {
                ?>
            	<div class="news">
                    <h3 class="title" ><a href="./Chitiettin/XemTin/<?php echo $value1['idTin']; ?>"><?php echo $value1['TieuDe']; ?></a></h3>
                    <img class="images_news" src="<?=PATH?>/public/upload/tintuc/<?php echo $value1['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $value1['TomTat']; ?> </div>
                    <div class="clear"></div>
                   
                </div>
                <?php
                }
                ?>
            </div>
            <div class="col2">
                <?php
                    foreach ($data["tintheotheloai".$idTL."_Haitin"] as $key2 => $value2) 
                    {
                ?>
                    <p class="tlq"><a href="./Chitiettin/<?php echo $value2['idTin']; ?>"> <?php echo $value2['TieuDe']; ?> </a></p>
                <?php
                    }
                ?>
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>

<div class="clear"></div>
<!-- box cat-->

<?php 
    }
?>
