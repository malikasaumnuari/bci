<?php
require_once '../db_connect.php';
session_start();
if($_SESSION['id_user']==""){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='indexlogin.php';</script>
<?php }
if (isset($_SESSION['id_user'])) $id_user = $_SESSION['id_user'];

if($_POST){
  $username = $_POST['username'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $date_birth = $_POST['date_birth'];
  $email = $_POST['email'];
  $hashpassword = $_POST['password'];
  $password = md5($hashpassword);

  $edit_profile = mysqli_query($connect, "UPDATE users SET username = '$username', gender = '$gender', address = '$address', contact = '$contact',  date_birth = '$date_birth', email = '$email', password = '$password' WHERE id_user = {$id_user}");

  if($edit_profile) {
    ?>
    <script language="javascript">alert("Informasi umum berhasil diubah");</script>
    <script>document.location.href='profile.php';</script>
    <?php
  }
  else  {
    ?>
    <script language="javascript">
    alert("Informasi umum gagal diubah, silahkan isi dengan benar");</script>
    <script>document.location.href='changeprofile.php';</script>
    <?php
  }
  }
