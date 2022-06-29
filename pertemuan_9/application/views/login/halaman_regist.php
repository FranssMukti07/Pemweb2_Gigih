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
            height: 130vh;
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

        .login-dark form .btn-primary:active {
            transform: translateY(1px);
        }
    </style>
</head>

<body>
    <div class="login-dark">
        <form method="post" action="<?= base_url('auth/registrasi') ?>">
            <!-- logika pesan kesalahan -->
            <?php if ($this->session->flashdata('message', 'message_regist_error')) : ?>
                <div class="alert alert-danger" role_id="alert">
                    <?= $this->session->flashdata('message', 'message_regist_error'); ?>
                </div>
            <?php endif; ?>
            <h3></h3>
            <div class="form-group">
                <label for="name">Nama</label>
                <input class="form-control <?= form_error('name') ? 'invalid' : '' ?>" type="text" name="name" placeholder="Nama Lengkap" value="<?= set_value('name') ?>" required>
                <div class="invalid-feedback">
                    <?= form_error('name') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control <?= form_error('email') ? 'invalid' : '' ?>" type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" required>
                <div class="invalid-feedback">
                    <?= form_error('email') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control <?= form_error('username') ? 'invalid' : '' ?>" type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" required>
                <div class="invalid-feedback">
                    <?= form_error('username') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control <?= form_error('password') ? 'invalid' : '' ?>" type="password" name="password" placeholder="Password" value="<?= set_value('password') ?>" required>
                <div class="invalid-feedback">
                    <?= form_error('password') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password2">Konfirmasi Password</label>
                <input class="form-control <?= form_error('password2') ? 'invalid' : '' ?>" type="password" name="password2" placeholder="Konfirmasi Password" value="<?= set_value('password2') ?>" required>
                <div class="invalid-feedback">
                    <?= form_error('password2') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="role_id">Role</label>
                <select class="form-control <?= form_error('role_id') ? 'invalid' : '' ?>" name="role_id" required>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Registrasi">
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>