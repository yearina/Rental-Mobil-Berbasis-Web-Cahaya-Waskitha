<?php
// koneksi database...........
// hostname..... /username..... /password.../nama database .....
$conn = mysqli_connect("localhost","root","","cahaya_waskitha");

// membuat perintah penghubung query
function query($query){
    global $conn; 
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// membuat function register terlebih dahulu ....
function registrasi ($data){
global $conn;
// tangkap data input dari use;
$first_name = strtolower(stripcslashes($data["first-name"]));
$last_name  = strtolower(stripcslashes($data["last-name"]));
$full_name = $first_name.' '.$last_name;  
$email_register = strtolower(stripcslashes($data["email-register"]));
$no_handphone = strtolower(stripcslashes($data["no_handphone"]));
$password_register = mysqli_real_escape_string($conn,$data["password_register"]);
$password2_register = mysqli_real_escape_string($conn,$data["password2_register"]);
$address_register = stripcslashes($data["address_register"]);

// cek apakah nama yang dimasukan sudah ada di database
$result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$full_name'");
if(mysqli_fetch_assoc($result)){
    echo "<script>
    alert('username sudah terdaftar');
    </script>";
    return false; 
};
// cek konfirmasi password.....
if($password_register !== $password2_register) {
    echo "<script>
    alert('confirmasi password anda tidak sesuai ......');
    </script>";
    return false; 
}
// enkprisi password ........
$password = password_hash($password_register,PASSWORD_DEFAULT);
mysqli_query($conn,"INSERT INTO user VALUES('','$full_name','$address_register','$no_handphone','$email_register','$password')");
return mysqli_affected_rows($conn);
};

?>