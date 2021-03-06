<?php
//stop displaying errors
//ini_set('display_errors', 'OFF');

error_reporting(1);

//open nonexistant file. Throws Warning.
//$file = fopen("data.txt","r");

//Class to handle exceptions
class myData
{
    function getData()
    {
        //if file can't be opened
        if(!$file = fopen("data.txt","r")){
            throw new Exception('Unable to access file');
        }    
    }
}
//Object to handle exceptions
$data = new myData();

try{
    $data->getData();
    
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "End of file";
?>