# Factory Method

#### O que faz?

Defini uma interface para a criação de um objeto, mas deixa que as 
subclasses decidam qual a classe será instanciada. Isso também permite
que seja adiado a instanciação de subclasses.

#### Porque existe?

Esse padrão de projeto pode ser usado no momento em que uma classe não conseguirá
antecipar quais objetos ela deve criar e assim a responsabilidade de criação deve ficar fora
de sua implementação. 

Assim é usado uma classe que é conhecida como Creator, para que ela faça
a criação do objeto que será usado.

#### Estrutura

![Estrutura](https://i.ibb.co/SxrSCGg/estrutura-factory-method.png)

#### Exemplo

![Exemplo](https://i.ibb.co/2WYsHT1/exemplo-factory-method.png)
