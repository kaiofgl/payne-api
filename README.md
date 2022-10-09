
# PAYNE - API

API desenvolvida em laravel para controle de backend do sistema de compras de GiftCard Payne 

## Setup

#### Composer  
```
composer install
```

Inicia um servidor em `http://127.0.0.1:8000/`  
```
php artisan serve
```

## API

#### Lista produtos

```http
  GET /api/v1/product
```
#### Retorna produto

```http
  GET /api/v1/product/{id}
```

#### Cadastro produto

```http
  POST /api/v1/product
```

| Parametro | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | Nome do Produto |
| `description` | `text` | Descrição do Produto |
| `image` | `string` | ***required*** URL da imagem WEB |
| `price` | `double` | Valor do produto |

#### Atualiza produto

```http
  PUT /api/v1/product/{id}
```

| Parametro | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | Nome do Produto |
| `description` | `text` | Descrição do Produto |
| `image` | `string` | ***required*** URL da imagem WEB |
| `price` | `double` | Valor do produto |

#### Deleta produto

```http
  DELETE /api/v1/product/{id}
```