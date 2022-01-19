<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Caesar Chipher</title>
</head>
<br/>
<body>
    <div class="container">
        <div class="box">
            <div class="row contentForm">
                <div class="col-sa-12 col-md-6 col-lg-6">
                    <img src="SalyNoted.png" width="300" height="350" alt="" class="img-fluid">
                </div>
                <div class="col-sa-12 col-md-6 col-lg-6">
                    <h4 class="text-center">Form untuk Deskripsi</h4>
                    <br/>       
                    <form class="mb-3" action="HasilDekCaesar.php" method="get">
                        <div class="mb-3">
                            <label for="exampleInputKey" class="form-label">Key</label>
                            <input placeholder="Masukan Key" type="text" name="key" maxlength="5" class="form-control" id="exampleInputKey">
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>