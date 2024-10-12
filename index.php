<?php

$env = parse_ini_file('.env');

$connect = mysqli_connect(
    'db',                   # service name
    $env['DB_USERNAME'],    # username
    $env['DB_PASSWORD'],    # password
    'php_docker'            # database table
);

$table_name = 'php_docker_table';

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while ($row = mysqli_fetch_assoc($response)) {
    echo "<p>" . $row['title'] . "</p>";
    echo "<p>" . $row['body'] . "</p>";
    echo "<p>" . $row['date_created'] . "</p>";
    echo "<hr>";
}
