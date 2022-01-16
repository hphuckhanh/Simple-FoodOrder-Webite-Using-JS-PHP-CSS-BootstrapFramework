<?php
    if (isset($_POST["signup"])) {
        include 'config.php';
        $username =  mysqli_real_escape_string($con, $_POST["username"]);
        $name =  mysqli_real_escape_string($con, $_POST["name"]);
        $yearOfBirth =  mysqli_real_escape_string($con, $_POST["yearOfBirth"]);
        $password =  mysqli_real_escape_string($con, $_POST["password"]);
        $cpassword =  mysqli_real_escape_string($con, $_POST["cpassword"]);
        $phone =  mysqli_real_escape_string($con, $_POST["phone"]);

        if ((strlen($username) < 5) || (strlen($username) > 50)) {
            echo "<script> alert('Tên đăng nhập phải từ 5-50 ký tự'); </script>";
        } elseif ((strlen($name) < 2) || (strlen($name) > 30)) {
            echo "<script> alert('Tên tài khoản phải từ 2-30 ký tự'); </script>";
        } elseif (!(strlen($phone) == 10) || !is_numeric($phone)) {
            echo "<script> alert('Số điện thoại là số tự nhiên 10 chữ số'); </script>";
        } elseif (!(strlen($yearOfBirth) == 4) || !is_numeric($yearOfBirth)) {
            echo "<script> alert('Năm sinh là số tự nhiên 4 chữ số'); </script>";
        } elseif ((int)$yearOfBirth < 1900 || (int)$yearOfBirth > 2020) {
            echo "<script> alert('Năm sinh phải từ 1990-2020'); </script>";
        } elseif (mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE username='$username'")) > 0) {
            echo "<script> alert('Tên đăng nhập đã được sử dụng'); </script>";
        } elseif ($password !== $cpassword) {
            echo "<script> alert('Mật khẩu xác nhận không trùng khớp'); </script>";
        } else {
            $result = mysqli_query($con, "INSERT INTO users (username, name, yearOfBirth, phone, password, roleID) VALUES ('$username', '$name','$yearOfBirth', '$phone', '$password', '0')");
            if ($result) {
                header("Location: signupsuccessful.php");
            } else {
                echo "<script> alert('Đăng ký không thành công'); </script>";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign up</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <div class="mb-3 text-center">
                        <h3>Đăng ký</h3>
                    </div>
                    <form name="signupform" action="" class="shadow p-4" method="POST">
                        <div class="row">
                            <div class="mb-3">
                                <label>Tên đăng nhập<span class="text-danger">*</span></label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Tên dùng để đăng nhập" required>
                            </div>

                            <div class="mb-3">
                                <label>Tên tài khoản<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Tên của người dùng" required>
                            </div>

                            <div class="mb-3">
                                <label>Năm sinh<span class="text-danger">*</span></label>
                                <input type="text" name="yearOfBirth" id="yearOfBirth" class="form-control" placeholder="Nhập năm sinh" required>
                            </div>

                            <div class="mb-3">
                                <label>Số điện thoại<span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Nhập số điện thoại" required>
                            </div>

                            <div class="mb-3">
                                <label>Mật khẩu<span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu" required>
                            </div>
                            <div class="mb-3">
                                <label>Xác nhận<span class="text-danger">*</span></label>
                                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Nhập lại mật khẩu" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="signup" class="btn btn-primary text-center" onclick="return validateForm();">Đăng ký</button>
                            </div>

                            <hr>

                            <p class="text-center mb-0">Bạn đã có tài khoản? <a href="login.php" class="text-decoration-none">Đăng nhập ngay</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        function validateForm() {
            let username = document.getElementById("username").value;
            let name = document.getElementById("name").value;
            let yearOfBirth = document.getElementById("yearOfBirth").value;
            let phone = document.getElementById("phone").value;
            let password = document.getElementById("password").value;
            if (username.length < 2 || username.length > 30) {
                alert("Tên đăng nhập phải từ 2-30 ký tự");
                return false;
            }
            if (name.length < 2 || name.length > 30) {
                alert("Tên tài khoản phải từ 2-30 ký tự");
                return false;
            }
            if (yearOfBirth.length != 4 || isNumeric(yearOfBirth)) {
                alert("Năm sinh là số tự nhiên 4 chữ số");
                return false;
            }
            if (parseInt(yearOfBirth) < 1900 || parseInt(yearOfBirth) > 2020) {
                alert("Password must have 2-30 characters");
                return false;
            }
            if (phone.length != 10 || isNumeric(phone)) {
                alert("Số điện thoại là số tự nhiên 10 chữ số");
                return false;
            }
            if (password.length < 2 || password.length > 30) {
                alert("Mật khẩu phải từ 2-30 ký tự");
                return false;
            }
        }
    </script>
</body>

</html>