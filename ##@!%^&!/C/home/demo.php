<?php
namespace jR\C\home;
use jR\M;
use jR\I;
class demo extends Base
{
	public $layout = null;

	public function index()
	{
		dump(parent::$args);
		dump("我是home模块的 demo 控制器中的 index动作!");
		# 父层调用
		parent::jump();
		# 同类调用
		self::demos();
		# 实例化一个M根类
		$ob = new M;
		dump($ob->OneSql("select * from s_config"));
		dump($ob);
		# 实例化一个M模型exit
		$ob = new M\User;
		dump($ob);
		# 生产一个URL地址
		dump(url(['m' => 'home', 's' =>'demo' , 'i' => 'index' , 'index'=> '']));
		# 插件静态化测试
		// I\JScUrl::open('https://www.baicaif.com','get');
		// if(I\JScUrl::send())
		// { # 打印服务器返回的信息
		// 	dump(I\JScUrl::reqHead());
		// 	dump(I\JScUrl::resHead());
		// 	# dump(I\JScUrl::retText());
		// }else
		// { # 打印错误信息
		// 	dump(I\JScUrl::error());
		// }
		# 插件实例化测试
		// $Formula = new I\InterestFormula;
		// print_r( 
		//   $Formula->
		// 	Money(120000)->
		// 	# 利率 8%
		// 	Rate(0.08)->
		// 	# 期数
		// 	Period(3)->
		// 	# 回息公式
		// 	Formula(1)->
		// 	# 利息管理 1.5%
		// 	Manage(0.015)->
		// 	# 平台加息 1.7%
		// 	AIRate(0.020)->
		// 	# 额外加息 0.5%
		// 	EIRate(0.005)->
		// 	# 计息时间
		// 	InterestDate(1402948572)->
		// 	Run()
		// );
		// $ob = new I\JCbank(['18399999999']);
		// $ob::$Fuid = ['18399999999','18305555555'];
		// dump($ob->projectQuery(['bid' => '143714']));
		
	}
	public function demos()
	{
		dump('I am demos!');
	}
}