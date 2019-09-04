<?php
class Softbank extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        echo '会社です。';
    }

    public function father() {
        echo '犬です。';  //非同期の場合はreturnじゃなくてecho
    }

    public function family($person) {
        echo $person.'です。';
    }
}
?>