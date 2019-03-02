# Command

#### O que faz?

Encapsula uma solicitação como um objeto, desta forma permitindo
parametrizar clientes com diferentes solicitações, enfileirar
ou fazer o registro (log) de solicitações e suportar operações
que podem ser desfeitas.

#### Porque existe?

Ele é usado para parametrizar objetos por uma ação a ser executada.
Também é usado para enfileirar, especificar e executar solicitações
em tempos diferentes. Um objeto Command pode ter um ciclo de
vida independente da solicitação original.

Assim um Command pode determinar várias ações de uma classe
Receiver em seu método execute. Nessa estrutura também usamos
uma classe Invoker, que vai receber o Command e controlar uma
ordem lógica para a execução.

Também é possível implementar algum tipo de mecânismo para funções
de desfazer/refazer.

O maior uso desse padrão podemos dizer, é para deixar independente
uma solicitação de sua execução, ao invés de, tudo ser adicionado em
uma classe controladora. Como exemplo, podemos ter comandos que
salvam em algum banco de dados e que enviam e-mail, e determinar
uma ordem de execução em um Invoker.

#### Estrutura

![Estrutura](https://i.ibb.co/cF3HVtw/estrutura-command.png)

#### Exemplo

![Exemplo](https://i.ibb.co/d2tmZqk/exemplo-command.png)