<?php include 'config/config.php'; ?>

<?php include 'introduction/head.php'; ?>


<body>
    <?php include 'components/front/navbar.php'; ?>
    <?php 
            $query = "SELECT * FROM about_me";
            $result = mysqli_query($conn,$query);
        
            while ($row = mysqli_fetch_assoc($result)){
                ?>


    <div class="container pt-5  px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center mt-3 py-5 shadow-lg">
            <div class="row text-center">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">About Me
                </h1>
                <hr>
                <p class="lead">
                <p> Hi! I'm <strong><?= $row['name'];?> </strong>, a passionate <strong><?= $row['title'];?> </strong></p>

                <p>I enjoy creating <span class="highlight-blue"><strong><?=$row['focus1'];?></strong></span> and <span
                        class="highlight-green"><strong><?=$row['focus2'];?></strong></span> websites and applications that solve
                    real-world
                    problems.
                    <br> My goal is to deliver <strong>high-quality projects </strong>with attention to detail and a focus on modern
                    design.</p>

                <p><?=$row['bio']?></p>
                </p>


            </div>
        </div>

            <div class="row ">
            
                <div class="container shadow-lg mt-5 px-4 py-5">

                    <div class="row text-center">

                        <h3 class="education-title">Education</h3>
                        <hr>
                        <ul class="list-group-flush">
                            <li class="list-group-item"><strong><?=$row['education'];?></strong> – Kyambogo University
                            </li>
                            <li class="list-group-item"><strong>Certifications: </strong><?=$row['certifications']?></li>
                        </ul>

                    </div>
                    <?php } ?>
                </div>
        
        </div>


    </div>


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