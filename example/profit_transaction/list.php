<?php
/* *
 * Ping++ Server SDK
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可根据自己网站需求按照技术文档编写, 并非一定要使用该代码。
 * 该代码仅供学习和研究 Ping++ SDK 使用，仅供参考。
*/
require dirname(__FILE__) . '/../../init.php';
// 示例配置文件，测试请根据文件注释修改其配置
require dirname(__FILE__) . '/../config.php';

//分账明细列表示例
$params = [
    'app' => APP_ID,
    'page' => 1,
    'per_page' => 10,
];
$profit_transactions = \Pingpp\ProfitTransaction::all($params);
echo $profit_transactions . PHP_EOL;
