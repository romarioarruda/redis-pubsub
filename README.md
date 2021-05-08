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

Rodando o pub/sub

```
$ php index.php
```

Acessando o Redis dentro do container

```
$ redis-cli -h nome_host
```

Publicando uma mensagem num canal no redis

```
$ PUBLISH canal_exemplo 'mensagem'
```