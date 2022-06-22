<?php
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <!-- CDN Bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body class="bg-info bg-gradient-lightblue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-center mt-3 display-4 text-capitalize text-white-50">body mass index calculator</h1>
                <form method="POST" name="formbmi" class="bg-white rounded-3 p-3 shadow-lg" action="class_BMIPasien.php">
                    <div class="mx-auto mb-3 w-50 overflow-hidden text-white">
                        <div class="card-body text-center bg-success rounded-lg">
                            <label class="">GENDER</label>
                            <div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input gender" value="L">
                                    <label for="gender_0" class="custom-control-label">Man</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input gender" value="P">
                                    <label for="gender_1" class="custom-control-label">Woman</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                        <label class="form-label">Nama Pasien</label>
                        <input id="nama" name="nama" type="text" class="form-control w-auto" placeholder="Input Nama" required="required">
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                        <label class="form-label">Berat Badan</label>
                        <input name="bb" id="bb" type="text" class="form-control w-auto" placeholder="Input Body Weight" required="required">
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                        <label class="form-label">Tinggi Badan</label>
                        <input name="tb" id="tb" type="text" class="form-control w-auto" placeholder="Input Body Height" required="required">
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