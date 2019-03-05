# Mediator

#### O que faz?

Define um objeto que encapsula a forma como um conjunto de objetos
interage. O Mediator promove o acoplamento fraco ao evitar
que os objetos se refiram uns aos outros explicitamente
e permite variar suas interações independentemente.

#### Porque existe?

Ele é utilizado quando existe um conjunto de objetos que
se comunicão e que podem vir a causar um forte acoplamento, assim
não os tornando reutilizaveis.

Dessa forma usamos uma classe Mediator que será responsável
por fazer essa comunicação e assim deixando com um acoplamento
menor entre os objetos, sendo que os objetos só irão saber quem
é o seu Mediador.

#### Estrutura

![Estrutura](https://i.ibb.co/y6vHVv7/estrutura-mediator.png)

#### Exemplo

![Exemplo](https://i.ibb.co/FwX4Wqp/exemplo-mediator.png)