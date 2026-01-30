# Casa de Recepções Impacto

Aplicação web desenvolvida em PHP Laravel para a Casa de Recepções Impacto.

## Características

- **Design responsivo** com cores branco, bege e verde
- **Páginas incluídas:**
  - Página inicial com apresentação
  - Quem Somos
  - Galeria de fotos
  - Endereço e localização
  - Formulário de orçamento
  - Contrato de locação
  - Termo de responsabilidade
- **Integração com WhatsApp** para contato direto
- **Formulário de orçamento** que envia dados via WhatsApp
- **Tabela de preços** com diferentes pacotes

## Instalação

1. Clone o repositório
2. Execute `composer install`
3. Copie `.env.example` para `.env`
4. Execute `php artisan key:generate`
5. Configure o banco de dados no arquivo `.env`
6. Execute `php artisan serve`

## Configuração do WhatsApp

Altere o número do WhatsApp nos arquivos:
- `app/Http/Controllers/HomeController.php` (linha 35)
- Todas as views que contêm links do WhatsApp

Substitua `5511999999999` pelo número real da empresa.

## Personalização

### Cores do tema:
- Verde: #28a745
- Bege: #F5F5DC  
- Branco: #ffffff

### Imagens:
Substitua as imagens placeholder na galeria por fotos reais do local.

### Informações de contato:
Atualize endereço, telefones e e-mail nos arquivos de view.

## Funcionalidades

- Layout responsivo com Bootstrap 5
- Navegação intuitiva
- Formulário de orçamento integrado ao WhatsApp
- Galeria de fotos dos espaços
- Informações completas de localização
- Documentos contratuais

## Tecnologias

- PHP 8.1+
- Laravel 10
- Bootstrap 5
- Font Awesome
- Google Maps (embed)