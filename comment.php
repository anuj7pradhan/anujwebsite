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
                    <section class="my-5">
                        <div class="w-50 m-auto">
                            <form action="commentinfo.php" method="POST">
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control" name="comments"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </section>
                </div>

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