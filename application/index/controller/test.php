<?php

$arr = array();
$count = count($arr);
for($i = 0;$i < $count;$i++){
	for($j = 0; $j< $count -$i - 1;$j++){
		if($arr[$j] > $arr[$j+1]){
			$tem = $arr[$j+1];
			$arr[$j] = $tem;
			$arr[$j+1] = $arr[$j];
		}

	}
}
//查看文件下的文件或目录
//方法一
$dir = './..';
$opendir = scandir($dir);
dump($opendir);
//方法二
if(is_dir($dir)){
	if($dh = opendir($dir)){
		while ($file = readdir($dh) == false) {
			$file[] = $dir.$file;
			$filetime = filemtime($dir.$file);
		}
		closedir($dir);
	}else{

	}
}
redis  相关命令
del key  删除key
dump key 序列化给定的key 并返回被序列化的值
exists key 检测给定的key是否存在
expire key seconds  给key设置过期时间
expires key timestamp 设置可以过期时间  参数是时间戳
expire key millseconds 设置过期时间以毫秒计
expire key millsecond-timestamp  设置key过期时间的时间戳以毫秒计
keys pattern  查找所有符合给定模式的key
move key db  将当前数据库的可以移动到给定的数据库db中
persist key  一处key的国企时间 key 將持久保持
pttl key  一毫秒为单位返回key的剩余过期时间
ttl  key  以秒为单位返回key的剩余生存时间

randomkey  从数据库中随机返回一个key

rename key newkey    修改key的名字为newkey

renamenx key newkey 仅当newkey不存在时  将key改名为newkey


type key 返回key所储存的值得类型

?>