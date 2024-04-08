<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $message = $_POST['message'];
    
    // E-posta gönderme işlemi
    $to = "sqlinjection829@gmail.com";
    $subject = "İletişim Formundan Yeni Mesaj";
    $body = "İsim: $fname\nSoyisim: $lname\n\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Mesajınız başarıyla gönderildi.')</script>";
    } else {
        echo "<script>alert('Mesaj gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.')</script>";
    }
}
?>
