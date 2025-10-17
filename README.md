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

Now move onto [Completing the practical work](#practical)

## If you are using XAMPP

- Download the code in this repository (click on the big green button that says 'code')
- Unzip the folder.
- Copy it into the htdocs folder on XAMPP
- Open the folder using your text editor of choice e.g. VS Code
* Some simple form processing has been set up already. Make sure it works. View *html-forms.html* through a browser (it must be on a server). Enter something for the email address and hit submit. The data you entered should be displayed.


Now move onto [Completing the practical work](#practical)

## Completing the practical work <a id="practical"></a>
### Using ```query```
* In a text editor open *list.php*. Change the connection settings to match your database. This is the line you need to change

```
    $conn = new PDO('mysql:host=localhost;dbname=MyDatabase', 'MyUsername', 'MyPassword');
```
If you are using Codespaces we will use the settings we used to access Adminer:

```
    $conn = new PDO('mysql:host=db;dbname=cht2520', 'root', 'secret');
```

If you are using XAMPP you will need to change _MyDatabase_, _MyUsername_ and _MyPassword_ to match the username and password you entered in phpmyadmin last week.

- View _index.php_ in a browser. You should see a list of films.
* Answer the questions in this file.

### Using prepared statements
```query``` is fine to use when we are running queries that don't use input from the user, but a lot of the time we will use data the user has entered as part of the query. To do this we need to use prepared statements. 
* In a text editor open *form.html* and *prepared-stmt.php*. Change the database settings in *prepared-stmt.php* and answer the questions.
