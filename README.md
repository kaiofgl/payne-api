
# PAYNE - API

Payne Backend 
[Payne - Frontend](https://github.com/Skuth/payne-front)
## Setup

Install all composer dependences  
```
composer install
```

Add environment file
```
cp .env.example .env
```
Start docker environment 
```
docker-composer up -d
```

Start server at `http://127.0.0.1:8000/`  
```
php artisan serve
```

## API
### Products
#### List Products

```http
  GET /api/v1/product
```
#### Return Product

```http
  GET /api/v1/product/{id}
```

#### Store product

```http
  POST /api/v1/product
```

| Parametro | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | The product tile |
| `description` | `text` | Product description |
| `image` | `string` | ***required*** URL image |
| `price` | `double` | Product price |

#### Update product

```http
  PUT /api/v1/product/{id}
```

| Parametro | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | The product title |
| `description` | `text` | Product description |
| `image` | `string` | ***required*** URL image |
| `price` | `double` | Product price |

#### Delete product

```http
  DELETE /api/v1/product/{id}
```
