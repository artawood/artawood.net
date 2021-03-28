<!DOCTYPE html>

<html>
    <head>
        <title>Basic Portfolio | Contact</title>
        <!-- Recommended Assignment for the first homework-->
        <meta charset="UTF-8">
        <meta name="viewport"       content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" 	content="Art's portfolio page">
        <meta name="keywords"		content="Artawood Chitamitara">
        <meta name="author" 		content="Artawood Chitamitara">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <header>
            <nav class="navbar fixed-top">
                <div class="header-wrap">
                    <div class="left-nav">
                        <div class="nav-brand"><a class="logo" href="index.html">ARTAWOOD</a></div>
                    </div>
                    <div class="right-nav">
                        <ul>
                            <li style="border-right: 1px solid #cccccc;"><a href="index.html">About</a></li>
                            <li style="border-right: 1px solid #cccccc;"><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul> 
                    </div>
                </div>
            </nav> <!-- Navigation -->
        </header>
                
        <section>
            <div class="container">
            <!-- all contents on the page in this container -->
                <div class="sub-container glide-up">
                    <div class="page-header">
                        <h1>Contact</h1>
                    </div> <!-- Page Header -->           
                    <div class="content">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="Your Name">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="Your Email">
                            <label type="text">What are you contacting about?</label>
                            <select name="subject">
                                <option value=""></option>
                                <option name="option-1">I want to hire you</option>
                                <option name="option-2">I want to collaborate</option>
                                <option name="option-3">Other
                            </select>
                            <label>Message</label>
                            <textarea rows="5" name="message"></textarea>
                            <button class="btn" type="submit">Get in Touch!</button>
                        </form>
                        <!-- PHP Mailer -->
                        <?php
                        if (isset($_POST["email"])) {
                            //email message to webmaster
                            $subject = $_POST['subject'];
                            $email   = $_POST['email'];
                            $message .= 'From: '.$_POST['name']."\n\n";
                            $message .= 'Email: '.$_POST['email']."\n\n";
                            $message .= 'Message: '."\n\n".$_POST['message']."\n\n";
                            $subject2 = 'Confirmation Email from Art Chitamitara';
                            $message2 = 'Hi ' .$_POST['name']."\n\n";
                            $message2 .= 'This is to confirm that I have received you message.'."\n\n";
                            $message2 .='If this email was sent to you incorrectly, my apologies!'."\n\n";
                            $message2 .='Sincerely,';
                            $message2 .='Art Chitamitara';
                            $headers = "From: artawood@gmail.com";
                            //declare my email
                            $email2 = 'artawood@gmail.com'; 
                            //send mail to webmaster
                            mail($email2, $subject, $message, $headers);
                            //send confirmation mail to sender
                            mail($email, $subject2, $message2, $headers);
                            echo '<script> window.location = "confirmation.html"</script>';
                        }
                        ?>
                    </div> <!-- content -->
                </div><!-- subcontainer -->
            </div> <!-- container -->
        </section>
                
        <footer>
            <div class="footer-wrapper">
                <p style="text-align: center; width: 100%; color: #FFFFFF;">&copy; 2018 Artawood</p>
            </div>
        </footer>
    </body>  
</html>
