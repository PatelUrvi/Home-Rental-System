<?php
$opt = $_GET['opt'];

$pdo = new PDO('mysql:host=localhost;dbname=rental_home_system', 'root', '');
$sql = "SELECT CityId,CityName FROM tbl_city where StateId='" . $opt . "'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$city = $stmt->fetchAll();
?>

<option disabled="" selected="">Select City</option>
<?php foreach ($city as $name): ?>
    <option value="<?= $name['CityName']; ?>"><?= $name['CityName']; ?></option>
<?php endforeach; ?>

