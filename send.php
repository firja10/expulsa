<?php 
if(isset($_POST['submit'])){
    $nominal_pulsa = $_POST['nominal_pulsa'];
    $provider = $_POST['provider'];
    $nomor_pengirim = $_POST['nomor_pengirim'];
    $bank_dompet = $_POST['bank_dompet'];
    $nomor_rekening = $_POST['nomor_rekening'];

    header("location:https://api.whatsapp.com/send?phone=6287847972064&text=Nominal_Pulsa:%20$nominal_pulsa%20%0DProvider:%20$provider%20%0DNomor_Pengirim:%20$nomor_pengirim%20%0DBank/Dompet:%20$bank_dompet%20%0DNomor_Rekening:%20$nomor_rekening");
}

else {
    echo "
    <script>
    windows.location=history.go(-1);
    </script>
    ";
}

?>