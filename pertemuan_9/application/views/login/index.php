<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .login-dark {
            height: 606px;
            background: #475d62 url(../../assets/img/star-sky.jpg);
            background-size: cover;
            position: relative;
        }

        .login-dark form {
            max-width: 320px;
            width: 90%;
            background-color: #1e2833;
            padding: 40px;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            color: #fff;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.2);
        }

        .login-dark .illustration {
            text-align: center;
            padding: 15px 0 20px;
            font-size: 100px;
            color: #2980ef;
        }

        .login-dark form .form-control {
            background: none;
            border: none;
            border-bottom: 1px solid #434a52;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
        }

        .login-dark form .btn-primary {
            background: #214a80;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none;
        }

        .login-dark form .btn-primary:hover,
        .login-dark form .btn-primary:active {
            background: #214a80;
            outline: none;
        }

        .login-dark form .forgot {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        .login-dark form .forgot:hover,
        .login-dark form .forgot:active {
            opacity: 1;
            text-decoration: none;
        }

        .login-dark form .btn-primary:active {
            transform: translateY(1px);
        }
    </style>
</head>

<body>
    <div class="login-dark">
        <form method="post" action="<?= base_url('auth/login') ?>">
            <!-- buat logic untuk pesan  -->
            <?php if ($this->session->flashdata('message', 'message_login_error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('message', 'message_login_error'); ?>
                </div>
            <?php endif; ?>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">
                <input class="form-control <?= form_error('username') ? 'invalid' : '' ?>" type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" required>
                <div class="invalid-feedback">
                    <?= form_error('username') ?>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control <?= form_error('password') ? 'invalid' : '' ?>" type="password" name="password" placeholder="Password" value="<?= set_value('password') ?>" required>
                <div class="invalid-feedback">
                    <?= form_error('password') ?>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Login">
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!-- <div class="container">
        <h1>Login</h1>
        <p>Masuk ke Dashboard</p>

        <?php if ($this->session->flashdata('message_login_error')) : ?>
            <div class="invalid-feedback">
                <?= $this->session->flashdata('message_login_error') ?>
            </div>
        <?php endif ?>

        <form action="" method="post" style="max-width: 600px;">
            <div>
                <label for="name">Email/Username*</label>
                <input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>" placeholder="Your username or email" value="<?= set_value('username') ?>" required />
                <div class="invalid-feedback">
                    <?= form_error('username') ?>
                </div>
            </div>
            <div>
                <label for="password">Password*</label>
                <input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>" placeholder="Enter your password" value="<?= set_value('password') ?>" required />
                <div class="invalid-feedback">
                    <?= form_error('password') ?>
                </div>
            </div>

            <div>
                <input type="submit" class="button button-primary" value="Login">
            </div>
        </form>
    </div> -->