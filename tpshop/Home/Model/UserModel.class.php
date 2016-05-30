<?php
namespace Home\Model;
class UserModel extends \Think\Model {
    protected $_validate = array(
        // array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('username','/^\w{5,16}$/','用户名需为a-z0-9_组成的6-16位',1,'regex',1),
        array('email' , 'email' , 'email不对' , 1, '' ,1),
        array('password' , '6,16' , '密码长度应在6-16位' , 1 , 'length' , 1),
        array('rpwd' , 'password' , '2次密码不一致' , 1 , 'confirm' , 1),
    
      );


    public function reg() {
        $this->encPass();
        return $this->add();
    }

    /**
    * 用明文密码+salt生成md5
    */
    public function encPass() {
        $this->salt();
        $this->password = md5($this->salt . $this->password);
    }

    /**
    * 为对象自身的salt属性赋随机值
    */
    public function salt() {
        if(! isset($this->salt) ) {
            $this->salt = $this->randStr();
        }

        return $this->salt;
    }

    /**
    * 生成随机字符串,当盐使用
    */
    public function randStr($length = 8) {
        $str = 'ABCDEFGHIJKLMNOQPRSTUVWXYZabcdefghijklmnoqprstuvwxyz1234567890';
        return substr( str_shuffle($str) , 0 , $length);
    }

    /**
    * 检测用户的密码
    */
    public function checkPass($password) {
        $encpass = $this->password;  // encpass是md5后密码
        $this->password = $password; // password是明文密码
        $this->encPass(); // $this->password又被加密了

        return $this->password === $encpass;
    }

    /**
    * 设置用户cookie
    */
    public function auth() {
        cookie('user_id' , $this->user_id);
        cookie('username' , $this->username);
        cookie('ccode' , encCookie($this->user_id,$this->username));
    }
}