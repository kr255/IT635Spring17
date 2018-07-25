<?php
require 'vendor/autoload.php'; // include Composer's autoloader
class mongo
{
private $client;

public function __construct()
{
    $this->client = new MongoDB\Client("mongodb://localhost:27017");
}
// $collection = $this->client->Courses->course_info;
public function find()
{   
    echo "<style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>";
    $result = $this->client->Courses->books->find();
    echo "<table><tr>";
    
    echo "</tr>";

    foreach($result as $arr)
    {   
        $array = iterator_to_array($arr);
        //print_r($arr);
        //print_r($array);
    //     print_r(implode($array));
    //     echo "\n";
        echo "<tr><td>";
        echo implode('</td><td> ', $array) . PHP_EOL;
        echo "</td></tr>";
    }
    echo "</table>";
}
public function insertuserbook(

        $course_name,
        $course_book,
        $title_book,
        $price_book,
        $contact_book
        
        )
    
    {   
        if(empty($course_name) || empty($course_book) || empty($title_book) || empty($price_book) || empty($contact_book))
        {
            echo "empty";
        }
        else{
        $collection = $this->client->Courses->user_info;
        $insert = $collection->insertOne([
            "course_id" => "$course_name",
            "isbn" => "$course_book",
            "title_book" => "$title_book",
            "price_book" => "$price_book",
            "contact_book" => "$contact_book"
        ]);
        printf("Inserted %d document(s)\n", $insert->getInsertedCount());
        }
    }
    
public function getonedata($isbn)
    {
        echo "<style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>";
    $collection = $this->client->Courses->user_info;
    $result = $collection->find([ "isbn" => "$isbn"]);
   
    foreach($result as $arr)
    {   
        $array = iterator_to_array($arr);
        //print_r($arr);
        //print_r($array);
    //     print_r(implode($array));
    //     echo "\n";
        echo "<tr><td>";
        echo implode('</td><td> ', $array) . PHP_EOL;
        echo "</td></tr>";
    }
    echo "</table>";
    }
    
 
}

?>