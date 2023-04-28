<?php
$conn= new PDO('mysql:host=localhost;dbname=file-management', 'root');
foreach($_POST['name'] as $key => $value){
    $sql = 'INSERT INTO materials(name, rate,rdate) VALUES (:name, :rate, :rdate)';
    $stmt = $conn->prepare($sql);
    $stmt -> execute([
        'name' => $value,
        'rate' => $_POST['name'][$key],
        'rdate' => $_POST['rate'][$key]

    ]);
}
echo 'Report is successfully submitted!'; 
?>