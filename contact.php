<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Contact Us</h2>
            <p>Get In Touch With Us!</p>
        </div>

        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Block factory,Accra</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>smartshop@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border: 0; width: 100%; height: 290px" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" class="formstyle">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required />
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required />
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required />
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Appointmet Date</label>
                        <input type="date" class="form-control" name="appointmentdate" id="subject"
                            placeholder="Subject" required />
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="appointment">Send Message</button>
                    </div>
                </form>
            </div>
            <?php if (isset($_POST["appointment"])) {
                $_SESSION['appointment-errors'] = "";
                $appointmentmsg = array();

                $Aname = mysqli_real_escape_string($conn, $_POST["name"]);
                $Aname = preg_replace('/\s+/', '', $Aname);
                $Aemail = mysqli_real_escape_string($conn, $_POST["email"]);
                $Areason = mysqli_real_escape_string($conn, $_POST["message"]);
                $Adate = mysqli_real_escape_string($conn, $_POST["appointmentdate"]);
                $_SESSION['Aname'] = $Aname;
                $_SESSION['Aphone'] = $Aemail;
                $_SESSION['Areason'] = $Areason;
                $_SESSION['Adate'] = $Adate;


                if (!ctype_alpha($Aname)) {

                    array_push($appointmentmsg, "name should be in letters");
                    //$_SESSION['name']="";
                }


                $_SESSION['appointment-errors'] = $appointmentmsg;
                if (!empty($_SESSION['appointment-errors'])) {

                    foreach ($_SESSION['appointment-errors'] as $key => $value) {
                        // code...
                        echo  $value;
                    }
                } else {
                    $sql = "INSERT INTO contacts VALUES ( '0','$Aname','$Aemail','$Areason','$Adate',NULL,NULL)";
                    $rq = mysqli_query($conn, $sql);
                    if ($rq) {
                        // code...
                        $_SESSION['Aname'] = "";
                        $_SESSION['Aemail'] = "";
                        $_SESSION['Aperiod'] = "";
                        $_SESSION['Areason'] = "";
                        $_SESSION['Adate'] = "";
                        echo "successfully sent";
                    } else {
                        // code...
                        echo "the error is" . mysqli_error($conn);
                    }
                }
            } ?>
        </div>
    </div>
</section>