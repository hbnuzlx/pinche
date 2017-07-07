<?php
namespace app\controllers;

use app\models\Category;
use yii\base\Controller;
use app\models\Users;
use yii\data\Pagination;
use yii\data\Sort;
use yii\helpers\Inflector;
use yii\widgets\LinkPager;

class HomeController extends Controller{

    public $layout="nimei";//设置默认父类模板文件
    public function actionIndex(){
        $data = \Yii::$app->request;
        $order = $data->get("order_id",'999999999');
//        dd($order);//exit;
        $id = $data->get('id',1);//$_GET['id'];
//        echo $id;exit;
        $sql = "select * from users where id=:id";
//        $user = Users::findBySql($sql,[':id'=>$id])->all();

//        $user = Users::find()->asArray()->where(['like','uname','郑'])->all();
//        foreach(Users::find()->batch(2) as $val){
//            $user[] = $val;
//        }
//        $user = Users::find()->batch(2);//->where([1])->all();
        $user = new Users();
        $res = "";
//        $user->uname = "滴答";
//        $user->mobile = "18701372656";
//        $user->createtime = "1499065199";
//        $user->updatetime = "1499065199";
//        $res = $user->insert();
//        $res = $user->attributes['id'];


        echo '<meta charset="utf-8" /><pre>';var_dump($res);exit;
//        echo $user['name'];exit;
//        $user = array("name"=>"郑连新","age"=>"26","Country"=>"China");
        $info = array("Company"=>"北京微指数科技有限公司","Location"=>"北京市朝阳区浦项中心","floor"=>"5");
//        return $this->renderPartial("index",compact("user",'info'));
        return $this->render("index",compact("user",'info'));
    }

    public function actionAbout(){
//        echo "aaaaa";exit;
        $this->layout = "nimei";
        $user = array("name"=>"郑连新","age"=>"26","Country"=>"China");
        $info = array("Company"=>"北京微指数科技有限公司","Location"=>"北京市朝阳区浦项中心","floor"=>"5");
//        return $this->renderPartial("index",compact("user",'info'));
//        return $this->render("index");
        return $this->render("about",compact("user",'info'));
    }

    public function actionCateuser(){
//        $cates = Category::findOne(2);//find()->where([">",'id',0])->all();
//        $cate_id = $cates->attributes['id'];
//        $users = Users::find()->where(['cate_id'=>$cate_id])->all();
//        $users = $cates->hasMany(Users::className(),['cate_id'=>'id'])->all();
//        $users = $cates->getUsersByCate();
//        $cates = Users::find()->all();
//        foreach($cates as $val){
//            $users[] = $val->cate;
//        }
//        $users = Users::find()->with("cate")->asArray()->all();
        $users = Users::find()->where(['>','id','0']);//->count();
        $count = $users->count();
//        $p = $_GET['p'];
        $page = new Pagination(['totalCount'=>$count,'defaultPageSize'=>2]);
//        echo LinkPager::widget([
//            'pagination' => $page,
//        ]);
        $sort = new Sort([
            'attributes'=>[
                'createtime'=>['asc'=>['createtime'=>SORT_ASC],'desc'=>['createtime'=>SORT_DESC],'default'=>SORT_ASC,'label' => Inflector::camel2words('createtime'),]
            ]
        ]);
        $info = $users->offset($page->offset)->limit($page->limit)->orderBy($sort->orders)->asArray()->all();
//        echo $sort->createUrl('createtime');
        echo '<meta charset="utf-8" /><pre>';var_dump($info);echo $page->limit,'---',$page->offset;exit;
        $this->render();
    }

    public function actionLogin(){
//        echo "登陆界面";exit;
        $this->render("login");
    }

}