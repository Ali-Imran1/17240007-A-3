<?php
    $pageTitle = "Registration Form";
    require_once "includes/header.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Registration Form</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="name">Full Name: </label>
                        <input type="text" name="fname" id="fname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address: </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Username: </label>
                        <input type="text" name="uname" id="uname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="contact">Phone Number: </label>
                        <input type="text" name="pn" id="pn" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="address">Present Address: </label>
                        <input type="text" name="presAddress" id="presAddress" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="address">Permanent Address: </label>
                        <input type="text" name="perAddress" id="perAddress" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cnic">CNIC: </label>
                        <input type="numaric" name="cnic" id="cnic" minlength="15" maxlength="15" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth: </label>
                        <input type="date" name="dob" id="dob" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Register" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
</body>
</html>