<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" </head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">Send Message</h2>
                <p class="text-center">Send mail to anyone from localhost.</p>
                <!-- Starting php codes -->
                <?php
                if (isset($_POST['submit'])) {
                    $recipient = $_POST['recipients'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    $sender = "From: adiyorbek573@gmail.com";
                    if (empty($recipient) || empty($subject) || empty($message)) {
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php echo "All input fields are required!" ?>
                        </div>
                        <?php
                    } else {
                        if (mail($recipient, $subject, $message, $sender)) {
                            ?>
                            <div class="alert alert-success text-center">
                                <?php echo "Your email sent success to $recipient"?>
                            </div>
                            <?php
                        }
                        else{
                            ?>
                             <div class="alert alert-danger text-center">
                                <?php echo "Failed While sending your mail!"?>
                            </div>
                            <?php
                        }
                    }
                }


                ?>
                <!-- End of php code -->
                <form action="index.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Recipients" name="recipients">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Compose message ..."
                            class="form-control textarea"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control button btn-primary" value="Send" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>