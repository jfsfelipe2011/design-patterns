# Chain of Responsibility

#### O que faz?

Evita o acoplamento do remetente de uma solicitação ao seu
receptor, ao dar a mais de um objeto a oportunidade de tratar
a solicitação. Encadeia os objetos receptores, passando a 
solicitação ao longo da cadeia até que um objeto a trate. 

#### Porque existe?

Esse padrão é utilizado quando é necessário que mais de um
objeto trate uma solicitação. Assim é emitido uma solicitação
para um dentre uma cadeia de objetos, sem deixar explicito quem
será o receptor da solicitação. Com isso a cadeia de objetos
deve passar a solicitação até o próximo objeto, até alguém a atender.

Um exemplo bastante conhecido para esse padrão, são os Middlewares
de alguns Frameworks.

#### Estrutura

![Estrutura](https://i.ibb.co/1ZyKdQ5/estrutura-chain-of-responsibility.png)

#### Exemplo

![Exemplo](https://i.ibb.co/fXWMgB9/exemplo-chain-of-responsibility.png)