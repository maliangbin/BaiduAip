<?php
/**
 * @package: aip-php-sdk-2.2.2
 * @description: test.php
 * @author: maliangbin Email:maliangbin@hoge.cn
 * @link: http://www.hoge.cn
 * @version: 1.0
 * @date: 2019/1/5
 */


require_once 'AipImageCensor.php';

// 你的 APPID AK SK
const APP_ID = '15345516';
const API_KEY = 'tlnZuU8CtEkZzOcjK3wfrNO9';
const SECRET_KEY = 'feew2Gn3XwpKaCCGcOmC1yRmLdR9dov5';

$client = new AipImageCensor(APP_ID, API_KEY, SECRET_KEY);

// 修改测试用语
$res = $client->antiSpam('卧槽很牛掰');

var_dump($res);exit;