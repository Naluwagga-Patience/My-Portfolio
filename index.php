<?php include 'config/config.php'; 

?>
<?php
                    $query = "SELECT * FROM home_page";
                    $result=mysqli_query($conn,$query);
                    $row= mysqli_fetch_assoc($result);
                    // print_r($row);
                    
                    ?>


<?php include 'introduction/head.php'; ?>



<body>



    <main>
        <?php  include 'components/front/navbar.php'; ?>

        <div class="container pt-5  px-5">


            <div class="row  align-items-center ">
                <div class="col-12 col-md-6 shadow-lg p-3 bg-body rounded text-center">
                    <img src="assets/img/profile.jpg" alt="Profile Picture" class=" img-fluid img-thumbnail shadow-lg">
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <div class="card shadow-lg" style="width: 100%; height: 100%;">
                        <div class="card-body">
                            <h2 class="text-center animate__animated animate__bounce animate__delay-2s p-3">Welcome to
                                my
                                portfolio!</h2>
                            <hr>
                            <div class="card-text">
                                <h4 class="text-center ">Hello, I'm <strong class="fw-bold text-primary"><span
                                            class="name"><?=$row['heading']?></span></strong></h4>
                                <h5 class="text-center"><?=$row['role']?></h5>
                                <p class="lead text-center"><?=$row['description']?></p>
                                <div class="text-center">
                                    <a href="project.php" class="btn btn-primary">View Projects</a>
                                    <a href="contact.php" class="btn btn-secondary">Contact Me</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div>

            </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    menuBtn.addEventListener("click", () => {
        navLinks.classList.toggle("show");
    });
    </script>


</body>


</html>