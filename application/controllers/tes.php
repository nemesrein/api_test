<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class tes extends REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    public function test_get(){
        echo "test get";
    }
    public function test_post(){
        echo "test post";
    }
    public function test_delete(){
        echo "test delete";
    }
    public function test_put(){
        echo "test put";
    }
}
?>