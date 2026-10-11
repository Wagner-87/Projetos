# 📋 Agenda 02 - Desenvolvimento de Sistemas II


Projeto desenvolvido para a **Agenda 02 - Desenvolvimento de Sistemas II**, do curso de **Técnico em Desenvolvimento de Sistemas**.


---

## 📌 Sobre a atividade

A atividade apresenta uma situação em que **Jéssica está desenvolvendo um sistema de cadastro para novos colaboradores das Lojas Brincos e Companhia**.

O objetivo é criar um formulário para coletar as informações solicitadas pela empresa e, após o envio, apresentar os dados cadastrados em uma página de confirmação.

---

## 🎯 Objetivo

Praticar conceitos básicos de **HTML e PHP**, principalmente:

* Criação de formulários;
* Utilização de variáveis em PHP;
* Envio de informações utilizando o método `POST`;
* Recebimento e armazenamento dos dados;
* Exibição das informações em uma página;
* Utilização de HTML para organizar os resultados;
* Criação de uma mensagem personalizada.

---

## 📁 Arquivos do projeto

O projeto é composto por dois arquivos principais:

### `cadastro.html`

Contém o formulário utilizado para cadastrar as informações do novo colaborador.

O formulário possui os seguintes campos:

* Nome completo;
* Idade;
* Profissão;
* Salário pretendido;
* Experiência anterior.

Os atributos `name` dos campos foram definidos durante o desenvolvimento da atividade, incluindo **números nos nomes dos campos**, conforme solicitado no enunciado.

### `processacadastro.php`

Responsável por:

* Receber os dados enviados pelo formulário;
* Armazenar cada informação em uma variável;
* Apresentar os dados cadastrados, um por linha;
* Utilizar elementos HTML para organizar a resposta;
* Criar uma mensagem personalizada utilizando o **nome, profissão e experiência** informados;
* Disponibilizar um link para retornar ao formulário.

---

## 🔄 Funcionamento

O formulário utiliza o método:

```html
POST
```

O fluxo do sistema funciona da seguinte maneira:

```text
Usuário
   ↓
cadastro.html
   ↓
Preenchimento dos dados
   ↓
Envio pelo método POST
   ↓
processacadastro.php
   ↓
Dados armazenados em variáveis
   ↓
Página de confirmação
```

---

## 🛠️ Tecnologias utilizadas

* **HTML5** — criação e estruturação do formulário;
* **CSS3** — estilização da página;
* **PHP** — recebimento e processamento dos dados.

> A utilização de **W3.CSS** é permitida na atividade, porém a prioridade foi compreender e aplicar a lógica do formulário e do processamento em PHP.

---

## 🤖 Utilização de Inteligência Artificial

Durante o desenvolvimento, a Inteligência Artificial foi utilizada como ferramenta de apoio ao aprendizado.

A IA foi utilizada como **apoio**, não como substituição da compreensão e desenvolvimento do código.

---

## 📚 Aprendizado

Esta atividade foi importante para praticar a integração entre **HTML e PHP**, principalmente o envio de dados através de formulários e o processamento das informações recebidas.

Também foi possível compreender melhor como as informações preenchidas pelo usuário podem ser recebidas pelo PHP, armazenadas em variáveis e utilizadas para gerar uma resposta personalizada.

---

## 👨‍💻 Autor

**Wagner Oliveira**

🎓 Técnico em Desenvolvimento de Sistemas

Projeto desenvolvido para fins **educacionais e de aprendizado**.
