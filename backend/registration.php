<?php
if( $_POST["email"] || $_POST["phone"] || $_POST["name"] ) {
  include "db.php";
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $name = $_POST['name'];
  $bday = $_POST['birthday'];
  $le = $_POST['last_education'];
  $ne = $_POST['name_education'];
  $address = $_POST['address'];
  $regisdate = date("Y/m/d");
  $cid = 1;// semetara masih dummy
  $referral = $_POST['referralid']
  $status = 0;
  $stmt = $db->prepare("INSERT INTO student (email, phone, name, birthday,
    last_education, name_education, address, register_date, course_id,
    referral_id,status) VALUES (?,?,?,?,?,?,?,?,?,?,?) ");
  $stmt->bind_param("si", $name, $age);

  if ($stmt->execute() === TRUE) {
    echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
    <meta http-equiv='refresh' content='2; url= welcome.php'/>  ";
  } else {
      echo "Data gagal disimpan
      <meta http-equiv='refresh' content='2; url= tambah.php'/> ";
  }
  $stmt->close();
}
?>
