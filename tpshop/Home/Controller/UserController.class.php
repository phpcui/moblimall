<?php
namespace Home\Controller;
class UserController extends \Think\Controller {
    protected $model = null;

    public function __construct() {
        parent::__construct();
        $this->model = D('User');
    }

    public function zhuce() {
        if(!IS_POST) {
            $this->display('user_login');
        } else {
            $verify = new \Think\Verify();
            /*if ( !$verify->check($_POST['vcode']) ) {
                echo '验证码不对';
                exit;
            }*/

            if( $this->model->create() && $this->model->reg() ) {
                echo '注册成功';
            } else {
                echo $this->model->getError();
            }
        }
    }

    public function login() {
        $this->model->where(array('username'=>I('post.username')));
        if( !$this->model->find() ) {
            exit('用户名不存在');
        }

        // 查到用户之后,model内部的变化
        if(!$this->model->checkPass($_POST['password'])) {
            exit('密码不对');
        }

        $this->model->auth();
        $this->redirect('/');
    }

    public function logout() {
        cookie('user_id' , null);
        cookie('username' , null);
        cookie('ccode' , null);
        $this->redirect('/');
    }

    public function vcode() {
        $verify = new \Think\Verify();
        $verify->imageW = 100;
        $verify->imageH = 40;
        $verify->fontSize = 14;
        $verify->length = 4;
        $verify->entry();
    }
}