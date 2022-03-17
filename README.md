## Respostas exercícios

### Exercício 1
    <?php
        abstract class Animal {
            abstract public function emitirSom();
        }
    
        class Cachorro extends Animal {
            public function emitirSom()
            {
                return 'auau!';
            }
        }
    
        $fred = new Cachorro();
        echo $fred->emitirSom();
    
        class Vaca extends Animal {
            public function emitirSom()
            {
                return "muuuuuu!";
            }
        }
    
        $jurema = new Vaca();
        echo $jurema->emitirSom();
    
        class Galinha extends Animal {
            public function emitirSom()
            {
                return "cócóricó!";
            }
        }
    
        $josefina = new Galinha();
        echo $josefina->emitirSom();

### Exercício 3

O INNER JOIN é utilizado para pegar os dados relacionados de duas tabelas. <br>
Já o LEFT JOIN, além de pegar os dados relacionados, ele consegue também obter dados não relacionados, nesse caso se não houver relacionamento encontrado, ele retornará valores nulos nas colunas.

### Exercício 4

O Elouquent é um ORM que já vem embutido no framework Laravel, a sua principal função
é ajudar o desenvolvedor na hora de trabalhar com bancos de dados relacionais. <br>
Em uma abordagem mais tradicional, para realizar um determinado comando no banco de dados,
o desenvolvedor precisa escrever a query na 'na mão', por exemplo:

    SELECT * FROM users;

Esse é um exemplo de uma query bem simples, mas dependendo da complexidade da consulta a ser
realizada, a query que deve ser escrita fica muito extensa e mais complexa de entender,
e caso o banco de dados seja trocado, dependendo do caso, o desenvolvedor deverá reescrever
tudo de novo, pois apesar dos BDs relacionais serem muito parecidos, (MySQL, Postgres e MariaDB por exemplo),
podem existir tipos e outras situações específicas onde uma query para um determinado BD não funcione em outro
BD.

### Exercício 5

O Blade é uma template engine que ja vem junto com o Laravel, ele ajuda na hora de trabalhar com as views.
Ele permite modularizar o front-end da aplicação. <br>
Por exemplo, é possivel criar um arquivo index.blade.php que contém todas as importações que a
aplicação vai utilizar (estilos, scripts e etc...) e na hora de criar outras páginas, ao invés de ter
que importar tudo de novo, basta extender o arquivo index dentro da nova página, assim essa nova página
vai ter acesso a todos os script e estilos necessários sem ter que ficar reescrevendo código. <br>
Exmplo de sintaxe do blade para extender o código: <br>

    @extends('index')
<br>
Outra situação em que o blade ajuda muito, é na manipulação dos dados que vem do back-end.
Ele permite utilizar dentro do html, funcionalidades que normalmente só existem em linguagens
de programação, como estruturas de repetição e condicionais. <br>
Por exemplo, para criar uma tabela com dados que vem dentro de um array: 
<br>

    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
        </tr>
    @endforeach
<br>
No caso apresentado acima, ele está recebendo um array chamado 'users' e,
para cada item do array ele está criando uma linha na tabela com os dados dentro de cada
índice do array.
<br>
Outro exemplo é de uma estrutura condicional:
<br>

    @if('condição') 
        //Comando se atender a condição 
    @elseif('outra condição) 
        //Comando se atender a condição 
    @else 
        //Comando caso nehuma outra condição funcione 
    @endif
<br>
Esses são exemplos básicos, o blade, apesar de simples, é bem robusto e
pode atender a todas as necessidades de um sistema.
<br>

### Exercício 6
Exemplo:
<br>
Model:
<br>

    php artisan make:model User
<br>
Controller:
<br>

    php artisan make:controller UserController
<br>
Migration:
<br>

    php artisan make:migration create_user_table
<br>
É possivel também criar o model e o controller com apenas um comando:
<br>

    php artisan make:controller UserController --model=User
<br>

### Exercício 7
Sequência de comandos necessários:
<br>
    
    git checkout -b card#1000 dev
<br>
Após fazer as alterações:
<br>
    
    git add .
    git commit -m "algum comentário"
    git push origin card#1000
    git checkout teste
    git merge card#1000
<br>

### Exercício 8

Usando como base o *.env.example* crie um novo arquivo *.env* e preencha com os dados de acesso ao banco de dados.
<br>
Exemplo:
<br>

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=fiocruz_crud
    DB_USERNAME=admin
    DB_PASSWORD=1234

Para rodar o projeto:
<br>

    php artisan serve
<br>

Ao acessar a rota principal, você direcionado para um pequeno dashboard, onde poderá testar as funções do CRUD.
