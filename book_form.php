<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if(isset($_POST['book']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form(name, email, phone, address,loaction, gusets,arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    mysqli_query($connection, $request);

    header('location: book.html');
}
else
{
    echo 'هناك خطأ!';
}

?>
