<?php
// Include database class
include 'useDB.php';

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$database = new Database();

        $database->query('INSERT INTO guestbook (name, email, comment)
                                 VALUES (:name, :email, :comment)');

        $database->bind(':name', $name);
        $database->bind(':email', $email);
        $database->bind(':comment', $comment);


        $database->execute();


echo $name.'<br />';
echo $email.'<br />';
echo $comment;




