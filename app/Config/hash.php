<?php
// Tentukan password yang ingin di-hash
$password = "admin123";

// Gunakan fungsi password_hash() dengan algoritma default (bcrypt) dan cost yang cukup tinggi
$hashed_password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);

// Tampilkan hasil hashing
echo $hashed_password;