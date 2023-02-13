# formsPHP

![GitHub repo size](https://img.shields.io/github/repo-size/leandro-de-paula/formsPHP?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/leandro-de-paula/formsPHP?style=for-the-badge)
 
!["FormsPHP Presentation"](https://github.com/leandro-de-paula/formsPHP/blob/main/public/img/Form.png "FormsPHP Presentation")
[![bootstrap version](https://img.shields.io/badge/bootstrap-vs%204.1.3-orange)](https://getbootstrap.com.br/) 
[![php version](https://img.shields.io/badge/php-vs%207.1.29-blue)](https://www.php.net/)  
 
> Project with Frontend in Bootstrap, the main objective is to perform basic commands in the `<MySQL>` database, using `<PHP>` in the backend to do `<CRUD>`.
 <br/>

## ⬆️ Update
<p>
Esse projeto não tem fim, em outras palavras sempre teremos que revisitar conceitos, novas técnicas, mudanças nos lançamentos, e sempre que algo for revisado o update será realizado
</p>

## 🤝 Uso do Projeto
**Fique a vontade para clonar, visitar os códigos e testar!**

## 💻 Pré-requisitos
Antes de começar, verifique se você atendeu aos seguintes requisitos:
- Tenha o `<git>` instalado.
- Instale a versão `<PHP 7>` ou superior com banco de dados.
- Ter uma máquina `<Windows / Linux / Mac>`.
 
## 🚀 Instalando <formsPHP>
Para instalar <formsPHP> siga estas etapas:
 
Linux: `<Terminal>` | macOS: `<Terminal>` | Windows: `<cmd>` | Android: `<Termux>`:
 
1 - Clone ou Download do Projeto:
_**Important Note**: CLONE ou faça o DOWNLOAD do projeto diretamente no repositório responsável do PHP._
 
**Clone:**
 
```
git clone https://github.com/leandro-de-paula/formsPHP.git
```
 
**Download zip:** ⬇️
[formsPHP](https://github.com/leandro-de-paula/formsPHP/archive/main.zip).

## ⚙️ Configurando 
Depois do repositório criado pelo download e extração do zip ou pelo git clone, abra a pasta `<src>`, copie e cole na pasta `<src>` o seguinte arquivo: `<env.sample.ini>`, depois renomeie o arquivo copiado para `<env.ini>`.
>Abra o arquivo `<env.ini>` e depois entre com os dados do banco de dados conforme indicação do arquivo `<env.ini>`.
>Note que dentro do arquivo já existirá a indicação do banco `<database = "forms">`, nesse não precisa alterar pois o mesmo será usado automaticamente ou criado manualmente conforme orientação do passo seguinte.
 
## ☕ Usando <formsPHP>
Para usar <formsPHP>, siga estas etapas:
 
**Database structure**
Para criar o banco de dados acesse:
```
http://localhost/formsPHP/src/database/createDatabase.php
```

Para criar a tabela acesse:
```
http://localhost/formsPHP/src/database/createTable.php
```

Ou faça manualmente criando um banco de dados e tabela no `<MySQL>` seguindo a seguinte estrutura: 
 
```sql
/*
Database: forms
Table: tbforms
Fields: id, name, email, address
 
Path to edit the connection:
src/database/config.php
*/

CREATE DATABASE IF NOT EXISTS forms

CREATE TABLE IF NOT EXISTS tbforms(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    address VARCHAR(250)
    )
```
 
**Execução Rápida**
> Usando Servidor web embutido do `<PHP>`
 
Abra a pasta do diretório no `<Terminal / cmd >`
 
```
php -S localhost:8000 
```
> **⚠️ Aviso:** Esse servidor web foi desenvolvido para auxiliar no desenvolvimento de aplicações. Ele também pode ser útil para testes ou para demonstrações de aplicações que forem executadas em ambientes controlados. Ele não foi desenvolvido para ser um web server completo. Ele não deve ser utilizado em uma rede pública.


**Executando no Navegador**
```
http://localhost:8000/public/index.php
 
```

 
---
By **Leandro de Paula**
E-mail: [leandrodepaula.ti@gmail.com](mailto:leandrodepaula.ti@gmail.com)
 
Please find me on [LinkedIn](https://www.linkedin.com/in/leandro-de-paula/) for a more detailed description of my full work experience, education and certification.