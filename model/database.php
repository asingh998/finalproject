<?php

//Require our config file
require '/home/asinghg1/config.php';

class database
{
    private $_dbh;

    function __construct()
    {
        //Connect to database with PDO
        try {
            //Instantiate a database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo 'Connected to database!';
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function writeForm($form)
    {

        //Write to database
        //1. Define the query
        $sql = "INSERT INTO data_table (first_name, last_name, phone, service, year, model, comment)
                VALUES (:first_name, :last_name, :phone, :service, :year, :model, :comment)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':first_name',$form->getFirst());
        $statement->bindParam(':last_name',$form->getLast());
        $statement->bindParam(':phone',$form->getPhone());
        $statement->bindParam(':service',$form->getService());
        $statement->bindParam(':year',$form->getYear());
        $statement->bindParam(':model',$form->getModel());
        $statement->bindParam(':comment',$form->getComments());

        //4. Execute the statement
        $statement->execute();
    }
}