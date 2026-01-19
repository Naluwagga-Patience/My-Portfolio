<?php include 'config/config.php'; ?>

<?php include 'introduction/head.php'; ?>

<body>

    <?php include 'components/front/navbar.php'; ?>


    <?php
      $success = false;
      if (isset($_POST['submit'])) {
    //  Get values from the form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert into the database
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
        exit(); // important!
       
        $success = true;
    } else {
       // echo "<p style='color:red;'>Something went wrong: " . mysqli_error($conn) . "</p>";
    }
      }

         ?>


    <div class="b-example-divider"></div>
    <div class="container col-xxl-8 px-4 py-5 shadow-lg">
        <div class="row flex-lg-row-reverse align-items-center  py-5">
            <div class="col-lg-10 me-5  card shadow-lg p-4 bg-body rounded">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-center">Contact Info
                </h1>
                <hr>
                <br>
                <section id="contact">

                    <h4 class="text-center">If you’d like to work with me or just say hello, feel free to reach out!
                    </h4>

                    <div class="contact-container">
                        <?php
                $query='SELECT *FROM contact';
                $result=mysqli_query($conn,$query);
                if($row=mysqli_fetch_assoc($result)){
                    ?>
                        <div class="contact-item">
                            <h4>Email </h4>
                            <p><?=$row['email']?></p>
                        </div>



                        <div class="contact-icons h3 ">
                            <a href="<?=$row['linkedin']?>" target="_blank">
                                <ion-icon class=" me-4 ms-3" name="logo-linkedin"></ion-icon>
                            </a>

                            <a href="<?=$row['github']?>" target="_blank">
                                <ion-icon class=" " name="logo-github"></ion-icon>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </section>

            </div>
        </div>



        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-10 me-5 card shadow-lg p-4 bg-body rounded">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-center">Get in Touch
                </h1>
                <form class="contact-form" action="#" method="post">
                    <div class="mb-3">
                        <label class="form-label"><strong>Your Name</strong></label>
                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name"
                            require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Your Email address</strong></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong> Message</strong></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>

                    </div>
                    <!---button--->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button id="liveToastBtn" name="submit" type="submit" class="btn btn-primary btn-lg px-4 me-md-2">Send
                            Message</button>
                        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-header">
                                    <img src="..." class="rounded me-2" alt="...">
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>

                    </div>

                   
                </form>

            </div>


        </div>
    </div>


    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--  Contact Form -->
    <section id="contact-form-section">




    </section>





    <!-- Ionicons Scripts -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </section>
    <script>
    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    menuBtn.addEventListener("click", () => {
        navLinks.classList.toggle("show");
    });
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php include 'introduction/javas.php'; ?>

</body>

</html>