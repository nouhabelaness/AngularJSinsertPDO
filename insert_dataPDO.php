
<?php
    error_reporting(0);
    $conn= new PDO("mysql:host=localhost; dbname=angularjs_DB","root","");  
    $_POST = json_decode(file_get_contents('php://input'), true);
    if(!empty($_POST['CompanyName'])&& !empty($_POST['City']))
    {
       $ins_query=$conn->prepare("insert into Customers (CompanyName, City, Country) values( :CompanyName,:City , :Country)");
       $ins_query->bindParam(':CompanyName', $_POST['CompanyName']);
       $ins_query->bindParam(':City', $_POST['City']);
       $ins_query->bindParam(':Country', $_POST['Country']);
       $chk_ins=$ins_query->execute();
    }
?> 