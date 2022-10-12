# Introduction to PDO

Before working through these practical exercises, it's probably worth having a look at these [notes](https://github.com/CIT2202/intro-to-pdo/blob/main/notes.md). They explain the basics of working with a database using the PDO extension. 

## Setting up
This practical is about using PHP to work with a MySQL database. We will work with the films database we created in the practical last week (this is the database with multiple tables - films, certificates, genres etc.). If you don't have this from last week, you can grab the  *films-db.sql* file from https://github.com/CIT2202/sql-joins/blob/master/films-db.sql.

## Using ```query```
* In a text editor open *list.php*. Answer the questions in this file
  

## Using prepared statements
```query``` is fine to use when we are running queries that don't use input from the user, but a lot of the time we will use data the user has entered as part of the query. To do this we need to use prepared statements. 
* In a text editor open *form.html* and *prepared-stmt.php*. Answer the questions in *prepared-stmt.php*.
