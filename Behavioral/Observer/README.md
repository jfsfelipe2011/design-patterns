# Observer

#### O que faz?

Define uma dependência um-para-muitos entre objetos, de maneira
que quando um objeto muda de estado todos os seus dependentes
são notificados e atualizados automaticamente.

#### Porque existe?

Esse padrão é usado quando temos algum tipo de dependência entre
um ou mais objetos, onde um objeto deve ser notificado das alterações
do outro e assim atualiza-lo de forma automatica.

Essa estrutura também é conhecida como **publish-subscribe**.
Onde a classe subject é um publicador de mensagens e a classe
observer recebe a notificação de alteração e executa alguma ação.

#### Estrutura

![Estrutura](https://i.ibb.co/7bFbfYf/estrutura-observer.png)

#### Exemplo

![Exemplo](https://i.ibb.co/SnVqyGm/exemplo-observer.png)