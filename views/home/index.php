<?php
/**
 * Created by PhpStorm.
 * User: weizhishu
 * Date: 2017/6/9
 * Time: 16:31
 */

?>
<h1>个人信息</h1>
<p>姓名：<?=$user['uname']==''?"No name":$user['uname']; ?></p>
<p>年龄：<?=$user['mobile']==''?"No name":$user['mobile']; ?></p>
<p>国籍：<?=$user['createline']==''?"No name":$user['createline']; ?></p>
<hr/>

<h1>工作信息</h1>
<p>公司：<?=$info['Company'];?></p>
<p>位置：<?=$info['Location'];?></p>
<p>楼层：<?=$info['floor'];?></p>
<?php echo $this->render("about");  ?>
