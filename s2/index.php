<?php
include_once('./../s1/includes/jssdk.php');
define('WECHAT_APPID','wx0c575952de7687ec');
define('WECHAT_SECRET','47d300c9a3392f41a6fe9dc7a4f99ed8');

$wechat_share = array(
    'title'=>'做洗发水生意的秘诀！',
    'desc' => '舒蕾秀发',
    'link' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"],
    'imgUrl' => 'http://'.$_SERVER['HTTP_HOST'].'/s1/images/share.png'
    );
$jssdk = new Jssdk(WECHAT_APPID, WECHAT_SECRET);
$sign_package = $jssdk->getSignPackage();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>HTML Mobile</title>
<link rel="stylesheet" href="css/common.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/swiper.3.1.2.jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.imgpreload.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>

<!--移动端版本兼容 -->
<script type="text/javascript">
         var phoneWidth =  parseInt(window.screen.width);
         var phoneScale = phoneWidth/640;
         var ua = navigator.userAgent;
         if (/Android (\d+\.\d+)/.test(ua)){
                   var version = parseFloat(RegExp.$1);
                   if(version>2.3){
                            document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
                   }else{
                            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
                   }
         } else {
                   document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
         }
</script>
<!--移动端版本兼容 end -->
 <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<!--移动端版本兼容 -->
<script type="text/javascript">
   wx.config({
    debug: false,
    appId: '<?php echo $sign_package["appId"];?>',
    timestamp: <?php echo $sign_package["timestamp"];?>,
    nonceStr: '<?php echo $sign_package["nonceStr"];?>',
    signature: '<?php echo $sign_package["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
      'onMenuShareTimeline',
      'onMenuShareAppMessage'
      ]
    });
   var server_path = window.location.href.replace("#","");
   wx.ready(function () {
    wx.onMenuShareAppMessage({
      title: '<?php echo $wechat_share["title"]?>',
      desc: '<?php echo $wechat_share["desc"]?>',
      link: '<?php echo $wechat_share["link"]?>',
      imgUrl: '<?php echo $wechat_share["imgUrl"]?>',
      trigger: function (res) {
        // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
        //alert('用户点击发送给朋友');
      },
      success: function (res) {
        //alert('已分享');
      },
      cancel: function (res) {
        //alert('已取消');
      },
      fail: function (res) {
        //alert(JSON.stringify(res));
      }
    });
    wx.onMenuShareTimeline({
      title: '<?php echo $wechat_share["title"]?>',
      desc: '<?php echo $wechat_share["desc"]?>',
      link: '<?php echo $wechat_share["link"]?>',
      imgUrl: '<?php echo $wechat_share["imgUrl"]?>',
      trigger: function (res) {
        // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
        //alert('用户点击发送给朋友');
      },
      success: function (res) {
        //alert('已分享');
      },
      cancel: function (res) {
        //alert('已取消');
      },
      fail: function (res) {
        //alert(JSON.stringify(res));
      }
    });
  });
</script>
</head>

<body>

<div class="page loadingPage">
	<div class="h832">
    	<div class="innerDiv">
        	<div class="loadingBlock">
            	<div class="innerDiv">
                	<div class="loadingBg"></div>
                    <img src="images/loadingImg1.png" class="abs loadingImg1">
                    <div class="loadingTxt">
                    	<font style="font-size:44px;"><span>0</span>%</font><br>精彩载入中……
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page pageIndex" style="display:none;">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page1Img1t.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page2Img1.png" class="abs bgImg">
                        <img src="images/page2Img2.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page3Img1t.png" class="abs bgImg">
                        <img src="images/page3Img2.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page4Img1.png" class="abs bgImg">
                        <img src="images/page4Img2.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page5Img1.png" class="abs bgImg">
                        <img src="images/page5Img2.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page6Img1.png" class="abs bgImg">
                        <img src="images/page6Img2.png" class="abs bgImg page6Img2" onClick="page6Act();">
                        <img src="images/page6Img3.png" class="abs bgImg page6Img3" style="display:none;">
                        <img src="images/page6Img4.png" class="abs bgImg page6Img4" style="display:none;">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page7Img1.png" class="abs bgImg">
                        <img src="images/page7Img2.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page8Img1.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page9Img1.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page10Img1.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page11Img1.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page12Img1.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page13Img1.png" class="abs bgImg">
                        <img src="images/page13Img2.png" class="abs bgImg">
                        <img src="images/page13Img3.png" class="abs bgImg">
                        <img src="images/page13Img4.png" class="abs bgImg">
                        <img src="images/page13Img5.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page14Img1.png" class="abs bgImg">
                        <img src="images/page14Img2.png" class="abs bgImg">
                        <img src="images/page14Img3.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page15Img1.png" class="abs bgImg">
                        <img src="images/page15Img2.png" class="abs bgImg">
                        <img src="images/page15Img3.png" class="abs bgImg">
                        <img src="images/page15Img4.png" class="abs bgImg">
                        <img src="images/page15Img5.png" class="abs bgImg">
                        <img src="images/page15Img6.png" class="abs bgImg">
                        <img src="images/page15Img7.png" class="abs bgImg">
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page16Img1.png" class="abs bgImg">
                        <a href="javascript:void(0);" class="abs page16Btn1"><img src="images/page16Btn1.png"></a>
                        <a href="javascript:void(0);" class="abs page16Btn2"><img src="images/page16Btn2.png"></a>
                        <a href="javascript:void(0);" class="abs page16Btn3"><img src="images/page16Btn3.png"></a>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="h832">
                    <div class="innerDiv">
                        <img src="images/page17Img1.png" class="abs bgImg">
                        <input type="text" class="inputTxt inputTxt1">
                        <input type="text" class="inputTxt inputTxt2">
                        <input type="text" class="inputTxt inputTxt3">
                        <a href="javascript:void(0);" class="abs page17Btn1"><img src="images/page17Btn1.png"></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<img src="images/logo1.png" class="logo1">

</body>
</html>
