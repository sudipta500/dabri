@extends('user.layout')
@section('title')
    Personal Details
@endsection
@section('content')


<form action="" method="POST" class="col-6 m-auto my-5 mb-5">
    @csrf
    <div class="mb-3">
        <label for="name" class="mb-1">Name</label>
        <input type="text" class="form-control py-2" name="name" value="{{ $address->name }}" id="name" placeholder="Enter Name">
    </div>
    <div class="mb-3">
        <label for="name" class="mb-1">Email</label>
        <input type="email" class="form-control py-2" name="email" value="{{ $address->email }}" id="name" placeholder="Enter Email">
    </div>
    <div class="mb-3">
        <label for="name" class="mb-1">Phone Number</label>
        <input type="text" class="form-control py-2" name="phone_number" value="{{ $address->phone_number }}" id="name" placeholder="Enter Phone Number">
    </div>
    <fieldset>
        <div class="mb-3">
            <label for="name" class="mb-1">Building Address</label>
            <input type="text" class="form-control py-2" name="primary_address" value="{{ $address->primary_address }}" id="primaryaddress"
                placeholder="Building Address">
        </div>
    </fieldset>
    <div class="mb-3">
        <input type="checkbox" id="same" name="same"  onchange="addressFunction()" />
        <label for="same">
            Same Address
        </label>
    </div>
    <fieldset>
        <div class="mb-3">
            <label for="name" class="mb-1">Road Name/Area/Colony</label>
            <input type="text" class="form-control py-2" value="{{ $address->second_address }}" name="second_address" id="secondaryaddress"
                placeholder="Road Name/Area/Colony">
        </div>
    </fieldset>
    <button type="submit" class="btn custom_btn load_more_1  px-5 py-3 text-white">Save Address
    </button>
</form>



    <script>
        function addressFunction() {
            if (document.getElementById(
                    "same").checked) {
                document.getElementById(
                        "secondaryaddress").value =
                    document.getElementById(
                        "primaryaddress").value;
            } else {
                document.getElementById(
                    "secondaryaddress").value = "";
                document.getElementById(
                    "secondaryzip").value = "";
            }
        }
    </script>
@endsection
