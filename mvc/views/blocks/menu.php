<link rel="stylesheet" type="text/css" href="<?=PATH?>/public/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="<?=PATH?>/public/css/ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="<?=PATH?>/public/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
	<li><a href="/laptrinhmvc/">Trang chủ</a></li>
<?php 
	foreach ($data["theloai"] as $key1 =>  $value1) {
        # code...
        $idTL = $value1['idTL'];
?>
	<li><a href="#"><?php echo $value1['TenTL']?></a>
	  <ul>
		<?php
            
            foreach ($data["loaitin$idTL"] as $key2 => $value2) {
                 # code...
            
        ?>  
	    	<li><a href="/laptrinhmvc/Tintrongloai/Loaitin/<?php echo $value2['idLT']?>/1/6"><?php echo $value2['Ten']?></a></li>
		<?php 
			}
		?>
	  </ul>
	</li>
<?php 
	}
?>
</ul>
<br style="clear: left" />
</div>

