# Gateway SMS para Perfex CRM utilizando a API Evolution. - PerfexSmsGatewayEvolution

## Descrição

Este gateway SMS integra o [PerfexCRM](https://www.perfexcrm.com/) com a [Evolution API](https://evolution-api.com/) para enviar notificações via WhatsApp. 

**Para utilizar este gateway, é necessário ter acesso à API Evolution. Caso não possua uma instância da API ou prefira uma solução como serviço, entre em contato comigo. [Chamar no whatspp](https://wa.me/5531998913498)** 

## ATENÇÃO

** O plugin desse repositório só é compative com a v1 da evolution **

### Funcionalidades

- Envio de mensagens de texto via WhatsApp.
- Integração direta com a API Evolution para entrega rápida e confiável.

### Instalação

1. **Baixe e salve o arquivo `Sms_evolution.php` na pasta `application\libraries\sms\` do seu projeto Perfex CRM.**

2. **Inclua a biblioteca no arquivo `application\helpers\sms_helper.php`:**

   Abra o arquivo `application\helpers\sms_helper.php` e adicione a linha abaixo dentro da função `app_init_sms_gateways()`:

   ```php
   $gateways = [
       'sms/sms_clickatell',
       'sms/sms_msg91',
       'sms/sms_twilio',
       'sms/sms_evolution'  // Adicione esta linha para incluir o gateway SMS Evolution
   ];
 
 2. **Configure o gateway sms**
    acesse: admin/settings?group=sms e preencha as credenciais.
   

## API Evolution

Para mais informações sobre a API Evolution e como obtê-la, visite [Evolution API](https://evolution-api.com/)

## PerfexCRM

Para mais informações sobre a PerfexCRM e como obtê-la, visite [PerfexCRM](https://www.perfexcrm.com/)
