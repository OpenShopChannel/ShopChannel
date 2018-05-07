<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link href="main.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="js/button.js"></script>
	<script type="text/javascript" src="js/wiicore.js"></script>
</head>
	<body onload="FP_preloadImgs(/*url*/'asset/section/clubspotC.png',/*url*/'asset/section/clubspotB.png',/*url*/'asset/button/returnB.png',/*url*/'asset/button/returnC.png',/*url*/'asset/button/open2.png',/*url*/'asset/button/open3.png')">
		<p class="heading">Open Shop Channel<span class="highlighted"> Explore </span>
		<span class="default">&nbsp;&nbsp;&nbsp;&nbsp; </span>
		<img alt="About" id="aboutbut" dir="ltr" height="38" src="asset/button/open.png" width="36" onmousedown="FP_swapImg(1,1,/*id*/'aboutbut',/*url*/'asset/button/open3.png')" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'aboutbut',/*url*/'asset/button/open2.png')" onmouseup="FP_swapImgRestore()" class="heading" onclick="FP_goToURL('docs/credits.php')">&nbsp;
</p>
			
			<!--For the sake of order, stylize Buttons with the heading class in main.css.-->
			<p class="heading">
				<!--Sections-->
				<img alt="Club Spot" id="clubspotbut" dir="ltr" height="100" src="asset/section/clubspotA.png" width="100" onmousedown="FP_swapImg(1,1,/*id*/'clubspotbut',/*url*/'asset/section/clubspotC.png'); sound.playSE(3)" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'clubspotbut',/*url*/'asset/section/clubspotB.png'); sound.playSE(2)" onmouseup="FP_swapImgRestore()" class="heading" onclick="FP_goToURL('clubspot/index.php')">
				<img alt="Patches" id="patchesbut" dir="ltr" height="100" src="asset/section/patchesA.png" width="100" onmousedown="FP_swapImg(1,1,/*id*/'patchesbut',/*url*/'asset/section/patchesC.png'); sound.playSE(3)" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'patchesbut',/*url*/'asset/section/patchesB.png'); sound.playSE(2)" onmouseup="FP_swapImgRestore()" class="heading" onclick="FP_goToURL('patches/P_01.php');">
				<img alt="Homebrew" id="homebrewbut" dir="ltr" height="100" src="asset/section/homebrewA.png" width="100" onmousedown="FP_swapImg(1,1,/*id*/'homebrewbut',/*url*/'asset/section/homebrewC.png'); sound.playSE(3);" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'homebrewbut',/*url*/'asset/section/homebrewB.png'); sound.playSE(2)" onmouseup="FP_swapImgRestore()" class="heading" onclick="FP_goToURL(/*href*/'homebrew/H_01.php');">
				</img></p>
				
			<p class="heading">
				<img alt="Return Button" id="returnbut" dir="ltr" height="100" src="asset/button/returnA.png" width="200" onmousedown="FP_swapImg(1,1,/*id*/'returnbut',/*url*/'asset/button/returnC.png'); sound.playSE(3)" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'returnbut',/*url*/'asset/button/returnB.png'); sound.playSE(2)" onmouseup="FP_swapImgRestore()" class="heading" onclick="FP_goToURL(/*href*/'W_01.php')">
		</p>
	</body>
</html>
