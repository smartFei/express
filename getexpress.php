<?php
header('Content-Type:application/json; charset=utf-8');
echo getApiData($_GET['nu']);

function getApiData($nu='')
{
    $url = 'https://service-aso0zwjk-1259654864.gz.apigw.tencentcs.com/release/express_api';
    $data = [
        'nu' => $nu
    ];
    $ch = curl_init();
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    //释放curl句柄
    curl_close($ch);
    //返回数据
    return $output;
}

