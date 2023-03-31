<?php
// 데이터베이스 연결
$mysqli = new mysqli("localhost", "root", "", "new");

// 오류 처리
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// POST 데이터 받기
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// 쿼리 실행
$query = "INSERT INTO id (username, password, email) VALUES ('$username', '$password', '$email')";
$mysqli->query($query);

// 연결 종료
$mysqli->close();
?>
