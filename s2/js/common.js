//找到url中匹配的字符串
function findInUrl(str){
	url = location.href;
	return url.indexOf(str) == -1 ? false : true;
}
//获取url参数
function queryString(key){
    return (document.location.search.match(new RegExp("(?:^\\?|&)"+key+"=(.*?)(?=&|$)"))||['',null])[1];
}

//产生指定范围的随机数
function randomNumb(minNumb,maxNumb){
	var rn=Math.round(Math.random()*(maxNumb-minNumb)+minNumb);
	return rn;
	}
	
var wHeight;
$(document).ready(function(){
	wHeight=$(window).height();
	if(wHeight<832){
		wHeight=832;
		}
	$('.page').height(wHeight);
	$('.swiper-slide').height(wHeight);
	
	$('.h832').css('padding-top',(wHeight-832)/2+'px');
	
	
	var the_images = [];
	var imgs = document.images;
	for (var i = 0; i < imgs.length; i++) {
		the_images.push(imgs[i].src);
		}
	
	var num = 1;
	var lHeight=527;
	jQuery.imgpreload(the_images,
	{
		each: function()
		{
			var pattern = new RegExp( "i=(\\d)", "gi" );
			var m = pattern.exec($(this).attr('src'));
			var status = $(this).data('loaded')?'success':'error';
			$('.loadingTxt').find('span').html(parseInt(100*(num/the_images.length)));
			$('.loadingBg').css('height',parseInt(num/the_images.length*lHeight)+'px');
			++num;
		},
		all: function()
		{
			goIndex();
		}
	});
	
	});
	
function goIndex(){
	$('.loadingPage').fadeOut(500);
	$('.pageIndex').fadeIn(500);
	$('.logo1').fadeOut(500);
	
	var mySwiper = new Swiper ('.swiper-container', {
		direction: 'vertical',
		loop: false,
		onSlideChangeStart:function(e){
			if( e.activeIndex == 0){
				
			}
		}
	});
	
	}
	
function page6Act(){
	$('.page6Img2').fadeOut(1000);
	$('.page6Img3').fadeIn(1000);
	setTimeout(function(){
		$('.page6Img4').fadeIn(1000);
		},2000);
	}