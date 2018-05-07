<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link href="main.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="js/button.js"></script>
	<script type="text/javascript" src="js/wiicore.js"></script>
	<script type="text/JavaScript">
        shop.setWallpaper(3)
	    sound.playBGM();
	</script>
</head>
	<body>
		<p class="heading">Open Shop Channel<span class="highlighted"> Featured </span></p>
		
			<!--The featured Homebrew of the (INSERT PERIOD OF TIME)!-->
				<table style="width: 100%; height: 125px" class="table">
					<tr>
						<td>1</td>
						<td>2</td>
						<td>3</td>
					</tr>
					<tr>
						<td>4</td>
						<td>5</td>
						<td>6</td>
					</tr>
				</table>
			<!--For the sake of order, stylize Buttons with the heading class in main.css.-->
		<p class="heading">
			<img alt="Explore Button" id="explore" dir="ltr" height="100" src="asset/button/exploreA.png" width="200" onmousedown="FP_swapImg(1,1,/*id*/'explore',/*url*/'asset/button/exploreC.png'); sound.playSE(3)" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'explore',/*url*/'asset/button/exploreB.png'); sound.playSE(2)" onmouseup="FP_swapImgRestore()" class="heading" onclick="FP_goToURL(/*href*/'W_02.php');">
		</p>
	</body>
</html>
