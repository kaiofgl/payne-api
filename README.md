
# PAYNE - API

Payne Backend 
[Payne - Frontend](https://github.com/Skuth/payne-front)
# Setup
#### Composer
Install all composer dependencies  
```
composer install
```
## Laravel
#### Enviroment
Add environment file
```
cp .env.example .env
```
## Database
#### Docker
Start docker environment with mysql image 
```
docker-composer up -d
```
#### Migrations
Create tables in database `payne_db`
```
php artisan migrate
```
#### Seeder
First population data
```
php artisan db:seed
```
#### Run
Start server at `http://127.0.0.1:8000/`  
```
php artisan serve
```
# API
## Products
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

| Parameter | Type     | Description                | Default |
| :-------- | :------- | :------------------------- | :-------- |
| `title` | `string` | ***required*** Product title ||
| `description` | `text` | ***required*** Product description ||
| `image` | `string` | ***required*** URL image ||
| `status` | `tinyint(1)` |  0 or 1 to status | 1|
#### Update product
```http
  PUT /api/v1/product/{id}
```
| Parameter | Type     | Description                | Default |
| :-------- | :------- | :------------------------- | :-------- |
| `title` | `string` | ***required*** Product title ||
| `description` | `text` | ***required*** Product description ||
| `image` | `string` | ***required*** URL image ||
| `status` | `tinyint(1)` |  0 or 1 to status | 1 |
#### Delete product
```http
  DELETE /api/v1/product/{id}
```
## Product Options
All products options, with price and stock.
#### List Product Options 
`{id}` - **Product ID**
```http 
  GET /api/v1/product/{id}/options
```
#### Store Product Options 
```http
  POST /api/v1/product/options
```
| Parameter | Type     | Description                | Default |
| :-------- | :------- | :------------------------- | :-------|
| `title` | `string` | ***required*** Product title ||
| `image` | `text` | ***required*** Product image ||
| `product_id` | `integer` | ***required*** Product ID ||
| `price` | `double` |  ***requried*** Price of product option ||
| `stock` | `integer` |   Quantity in stock |1|
| `status` | `tinyint(1)` |   0 or 1 to status |1|
#### Update Product Options 
```http
  PUT /api/v1/product/options/{id}
```
| Parameter | Type     | Description                |Default |
| :-------- | :------- | :------------------------- | :-------|
| `title` | `string` | ***required*** Product title |
| `image` | `text` | ***required*** Product image |
| `product_id` | `integer` | ***required*** Product ID |
| `price` | `double` |  ***requried*** Price of product option |
| `stock` | `integer` |   Quantity in stock | 1|
| `status` | `tinyint(1)` |   0 or 1 to status | 1|

#### Delete Product Options 
```http
  DELETE /api/v1/product/options/{id}
```