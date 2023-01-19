<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5 pt-5 justify-content-center">
            <div class="col-5 border-bottom">
                <h1 class="text-center">Daftar Hits-Message</h1>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-5">
                <form action="{{ route('regis.validasi') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-danger" id="basic-addon1"><i class="bi bi-person-circle text-light "></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary" id="basic-addon1"><i class="bi bi-key-fill text-light"></i></span>
                        <input type="text" name="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary" id="basic-addon1"><i class="bi bi-key-fill text-light"></i></span>
                        <input type="password" name="confir" class="form-control" placeholder="Confirmasi password" aria-label="password" aria-describedby="basic-addon1">
                    </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5">
                <p class="text-muted text-center mt-3 mb-3 ">you make new account</p>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-5 pb-3 border-bottom ">
                <div class="d-grid ">
                    <button name="submit" class="btn btn-dark">Daftar akun baru</button>
                </div>
            </div>
            <form>
            <p class="text-center">Sudah punya akun ? <a href="{{ route('login') }}">Langsung Login</a> </p>
        </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
