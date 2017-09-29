# KabelKiosken.dk-public-scripts
A collection of scripts for KabelKiosken's customers and resellers

The following scripts are currently available:
### import.php
A script to import products from KabelKiosken, with the following variables

| Variable              | Type          | Lenght  |
| --------------------- |:-------------:| -------:|
| category_name         | Varchar       | 255
| category_id           | Int           | 11
| product_id            | Int           | 11
| stock                 | Int           | 11
| name                  | Varchar       | 255
| url                   | Varchar       | 255
| price                 | Decimal       | 255
| producer              | Varchar       | 255
| small_description     | Text          | ///
| large_description     | Text          | ///
| image                 | Varchar       | 255
| image1                | Varchar       | 255
| image2                | Varchar       | 255
| image3                | Varchar       | 255

Please note that the script should be edited before use, as there should be a database configuration of your choice that makes the SQL sentence to import the data, from the variables.



### update.php
A script to update product stock and price from KabelKiosken, with the following variables

| Variable              | Type          | Lenght  |
| --------------------- |:-------------:| -------:|
| product_id            | Int           | 11
| price                 | Decimal       | 255
| stock                 | Int           | 11

Please note that the script should be edited before use, as there should be a database configuration of your choice that makes the SQL sentence to import the data, from the variables.
