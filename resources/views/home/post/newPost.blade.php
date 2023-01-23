@extends('templete.html')


@section('conten')
<div class="row justify-content-center mt-5 pt-3">
    <div class="col-6 bg-light p-5 shadow">
        <form action="/" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <h1 class="border-bottom">Buat kata kata mu</h1>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 mt-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input name="title"  type="text" class="form-control shadow" id="exampleFormControlInput1" placeholder="Masukan title">
                </div>
                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">Masukan Kata katamu</label>
                    <textarea name="pesan" class="form-control shadow" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="d-grid">
                    <button class="btn btn-dark" type="submit">Buat Sekarang</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
