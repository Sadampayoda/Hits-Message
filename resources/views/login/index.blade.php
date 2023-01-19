@extends('templete.html')

@section('conten')
    <div class="row mt-5 pt-5 justify-content-center">
        <div class="col-5 border-bottom">
            <h1 class="text-center">Login Hits-Message</h1>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        <div class="col-5">
            <form action="">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-danger" id="basic-addon1"><i class="bi bi-person-circle text-light "></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-primary" id="basic-addon1"><i class="bi bi-key-fill text-light"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-5">
            <p class="text-muted text-center mt-3 mb-3 ">or</p>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-5 pb-3 border-bottom ">
            <div class="d-grid ">
                <a href="/" class="btn btn-dark">Langsung Masuk</a>
            </div>
        </div>
        <p class="text-center">Belum punya akun ? <a href="{{ route('regis') }}">Regitrasi</a> </p>
    </div>
@endsection