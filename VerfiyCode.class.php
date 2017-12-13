<?php
/**
 * 生成验证码
 */
class VerfiyCode{
	protected $config	= array(
		'key'			=> 'CT-Verfiy',
		'expire'		=>	1800,
		'en_str'		=> '23456789abcdefghijkmnpqrstuvwxyzABCEFGHIJKLMNPQRSTUVWXYZ',
        'zh_str'     	=> '们以我到他会作时要动国产的一是工就年阶义发成部民可出能方进在了不和有大这主中人上为来分生对于学下级地个用同行面说种过命度革而多子后自社加小机也经力线本电高量长党得实家定深法表着水理化争现所二起政三好十战无农使性前等反体合斗路图把结第里正新开论之物从当两些还天资事队批点育重其思与间内去因件日利相由压员气业代全组数果期导平各基或月毛然如应形想制心样干都向变关问比展那它最及外没看治提五解系林者米群头意只明四道马认次文通但条较克又公孔领军流入接席位情运器并飞原油放立题质指建区验活众很教决特此常石强极土少已根共直团统式转别造切九你取西持总料连任志观调七么山程百报更见必真保热委手改管处己将修支识病象几先老光专什六型具示复安带每东增则完风回南广劳轮科北打积车计给节做务被整联步类集号列温装即毫知轴研单色坚据速防史拉世设达尔场织历花受求传口断况采精金界品判参层止边清至万确究书术状厂须离再目海交权且儿青才证低越际八试规斯近注办布门铁需走议县兵固除般引齿千胜细影济白格效置推空配刀叶率述今选养德话查差半敌始片施响收华觉备名红续均药标记难存测士身紧液派准斤角降维板许破述技消底床田势端感往神便贺村构照容非搞亚磨族火段算适讲按值美态黄易彪服早班麦削信排台声该击素张密害侯草何树肥继右属市严径螺检左页抗苏显苦英快称坏移约巴材省黑武培著河帝仅针怎植京助升王眼她抓含苗副杂普谈围食射源例致酸旧却充足短划剂宣环落首尺波承粉践府鱼随考刻靠够满夫失包住促枝局菌杆周护岩师举曲春元超负砂封换太模贫减阳扬江析亩木言球朝医校古呢稻宋听唯输滑站另卫字鼓刚写刘微略范供阿块某功套友限项余倒卷创律雨让骨远帮初皮播优占死毒圈伟季训控激找叫云互跟裂粮粒母练塞钢顶策双留误础吸阻故寸盾晚丝女散焊功株亲院冷彻弹错散商视艺灭版烈零室轻血倍缺厘泵察绝富城冲喷壤简否柱李望盘磁雄似困巩益洲脱投送奴侧润盖挥距触星松送获兴独官混纪依未突架宽冬章湿偏纹吃执阀矿寨责熟稳夺硬价努翻奇甲预职评读背协损棉侵灰虽矛厚罗泥辟告卵箱掌氧恩爱停曾溶营终纲孟钱待尽俄缩沙退陈讨奋械载胞幼哪剥迫旋征槽倒握担仍呀鲜吧卡粗介钻逐弱脚怕盐末阴丰雾冠丙街莱贝辐肠付吉渗瑞惊顿挤秒悬姆烂森糖圣凹陶词迟蚕亿矩康遵牧遭幅园腔订香肉弟屋敏恢忘编印蜂急拿扩伤飞露核缘游振操央伍域甚迅辉异序免纸夜乡久隶缸夹念兰映沟乙吗儒杀汽磷艰晶插埃燃欢铁补咱芽永瓦倾阵碳演威附牙芽永瓦斜灌欧献顺猪洋腐请透司危括脉宜笑若尾束壮暴企菜穗楚汉愈绿拖牛份染既秋遍锻玉夏疗尖殖井费州访吹荣铜沿替滚客召旱悟刺脑措贯藏敢令隙炉壳硫煤迎铸粘探临薄旬善福纵择礼愿伏残雷延烟句纯渐耕跑泽慢栽鲁赤繁境潮横掉锥希池败船假亮谓托伙哲怀割摆贡呈劲财仪沉炼麻罪祖息车穿货销齐鼠抽画饲龙库守筑房歌寒喜哥洗蚀废纳腹乎录镜妇恶脂庄擦险赞钟摇典柄辩竹谷卖乱虚桥奥伯赶垂途额壁网截野遗静谋弄挂课镇妄盛耐援扎虑键归符庆聚绕摩忙舞遇索顾胶羊湖钉仁音迹碎伸灯避泛亡答勇频皇柳哈揭甘诺概宪浓岛袭谁洪谢炮浇斑讯懂灵蛋闭孩释乳巨徒私银伊景坦累匀霉杜乐勒隔弯绩招绍胡呼痛峰零柴簧午跳居尚丁秦稍追梁折耗碱殊岗挖氏刃剧堆赫荷胸衡勤膜篇登驻案刊秧缓凸役剪川雪链渔啦脸户洛孢勃盟买杨宗焦赛旗滤硅炭股坐蒸凝竟陷枪黎救冒暗洞犯筒您宋弧爆谬涂味津臂障褐陆啊健尊豆拔莫抵桑坡缝警挑污冰柬嘴啥饭塑寄赵喊垫丹渡耳刨虎笔稀昆浪萨茶滴浅拥穴覆伦娘吨浸袖珠雌妈紫戏塔锤震岁貌洁剖牢锋疑霸闪埔猛诉刷狠忽灾闹乔唐漏闻沈熔氯荒茎男凡抢像浆旁玻亦忠唱蒙予纷捕锁尤乘乌智淡允叛畜俘摸锈扫毕璃宝芯爷鉴秘净蒋钙肩腾枯抛轨堂拌爸循诱祝励肯酒绳穷塘燥泡袋朗喂铝软渠颗惯贸粪综墙趋彼届墨碍启逆卸航衣孙龄岭骗休借',              // 中文验证码字符串
		'use_zh'     	=> false,           // 使用中文验证码         
		'length'		=> 4,
		'width'			=> 200,
		'height'		=> 40,
		'noise_type' 	=> false,		//干扰点类型    1、*   ;   2、字符串   3、default	
		'noise_num'		=> 50,
		'bg'			=> array(243, 251, 254),		//背景颜色;
		'use_bg'		=> false,		
		'font_file'		=> 'tffs/2.ttf',
		'font_size'		=> '25',
		'bg_file'		=> 'bgs/1.jpg',
		'use_line'		=> false,
	);
	private $image;
	private $color;

