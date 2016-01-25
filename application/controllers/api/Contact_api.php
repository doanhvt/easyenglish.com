<?php
require APPPATH . '/libraries/REST_Controller.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Contact_api extends REST_Controller{
    public function __construct(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        parent::__construct();
    }
    public function addcontact_post(){
        $data = $this->post();
        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'somthing';
        $response['data'] = $data;
        $this->response($response);
    }
}
