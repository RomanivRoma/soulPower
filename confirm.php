<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soul Power</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"
          type="image/png"
          href="./img/favicon.png">
</head>
<body>
<?php
    $name = $_POST['userName'];
    $user_email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    setcookie('name', $name, time() + (86400 * 30), "/");
    $email_from = "dgamble4084@gmail.com";
    $mail_subject = "Problem from $name";
    $email_body = "Письмо пришло от $name.\n".
        "Почта: $user_email.\n".
        "Телефон: $phone.\n".
        "Детали:\n$message.\n".
    // echo $email_body;
    $to = "romaniv.roma2013@gmail.com";
    $headers = "From: $email_from\r\n";
    $headers .= "Organization: Sender Organization\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
//mail($to, $mail_subject, $email_body, $headers)
    if(true):
    ?>

    <form method="POST">
        <div class="notif-back">
            <div class="notif-box">
                <div class="notif-img">
                    <img src="./img/success.png" alt="success">
                </div>
                <div class="text">
                    <h2 class="success-heading">Success</h2>
                    <p>Ваше сообщение было успешно доставлено, мы свяжемся с вами как можно скорее.</p>
                </div>
                <div class="notif-button">
                    <a href="./index.php" class="success" name="back">Ok</a>
                </div>
            </div>
        </div>
    </form>
    <?php else: ?>
    <form method="POST">
        <div class="notif-back">
            <div class="notif-box">
                <div class="notif-img">
                    <img src="./img/error.png" alt="error">
                </div>
                <div class="text">
                    <h2 class="error-heading">Error</h2>
                    <p>Ваше сообщение не было доставлне. <br>Попробуйте связатся через почту:<a href="mailto:romaniv.roma2013@gmail.com?subject = Feedback&body = Message">romaniv.roma2013@gmail.com</a>.</p>
                </div>
                <div class="notif-button">
                    <a href="index.php" class="error" name="back">Ok</a>
                </div>
            </div>
        </div>
    </form>


     <?php
//    if(isset($_REQUEST['back'])){
        echo "<script> self.history.go(-2); </script>";
//    }
    endif;
    ?>
    </body>
</html>