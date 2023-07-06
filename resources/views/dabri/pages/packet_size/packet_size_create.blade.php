@extends('dabri.layout')
@section('title')
Create Packet Size
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
@if(session('errorMessage'))
    <div class="p-2 w-50 mb-5 " style="background-color: red;margin:0 auto">
      <p class="text-white text-center h2 mt-2">{{ session('errorMessage') }}</p>
    </div>
@endif
<div class="card col-5 m-auto">
    <div class="card-header">
        <h5 class="card-title mb-0">Packet Size</h5>
    </div>
    <div class="card-body" >
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Packaging Size Name</label>
                <input type="text" class="form-control" name="packet_size" placeholder="Enter Packaging Size" required>
                <span class="text-danger">@error('packet_size')
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
