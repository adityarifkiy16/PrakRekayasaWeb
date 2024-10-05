<?php
$jsondata = '{
    "employee": {
        "name": "Aditya Rifki",
        "age": 20,
        "salary": 56000,
        "married": true,
        "hobby": ["makan", "tidur", "ngoding"]
    }
}';

// Decode the JSON
$data = json_decode($jsondata);

echo "Name: " . $data->employee->name . "<br>";
echo "Salary: " . $data->employee->salary . "<br>";
echo "Age: " . $data->employee->age . "<br>";

// cek status dengan ternary 
echo "Married: " . ($data->employee->married ? 'Yes' : 'No') . "<br>";

echo "Hobby: " . "<br>";
// Mengambil data hobby dengan iterasi
foreach ($data->employee->hobby as $hobby) {
    echo "- " . $hobby . "<br>";
}
