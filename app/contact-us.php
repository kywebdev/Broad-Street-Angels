<!doctype html>
<html lang="en">
    <head>
        <title>Contact Us | Broad Street Angels</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="about contact">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <section class='header' style='background-image:url(img/contact/header.jpg);'>
          <div class='container'>
            <h1 class="right">CONTACT US</h1>
          </div>
        </section>
        <section class='body'>
          <div class='container'>
            <!--<h2 style="max-width: 700px; margin: 0px auto;">The contact us form is forthcoming. Please send all inquiries and questions to:</h2><br />
            <h2><a href="mailto:info@broadstreetangels.com">info@broadstreetangels.com</a></h2>-->
            <h2>For more information email us at:</h2>
            <h2><a href="mailto:info@broadstreetangels.com">info@broadstreetangels.com</a></h2>
            <p>*Required Field</p>
            <form class="contact-form">
                <div class='row'>
                    <div class='col-md-9'>
                        <input placeholder="*Full Name" />
                        <input placeholder="Title" />
                        <input placeholder="*Company" />
                        <div class="row">
                            <div class="col-md-6">
                                <input placeholder="*Email" />
                            </div>
                            <div class="col-md-6">
                                <input placeholder="Phone" />
                            </div>
                        </div>
                        <textarea placeholder="Your Message" ></textarea>
                    </div>
                    <div class="col-md-3 align-self-end">
                        <input type='submit' value="SUBMIT" />
                    </div>
                </div>
            </form>
          </div>
        </section>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
        <script>
            $('nav ul li:nth-child(7)').addClass('active');
        </script>
    </body>
</html>