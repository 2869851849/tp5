<?php
namespace app\index\controller;

class User{
    public $name;
    private $passwd;
    protected $email;    
    public  function __construct(){
        //print __CLASS__." ";
        $this->name= 'simple';
        $this->passwd='123456';
        $this->email = 'bjbs_270@163.com';
    }    
    public function show(){
        print "good ";
    }    
    public function inUserClassPublic() {
        print __CLASS__.'::'.__FUNCTION__." ";
    }    
    protected  function inUserClassProtected(){
        print __CLASS__.'::'.__FUNCTION__." ";
    }    
    private function inUserClassPrivate(){
        print __CLASS__.'::'.__FUNCTION__." ";
    }
}

class simpleUser extends User {    
    public function __construct(){        
        //print __CLASS__." ";
        parent::__construct();
    }
    
    public function show(){
        print $this->name."//public ";        
        print $this->passwd."//private ";
        print $this->email."//protected ";
    }
    
    public function inSimpleUserClassPublic() {
        print __CLASS__.'::'.__FUNCTION__." ";
    }
    
    protected function inSimpleUserClassProtected(){
        print __CLASS__.'::'.__FUNCTION__." ";
    }
    
    private function inSimpleUserClassPrivate() {
        print __CLASS__.'::'.__FUNCTION__." ";
    }
}

class adminUser extends simpleUser {
    protected $admin_user;
    public function __construct(){
        //print __CLASS__." ";
        parent::__construct();
    }
    
    public function inAdminUserClassPublic(){
        print __CLASS__.'::'.__FUNCTION__." ";
    }
    
    protected function inAdminUserClassProtected(){
        print __CLASS__.'::'.__FUNCTION__." ";
    }
    
    private function inAdminUserClassPrivate(){
        print __CLASS__.'::'.__FUNCTION__." ";
    }
}

class administrator extends adminUser {
    public function __construct(){        
        parent::__construct();
    }
}

/**
 * 在类的实例中 只有公有属性和方法才可以通过实例化来调用
 */
$s = new administrator();
print '-------------------';
$s->show();






?>
