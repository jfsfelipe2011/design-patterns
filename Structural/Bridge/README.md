# Bridge

#### O que faz?

Desacopla uma abstração da sua implementação, de modo
que as duas possam variar de uma forma independente.

#### Porque existe?

Esse padrão é usado em ocasiões onde temos que evitar qualquer vínculo
permanente entre uma classe abstrata e sua implementação. Com isso
permitimos a alteração da implementação até mesmo durante a execução.

Com isso temos a abstração consumindo uma interface de implementação e
 desacoplando as duas.

#### Estrutura

![Estrutura](https://i.ibb.co/zr2Rk79/estrutura-bridge.png)

#### Exemplo

![Exemplo](https://i.ibb.co/WFmLptc/exemplo-bridge.png)