	public function __construct($config = array())
	{
		session_start();
		$this->config = array_merge($this->config,$config);   //键相同部分保留后者
	} 

	/**
	 * 画布背景
	 * @return [type] [description]
	 */
	private function createBg()
	{
		if($this->config['use_bg'])
		{

			$path = dirname(__FILE__) . '/' . $this->config['bg_file'];
			if(!file_exists($path))
			{
				throw new Exception($path . 'is not file');
			}
			$pathinfo 	= @getimagesize($path);
			$imagefrom 	= @str_replace('/', 'createfrom', $pathinfo['mime']);
			$bg_image	= $imagefrom($path);
			@imagecopyresampled($this->image, $bg_image, 0, 0, 0, 0, $this->config['width'], $this->config['height'], $pathinfo[0], $pathinfo[1]);
			@imagedestroy($bg_image);

		} else {

			$this->color = imagecolorallocate($this->image, $this->config['bg'][0], $this->config['bg'][1], $this->config['bg'][2]);
			imagefilledrectangle($this->image, 0, 0, $this->config['width'], $this->config['height'], $this->color);
		
		}
	}

	/**
	 * 干扰点    noise_type   1雪花 *   2 字符串  ,可后续添加
	 * @return [type] [description]
	 */
	private function createNoise()
	{
		switch ($this->config['noise_type']) {
			case 1:
				for($i = 0; $i < $this->config['noise_num']; $i++)
				{
					$this->color = imagecolorallocate($this->image, mt_rand(125,255), mt_rand(125,255), mt_rand(125,255));
					imagestring($this->image, mt_rand(1,5), mt_rand(0,$this->config['width']), mt_rand(0,$this->config['height']), '*', $this->color);
				}
				break;
			case 2:
				$strlen = strlen($this->config['en_str']) - 1;
				for($i = 0; $i < $this->config['noise_num']; $i++)
				{
					$this->color = imagecolorallocatealpha($this->image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255),mt_rand(80,127));
					imagestring($this->image, mt_rand(1,5), mt_rand(0,$this->config['width']), mt_rand(0,$this->config['height']), $this->config['en_str'][mt_rand(0,$strlen)], $this->color);
				}
				break;
			default:
				break;
		}
	}


    /** 
     * 画一条由两条连在一起构成的随机正弦函数曲线作干扰线(你可以改成更帅的曲线函数) 
     *      
     *      高中的数学公式咋都忘了涅，写出来
     *		正弦型函数解析式：y=Asin(ωx+φ)+b
     *      各常数值对函数图像的影响：
     *        A：决定峰值（即纵向拉伸压缩的倍数）
     *        b：表示波形在Y轴的位置关系或纵向移动距离（上加下减）
     *        φ：决定波形与X轴位置关系或横向移动距离（左加右减）
     *        ω：决定周期（最小正周期T=2π/∣ω∣）
     *
     */
	private function createLine()
	{
		if($this->config['use_line']){	

			//前半部分
			$px = $py = 0;

			$A = mt_rand(1,$this->config['height']/2);
			$T = mt_rand($this->config['height'],$this->config['width']*2);
			$F = mt_rand(-$this->config['width']/4, $this->config['width']/4);		// x的偏移量
			$B = mt_rand(-$this->config['height']/4, $this->config['height']/4);  	// y的偏移量
			$W = (2 * M_PI) / $T;

			$px1 = 0;
			$px2 = mt_rand($this->config['width']*0.4, $this->config['width']*0.8);

			for($px = $px1; $px <= $px2; $px = $px + 1)
			{
				if($W != 0)
				{
					$py = $A * sin($W * $px + $F) + $B + $this->config['height']/2;
					$i = (int) $this->config['font_size']/5;
					while ($i > 0) {
						imagesetpixel($this->image, $px + $i, $py + $i, $this->color);
						$i--;
					}
				}
			}

			//后半部分
			$A = mt_rand(1,$this->config['height']/2);
			$T = mt_rand($this->config['height']/2,$this->config['width']/2);
			$F = mt_rand(-$this->config['width']/4, $this->config['width']/3);		// x的偏移量
			$B = mt_rand(-$this->config['height']/4, $this->config['height']/3);  	// y的偏移量
			$W = (2 * M_PI) / $T;

			$px1 = $px2;
			$px2 = $this->config['width'];

			for($px = $px1; $px <= $px2; $px = $px + 1)
			{
				if($W != 0)
				{
					$py = $A * sin($W * $px + $F) + $B;
					$i = (int) $this->config['font_size']/5;
					while ($i > 0) {
						imagesetpixel($this->image, $px + $i, $py + $i, $this->color);
						$i--;
					}
				}
			}
		}
	}

	/**
	 * 验证码
	 * @return [type] [description]
	 */
	private function writeCode()
	{


        $this->color 	= imagecolorallocate($this->image,mt_rand(0,156),mt_rand(0,156),mt_rand(0,156));	
        $font_file 		=  dirname(__FILE__) . '/' . $this->config['font_file'];
     	if(!file_exists($font_file))
     	{
     		throw new \Exception($font_file . ' is not file');
     	}

     	$_x = ($this->config['width']/$this->config['length'] - $this->config['font_size'])/2;

        if($this->config['use_zh'])
        { // 中文验证码

            for ($i = 0; $i < $this->config['length']; $i++) 
            {

            	$mb_strlen 	= mb_strlen($this->config['zh_str'],'utf-8') - 1;
            	$code[$i]	= mb_substr($this->config['zh_str'],mt_rand(0,$mb_strlen), 1, 'utf-8');
            	imagettftext($this->image, $this->config['font_size'], mt_rand(-40, 40), $_x + $this->config['width']/$this->config['length'] * $i, $this->config['font_size']*1.3, $this->color, $font_file, $code[$i]);
             }
        }else{
            for ($i = 0; $i<$this->config['length']; $i++) 
            {
            
                $strlen 	= strlen($this->config['en_str']) - 1;
            	$code[$i]	= substr($this->config['en_str'],mt_rand(0,$strlen), 1);
            	imagettftext($this->image, $this->config['font_size'], mt_rand(-40, 40), $_x + $this->config['width']/$this->config['length'] * $i, $this->config['font_size']*1.3, $this->color, $font_file, $code[$i]);
            
            }
        }
        $this->authCode($code);
	}

	public function outPut()
	{
        header('Cache-Control: private, max-age=0, no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0', false);		
        header('Pragma: no-cache');
        header("content-type: image/png");
		imagepng($this->image);
		imagedestroy($this->image);
	}

	/**
	 * 创建
	 */
	public function create()
	{
		$this->image = imagecreatetruecolor($this->config['width'], $this->config['height']);
		$this->createBg();
		$this->createNoise();
		$this->writeCode();
		$this->createLine();
		$this->outPut();
	}

	/**
	 * 验证码验证
	 * @return [type] [description]
	 */
	public function check($code)
	{
		$key 		= substr(md5($this->config['key']), 3, 8);
        $str 		= substr(md5($code), 5, 10);

        $secode 	= md5($key . $str . $code);

        if(empty($code) OR empty($secode))
        {
        	return false;
        }

        if($secode == $_SESSION['verfiy']['verfiy_code'] && time() - $_SESSION['verfiy']['verfiy_time'] < $this->config['expire'])
        {
        	return true;
        } else {
        	return false;
        }

	}

	/**
	 * 用session保存字符串
	 * @param  [type] $code [description]
	 * @return [type]       [description]
	 */
	public function authCode($code)
	{
		$code_str 				= strtolower(implode('', $code));

        $key 					= substr(md5($this->config['key']), 3, 8);
        $str 					= substr(md5($code_str), 5, 10);

        $secode['verfiy_code'] 	= md5($key . $str . $code_str);
        $secode['verfiy_time'] 	= time();

        $_SESSION['verfiy'] = $secode;
	}
}