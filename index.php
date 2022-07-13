<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>

<body>

    <?php include 'nav.php'; ?>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/apache1.jpg" alt="apache1" width="400" height="200">
            </div>
            <div class="carousel-item">
                <img src="images/apache2.jpg" alt="apache2" width="400" height="200">
            </div>
            <div class="carousel-item">
                <img src="images/apache3.jpg" alt="apache3" width="400" height="200">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/apache1.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Apache Ignite</h2>
                    <p class="py-3">Apache ignite is a distributed database with internal memory speeds for high performance computing. Apache Ignite is an open source distributed storage platform.
                        It can be used as a database, caching system, or in-memory data processing. The platform stores the data in memory for better performance. Simply put,
                        it is one of the most powerful atomic computing platforms in use today. Apache ignite has become a full-fledged distributed SQL database thanks to ACID and SQL compliant storage.
                        With durability using a wide range of storage technologies, immediate availability on reboot, and high latency read and write scalability with SQL and
                        ACID transactions, you can hold 0-100% of your data in RAM. Companies running digital transformation and Omni-channel customer experience projects
                        often find that their current IT infrastructure cannot handle the pace and scalability required for these activities. Enterprises are being asked to
                        transform batch-based operations that take days or hours into real-time automated processes that provide a tuned, real-time end-user experience within seconds.
                        Companies that use online, mobile, social, or IoT technologies to support transformation often see a 10-1,000-x increase in requests and transactions.
                        These projects typically bring in many new data sources related to end users and businesses.
                    </p>
                    <a href="login.php" class="btn btn-success">Comment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/anuj.jpg" alt="Anuj Pradhan" width="300" height="500">
                        <div class="card-body">
                            <h4 class="card-title">Anuj Pradhan</h4>
                            <p class="card-text">MCS 1st sem</p>
                            <a href="https://github.com/" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/shreeya.jpg" alt="Shreeya Maharjan" width="300" height="500">
                        <div class="card-body">
                            <h4 class="card-title">Shreeya Maharjan</h4>
                            <p class="card-text">MCS 1st sem</p>
                            <a href="https://github.com/" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/sostika.jpg" alt="Sostika" width="300" height="500">
                        <div class="card-body">
                            <h4 class="card-title">sostika</h4>
                            <p class="card-text">MCS 1st sem</p>
                            <a href="https://github.com/" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Apache Ignite Images</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/apache4.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/apache5.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/apache6.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/apache7.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/apache8.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/apache9.jpg" class="img-fluid pb-3">
            </div>
        </div>
    </section>


    <footer>
        <p class="p-3 bg-dark text-white text-center">@ostapacheignite</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>