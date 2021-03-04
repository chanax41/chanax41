<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHPJabbers.com | Free Travel Agency Website Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@700&display=swap" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <?php include('includes/header.php');?>
      
    <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-3-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-6">
                                      <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-6">
                                      <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <div class="blue-button">
                                            <a href="#" id="form-submit" class="btn">Send Message</a>
                                        </div>
                                      </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                            <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium.</p>
                                            <ul>
                                                <li><span>Phone:</span><a href="#">+1 333 4040 5566</a></li>
                                                <li><span>Email:</span><a href="#">contact@company.com</a></li>
                                                <li><span>Address:</span><i class="fa fa-map-marker"></i> 212 Barrington Court New York</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php');?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>