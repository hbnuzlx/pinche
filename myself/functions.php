<?php
/**
 * Created by Zhenglianxin.
 * User: weizhishu
 * Date: 2017/6/2
 * Time: 14:41
 */

/**
 * 打印数组不停止后边的操作
 * @param $data
 */
function p($data){
    echo"<pre>";
    print_r($data);
}

/**
 * 打印数据并停止后边操作
 * @param $data
 */
function dd($data){
    echo"<pre>";
    var_dump($data);exit;
}