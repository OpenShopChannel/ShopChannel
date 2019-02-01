<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="main.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/button.js"></script>
    <script type="text/javascript" src="js/wiicore.js"></script>
    <script type="text/JavaScript">
        shop.setWallpaper(3);
        sound.playBGM();
    </script>
</head>
<body onload="FP_preloadImgs(/*url*/'asset/button/exploreA.png',/*url*/'asset/button/exploreB.png',/*url*/'asset/button/exploreC.png'); initPage();" style="background: url('asset/bg/table_top.png') no-repeat;">

<h2 class="dots">• • • • • • • • • • • • • • • • • •</h2>

<p class="tableTitle">
                <strong>New Additions to OSC</strong>
</p>

<table border="1" cellspacing="0" cellpadding="0" align="left" class="table";">
    <tbody>
    <tr>
        <td width="219" valign="top">
            <p><span class="highlighted">NEW</span> Item #1</p>
        </td>
    </tr>
    <tr>
        <td width="219" valign="top">
            <p class="tableItem">Item #2</p>
        </td>
    </tr>
    <tr>
        <td width="219" valign="top">
            <p class="tableItem">Item #3</p>
        </td>
    </tr>
    <tr>
        <td width="219" valign="top">
            <p class="tableItem">Item #4</p>
        </td>
    </tr>
    <tr>
        <td width="219" valign="top">
			<div class="cheapFix">
				<p class="tableItem">Item #5</p>
			</div>
        </td>
    </tr
    </tbody>
</table>
<p>
<p class="heading">Open Shop Channel</p>
</p>

<p>
<p class="heading"><img alt="Explore Button" id="explore" dir="ltr" height="100" src="asset/button/exploreA.png" width="200" onmousedown="FP_swapImg(1,1,/*id*/'explore',/*url*/'asset/button/exploreC.png')" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'explore',/*url*/'asset/button/exploreB.png');" onmouseup="FP_swapImgRestore()" class="heading" onclick="FP_goToURL(/*href*/'explore.php');"></p>
<p class="heading"><img src="asset/logo/LogoText.png" width="242" height="100.5"></p>
<p class="heading">If you haven't already joined the Discord server, you can! Invite: by6mR5N</p>
<p><a href="toolbox.php">i wanna be debugging (advanced users only)</a></p>
</p>
<p id="test" style="display: none;"></p>
<script>
    document.getElementById('test').innerHTML = new wiiShop().connecting
</script>
<script type="text/javascript" src="/js/wiicore.js"></script>
<script>
    //document.getElementById("helpme").innerHTML = location.href
    //wiiec.setSessionValue("connecting", "true");
    /*wiiec.setSessionValue("connecting", "false")
    shop.endWaiting()
    shop.enableHRP()*/
    //sound.playBGM();
    //var ecTimeout = new ECTimeout(parseInt("0"));
</script>