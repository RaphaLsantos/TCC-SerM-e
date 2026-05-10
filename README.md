# serMãe - Rede Social de Apoio à Maternidade

O **serMãe** é uma plataforma web desenvolvida como Trabalho de Conclusão de Curso (TCC), focada em criar uma rede social de apoio para mulheres e mães. O projeto oferece um ambiente seguro para troca de experiências, acesso a dicas de saúde e bem-estar, e interação entre as usuárias.

## Funcionalidades

-   **Sistema de Login e Cadastro**: Ambiente seguro com validação de dados e interface intuitiva em etapas.
-   **Feed de Notícias**: Espaço para publicações e interação entre as usuárias.
-   **Dicas de Saúde**: Seção dedicada com carrosséis e cards informativos sobre saúde física, mental e maternidade.
-   **Perfil de Usuária**: Gerenciamento de informações pessoais e fotos de perfil.
-   **Painel Administrativo (ADMIN)**: Ferramentas para moderação e análise de dados da plataforma.
-   **Design Responsivo**: Interface adaptável para diferentes tamanhos de tela.

## Tecnologias Utilizadas

### Frontend
-   **HTML5** & **CSS3**: Estrutura e estilização moderna.
-   **JavaScript**: Interatividade, modais e validações de formulário.
-   **jQuery** & **jQuery Mask**: Facilitação de manipulação do DOM e máscaras de entrada.
-   **Font Awesome**: Biblioteca de ícones.

### Backend
-   **PHP**: Lógica de servidor e gerenciamento de sessões.
-   **PDO (PHP Data Objects)**: Conexão segura e orientada a objetos com o banco de dados.
-   **MySQL**: Armazenamento de dados de usuárias, posts e interações.

## Pré-requisitos

Para rodar este projeto localmente, você precisará de:
-   Um servidor web (ex: [Apache](https://httpd.apache.org/)).
-   [PHP](https://www.php.net/) (versão 7.4 ou superior).
-   [MySQL Server](https://dev.mysql.com/downloads/mysql/).
-   Ambiente recomendado: [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/) ou [Laragon](https://laragon.org/).

## Instalação e Execução

### 1. Clonar o Repositório
```bash
git clone https://github.com/RaphaLsantos/TCC-SerM-e.git
cd TCC-SerM-e
```

### 2. Configurar o Banco de Dados

1.  Inicie o MySQL através do seu painel de controle (XAMPP/WAMP).
2.  Acesse o **phpMyAdmin** (`http://localhost/phpmyadmin`).
3.  Crie um banco de dados chamado `bdsermae_upd`.
4.  Importe o arquivo SQL do projeto (caso disponível) ou crie as tabelas baseadas nos modelos da pasta `Model/`.
5.  Verifique o arquivo `dao/conexãoDAO.php` para garantir que as credenciais (`host`, `dbname`, `user`, `password`) coincidem com o seu ambiente local.

### 3. Configurar o Servidor Web

1.  Mova a pasta do projeto para o diretório raiz do seu servidor (ex: `htdocs` no XAMPP).
2.  Certifique-se de que as permissões de pasta permitem a gravação de arquivos (necessário para o upload de fotos de perfil em `img/perfil/`).

### 4. Acessar a Aplicação

Abra o navegador e acesse:
`http://localhost/TCC-SerM-e/index.php`

## Estrutura do Projeto
-   `/Controller`: Lógica de controle e processamento de requisições.
-   `/Model`: Classes que representam as entidades do sistema.
-   `/dao`: Data Access Objects para comunicação com o banco de dados.
-   `/css` & `/js`: Arquivos de estilo e scripts organizados por módulos.
-   `/img`: Repositório de imagens do site e uploads de usuárias.

## Contribuição
Este é um projeto acadêmico. Sugestões e melhorias são bem-vindas via Pull Requests ou Issues.

## Licença
Este projeto está sob a licença MIT.
