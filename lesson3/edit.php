<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <?php include('./navbar.php') ?>
    <?php include('./carousel.php') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <h1>แก้ไข Catalog</h1>
            </div>
            <div class="col-md-2">
                <a href="./home.php" class="btn btn-warning form-control">ย้อนกลับ</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="./update.php">
                    <div class="form-group">
                        <label>ชื่อ Catalog</label>
                        <input type="text" class="form-control" placeholder="กรุณากรอกชื่อ Catalog" name="name">
                    </div>
                    <div class="form-group">
                        <label>จำนวน Catalog</label>
                        <input type="number" class="form-control" placeholder="กรุณากรอกจำนวนCatalog" name="qty">
                    </div>
                    <div class="form-group">
                        <label>รายละเอียด Catalog</label>
                        <textarea class="form-control" placeholder="กรุณากรอกรายละเอียด" rows="10" name="detail"></textarea>

                    </div>
                    <div class="form-group">
                        <label>option</label>
                        <br>
                        <input type="checkbox"> ซ่อน
                        <input type="checkbox"> แนะนำ
                        <input type="checkbox"> หมด
                    </div>
                    <div class="form-group">
                        <label>เพศ</label>
                        <br>
                        <input type="radio" name="gender" value="1"> ชาย
                        <input type="radio" name="gender" value="2"> หญิง
                        <input type="radio" name="gender" value="3"> อื่นๆ
                    </div>
                    <input type="hidden" name="id" value="1">
                    <button type="submit" class="btn btn-success form-control">ยืนยัน</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>