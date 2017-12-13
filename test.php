<?php


$string 	= '23456789abcdefghijkmnpqrstuvwxyzABCEFGHIJKLMNPQRSTUVWXYZ';

$length		= 5;

$width 		= 200;

$height 	= 40;

$font_size	= 25;

$font_file	= "tffs/1.ttf";

$font_file 	= realpath($font_file);

$image 		= imagecreatetruecolor($width, $height);

$color 		= imagecolorallocate($image, mt_rand(230,255), mt_rand(230,255), mt_rand(230,255));

imagefilledrectangle($image, 0, 0, $width, $height, $color);

//$bg			= getimagesize(realpath('bgs/1.jpg'));

//print_r($bg);exit;
//imagecreatefromjpeg()






function getColor($image)
{
	return imagecolorallocate($image, mt_rand(0,200), mt_rand(0,200), mt_rand(0,200));
}

//噪点
for($i =0; $i < 50; $i++ )
{
	imagesetpixel($image, mt_rand(0,$width), mt_rand(0,$height), getColor($image));
}

//验证码
$str = substr(str_shuffle($string),0,$length);

for($i = 0; $i <= $length - 1; $i++)
{
	$x = 10 + ($width/$length) * $i;
	
	$y = mt_rand($font_size,$height);

	imagettftext($image, $font_size, mt_rand(-15,15), $x, $y, getColor($image), $font_file, $str[$i]);
}



$color 	= getColor($image);

//$A 		= mt_rand(1, $height/2)

//线段
$px = $py = 0;

// 曲线前部分
$A 		= mt_rand(1, $height/2);            	// 振幅
$b 		= mt_rand(-$height/4, $height/4);   	// Y轴方向偏移量
$f 		= mt_rand(-$height/4, $height/4);   	// X轴方向偏移量
$T 		= mt_rand($height, $width*2);  			// 周期
$w 		= (2* M_PI)/$T;
                
$px1 	= 0;  									// 曲线横坐标起始位置
$px2 	= mt_rand($width * 0.2, $width * 0.8);  // 曲线横坐标结束位置

for ($px=$px1; $px<=$px2; $px = $px + 1) {
    if ($w!=0) {
        $py = $A * sin($w*$px + $f)+ $b + $height/2;  // y = Asin(ωx+φ) + b
        $i 	= (int) ($font_size/5);
        while ($i > 0) {	
            imagesetpixel($image, $px + $i , $py + $i, $color);  // 这里(while)循环画像素点比imagettftext和imagestring用字体大小一次画出（不用这while循环）性能要好很多				
            $i--;
        }
    }
}

// 曲线后部分
$A 		= mt_rand(1, $height/2);                  	// 振幅		
$f 		= mt_rand(-$height/4, $height/4);   		// X轴方向偏移量
$T 		= mt_rand($height, $width*2);  				// 周期
$w 		= (2* M_PI)/$T;		
$b 		= $py - $A * sin($w*$px + $f) - $height/2;
$px1 	= $px2;
$px2 	= $width;

for ($px=$px1; $px<=$px2; $px=$px+ 1) {
    if ($w!=0) {
        $py = $A * sin($w*$px + $f)+ $b + $height/2;  // y = Asin(ωx+φ) + b
        $i = (int) ($font_size/5);
        while ($i > 0) {			
            imagesetpixel($image, $px + $i, $py + $i, $color);	
            $i--;
        }
    }
}





header('content-type:image/png');

imagepng($image);

imagedestroy($image);

