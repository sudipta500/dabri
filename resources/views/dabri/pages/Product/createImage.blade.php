@extends('dabri.layout')
@section('title')
    Product
@endsection
@section('container')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <style>
        .images-preview-div img {
            padding: 10px;
            max-width: 100px;
        }
    </style>

    <div class="card col-8 m-auto">
        <div class="card-header">
            <h5 class="card-title mb-0">Create Product</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg"
                        name="Product_image" required onchange="loadfie(event)">

                    <div class="mb-3 mt-3" id="imagePreview" style="display: none">
                        <img id="output" alt="" width="80px">
                    </div>
                    <div class="mb-3 mt-2">
                        <button class="btn btn-primary " type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var loadfie = function(event) {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.style.display = 'block';
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0])
        }
    </script>

    {{-- <script>
        $(function() {
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result, ).appendTo(
                                placeToInsertImagePreview);
                            $("img").css("width", "90px");
                            $("img").css("margin-left", "30px");
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#gallery-photo-add').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
        });
    </script> --}}
@endsection
