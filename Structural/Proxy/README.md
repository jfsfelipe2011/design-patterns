# Proxy

#### O que faz?

Fornece um substituto ou marcador da localização de outro
objeto para controlar o acesso a esse objeto.

#### Porque existe?

Esse padrão existe como uma forma de controle de acesso a um
determinado objeto. Assim existem alguns cenários que podemos
necessitar do uso de uma classe Proxy. São eles:

- **Remote proxy**: Caso você precise de algum representante local
para um objeto que está em um endereçamento externo.

- **Virtual proxy**: Usado para criar objetos caros sob demanda.

- **Protection proxy**: Controla o acesso ao objeto original. São
bastante usados em casos de ACLs e permissões.

#### Estrutura

![Estrutura](https://i.ibb.co/D7K8BC8/estrutura-proxy.png)

#### Exemplo

![Exemplo](https://i.ibb.co/sjFrn4K/exemplo-proxy.png)
