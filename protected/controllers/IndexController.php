<?php
/**
 * Created by PhpStorm.
 * User: 东哥
 * Date: 2018/5/6
 * Time: 前台控制器
 */

class IndexController extends Controller{
    /**
     * 默认方法
     */
    public function actionIndex(){
        $this->renderPartial('index');
    }
}