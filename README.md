#  Sistema de Vendas e Emissão de Recibo para PetShop

Um sistema web simples, leve e intuitivo para registro de serviços/produtos de PetShop com **controle de acesso por autenticação**, geração automática de recibos e dados simulados de Nota Fiscal (NF-e).

---

##  Sobre o Projeto

Este projeto foi desenvolvido com o objetivo de oferecer uma solução prática para petshops registrarem atendimentos e emitirem comprovantes de pagamento para os clientes de forma segura.

O sistema conta com uma **área de login restrita para atendentes**. Após o acesso, ao preencher os dados do tutor, do pet e do serviço prestado, o PHP processa os dados e gera uma tela de recibo/nota fiscal formatada, pronta para impressão ou exportação em PDF.

---

##  Tecnologias Utilizadas

* **HTML5:** Estruturação dos formulários e dados.
* **CSS3 / Bootstrap 5:** Estilização responsiva e regras de impressão (`@media print`).
* **PHP:** Processamento de dados via `POST`, controle de acesso com **Sessões (`$_SESSION`)**, cookies, formatação de moeda, data/hora e geração dinâmica do número da NF-e.

---

##  Estrutura de Arquivos

```text
formulario-petshop/
├── index.php           # Formulário de vendas (protegido por sessão)
├── login.php           # Tela de login com mensagens de erro
├── verificalogin.php   # Script de validação das credenciais
├── gerar_recibo.php    # Processamento PHP e exibição do Recibo/NF
├── logoff.php          # Encerramento da sessão (sair do sistema)
└── README.md           # Documentação do projeto
