## Laravel Food Blog

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>


##Features
• Create and edit blog posts
• Favorite blog posts
• Comment on blog posts

##Previews
### Home Page
![index](https://github.com/nthnplks21/CA3-Laravel-Blog/blob/main/ReadMeImages/blog1.png?raw=true)

### Comment section
![comment](https://github.com/nthnplks21/CA3-Laravel-Blog/blob/main/ReadMeImages/blog2.png?raw=true)


### Favorite section
![fav](https://github.com/nthnplks21/CA3-Laravel-Blog/blob/main/ReadMeImages/blog3.png?raw=true)



## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone https://github.com/nthnplks21/CA3-Laravel-Blog.git
cd ca3-laravel-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```
