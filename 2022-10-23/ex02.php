<?php
$customers = [
    [
        "fullName" => "Hoang Son",
        "email" => "cc@gmail.com",
        "phone" => "123",
        "address" => "111 cc"
    ], [
        "fullName" => "Hoang Son 2",
        "email" => "cc@gmail.com",
        "phone" => "123",
        "address" => "111 cc"
    ], [
        "fullName" => "Hoang Son 3",
        "email" => "cc1@gmail.com",
        "phone" => "123",
        "address" => "111 cc"
    ], [
        "fullName" => "Hoang Son 4",
        "email" => "cc2@gmail.com",
        "phone" => "123",
        "address" => "111 cc"
    ],
];

$tableRows = '';
$emails = [];
function renderRows(): void
{
    global $customers, $tableRows, $emails;
    foreach ($customers as $key => $customer) {
        print_r($customer["fullName"]);
        $email = $customer["email"];
        if (in_array($email, $emails)) $email = ''; else {
            $emails[] = $email;
        }
        $tableRows .= '<tr><td>' . ($key + 1) . '</td><td>' . $customer["fullName"] . '</td><td>' . $email . '</td><td>' . $customer["phone"] . '</td><td>' . $customer["address"] . '</td></tr>';
    }
}

renderRows();

echo '<table><tr><th>STT</th><th>Full Name</th><th>Email</th><th>Phone</th><th>Address</th></tr>' . $tableRows . '</table>';
