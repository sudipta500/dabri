@extends('dabri.layout')
@section('title')
Create Catagory
@endsection
@section('container')

@if (Session::get('errorMessage'))
<script>
    Swal.fire({
    title: 'Waring',
    text: "{{Session::get('errorMessage')}}",
    icon: 'warning',
    showConfirmButton: false,
    timer: 2500,
})
 </script>
@endif

<div class="card col-5 m-auto">
    <div class="card-header">
        <h5 class="card-title mb-0">Catagory</h5>
    </div>
    <div class="card-body" >
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Packaging Type Name</label>
                <input type="text" class="form-control" name="category" placeholder="Enter Packaging Type Name" required>
                <span class="text-danger">@error('category')
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
