@extends('templete.html')

@section('conten')

<div class="row justify-content-center">
    <div class="col-5 ">
        @if (session()->has('new'))
            <div class="alert alert-danger" role="alert">
                {{session('new')}}
            </div>
        @endif
    </div>
</div>
    
@endsection