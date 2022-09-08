<p align="center">
<a href="https://vacancysoft.com/" target="_blank">
<img src="https://vacancysoft.com/wp-content/uploads/2018/07/VacancysoftLogo-Data-Publishers_366x873_optimised.png" width="400">
</a>
</p>


### Test Instructions

### Using the following technologies, fulfil the challenge as described below.



## Technologies, Server-Side

- Symfony v5.3
- Doctrine v2.9.3
- Varnish v4
- NodeJS v10


## Technologies, Client-Side

- Angular v12
- HTML5.


## Technologies, Database

- MySQL v5.7x


## Challenge

- Restore the MySQL dump file to your local database instance.
- Model the database in Doctrine, using the existing foreign key references to define relationships between tables.


- Create a REST API in Symfony using Doctrine that presents an endpoint for loading data from the sample database serialised using JSON.
- Allow support for ‘date range’ and ‘company’ parameters, where multiple companies can be selected.


- Create a single-page Angular web application allowing users to specify ‘date range’ and ‘company’ parameters to request a dataset from the API.
- Render a table of data in the application with client-side filtering for ‘profession’, ‘division’ and ‘role’, sorting for each column and paging.


- Extend the MySQL schema to include tables for saving all user settings, including API parameters, client-side filters, sorting and paging settings.
- Create a REST API in Symfony that presents an endpoint that saves user settings to the database.
- Create client-side features allowing the user to reload a previously saved dataset.


- Create a REST API in Symfony that presents an endpoint for emailing a screen-print of the interface.
- Create client-side features allowing the user to specify their email address.
- Render the table using NodeJS on the server-side, generate a PDF and send it out to the user.

## How to run the application

Below are the steps you need to successfully setup and run the application.
- Clone the app from the repository and cd into the root directory of the app

```
 cp .env.example .env
```

Now, the most important, build and start the package dependencies by running
`composer install`

Composer will start doing its magic. All required dependencies, will be installed.

for migration 
``
php bin/console doctrine:database:create
``


While composer is doing its magic, you need to add to modify `.env` file:
```
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=laravel
 DB_USERNAME=root
 DB_PASSWORD=
```

### To Migrate the database in the project, command below
```
 php artisan migrate --seed
```

While migrating the database, you need to serve the project with this command `php artisan serve`

### How to run tests
```
 php artisan test
```

[//]: # (![alt text]&#40;public/testing.png&#41;)

### Login Details
* email: admin@admin.com
* password: password

### Sample Requests
The EveryAngle API gives you access to pretty much all the features you can use on our dashboard and lets you extend them for use in your application. It strives to be RESTful and is organized around the main resources you would be interacting with - with a few notable exceptions.
The Api Collection is located in the application, and it called `EveryAngle.postman_collection.json`
