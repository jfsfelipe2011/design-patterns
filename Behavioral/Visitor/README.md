# Visitor

#### O que faz?

Representa uma operação a ser executada nos elementos de uma
estrutura de objetos. Visitor permite definir uma nova operação
sem mudar as classes dos elementos sobre os quais opera.

#### Porque existe?

Ele é usado quando uma estrutura de objetos contém muitas
classes de objetos com interfaces diferentes e é necessário
executar operações sobre esses objetos que dependem de suas
classes completas.

Também é usado caso existam muitas operações distintas e sem
relação a ser executadas sobre objetos de uma estrura de objetos,
e você deseja ter menos poluição dessas operações nas classes.

É sempre levado em consideração se as classes da estrutura
raramente mudam, mas você frequentemente tem que definir
novas operações nas mesmas.

#### Estrutura

![Estrutura](https://i.ibb.co/TTHXhnW/estrutura-visitor.png)

#### Exemplo

![Exemplo](https://i.ibb.co/D9w0jQy/exemplo-visitor.png)