<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
        <title>ABEDA sarl</title>

        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/color.css">
    </head>
    <body>
        <main>
            
            <?php include_once("menu.php"); ?>

            <section>
                <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.jpg);"></div>
                    <div class="container">
                        <div class="page-title-wrap text-center w-100">
                            <div class="page-title-inner d-inline-block">
                                <h1 class="mb-0">Contactez Nous</h1>
                                <ol class="breadcrumb mb-0 justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php" title="">Accueil</a></li>
                                    <li class="breadcrumb-item active">Contactez-Nous</li>
                                </ol>
                            </div>
                        </div><!-- Page Title Wrap -->
                    </div>
                </div>
            </section>

            <section>
                <div class="w-100 pt-100 thm-layer opc6 pb-30 position-relative">
                    <div class="fixed-bg back-blend-lighten thm-bg" style="background-image: url(assets/images/parallax-bg7.jpg);"></div>
                    <div class="container">
                        <div class="sec-title3 text-center w-100">
                            <div class="sec-title3-inner d-inline-block">
                                <h3 class="mb-0">Contact Information</h3>
                                <p class="mb-0">ABEDA SARL est une PME de droit ivoirien dans le Bâtiment et travaux publics.</p>
                            </div>
                        </div>
                        <div class="contact-info-wrap text-center position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="contact-info-box position-relative w-100">
                                        <i class="fas fa-envelope-open brd-rd10 d-inline-block scndry-clr"></i>
                                        <span class="d-block"><a href="mailto:info@nauthemes.com" title="">abedasarl@gmail.com</a></span>
                                        <!-- <span class="d-block"><a href="mailto:admin@nauthemes.com" title="">admin@nauthemes.com</a></span> -->
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="contact-info-box position-relative w-100">
                                        <i class="fas fa-home brd-rd10 d-inline-block scndry-clr"></i>
                                        <p class="mb-0">Cité Escalupe, Batiment A2, 2ème étage<br> porte 4 Plateau - 18 BP 2526 Abidjan 18 Abidjan - Côte d’Ivoire.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="contact-info-box position-relative w-100">
                                        <i class="fas fa-phone-alt brd-rd10 d-inline-block scndry-clr"></i>
                                        <span class="d-block">(+225) 27 20 22 24 24</span>
                                        <span class="d-block">(+225) 07 07 97 13 94</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Contact Info Wrap -->
                        <div class="social-links3 v2 mb-05 d-flex flex-wrap justify-content-center align-items-center w-100">
                            <h3 class="mb-0">Contactez-Nous sur les Reseaux Sociaux:</h3>
                            <a class="brd-rd5 facebook-hvr" href="https://www.facebook.com/abedasarl/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="brd-rd5 linkedin-hvr" href="https://ci.linkedin.com/in/abeda-sarl-307413158" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="w-100 pt-100 gray-layer opc7 pb-100 position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/parallax-bg14.jpg);"></div>
                    <div class="container">
                        <div class="sec-title4 text-center w-100">
                            <div class="sec-title4-inner d-inline-block">
                                <h2 class="mb-0">Envoyez nous un message:</h2>
                                <p class="mb-0">Veuillez correctement renseigner le formulaire.</p>
                            </div>
                        </div>
                        <div class="contact-form d-flex flex-wrap justify-content-center text-center w-100">
                            <form class="w-100" id="email-form">
                                <div class="response w-100"></div>
                                <div class="field-box w-100"><input class="brd-rd10 fname" type="text" name="fname" placeholder="Nom & Prenom(s)" required></div>
                                <div class="field-box w-100"><input class="brd-rd10 email" type="email" name="email" placeholder="Email" required></div>
                                <div class="field-box w-100"><input class="brd-rd10 subject" type="tel" name="subject" placeholder="Objet" required></div>
                                <div class="field-box w-100"><textarea class="brd-rd10 contact_message" name="contact_message" placeholder="Message" required></textarea></div>
                                <div class="btn-box w-100"><button class="thm-btn scndry-bg brd-rd10 position-relative overflow-hidden" type="submit" id="submit">Envoyez</button></div>
                            </form>
                        </div><!-- Contact Form -->
                    </div>
                </div>
            </section>

            <section>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.612645184581!2d-4.017711185144733!3d5.3229590374294755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebb97bc050cb%3A0x9bee93a7f9ad6b7f!2sABEDA%20sarl!5e0!3m2!1sfr!2sci!4v1621271653974!5m2!1sfr!2sci" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
            

            <?php include_once("footer.php"); ?>

        </main>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/custom-scripts.js"></script>
    </body> 
</html>