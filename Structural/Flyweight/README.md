# Flyweight

#### O que faz?

Usa compartilhamento para suportar eficientemente grandes
quantidades de objetos de granularidade fina.

#### Porque existe?

Esse padrão é usado quando a sua aplicação tem um grande número
de objetos e os custos de armazenamento são muito altos.

Dessa forma é interessante verificar os conceitos-chave desse tipo
de estrutura. No Flyweight (**peso-mosca no box**), temos dois
conceitos de estado, o **intrínseco** e o **extrínseco**.

No caso do intrínseco, ele é armazenado na classe Flyweight e são
as informações que são independentes do contexto. Como o nome de
um caracter, que pode ser compartilhado, pois em um documento de
texto poderemos ter a repetição da letra "a".

Já no caso do extrínseco, são informações que podem váriar de um
objeto para o outro conforme o contexto. Exemplo a cor da fonte de
um caracter, já que podemos ter um caracter a verde e outro azul.
Sendo assim essas informações não podemos compartilhar.

Para a implementação de um Flyweight, normalmente é usado uma
Factory, onde é mantido uma pool, com os Flyweights já criados.

#### Estrutura

![Estrutura](https://i.ibb.co/yfh2yyZ/estrutura-flyweight.png)

#### Exemplo

![Exemplo](https://i.ibb.co/qryJqtc/exemplo-flyweight.png)