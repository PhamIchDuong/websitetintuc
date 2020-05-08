<div id="slide-left">
        	<div id="slideleft-main">
              <?php
                $tinmoi = array_values($data["tinmotnhat_Mottin"]);
                $tinmoinhat = $tinmoi["0"];

              ?>

                <img src="<?=PATH?>/public/upload/tintuc/<?php echo $tinmoinhat["urlHinh"] ?>"  /><br />
                <h2 class="title"><a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $tinmoinhat['idTin']?>"><?php echo $tinmoinhat["TieuDe"] ?></a> </h2>
                <div class="des">
                    <?php echo $tinmoinhat["TomTat"] ?> 
                </div>
            	<p class="tlq"><a href="#">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a></p>
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
              <?php
                
                $tinmoinhat_namtin = $data["tinmotnhat_Namtin"];
                foreach ($tinmoinhat_namtin as $key => $value) {
                  # code...
                

              ?>
               <li>
                <div class="title_news">
               		<a href="/laptrinhmvc/Chitiettin/XemTin/<?php echo $value['idTin']?>" class="txt_link"> <?php echo $value["TieuDe"] ?></a> 
                </div>
              </li>
               
                <?php
                  }
                ?>
            </ul>
            </div>			
            
			<div id="gocnhin">
                
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     