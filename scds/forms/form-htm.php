<?php include("form-functions.php"); ?>
<?php include("form-processing.php"); ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
    </style>
</head>
<body>
    <h2>Contact Us</h2>
    <p>Don't fill this form to join</p>
    <form action="form-htm.php" method="post">
        <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </p>
        <p>
            <label for="inputSubject">Subject:</label>
            <input type="text" name="subject" id="inputSubject" value="<?php echo $subject; ?>">
        </p>
        <p>
            <label for="inputComment">Message:<sup>*</sup></label>
            <textarea name="message" id="inputComment" rows="5" cols="30"><?php echo $message; ?></textarea>
            <span class="error"><?php echo $messageErr; ?></span>
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
   
</body>
</html>