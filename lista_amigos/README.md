# 📒 Projeto Lista de Amigos – CRUD

Projeto desenvolvido na disciplina de **Programação Web II – Agenda 08**, do curso Técnico em Desenvolvimento de Sistemas.

O sistema foi desenvolvido utilizando **PHP e MySQL** e tem como objetivo realizar o cadastro e gerenciamento de uma lista de amigos.

---

## 🎯 Objetivo

O projeto tem como objetivo colocar em prática os conceitos de desenvolvimento web utilizando PHP, banco de dados MySQL, sessões, cookies e operações **CRUD**.

O sistema permite:

* 🔐 Realizar login de usuário
* 👤 Cadastrar amigos
* 📋 Listar amigos cadastrados
* ✏️ Alterar dados dos amigos
* 🗑️ Excluir amigos
* 🍪 Criar e consultar Cookies
* 🚪 Encerrar a sessão através do Logout

---

## 🛠️ Tecnologias utilizadas

* **PHP** – desenvolvimento e processamento da aplicação
* **MySQL** – armazenamento dos dados
* **HTML5** – estrutura das páginas
* **W3.CSS** – estilização das telas
* **Font Awesome** – utilização de ícones
* **XAMPP** – ambiente de desenvolvimento local
* **phpMyAdmin** – gerenciamento do banco de dados
* **Git/GitHub** – versionamento e publicação do projeto

---

## 🗄️ Banco de Dados

O projeto utiliza o banco de dados:

```text
pwii
```

A tabela utilizada para o cadastro dos amigos é:

```text
amigo1
```

### Estrutura da tabela

| Campo     | Descrição              |
| --------- | ---------------------- |
| `idamigo` | Identificação do amigo |
| `nome`    | Nome do amigo          |
| `apelido` | Apelido                |
| `email`   | E-mail                 |

---

## 🔐 Sistema de Login

O sistema possui uma tela de login para controlar o acesso às páginas protegidas.

O usuário informa:

* Nome
* Senha

As informações são enviadas pelo método **POST** para o arquivo `loginAction.php`.

Após o login correto, o sistema utiliza uma **sessão PHP** para identificar o usuário autenticado.

O arquivo `verificarAcesso.php` é responsável por verificar se existe uma sessão ativa.

### Fluxo do login

```text
index.php
    ↓
loginAction.php
    ↓
conexaoBD.php
    ↓
Banco de Dados
    ↓
$_SESSION['logado']
    ↓
principal.php
```

---

## 🔄 CRUD

CRUD é uma sigla utilizada para representar as quatro principais operações realizadas em um banco de dados:

| Operação   | Função           | Arquivo       |
| ---------- | ---------------- | ------------- |
| **CREATE** | Cadastrar        | `inserir.php` |
| **READ**   | Consultar/Listar | `listar.php`  |
| **UPDATE** | Alterar          | `alterar.php` |
| **DELETE** | Excluir          | `excluir.php` |

### ➕ CREATE – Cadastro

O usuário acessa a opção **Adicionar** e informa:

* Nome
* Apelido
* E-mail

Os dados são enviados para `inserir.php`, que realiza o comando `INSERT` no banco de dados.

```sql
INSERT INTO amigo1 (nome, apelido, email)
VALUES (...);
```

---

### 📋 READ – Listagem

A opção **Listar** permite visualizar os amigos cadastrados.

O arquivo `listar.php` utiliza um comando `SELECT` para consultar os registros.

```sql
SELECT * FROM amigo1;
```

---

### ✏️ UPDATE – Alteração

A opção **Editar** permite modificar os dados de um amigo.

O sistema utiliza o campo `idamigo` para identificar o registro que será alterado.

```sql
UPDATE amigo1
SET nome = ...,
    apelido = ...,
    email = ...
WHERE idamigo = ...;
```

---

### 🗑️ DELETE – Exclusão

A opção **Excluir** permite remover um amigo cadastrado.

O registro é identificado através do `idamigo`.

```sql
DELETE FROM amigo1
WHERE idamigo = ...;
```

