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
			if(parseInt(100*(num/the_images.length))>40){
				$('.loadingImg1').show();
				$('.loadingTxt').show();
				$('.loadingBg').show();
				}
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
	
	setTimeout(function(){
		
		$('.p4L1').stop().animate({height:135},'500','linear',function(){
			$('.p4L2').stop().animate({height:150},'500','linear',function(){
				$('.p4L3').stop().animate({height:170},'500','linear',function(){
					$('.page1Img2').fadeIn(500);
					setTimeout(function(){
						$('.p4L4').stop().animate({height:20},'330','linear',function(){
							$('.p4L5').stop().animate({height:90},'330','linear',function(){
								$('.p4L6').stop().animate({height:155},'330','linear',function(){
									$('.page1Img3').fadeIn(500);
									});
								});
							});
						},1000);
					});
				});
			});
		},600);
	
	var mySwiper = new Swiper ('.swiper-container', {
		direction: 'vertical',
		loop: false,
		onSlideChangeStart:function(e){
			if( e.activeIndex == 1){
				$('.page2Img2').addClass('upShow').show();
				}
				else if( e.activeIndex == 2){
					$('.page3Img2').addClass('upShow').show();
					}
					else if( e.activeIndex == 3){
						$('.page5Img2').addClass('upShow').show();
						}
						else if( e.activeIndex == 4){
							$('.page4Img2').addClass('upShow').show();
							}
							else if( e.activeIndex == 7){
								$('.page8Img1').fadeIn(1000);
								}
								else if( e.activeIndex == 8){
									$('.page9Img1').fadeIn(1000);
									}
									else if( e.activeIndex == 9){
										$('.page10Img1').fadeIn(1000);
										}
										else if( e.activeIndex == 10){
											$('.page11Img1').fadeIn(1000);
											}
											else if( e.activeIndex == 11){
												$('.page12Img1').fadeIn(1000);
												}
												else if( e.activeIndex == 12){
													$('.page13Img').fadeIn(1000);
													}
													else if( e.activeIndex == 13){
														$('.p14-t').addClass('upShow').show();
														$('.p14-i1').addClass('p14-i1Act');
														$('.p14-i2').addClass('p14-i2Act');
														$('.p14-i3').addClass('p14-i3Act');
														$('.p14-i4').addClass('p14-i4Act');
														$('.p14-i5').addClass('p14-i5Act');
														}
			}
		});
	}
	
function page6Act(){
	$('.page6Img2').fadeOut(1000);
	$('.page6Img3').fadeIn(1000);
	setTimeout(function(){
		$('.page6Img4').fadeIn(1000);
		setTimeout(function(){
			$('.page6Img1').fadeOut(500);
			$('.page6Img3').fadeOut(500);
			$('.page6Img4').fadeOut(500);
			$('.page7Img1').fadeIn(1000);
			$('.page7Img2').addClass('upShow').show();
			},2000);
		},2000);
	}
	
var qStep=1;
function goNextQues(){
	if(qStep==1){
		qStep++;
		$('.q1').hide();
		$('.q2').fadeIn(500);
		}
		else if(qStep==2){
			qStep++;
			$('.q2').hide();
			$('.q3').fadeIn(500);
			}
			else if(qStep==3){
				$('.pageIndex').hide();
				$('.lastPage').fadeIn(1000);
				}
	}