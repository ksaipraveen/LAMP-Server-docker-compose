<?php

$connect = mysqli_connect(
    'db', # service name
    'sai', # username
    'password', # password
    'sai' # db table
);

$table_name = "php_table";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['company']."</p>";
    echo "<p>".$i['about']."</p>";
    echo "<p>".$i['platforms']."</p>";
    echo "<p>".$i['date']."</p>";
    echo "<hr>";
}
