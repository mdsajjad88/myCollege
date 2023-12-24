<?php
include "dbConnec.php";

$latestnotice = $connection->lastInsertId();
$select = $connection->prepare("SELECT *  FROM noticeboard ORDER BY notice_id DESC ");
$select->execute();
$row = $select->fetch(PDO::FETCH_ASSOC);
$subject = $row['notice_subject'];
$details = $row['notice_desc'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGCR</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css link end -->
<style>
    #leftLogo{
        margin-top: 50px;
        margin-right: 40px;
        border-radius: 15px;
    }
    #rightLogo{
        margin-top: 50px;
        margin-right: 40px;
        border-radius: 15px;
    }
</style>
  
</head>

<body>

    <!-- Top start -->
    <div class="container-fluid bg-gradient-info" style="background:linear-gradient(-20deg, gray 25%, transparent 100%)">
        <div class="row">
            <div class="col-2 ">
            <img src="all_image/logo.jpeg" id="leftLogo" height="100px" width="90%" alt="">
               
            </div>
            <div class="col-8">
                <h5 class="mt-4 text-center" style=" font-size: 54px; font-family:cursive">Rangpur Govt College, Rangpur.</h5>
                <h3 class="text-center">Education | Morality | Discipline</h3>
                <h3 style="text-align: center;"> College Code : 127508 | EIIN: 127511</h3>
            </div>
            <div class="col-2">
            <img src="all_image/logo.jpeg" id="rightLogo" height="100px" width="90%" alt="">
            </div>
        </div>
    </div>
    <?php include "navbar.php"; ?>
    <!-- maindiv start -->

    <div class="container">
        <div class="row">
            <div class="col-12 mt-2 p-2">
                <!-- <p style="background-color: greenyellow;">Latest Notice Board: <marquee behavior="" direction=""> <div><p>Local Time &nbsp; &nbsp; <b id="me"></b></p>  </div> </marquee> -->
                <p style="background-color: lightgray;" class="p-2"><b>Latest Notice:</b> 
            <marquee behavior="" direction="">
                <div>
                    <p> <b><?= $subject ?> :</b> <?= $details?>  </p>
                </div>
            </marquee>
            </p>

<script>
        let time = document.getElementById("me");
        setInterval(()=>{
           let d = new Date();
        me.innerHTML = d.toLocaleTimeString();

        })
        
</script>

                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-9 mb-2">
                <!-- slider Start -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="all_image/abar2.jpg" height="300px" class="d-block  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="all_image/abar5.jpg" height="300px" class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="all_image/abar3.jpg" height="300px" class="d-block  w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
                <!-- slider End -->
                <div>
                    <h1 class="text-center">Welcome to <b><i>RGCR</i></b> </h1>
                    <p style="text-align: justify;">
                        The history of Paglapir School & College can be traced Sixty Two years back in 1961 when the foundation stone was laid by Father Of Dr MD. EKHLASH UDDIN , then the Founder of West Zone of North in Paglapir School initially for the education of the children of People officers and local elite people.

                        The main purpose behind the establishment of this institution was to meet the challenges of the future, building up confident and successful students by providing the education on latest knowledge, information, communication skills and a vision with a blend of Bangladeshi cultural heritage. </p>
                    <p style="text-align: justify;"">
                        <b>Opening : </b> The institution started functioning in 1978 from Nursery to class VI.
                    </p>
                    
                    <p style="text-align: justify;">
                        <b>
                            College :
                        </b> With a couple of years, the number of students increased and separate branch for college was opened in 1981 and the students first appeared in the H.S.C examination of 1983.
                    </p>
                    <p style="text-align: justify;">

                        <b>Degree(Pass):</b> Gradually in 1995, Degree (pass) Course also started under National University of Bangladesh.
                    </p>
                    <p style="text-align: justify;">
                        By the grace of the Almighty God, all the branches are progressing day by day in a full swing. The schools, college and Degree course have successfully been affiliated with the Board of Intermediate and Secondary Education, Dinajpur and National University respectively.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, fugiat architecto odio numquam qui eveniet aspernatur? Dolorem beatae natus ipsum asperiores. Sit dolorum, odio, beatae nulla debitis totam hic, cum natus iure quasi id similique exercitationem! Commodi consequuntur illo debitis.</p>
                </div>

            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="all_image/principle33.jpg" height="200px" width="90%" class="card-img-top" alt="Principe">
                    <div class="card-body">
                        <h5 class="card-title">Principle</h5>
                        <b>MD. JOYNUL ABEDIN</b>
                        <p class="card-text">Rangpur Govt College</p>
                        <p class="card-text">B.Sc in Math, Charmichael College, Rangpur</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <div class="card mt-2" style="width: 18rem;">
                    <img src="all_image/presi.jpg" height="200px" width="90%" class="card-img-top" alt="Principe">
                    <div class="card-body">
                        <h5 class="card-title">The President</h5>
                        <b>Dr. MD. EKHLASH UDDIN</b>
                        <p class="card-text">Rangpur Govt College</p>
                        <p class="card-text">M.B.B.S (Rangpur Medical College, Hospital, Rangpur.)</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include "footer.php"; ?>
    <!-- script link start -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <!-- script link End -->
</body>

</html>