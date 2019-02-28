# Façade

#### O que faz?

Fornece uma interface unificada para um conjunto de interfaces em
um subsistema. Façade define uma interface de nível mais alto
que torna o subsistema mais fácil de ser usado.

#### Porque existe?

Existem alguns cenários que podemos usar o padrão Façade, mas os
dois casos mais comuns são os seguintes:

- Estamos usando alguma biblioteca terceira em nosso sistema e 
não queremos ficar totalmente dependente dela, ou seja, queremos
deixar a forma de uso flexível.

- Temos algum tipo de subsistema dentro do nosso próprio projeto
e que não queremos usar diretamente classes/objetos dele.

Assim usamos uma classe Façade, que deixa mais fácil e
flexível o uso de uma outra interface, dentro de nosso projeto.

#### Estrutura

![Estrutura](https://i.ibb.co/4KhY7wW/estrutura-facade.png)

#### Exemplo

![Exemplo](https://i.ibb.co/YDQWjJs/exemplo-facade.png)
