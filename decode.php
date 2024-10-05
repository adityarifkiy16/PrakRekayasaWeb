<?php
$jsondata = '{  
    "employee": {  
        "name": "Aditya Rifki",   
        "age" : 20,
        "salary": 56000,   
        "married": true  
    }  
}';

$data = json_decode($jsondata);
echo "Name: " . $data->employee->name . "<br>";
echo "Salary: " . $data->employee->salary . "<br>";
echo "Age:" . $data->employee->age . "<br>";

// check if married is true or false
echo "Married: " . ($data->employee->married ? 'Yes' : 'No') . "<br>";
