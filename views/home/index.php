<?php
/**
 * Created by PhpStorm.
 * User: weizhishu
 * Date: 2017/6/9
 * Time: 16:31
 */
echo "<h2>个人信息</h2>";
echo '姓名：'.$user['name']."<br/>";
echo '年龄：'.$user['age']."<br/>";

echo "<h2>职业信息</h2>";
echo "公司：".$info['company']."<br/>";
echo "地址：".$info['location']."<br/>";
echo \yii\helpers\Html::encode("<script>alert(123456)</script>");