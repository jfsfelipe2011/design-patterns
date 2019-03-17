# Pool

#### O que faz?

O padrão de projetos Pool de objetos é um padrão de design criacional de software que usa um conjunto de objetos 
inicializados mantidos prontos para uso - um "pool" - em vez de alocá-los e destruí-los sob demanda. 
Um cliente do pool solicitará um objeto do pool e executará operações no objeto retornado. 
Quando o cliente termina, ele retorna o objeto,
que é um tipo específico de objeto de fábrica, ao pool, em vez de destruí-lo.

#### Porque existe?

O agrupamento de objetos pode oferecer um aumento de desempenho significativo em situações em 
que o custo de inicializar uma instância de classe é alto, a taxa de 
instanciação de uma classe é alta e o número de instâncias em uso a qualquer momento é baixo. 
O objeto em pool é obtido em tempo previsível quando a 
criação dos novos objetos (especialmente na rede) pode levar tempo variável.

#### Estrutura

![Estrutura](https://i.ibb.co/KXn8nBQ/estrutura-pool.png)

#### Exemplo

![Exemplo](https://i.ibb.co/w79gMm5/exemplo-pool.png)
