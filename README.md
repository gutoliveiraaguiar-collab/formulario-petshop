# Sistema de Vendas e Emissão de Recibo para PetShop

Um sistema web simples, leve e intuitivo para registro de serviços/produtos de PetShop com geração automática de recibos e dados simulados de Nota Fiscal (NF-e).

## Sobre o Projeto

Este projeto foi desenvolvido com o objetivo de oferecer uma solução prática para petshops registrarem atendimentos e emitirem comprovantes de pagamento para os clientes.

Ao preencher os dados do tutor, do pet e do serviço prestado, o sistema calcula os dados necessários e gera uma tela pronta para impressão ou exportação em PDF do recibo/nota fiscal.

## Tecnologias Utilizadas

* **HTML5:** Estruturação dos formulários e dados.

* **CSS3:** Estilização responsiva e regras de impressão (`@media print`).

* **PHP:** Processamento dos dados passados via `POST`, formatação de moeda, data/hora e geração do número da NF-e.

## Estrutura de Arquivos

```
├── index.html        # Formulário de cadastro de vendas e dados do Pet
├── style.css         # Folha de estilos para o formulário e o recibo
└── gerar_recibo.php  # Script de processamento PHP e exibição do Recibo/NF


```

## Como Executar o Projeto

### Pré-requisitos

Para rodar este projeto localmente, você precisará de um ambiente de servidor local com suporte a **PHP** instalado, como:

* [XAMPP](https://www.apachefriends.org/?utm_source=gemini)

* [WAMP](https://www.wampserver.com/?utm_source=gemini)

* [Laragon](https://laragon.org/?utm_source=gemini)

### Passo a Passo

1. **Clone o repositório:**

   ```
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
   
   
   ```

2. **Mova os arquivos para a pasta web do seu servidor local:**

   * No **XAMPP**: cole dentro de `htdocs/petshop-recibo`

   * No **WAMP**: cole dentro de `www/petshop-recibo`

3. **Inicie o servidor local:**

   * Abra o painel do seu software (ex: XAMPP) e inicie o módulo **Apache**.

4. **Acesse no navegador:**

   * Acesse `http://localhost/petshop-recibo`

##  Funcionalidades

*  **Cadastro Simples:** Entrada rápida de dados do cliente, do pet e do serviço.

*  **Geração de Recibo:** Apresentação clara do valor total e detalhes do atendimento.

*  **Simulação de NF-e:** Geração dinâmica de número de nota fiscal e carimbo de data/hora.

*  **Pronto para Impressão:** Botão nativo para impressão que oculta elementos desnecessários da interface no papel/PDF.
