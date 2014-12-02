<?php

/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 14-9-10
 * Time: 上午11:58
 */
class TestController extends Controller {
    public function  actionLog() {
        $now = time();
        Yii::log('error', 'userid', $now, 'ywh', 'ywh', 'testlog');
    }

    public function  actionExportCsv() {
        $users = array(
            array("用户名", "部门", "职称"),
            array("user1", "1", "秘书处", "科员"),
            array("user2", "2", "办公室", "科员"),
            array("user3", "3", "后勤处", "科员"),
        );
        $handle = fopen("html/csvfile.csv", "w");
        foreach ($users as $line) {
            fputcsv($handle, $line);
        }
        fclose($handle);
    }

    public function actionAuthManager() {
        $auth = Yii::app()->authManager;
        $auth->createOperation('createPost', 'create a post');
        $auth->createOperation('readPost', 'read a post');
        $auth->createOperation('updatePost', 'update a post');
        $auth->createOperation('deletePost', 'delete a post');
        $bizRule = 'return Yii::app()->user->id==$params["post"]->authID;';

        $task = $auth->createTask('updateOwnPost', 'update a post by author himself', $bizRule);
        $task->addChild('updatePost');

        $role = $auth->createRole('reader');
        $role->addChild('readPost');

        $role = $auth->createRole('author');
        $role->addChild('reader');
        $role->addChild('createPost');
        $role->addChild('updateOwnPost');


        $role = $auth->createRole('editor');
        $role->addChild('reader');
        $role->addChild('updatePost');

        $role = $auth->createRole('admin');
        $role->addChild('editor');
        $role->addChild('author');
        $role->addChild('deletePost');
        $auth->assign('reader', 'readerA');
        $auth->assign('author', 'authorB');
        $auth->assign('editor', 'editorC');
        $auth->assign('admin', 'adminD');

//检查权限
        $auth->checkAccess('deletePost');
    }

    public  function initAuthManager(){
          $auth = Yii::app()->authManager;
        $arrOps = array(
            'index' => '日志列表',
            'view' => '查看日志',
            'create' => '添加日志',
            'update' => '更新日志',
            'delete' => '添加列表',
        );
        $auth->addOperation($arrOps);

        $arrChild = array('index','view','create','update','delete');
        $name = 'admin';
        $auth->addRole($name,$arrChild);

        $userId = 1;
         $auth->assign('admin',$userId);
    }
}