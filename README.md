# Backup-MySQL-database-using-PHP

Using PHP programming to create a database backup is simple. We'll learn how to backup a MySQL database using simple core PHP code.
To get the table schema and data to be dumped into a file, I first get the database connection object. I get a list of all the table names from the 
database and put them in an array. The SQL script for the data/structure is then prepared by iterating through the array of database tables. 
This SQL script will be saved as a file and downloaded to the user's browser before being deleted from the target.
