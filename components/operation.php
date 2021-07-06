<?php

require_once("db.php");
require_once("components.php");

$con = Createdb();

// create button click
if (isset($_POST['create'])) {
    createData();
}

function createData()
{
    $firstName = userValue("first_name");
    $lastName = userValue("last_name");
    $email = userValue("email");
    $telephone = userValue("telephone");

    if ($firstName && $lastName && $email && $telephone) {

        $sql = "INSERT INTO formSubmit (first_name, last_name, email,telephone) 
                        VALUES ('$firstName','$lastName','$email','$telephone')";

        if (mysqli_query($GLOBALS['con'], $sql)) {
            TextNode("success", "Record Successfully Inserted...!");
        } else {
            echo "Error";
        }
    } else {
        TextNode("error", "Provide Data in the Textbox");
    }
}

function userValue($value)
{
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if (empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg)
{
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// get data from mysql database
function getData()
{
    $sql = "SELECT * FROM formSubmit";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}
