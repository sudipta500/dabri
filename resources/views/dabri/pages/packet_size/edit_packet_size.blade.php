@extends('dabri.layout')
@section('title')
Edit Packet Size
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
        <h5 class="card-title mb-0">Edit Packet Size</h5>
    </div>
    <div class="card-body" >
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Packaging Type Name</label>
                <input type="text" class="form-control" name="packet_size" value="{{ $packetSize->packet_size }}" placeholder="Enter Packaging Type Name" required>
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
