<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'modules/mvv/libraries/component/mvv/MvvData.php';
include_once APPPATH.'modules/mvv/libraries/component/mvv/MvvComponent.php';

class MvvModel extends MY_Model{
    public function get_mvv(){
        $data = new MvvData(1);
        $mvv = new MvvComponent($data);
        return $mvv->getHTML();
    }
}