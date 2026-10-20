# Introduction to PDO

Before working through these practical exercises, it's probably worth having a look at these [notes](https://github.com/CIT2202/intro-to-pdo/blob/main/notes.md). They explain the basics of working with a database using the PDO extension. 

## Setting up
This practical is about using PHP to work with a MySQL database. We will work with the films database we created in the practical last week (this is the database with multiple tables - films, certificates, genres etc.). If you don't have this from last week, you can grab the  *films-db.sql* file from https://github.com/CIT2202/sql-joins/blob/master/films-db.sql.

## If you are using Codespaces
- Open your existing codespace (you shouldn't create a new one) https://github.com/codespaces.
- In the terminal enter
```
git clone https://github.com/CIT2202/intro-to-pdo
```
This will copy the contents of this repository into your codespace.

## Using ```query```
* Open *list.php*. Change the connection settings to match your database. This is the line you need to change

```
    $conn = new PDO('mysql:host=localhost;dbname=MyDatabase', 'MyUsername', 'MyPassword');
```
We will use the same settings we used to access Adminer:

```
    $conn = new PDO('mysql:host=db;dbname=webdev', 'student', 'secret');
```

- View _list.php_ in a browser. You should see a list of films.
* Answer the questions in this file.

### Using prepared statements
```query``` is fine to use when we are running queries that don't involve input from the user, but a lot of the time we will use data the user has entered as part of the query. To do this we need to use prepared statements. 
* In VS Code, open *form.html* and *prepared-stmt.php*. Change the database settings in *prepared-stmt.php* and answer the questions.
