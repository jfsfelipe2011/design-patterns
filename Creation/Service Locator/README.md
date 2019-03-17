# Service Locator

#### O que faz?

Cria uma arquitetura fracamente acoplada para obter uma implementação
de objetos que podem ser memlhor testável, atualizável e extensível.
O padrão é uma implementação do padrão Inverso de Controle.

#### Porque existe?

Com o Service Locator você pode registrar um serviço para uma determinada
interface. Usando a interface, você pode recuperar o serviço e usá-lo 
nas classes do aplicativo sem conhecer sua implementação.

#### Estrutura

![Estrutura](https://i.ibb.co/3ytLpLy/estrutura-service-locator.png)

#### Exemplo

![Exemplo](https://i.ibb.co/hLVS5Ww/exemplo-service-locator.png)