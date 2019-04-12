<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

### [Haven Agency Test](https://github.com/Katsurio/havenagency)

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/Katsurio/havenagency.git

Switch to the repo folder

    cd havenagency

Install all the dependencies using composer

    composer install
    
Install all the front end dependencies using npm
    
    npm install

Use the environment file I included in the email to make use of the Google Maps API key

    .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
Import the MySQL dump file into your database to populate it with test contacts/data
    
    .sql

Start your preferred local development server (I used Homestead)

    e.g. php artisan serve

Compile all the front end assets using npm

    npm run dev
    

**TL;DR command list**

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git
    cd laravel-realworld-example-app
    composer install
    npm install
    cp .env.example .env
    php artisan key:generate
    import .sql into database
    start local server
    npm run dev


----------



#Haven Programming Challenge

##Objective: Create a simple web application to maintain a list of contacts.

###Our web-app should be able to:
1. Create a new contact
2. List contacts alphabetically
3. Modify the details of an existing contact 
4. Delete a contact
5. A contact contains the following fields:
a. first name b. last name c. email
d. phone
e. birthday f. address
g. city h. state
i. zip
###Technical requirements include:
1. Use the latest Laravel(https://laravel.com/) PHP Framework
2. Use a relational database of your choice to store your data (preferably: MySQL)
3. Your data entry form must include field validation and proper error messaging:
a. first name, last name, e-mail are required fields.
4. Use a Styling framework such as bootstrap(https://getbootstrap.com/). You can use your own if you have one or any other.
5. Include any necessary instructions in the README.md to get your web-app working along with the database (SQL) schema specification
(preferably use Laravel's db migrations)
6. Create a Git code repository of your web-app on Github or Bitbucket for us to clone and deploy on our staging server for evaluation
###Extra Credit:
1. Add a search box
2. Column sorting: ascending and descending
3. Pagination of the list of contacts: 10, 25, 50, per page etc
4. Google Maps Integration - when viewing the details of the contact, be able to render a google map
and drop a marker on their address. **Extra kudos for customizing a marker.