<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>


    <!-- Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <!-- Scripts -->
    <script defer="true" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="resources/js/index.js" defer="true"></script>
</head>

<body>
    <?php
    // $client = json_decode('{"id":1,"name":"Bill Gates","email":"bill.gates@microsoft.com","phone":"+123456789","address":"New York, USA"}', true);


    ?>
    <div class="container">
        <div class="row p-2">
            <div class="col-12 d-flex justify-content-end gap-2">
                <button type="submit" class="btn btn-outline-primary" id="save-btn">Save</button>
                <button type="button" class="btn btn-outline-danger" id="cancel-btn"><a href="{{ route('books.index') }}" class="text-reset" style="text-decoration:none;">Cancel</a></button>
            </div>
        </div>
        <div class="col-12">
            <form method="POST" action="" id="book-form">
                <div class="row mb-3">
                    <label for="inputName" class="col-2 col-form-label"><strong>Name</strong></label>
                    <div class="col-6">
                        <input required="true" type="text" class="form-control" id="inputName" name="name" value="<?php echo isset($client) ? $client['name'] : '' ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-2 col-form-label"><strong>Email</strong></label>
                    <div class="col-6">
                        <input required="true" type="email" class="form-control" id="inputEmail" name="email" value="<?php echo isset($client) ? $client['email'] : '' ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhone" class="col-2 col-form-label"><strong>Phone</strong></label>
                    <div class="col-6">
                        <input required="true" type="tel" class="form-control" id="inputPhone" name="phone" value="<?php echo isset($client) ? $client['phone'] : '' ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAddress" class="col-2 col-form-label"><strong>Address</strong></label>
                    <div class="col-6">
                        <input required="true" type="text" class="form-control" id="inputAddress" name="address" value="<?php echo isset($client) ? $client['address'] : '' ?>">
                    </div>
                </div>
            </form>
        </div>
</body>

</html>