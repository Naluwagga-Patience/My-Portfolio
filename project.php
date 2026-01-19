<?php include 'config/config.php'; ?>


<?php include 'introduction/head.php'; ?>

<body>

    <?php include 'components/front/navbar.php'; ?>

    <div class="b-example-divider"></div>
    <div class="container  my-5 col-xxl-8 px-4 py-5 shadow-lg rounded-3 border">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-center">My Projects
                </h1>
                <hr>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
         
            <?php
        $query = "SELECT * FROM projects";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-10 col-sm-8 col-lg-6 card shadow-lg p-2 me-3 bg-body rounded animate__animated animate__bounce animate__delay-2s">

                <img src="<?= 'assets/img/'.$row['project_image']?>" class="d-block mx-lg-auto img " alt="" width="300"
                    height="350" loading="lazy">
            </div>
            <div class="col-lg-5 ms-0">
                
                <div class="project-info">
                            <h3><?= $row['project_name']; ?></h3>
                            <br>
                            <p>
                                <?= $row['project_discription']; ?>
        </p>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 text-center">
                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold text-center">
                                    <a href="<?php echo $row['project_link']; ?>" target="_blank" class="btn">View
                                        Project</a></button>
                            </div>
                        </div>
                
        </div>
    </div>

<?php } ?>




    <!---Project descriptions--->

   

    <script>
    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    menuBtn.addEventListener("click", () => {
        navLinks.classList.toggle("show");
    });
    </script>
    <?php include 'introduction/javas.php'; ?>
</body>

</html>