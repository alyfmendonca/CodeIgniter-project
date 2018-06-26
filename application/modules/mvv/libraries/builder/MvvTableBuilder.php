<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/TableBuilder.php';

class MvvTableBuilder extends TableBuilder{

    public function __construct(){
        parent::__construct('mvv');
    }

    function get_fields(){
        $fields['missao'] = array('type' => 'VARCHAR', 'constraint' =>  300);
        $fields['visao'] = array('type' => 'VARCHAR', 'constraint' =>  300);
        $fields['valores'] = array('type' => 'VARCHAR', 'constraint' =>  500);

        return $fields;
    }

    function get_data(){
        // para inserir um registro na tabela jumbotron...
        $data[] = array(
            'missao' => 'Proporcionar aos nossos clientes a melhor experiência nos serviços prestados. E para alcançar isso, promover um ambiente de trabalho sadio aos nossos profissionais, e consolidar nossa parceria com fornecedores e outros apoiadores.            ', 
            'visao' => 'Consolidar-se entre as melhores empresas de transportes e armazém em geral de nossa região e do Brasil, a partir da contínua inovação de nossos métodos. Com isso, ajudar no crescimento econômico de nosso estado, e certamente do país.            ', 
            'valores' => 'Credibilidade e confiança para firmar longo relacionamento com nossos clientes; - Valorização de nosso quadro de funcionários, estimulando o desenvolvimento pessoal e profissional; - Ética na relação com clientes, funcionários e parceiros.

            ',
        );

        return $data;
    }

}