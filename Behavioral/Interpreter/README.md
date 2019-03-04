# Interpreter

#### O que faz?

Dada uma linguagem, define uma representação para uma gramática
juntamente com um interpretador que usa a representação para
interpretar sentenças dessa linguagem.

#### Porque existe?

Esse padrão normalmente é usado caso você precise interpreter
algum tipo de linguagem em forma de uma árvore de objetos.
Como exemplo podemos usar a linguagem para **REGEX**, que podemos
transformar em uma árvore de objetos, que interpretem os diversos
tipos de expressões.

#### Estrutura

![Estrutura](https://i.ibb.co/xSRVdv8/estrutura-interpreter.png)

#### Exemplo

![Exemplo](https://i.ibb.co/S70xDjQ/exemplo-interpreter.png)