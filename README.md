### Prerequisites
Ensure you have the following installed:
- PHP >= 8.x
- Composer
- Node.js and npm
- Xampp

### To setup
- ```cd my-online-shop```
- ```composer install```
- ```npm install```
- Create a .env file in the root directory similar to the already provided .env.example file and edit the database connection credentials accordingly
- ```php artisan migrate```  <!-- for database migration -->

### then to run the application
- ```npm run dev``` or <!-- to start the development server --> 
- ```php artisan serve``` or<!-- to start the development server --> 
- ```composer run dev``` <!-- to start the development server --> 

### Use any of the last three commands to start the development server(if one fails, try another) 
