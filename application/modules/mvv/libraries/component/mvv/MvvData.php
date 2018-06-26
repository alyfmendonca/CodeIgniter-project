<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/util/CI_Object.php';


class MvvData extends CI_Object{

    public function __construct($id){
        parent::__construct();
        $this->load_data($id);
    }

    private function load_data($id){
        $rs = $this->db->get_where('mvv', array('id' => $id));

        foreach ($rs->row() as $key => $value) {
            $this->$key = $value;
        }

    /*    $this->{'center_text'} = $this->modconfig->mod_jumbotron_centered_text;*/
        $this->{'num_colum'} = $this->modconfig->mod_mvv_num_colum;
        $this->{'text_align'} = $this->modconfig->mod_mvv_text_align;
        $this->{'valores'} = $this->modconfig->mod_mvv_valores;
        $this->{'missao'} = $this->modconfig->mod_mvv_missao;
        $this->{'visao'} = $this->modconfig->mod_mvv_visao;
    }
}