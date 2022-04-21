<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <!-- CDN Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="bg-info bg-gradient-lightblue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-center mt-3 display-3 text-capitalize text-white-50">body mass index calculator</h1>
                <form method="POST" class="bg-white rounded-3 p-3 shadow-lg" action="class_BMIPasien.php">
                    <div class="mx-auto mb-3 w-50 overflow-hidden text-white">
                        <div class="card-body text-center bg-success rounded-3">
                            <label class="">GENDER</label>
                            <div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input" value="L">
                                    <label for="gender_0" class="custom-control-label">Man</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input" value="P">
                                    <label for="gender_1" class="custom-control-label">Woman</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center gap-5">
                        <label class="form-label">Nama Pasien</label>
                        <input name="nama" type="text" class="form-control w-auto" placeholder="Input Nama">
                    </div>
                    <div class="mb-3 d-flex justify-content-center gap-5">
                        <label class="form-label">Berat Badan</label>
                        <input name="bb" type="text" class="form-control w-auto" placeholder="Input Body Weight">
                    </div>
                    <div class="mb-3 d-flex justify-content-center gap-5">
                        <label class="form-label">Tinggi Badan</label>
                        <input name="tb" type="text" class="form-control w-auto" placeholder="Input Body Height">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success d-block mx-auto w-100">Calculate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>