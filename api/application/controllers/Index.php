<?php
class Index extends CI_Controller {  //controllerはCI_Controllerを継承する
    public function __construct() {  //必ず呼び出される
        parent::__construct();
    }

    public function index() { //メソッド名を指定しなかったらここにたどり着く
        $this->load->helper('url'); //urlヘルパーを呼び出す。かっこの中以外テンプレ
        $this->load->view('index'); //views/index.phpを呼び出す
    }
}
?>