---

## 🍪 Cookies

O projeto também utiliza **Cookies** para armazenar temporariamente informações do usuário.

O arquivo:

```text
cookie.php
```

é responsável por criar o Cookie.

O arquivo:

```text
lerCookie.php
```

realiza a leitura do Cookie e apresenta o usuário armazenado.

---

## 🚪 Logout

O sistema possui a opção **Logout**, permitindo que o usuário encerre sua sessão.

O arquivo responsável por essa operação é:

```text
logoutAction.php
```

Após o Logout, o usuário é direcionado novamente para a tela de login.

---

## 📁 Estrutura do projeto

```text
lista_amigos/
│
├── acessoNegado.php
├── alterar.php
├── cabecalho.php
├── cadastro.php
├── conexaoBD.php
├── cookie.php
├── editar.php
├── excluir.php
├── index.php
├── inserir.php
├── lerCookie.php
├── listar.php
├── loginAction.php
├── logoutAction.php
├── principal.php
├── rodape.php
└── verificarAcesso.php
```

---

## ▶️ Como executar o projeto

### 1. Instalar o XAMPP

Instale e execute o **XAMPP**.

Inicie:

```text
Apache
MySQL
```

---

### 2. Colocar o projeto no XAMPP

Copie a pasta do projeto para:

```text
C:\xampp\htdocs\
```

Por exemplo:

```text
C:\xampp\htdocs\agenda6\lista_amigos
```

---

### 3. Criar o banco de dados

Abra o phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Crie o banco:

```text
pwii
```

Depois crie a tabela:

```text
amigo1
```

com os campos:

```text
idamigo
nome
apelido
email
```

---

### 4. Configurar a conexão

O arquivo `conexaoBD.php` contém os dados de conexão com o MySQL.

Neste projeto, o MySQL está configurado na porta:

```text
3307
```

Exemplo:

```php
$conexao = new mysqli(
    $servername,
    $username,
    $password,
    $dbname,
    $port
);
```

---

### 5. Acessar o sistema

Depois de iniciar o Apache e o MySQL, abra no navegador:

```text
http://localhost/agenda6/lista_amigos/
```

---

## 👤 Usuário para teste

Para realizar o teste do login, pode ser utilizado o usuário cadastrado no banco:

```text
Usuário: gabi
Senha: gabi123
```

---

## 📸 Funcionamento

O sistema possui as seguintes telas principais:

### 🔐 Login

Tela utilizada para autenticação do usuário.

### 🏠 Menu Principal

Após o login, o usuário tem acesso às opções:

```text
Adicionar
Listar
Criar Cookie
Ler Cookie
Logout
```

### 👤 Cadastro

Permite inserir um novo amigo no banco de dados.

### 📋 Lista

Apresenta os amigos cadastrados e disponibiliza as opções de **Editar** e **Excluir**.

### 🍪 Cookie

Permite criar e consultar o Cookie armazenado pelo navegador.

---

## 📚 Conceitos aprendidos

Durante o desenvolvimento do projeto foram praticados conceitos como:

* PHP
* HTML
* MySQL
* MySQLi
* Formulários HTML
* Método POST
* Método GET
* Sessões PHP
* Cookies
* CRUD
* Comandos SQL
* Conexão PHP com MySQL
* Controle de acesso
* Organização de arquivos PHP
* Utilização do W3.CSS
* Utilização do Font Awesome
* Versionamento com Git
* Publicação no GitHub

---

## 🎓 Sobre o projeto

Este projeto foi desenvolvido como atividade acadêmica da disciplina **Desenvolvimento de Sistemas II – Agenda 08**, com o objetivo de aplicar na prática os conhecimentos adquiridos durante o curso de **Técnico em Desenvolvimento de Sistemas**.

O desenvolvimento permitiu compreender melhor como uma aplicação web pode se conectar a um banco de dados e realizar operações de cadastro, consulta, alteração e exclusão de informações.

---

## 👨‍💻 Autor

**Wagner Oliveira**


