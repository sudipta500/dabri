@extends('dabri.layout')
@section('title')
Edit Catagory
@endsection
@section('container')
{{-- errorMessage
@if(session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
@endif --}}
@if(session('errorMessage'))
    <div class="p-2 w-50 mb-5 " style="background-color: red;margin:0 auto">
      <p class="text-white text-center h2 mt-2">{{ session('errorMessage') }}</p>
    </div>
@endif
<div class="card col-5 m-auto">
    <div class="card-header">
        <h5 class="card-title mb-0">Edit Catagory</h5>
    </div>
    <div class="card-body" >
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Cupon Name</label>
                <input type="text" class="form-control" name="cupon_code" value="{{ $cupon->cupon_code }}" placeholder="Enter new cupon Name" required>
                <span class="text-danger">@error('cupon_code')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Packaging Type Name</label>
                <input type="text" class="form-control" name="value" value="{{ $cupon->value }}" placeholder="Enter cupon Value" required>
                <span class="text-danger">@error('value')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary " type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
@endsection
