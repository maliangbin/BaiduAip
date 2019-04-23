<?php
require_once __DIR__ . '/vendor/autoload.php';

use Baidu\Aip\AipImageCensor;

// 你的 APPID AK SK.第二次修改
const APP_ID = 'your APP_ID';
const API_KEY = 'your API_KEY';
const SECRET_KEY = 'your SECRET_KEY';

$client = new AipImageCensor(APP_ID, API_KEY, SECRET_KEY);

$res = $client->antiSpam('卧槽尼玛 文明用语');

var_dump($res);exit;