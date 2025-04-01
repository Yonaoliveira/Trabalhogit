# Sistema de Gestão de Professores e Alunos

Este projeto é um sistema simples de gerenciamento de **Professores** e **Alunos** desenvolvido com **Laravel**. O objetivo é permitir o cadastro, edição e visualização de informações sobre professores e alunos, além de gerenciar as matérias que os professores lecionam e os alunos que estão matriculados nas disciplinas.

## Requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados:

- PHP >= 8.0
- Composer
- Laravel >= 9.x
- MySQL ou outro banco de dados suportado

## Instalação

Siga os passos abaixo para configurar o projeto localmente.

### 1. Clonar o repositório

Clone este repositório para o seu ambiente local:


git clone https://github.com/Yonaoliveira/Trabalhogit.git 
cd projeto-professor-aluno 

2. Instalar dependências


composer install

3. Gerar a chave da aplicação

php artisan key:generate

4. Rodar as migrações
   
php artisan migrate

5. Rodar o servidor
php artisan serve
