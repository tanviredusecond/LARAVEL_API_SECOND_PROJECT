1) add the schema to the Aritcle model
    $ php artisan make:model Article -m
2) add the fillable column to the Article Column
3) adding the ArticleSeeder
    $ php artisan make:seeder ArticlesTableSeeder
4) adding the UserTableSeeder
    $ php artisan make:seeder UserTableSeeder
   in the file add the user namaspace "use \App\User"
5) add the two seeder reference to the main 
   DatabaseSeeder.php file
   we call the two class from the DatabaseSeeder

6) call the Seeder with the command
   $php artisan db:seed

7) create the controller
   $ php artisan make:controller ArticleController
   and add the Article model namespace
   use App\Article
8) add the CRUD api method in the class

9) for the error we get a html response with
   the render function.So we change the ender function  to get the json response
   in the "app/Exception/Handler.php"

10) we extend the user database and add another 
    migration and add the api_token

    $ php artisan make:migration --table=users adds_api_token_to_users_table

    add the column api_token column
    refresh the whole database
    $ php artisan migrate:refresh --seed

11) make a register endpoint
    and we dont use any controller
    we use the Auth/RegisterController.php
    and we add a function name "registered()"

    there is a class name "RegisterUsers" in the
    RegisterController use. this class call the 
    a empty function registed() for further
    so if we add the registed() function inside 
    the register controller we do not need to
    call the function registration function will automatically call it after the successfull registration
    search Registercontroller in the file

    this registered() function take two parameter

    registered($request,$user)

12) we call a function called generatetoken
    that will be called from the model Article class
    so we need to write the method there
    to create a random token 
    we need to import the namaspace
    "Illuminate\Support\Str"

    and we use the Str::random(60)

    for creating random string for ceating token

13) the register endpoint will redirect the data to the "RegisterController@register" if it is successfull then it will call the custom registred function automatically

when we post json in the register we threre will 
four field
like
{"name": "John", "email": "john.doe@toptal.com", "password": "toptal123", "password_confirmation": "toptal123"}'

after posting this if everything goes well yoi will get a token

14) as like the for registration we change default RegisterController

for login we change the loginController

actually not the LoginController

Logincontroller import a class name "AuthenticateUsers" which is AuthenticateUsers.php

we change the login method and return a json

to find in VSCODE just type ctrl+p and then AuthenticateUsers



15) Create the login end point

16) the end point take the json which has tow field
{"email": "admin@home.com", "password": "password" }

it will give you a token after posting data

and you can use it as a bearer token and use it for login with any frontend framework
