<?php
$query = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
$target = 'https://www.xuanfengshanghang.com/';

if ($query !== '') {
    $target = 'https://www.xuanfengshanghang.com/guide/';
}

header('Location: ' . $target, true, 301);
exit;

