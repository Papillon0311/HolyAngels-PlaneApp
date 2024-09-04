

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <!-- For Profile Assets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="login-container">
                <div class="container">
                    <div class="container">
                        <div class="text-center">
                            <img src="">
                            <div class="form-title">Delta Air Digital Technical <br> Logbook</div>
                            <div class="tool-tip">Sign in to continue</div>
                        </div>
                        <div class="inputs-container mt-2">
                            <form action="backend/auth/login.php" method="post">
                                <div class="">
                                    <div class="text-white text-uppercase mb-2 input-label">Name</div>
                                    <input name="username" type="text" class="input-name" placeholder="Juan Dela Cruz">
                                </div>
                                <div class="mt-3">
                                    <div class="text-white text-uppercase mb-2 input-label">PASSWORD</div>
                                    <input name="password" type="password" class="input-name" placeholder="*******">
                                </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-login">Log in</button>
                            <div class="forgot-pass-link">
                                <a href="" class="text-white" style="text-decoration: none;">Forgot Password?</a>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>

</html>
