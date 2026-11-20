
<?php

$student = [

    "Name" => "Haseeb",
    "Age" => 20,
    "Semester" => 4,
    "University" => "UCP"

];


// DISPLAY FUNCTION
function display($data) {

    foreach ($data as $key => $value) {

        echo $key . " : " . $value . "<br>";

    }

}


// SEARCH FUNCTION
function search($data, $searchKey) {

    foreach ($data as $key => $value) {

        if ($key == $searchKey) {

            echo "Found: " . $value . "<br>";

            return;

        }

    }

    echo "Key not found<br>";

}


// UPDATE FUNCTION
function update(&$data, $key, $newValue) {

    foreach ($data as $currentKey => $value) {

        if ($currentKey == $key) {

            $data[$currentKey] = $newValue;

            echo "Updated successfully<br>";

            return;

        }

    }

    echo "Key not found<br>";

}


// INSERT FUNCTION
function insert(&$data, $key, $value) {

    $data[$key] = $value;

    echo "Inserted successfully<br>";

}


echo "<h3>Student Information</h3>";

display($student);

echo "<h3>Searching</h3>";

search($student, "Age");

echo "<h3>Updating</h3>";

update($student, "Age", 21);

echo "<h3>Inserting</h3>";

insert($student, "Qualification", "BSCS");

echo "<h3>Final Student Information</h3>";

display($student);
