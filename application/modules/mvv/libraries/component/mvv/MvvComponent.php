<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MvvComponent{

    private $data;
    private $image_align;
    private $center_text;

    public function __construct(MvvData $data){
        $this->data = $data;
        $this->num_colum = $data->num_colum == 2 ? 'width: 50%;' : ($data->num_colum == 1 ? 'width: 100%;' : 'width: 33%;');
        $this->text_align = $data->text_align == 2 ? 'text-align: right;' : ($data->text_align == 1 ? 'text-align: left;' : 'text-align: center;');
        $this->valores = $data->valores;
        $this->missao = $data->missao;
        $this->visao = $data->visao; 
    }

    public function getHTML(){
        return '<div class="jumbotron '.$this->center_text.'  ">

                    <div class="container">
                        <div style="'.$this->num_colum.' '.$this->text_align.' float: left; padding: 10px; ">
                            <h1 class="h1-reponsive mb-4 mt-2 blue-text font-bold">Missão</h1>
                            <p class="lead">'.$this->data->missao.'</p>
                        </div>

                        <div style="'.$this->num_colum.' '.$this->text_align.' float: left; padding: 10px;">
                            <h1 class="h1-reponsive mb-4 mt-2 blue-text font-bold">Visão</h1>
                            <p class="lead">'.$this->data->visao.'</p>
                        </div>

                        <div style="'.$this->num_colum.' '.$this->text_align.' float: left; padding: 10px;">
                            <h1 class="h1-reponsive mb-4 mt-2 blue-text font-bold">Valores</h1>
                            <p class="lead">'.$this->valores.'</p>
                        </div>
                    </div>
                
                </div>';
    }

}