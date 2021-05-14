# redis-pubsub

Atualizando dependências

```
$ composer update
```

Rodando o container da aplicação

```
$ docker-compose up -d
```

Acessando o container

```
$ docker-compose exec app bash
```

Rodando o publisher

```
$ php index.php
```

Rodando o subscriber

```
$ cd cd src/workers/

$ php aposCastro.php
```