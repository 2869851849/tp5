<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
 
    	echo 'hello world';
  		//if (is_dir($dir)){

		// 	if ($dh = opendir($dir)){

		// 		while (($file = readdir($dh))!= false){

		// 			//文件名的全路径 包含文件名

		// 			$filePath = $dir.$file;

		// 			//获取文件修改时间

		// 			$fmt = filemtime($filePath);

		// 			echo "<span style='color:#666'>(".date("Y-m-d H:i:s",$fmt).")</span> ".$filePath."<br/>";
		// 		}
		// 		closedir($dh);
		// 	}
		// }

		// if(is_dir($dir)){
		// 	if($dh = opendir($dir)){
		// 		while (($file = readdir($dh) != false)) {
		// 			$filePath = $dir .$file;	//拼接文件路径
		// 			$fmt = filemtime($filePath);  //获取更新时间

		// 		}
		// 		closedir($dh);
		// 	}
		// }
		// $file = scandir($dir);
		// var_dump($file);
		// 
		// 
		// 
		// 索引相关
		// 
		//按照唯一性 有唯一索引 和 非唯一索引
		//普通索引
		//唯一索引（所有值都只能出现一次） 可以为空
		//主键（属于唯一索引）  			不可以为空
		//按照个数 分为 单列索引 和 复合索引
		//单列索引  索引列为一列的情况,即新建索引的语句只实施在一列上
		//联合索引（多列索引）  表中有多个字段建立了索引  单列索引还有个有点就是最做前缀
		//复合索引  用户可以在多个列上建立索引，这种索引叫做复合索引(组合索引)
		//
		//
		//索引相当于目录中的 表示 如 a-130页  是一个指针清单
		//但索引也不是越多越好 带索引的表占用更多的存储空间 同样对表的数据的增删操作带来的索引维护时间也会增加
		//
		//
		//按照存储结构：分为聚集索引和分聚集索引
		//聚集索引 是 对磁盘上的实际数据重新组织按照一定的列或者多列值排序  一个表只能有一个聚集索引
		//非聚集索引 相当于字典中的偏旁部首查询 也相当于目录  一个表可以有多个非聚集索引 每个非聚集索引可以根据索引类的不同提供不同的排列顺序
		//数据表被创建的时间 在磁盘中分配了8K的内存
		//
		//
		//sql查询优化
		//1：避免全表扫描 在where或order by 的列上建立索引
		//2：避免where字句中对字段进行为null判断
		//3：避免where中使用！= <>  否则引擎会放弃索引而进行全表扫描
		//4：避免where中使用or查询 可以使用union all （union all 不是很清楚）
		//5：避免使用in,not in 否则会导致全表扫描
		//6：李%  也会引起全表扫描
		//7：在where中使用参数也会导致全表扫描  num - @num  不是很理解
		//8：避免where中对字段进行表达式操作，会引起引擎放弃索引而全表扫描
		//9：避免where中对字段进行函数操作，会引起引擎放弃索引而全表扫描
		//10：不要在where中的“=”的左边进行函数，算数后其他表达式运算，否则系统可能无法正确使用索引
		//11：应尽可能的让字段顺序与索引顺序相一致。
		//12：用exists 代替in 
		//13：表的索引尽量不要超过六个
		//14：尽量使用数字型字段，若只含数值信息的字段尽量不要设计为字符型，这会降低查询和连接的性能，并会增加存储开销
		//15：尽量使用varchar/nvarchar代替chr/ncahr 变长字段存储空间小  (nvarchar 是unicode编码的可变长度类型，varchar是非unicode可变长度类型  两者最大长度不一样 nvarchar最大长度是4000 varchar最大长度是8000)
		//16：任何时候都不要使用select * from t
		//17：尽量避免向客户端返回大数据量，若数据量过大，应该考虑相应需求是否合理。
		//18：避免大事物执行操作，提高系统并发能力
		//19：在所有的存储过程和触发器开始处设置set nocount on 在结束时设置set nocount off
		//
		//
		//
		//防止sql注入
		//
		//1：正则过滤参数
		//2：字符串参数过滤
		//3：检测是否包含非法字符
		//4：js不安全字符屏蔽
		//
		//    	
		//public private protected
		//
		//public 公共类型 子类可用self：：var调用public的方法和属性 parent::method 调用父类方法。在实例中可以用$obj->var调用public的方法和属性
		//
		//protected 受保护的  子类可以用self::var调用protected的方法和属性，parent::method 调用父类方法。实例中不能通过$obj->var来调用protected类型的方法和属性
		//private  私有的  该类型的属性和方法只能在该类中使用，在该类的实力中，子类中，子类的实例中都能使用
		//
		//
		//
		//autoload
		//
		//construct destruct  get（获取对象不存在的属性或无法访问的属性时调用） set  issue  unset  call（调用对象方法不存在或不允许被调用时此方法会被调用） callstatic  sleep(序列化)  wakeup  clone tostring  autoload  __invoke（呼叫  吧对象当方法用的时候） 
		//
		//
		//
		//魔术方法  
		//construct  构造函数 方法调用前先执行
		//destruct  方法销毁前/释放前执行  
		//clone 	克隆对象
		//_get 		获取不存在的属性时
		//_set 		设置不存在的属性时
		//call 		调用不存在的成员方法时起保护作用
		//callstaic  调用不存在的静态成员方法是起保护作用
		//issue  
		//unset  sleep wakeup  
		//autoload   类的自动加载 
		//tostring 	把对象当字符串使用时调用  


    }

}
