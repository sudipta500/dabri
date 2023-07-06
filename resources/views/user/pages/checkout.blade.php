@extends('user.layout')
@section('title')
    Personal Details
@endsection
@section('content')
    <div class="col-md-6 col-lg-4 mt-5 m-auto mb-5">
        <div class="product_layout3_content bg-white position-relative shadow shadow-lg" data-aos="fade-right"
            data-aos-duration="1500">
            <h2>ADDRESS</h2>
            <hr>
            <div class="col-11 d-flex">
                <div class="product_image_wrap1 mb-3 col-9">
                    @foreach ($address as $index => $address)
                        <div class="form-check">
                            <input type="radio" name="flexRadioDefault" id="flexRadioDefault{{ $index }}" value="{{ $address->id }}" onClick="handleData('{{ $address->id }}')" >
                            <label class="h5">{{ $address->name }} , {{ $address->phone_number }} ,
                                {{ $address->primary_address }}....
                            </label>
                        </div>
                    @endforeach
                </div>
                {{-- {{ count($address) }} --}}
                @if ($countAddres>0)
                <div>
                    <p class=" h5 float-end border p-1 px-3" style="color: rgb(23, 23, 251)" onclick="change()">Change</p>
                </div>
                @endif
            </div>
            <div class="mb-3">
                <a href={{ route('/address') }}>
                    <p class=" h5" style="color: rgb(23, 23, 251)" route>Add Address +</p>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mt-5 m-auto mb-5">
        <div class="product_layout3_content bg-white position-relative shadow shadow-lg" data-aos="fade-right"
            data-aos-duration="1500">
            <h2>Payment Method</h2>
            <hr>
            <form id="formSubmit" action="{{ url('orderitem') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <div>
                        <input type="hidden" name="address" id="address">
                        <input type="hidden" name="userId" value="{{Session::get('userId')}}">
                        <input type="radio" id="payment" name="payment" value="case on delivery" onclick="selectData()" required>
                        <label> Case On Delivey</label>
                    </div>
                    <button type="submit" class="btn btn-primary col-4 mx-2 mt-3 btn-submit" >Continue</button>
                </div>
            </form>
        </div>


    </div>

    <script>
        var addressId;
        function handleData(id) {
            addressId = id;
            document.getElementById('payment').checked=false;
            localStorage.setItem("address",id);
        }

        function change() {
            if (addressId) {
                window.location = `edit-address/${addressId}`;
            } else {
                alert("please select address");
            }
        }
    </script>

    <script type="text/javascript">
      function selectData(){
        var addressId = localStorage.getItem("address")
        document.getElementById('address').value=addressId;
      }
    </script>
@endsection
