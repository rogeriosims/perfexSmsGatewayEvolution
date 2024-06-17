<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sms_evolution extends App_sms
{
    private $api_key;
    private $api_url;
    private $api_instance;

    public function __construct()
    {
        parent::__construct();

        $this->api_key = $this->get_option('evolution', 'api_key');
        $this->api_url = $this->get_option('evolution', 'api_url');
        $this->api_instance = $this->get_option('evolution', 'api_instance');

        $this->add_gateway('evolution', [
            'info'  => '<p>Faz o envio de notificações via WhatsApp usando a API Evolution. </br></br>
                            Caso não possua a API entre em contato comigo, te forneço baratinho. kkkkkkkkk
                            <a href="https://wa.me/5531998913498" 
                            target="_blank">Clique Aqui.</a></p><hr class="hr-10">
                        </p>',
            'name'    => 'Evolution Api Whatspp',
            'options' => [
                [
                    'name'  => 'api_url',
                    'label' => 'API URL',
                    'info'  => '<p>Insira a URL de sua API. Exemplo: http://evolutionapi.com.br</p>'
                ], 
                [
                    'name'  => 'api_instance',
                    'label' => 'Nome da instância',
                    'info'  => '<p>Insira o nome da sua instância.</p>'
                ],        
                [
                    'name'  => 'api_key',
                    'label' => 'API Key',
                    'info'  => '<p>Insira a chave de API da sua instância.</p>'
                ],
            ],
        ]);
    }

    public function send($number, $message)
    {
        $url = $this->api_url . "/message/sendText/" . $this->api_instance;
        
        $response = $this->client->request('POST', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'apikey' => $this->api_key,
            ],
            'json' => [
                'number' => $number,
                'options' => [
                    'delay' => 1200,
                    'presence' => 'composing',
                    'linkPreview' => false,
                ],
                'textMessage' => [
                    'text' => $message,
                ],
            ],
        ]);

        $result = json_decode($response->getBody());
        
        $error  = false;
        
        return false;
    }
}
