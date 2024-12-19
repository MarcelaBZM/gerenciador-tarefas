# 📝 Gerenciador de Tarefas em Laravel

Um projeto simples de CRUD (Create, Read, Update, Delete) desenvolvido com o framework **Laravel** e banco de dados **MySQL**. Este gerenciador permite criar, visualizar, editar e excluir tarefas facilmente.

## 📂 Estrutura do Projeto

O projeto segue a estrutura padrão do Laravel 11. Aqui estão os principais diretórios e arquivos utilizados:

- **`routes/web.php`**: Define as rotas para o CRUD de tarefas.
- **`app/Http/Controllers/TaskController.php`**: Controlador responsável pelas operações CRUD.
- **`app/Models/Task.php`**: Modelo para representar as tarefas no banco de dados.
- **`resources/views/tasks`**: Contém as views para listar, criar, editar e excluir tarefas.
- **`database/migrations`**: Migrações para criar a tabela `tasks` no banco de dados.

## 🚀 Funcionalidades

- **Criar tarefas**: Adicionar novas tarefas com título e descrição.
- **Listar tarefas**: Visualizar todas as tarefas cadastradas.
- **Editar tarefas**: Atualizar informações de uma tarefa existente.
- **Excluir tarefas**: Deletar tarefas com confirmação.

## 🛠️ Tecnologias Utilizadas

- **Laravel 11**
- **PHP 8.2**
- **MySQL**
- **Bootstrap 5** (para estilização)
- **Blade** (engine de templates do Laravel)

## 📦 Instalação e Configuração

1. **Clone o repositório**:

   ```bash
   git clone https://github.com/seu-usuario/gerenciador-tarefas.git
   cd gerenciador-tarefas
2. **Instale as dependências:**
    ```bash
   composer install
   
3. **Crie o arquivo .env e configure o banco de dados:**
    ```bash
   cp .env.example .env

**Edite o .env com suas credenciais do MySQL:**

    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=sua_senha

4. **Gere a chave da aplicação:**
    ```bash
   php artisan key:generate
   
5. **Execute as migrações:**
   ``` bash
   php artisan migrate

6. **Inicie o servidor local:**
    ```bash
   php artisan migrate
   
7. **Acesse o projeto no navegador:**
    ```
   http://127.0.0.1:8000
   
# 🗑️ Confirmação de Exclusão
Ao tentar excluir uma tarefa, uma confirmação é exibida para evitar exclusões acidentais.

# ✅ Melhorias Futuras
- Adicionar paginação na listagem de tarefas.
- Implementar upload de arquivos relacionados às tarefas.
- Melhorar a interface com componentes dinâmicos (ex.: Vue.js).

# 📄 Licença
Este projeto está sob a licença MIT. Consulte o arquivo LICENSE para mais detalhes.

# 👨‍💻 Desenvolvido por: Marcela Bezerra de Medeiros | Lanna Maria Ibiapina da Silva Mesquita | Maria Lauriane do Nascimento Galeno | Pamela Roberto da Silva
