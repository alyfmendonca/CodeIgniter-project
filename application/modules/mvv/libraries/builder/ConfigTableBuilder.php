<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/ConfigBuilder.php';


class ConfigTableBuilder extends ConfigBuilder{

    function __construct(){
        parent::__construct('mvv');
    }

    function get_data(){
        // parâmetros básicos de configuração
        $base = parent::get_data();

        // parâmetros específicos de configuração
        $data = array(
            array(
                'nome' => $this->prefix.'num_colum', 
                'valor' => '1',
                'descricao' => 'Numero de colunas de 1 a 3',
                'admin_only' => 0
            ),
            array(
                'nome' => $this->prefix.'text_align', 
                'valor' => '1',
                'descricao' => 'Alinhamento do texto sendo 1=esquerda, 2=direita, 3=centro',
                'admin_only' => 0
            ),
            array(
                'nome' => $this->prefix.'valores', 
                'valor' => 'Credibilidade e confiança para firmar longo relacionamento com nossos clientes; - Valorização de nosso quadro de funcionários, estimulando o desenvolvimento pessoal e profissional; - Ética na relação com clientes, funcionários e parceiros.',
                'descricao' => 'O texto que especifica os valores',
                'admin_only' => 0
            ),
            array(
                'nome' => $this->prefix.'visao', 
                'valor' => 'Consolidar-se entre as melhores empresas de transportes e armazém em geral de nossa região e do Brasil, a partir da contínua inovação de nossos métodos. Com isso, ajudar no crescimento econômico de nosso estado, e certamente do país.           ',
                'descricao' => 'O texto que especifica os valores',
                'admin_only' => 0
            ),
            array(
                'nome' => $this->prefix.'missao', 
                'valor' => 'Proporcionar aos nossos clientes a melhor experiência nos serviços prestados. E para alcançar isso, promover um ambiente de trabalho sadio aos nossos profissionais, e consolidar nossa parceria com fornecedores e outros apoiadores.            ',
                'descricao' => 'O texto que especifica os valores',
                'admin_only' => 0
            )
        );
        
        return array_merge($base, $data);
    }
}
