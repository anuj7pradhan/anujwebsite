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
        <div class="py-5">
            <h2 class="text-center">USER FORM</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="POST">
                <div class="form-group">
                    <label>Usename</label>
                    <input type="text" name="username" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="comments">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
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