<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .left {
                background-color: #e6e6e6;
            }
            .right {
                background-color: #0b2e4d;
            }
            .masuk {
                background-color: #31618a;
                outline: none;
                color: #ffffff;
            }
            .register {
                text-decoration: underline;
            }
            .register a:hover {
                text-decoration: underline;
                font-weight: bold;
            }
        </style>
        <title>Login</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col" style="background-color: rgb(231, 231, 231)">
                    <div class="container" style=" height: 607px;">
                    <div class="row"> <br><br><br><br><br><br><br>
                    </div>
                    <div class="row" style="align-items: center;">
                        <img src="/img/Group 8465.png" style="display: block; margin: auto; max-width: 200px; max-height: 200ox;">
                    </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center right text-white">
                    <div class="w-50">
                        <h3 class="mb-4 text-center font-weight-bold">Masuk Ke Akun</h3>

                        <form action="/action_page.php">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <br>

                            <button type="submit" class="btn btn-block masuk">Masuk</button>

                            <br>
                            <br>
                            <div class="text-center mt-3 register">
                                <small>Belum Punya akun? <a href="#" class="text-white">daftar</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
