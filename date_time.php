<?php
/**
 * 日期和时间测试
 *
 */

echo 'default timezone:', date_default_timezone_get();

echo '</br>';

// date_default_timezone_set('RPC');
date_default_timezone_set('Asia/Shanghai');

echo 'now set default timezone:', date_default_timezone_get();
echo '</br>';

//获取一天的起止时间
echo strtotime( date('Ymd') );


//获取某时间到今天的具体天数