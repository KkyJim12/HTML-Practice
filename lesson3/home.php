<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <?php
    $conn = new mysqli('localhost', 'root', '', 'projectx');
    $getdata = "SELECT * FROM catalogs";
    $result = mysqli_query($conn, $getdata);
    $item = mysqli_fetch_array($result);
    ?>
    <?php include('./navbar.php') ?>
    <?php include('./carousel.php') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <h1>Catalog ของฉัน</h1>
            </div>
            <div class="col-md-2">
                <a href="./create.php" class="btn btn-success form-control">สร้าง</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <?php foreach ($item as $show) : { ?>

                    <div class="col-md-3">
                        <div class="card" ;">
                            <img src="./image/dog1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $show['title']; ?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="./edit.php" class="btn btn-warning form-control">แก้ไข</a>
                            </div>
                        </div>
                    </div>
            <?php }
            endforeach  ?>
        </div>
    </div>
</body>

</html>