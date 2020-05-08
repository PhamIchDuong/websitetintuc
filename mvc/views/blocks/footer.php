<div class="thongtin-title">
	<div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">
            
            <?php 
              foreach ($data["theloai"] as $key1 =>  $value1) {
                    # code...
                    $idTL = $value1['idTL'];
            ?>

              <ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href="#"><?php echo $value1['TenTL']?></a>
                   </h2>
                </li>
                <?php
            
                    foreach ($data["loaitin$idTL"] as $key2 => $value2) {
                         # code...
                    
                ?>
                <li class="liFollow">
                   <h2>
                      <a href="/laptrinhmvc/Tintrongloai/Loaitin/<?php echo $value2['idLT']?>/1/6"><?php echo $value2['Ten']?></a>
                   </h2>
                </li>
                <?php 
      }
    ?>
              </ul>
              <?php
              }
              ?>
             
             
             

</div>




