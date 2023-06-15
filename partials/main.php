<?php

// Please add your logic here

echo "<h1 class='starting-title'>Nice to see you! &#128075;</h1>";

echo '<h2>Here You can see the magic!</h2>';

$dataset = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dataset/users.json'); // usually prefer to set root var in the entry point to use
$dataset = json_decode($dataset, true);

$columns = ['Name', 'Username', 'Email', 'Address', 'Phone', 'Company'];

echo '<table><thead><tr>';

foreach ($columns as $column) {
    echo '<th>'.$column.'</th>';
}

echo '<th><!-- Action Button --></th>';

echo '</tr></thead><tbody>';

foreach ($dataset as $row) {
    echo '<tr id="'.$row['id'].'">';

    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['username'].'</td>';
    echo '<td><a href="mailto:'.$row['email'].'">'.$row['email'].'</a></td>';
    echo '<td>'.$row['address']['street'].',<br>'.$row['address']['zipcode'].'<br>'.$row['address']['city'].'</td>';
    echo '<td>'.$row['phone'].'</td>';
    echo '<td>'.$row['company']['name'].'</td>';

    echo '<td><button class="removeItemBtn">Remove Button</button></td>';

    echo '</tr>';
}

echo '</tbody></table>';

echo '<h3>Let\'s add a new User!</h3>';

include_once $_SERVER['DOCUMENT_ROOT'].'/partials/newUser.php';
