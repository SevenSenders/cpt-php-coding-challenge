# CPT PHP Coding Challenge

## Requirements
- PHP >= 8.0.2
- MySQL 5.7
- Symfony CLI

## How to start
There is nothing to install via composer, the **Vendor** folder already exists there. 

1. Config the MySQL config in the **.env** file
2. Run database migration

you can run the project with the following command:
```
symfony server:start
```

## Api
### Get all orders
```
http://localhost:8000/orders
```

### Get all shipments
```
http://localhost:8000/shipments
```
