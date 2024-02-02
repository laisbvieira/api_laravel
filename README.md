# API de Funcionários

Bem-vindo à API de Funcionários! Esta API foi construída com Laravel e fornece endpoints para gerenciar informações de funcionários, incluindo cadastro, consulta, edição, remoção e relatório.

## Configuração do Ambiente

1.  **Clonar o Repositório:**

    ```bash
    git clone https://github.com/seu-usuario/api_laravel.git
    ```

2.  **Instalar Dependências:**

    ```bash
    composer install
    ```

3.  **Configurar o Banco de Dados:**

        **3.1. Crie um arquivo .env na raiz do projeto (você pode copiar o .env.example e ajustar as configurações).**

        **3.2. Configure as credenciais do banco de dados no arquivo `.env.`**

        ```
        DB_CONNECTION=mysql
        DB_HOST=seu_host
        DB_PORT=sua_porta
        DB_DATABASE=seu_banco_de_dados
        DB_USERNAME=seu_usuario
        DB_PASSWORD=sua_senha

    ````

        **3.3. Execute as migrações para criar as tabelas no banco de dados:**

        ```bash
        php artisan migrate
        ```

        **3.4 Iniciar o Servidor de Desenvolvimento:**

        ```bash
        php artisan serve
        ```
    ````

## Informações sobre a API

1. **Acesso**

A API Funcionários estará acessível em http://127.0.0.1:8000.

2.  **Endpoints disponíveis**

    #### Listar todos os funcionários:

         Método: GET
         URL: /api/employees

    #### Cadastrar novo funcionário:

         Método: POST
         URL: /api/employees
         Parâmetros: nome, sobrenome, idade, sexo

    #### Consultar funcionário por ID:

         Método: GET
         URL: /api/employees/{id}

    #### Editar funcionário por ID:

         Método: PUT
         URL: /api/employees/{id}
         Parâmetros: nome, sobrenome, idade, sexo

    #### Remover funcionário por ID:

         Método: DELETE
         URL: /api/employees/{id}

    #### Relatório de funcionários:

         Método: GET
         URL: /api/employees/report

## Uso

**1. Postman ou Insomnia**

**2. curl**

## Exemplos

Listar todos os funcionários

    curl http://127.0.0.1:8000/api/employees

Cadastrar um funcionário

    curl -X POST -H "Content-Type: application/json" -d '{"nome":"João","sobrenome":"Silva","idade":30,"sexo":"masculino"}' http://127.0.0.1:8000/api/employees

## Popular o Banco de Dados com Funcionários de Exemplo

Para facilitar o teste e a visualização dos endpoints da API, você pode popular o banco de dados com alguns funcionários de exemplo. Utilizamos sementes (seeds) para este propósito.
Executando as Seeds

Certifique-se de que o Laravel está configurado corretamente e que o arquivo .env possui as configurações adequadas para o banco de dados. Em seguida, execute o seguinte comando no terminal:

    php artisan migrate --seed

Este comando executará todas as migrações do banco de dados e, em seguida, aplicará as sementes, adicionando funcionários de exemplo à tabela.
