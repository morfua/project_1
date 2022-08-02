<?php
$userEmail = $_POST['user_Email'];
$userPhone = $_POST['user_Phone'];
$userName = $_POST['user_Name'];
// echo "Привет $userName";
mail("morfua@gmail.com", "Новый заказ от $userEmail ", "$userName, Телефон: $userPhone, почта: $userEmail");
