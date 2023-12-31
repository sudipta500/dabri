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
    <script type="text/javascript" src="{{ asset('tiny_mce/jscripts/tiny_mce/tiny_mce.js')}}"></script>
    <script type="text/javascript">

        tinyMCE.init({

            // General options

            //mode : "textareas",

              mode : "specific_textareas",

              editor_selector : "myTextEditor",

              width : 950,

            height : 400,

            theme : "advanced",

            plugins : "imgmanager,openmanager,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",



            // Theme options

            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",

            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",

            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",

            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks,|,openmanager,|,imgmanager",



            theme_advanced_toolbar_location : "top",

            theme_advanced_toolbar_align : "left",

            theme_advanced_statusbar_location : "bottom",

            theme_advanced_resizing : true,





            //FILE UPLOAD MODS

            file_browser_callback: "openmanager/",

            open_manager_upload_path: '../../../../../upload/',



            // Example content CSS (should be your site CSS)

            //content_css : "../css/style.css",



            // Drop lists for link/image/media/template dialogs

            template_external_list_url : "lists/template_list.js",

            external_link_list_url : "lists/link_list.js",

            external_image_list_url : "lists/image_list.js",

            media_external_list_url : "lists/media_list.js",



            // Style formats

            style_formats : [

                {title : 'Bold text', inline : 'b'},

                {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},

                {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},

                {title : 'Example 1', inline : 'span', classes : 'example1'},

                {title : 'Example 2', inline : 'span', classes : 'example2'},

                {title : 'Table styles'},

                {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}

            ],



            // Replace values for the template plugin

            template_replace_values : {

                username : "Some User",

                staffid : "991234"

            }

        });

    </script>
    <div class="card col-8 m-auto">
        <div class="card-header">
            <h5 class="card-title mb-0">Create Product</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Flavour Name</label>
                        <input type="text" class="form-control" name="flavour_name" placeholder="Enter Flavour Name"
                            required>
                        {{-- <span class="text-danger">@error('port_name')
                    {{$message}}
                @enderror</span> --}}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Catagory</label>
                        <div>
                            @foreach ($catagory as $item)
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category_id"
                                        value="{{ $item->id }}" required>
                                    <span class="form-check-label">
                                        {{ $item->category_name }}
                                    </span>
                                </label>
                            @endforeach
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ingredients</label>
                        <input type="text" class="form-control" name="ingredient" placeholder="Enter Ingredients"
                            required>
                        {{-- <span class="text-danger">@error('port_name')
                    {{$message}}
                @enderror</span> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea type='text' class="form-control myTextEditor" name="description" placeholder="Description"></textarea>
                        {{-- <span class="text-danger">@error('port_name')
                    {{$message}}
                @enderror</span> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Benefits</label>
                        <textarea type="text" class="form-control myTextEditor " name="benefits" placeholder="Enter Benefits"></textarea>
                        {{-- <span class="text-danger">@error('port_name')
                    {{$message}}
                @enderror</span> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">When To Consume</label>
                        <textarea type="text" class="form-control myTextEditor" name="consume" placeholder="Enter When To Consume"></textarea>
                        {{-- <span class="text-danger">@error('port_name')
                    {{$message}}
                @enderror</span> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg"
                            name="one_image" required onchange="loadfie(event)">
                        {{-- <span class="text-danger">@error('phone_number')
                    {{$message}}
                @enderror</span> --}}
                    </div>
                    <div class="mb-3" id="imagePreview" style="display: none">
                        <img id="output" alt="" width="80px">
                    </div>

                    <div class="mb-3" id='image-holder'> </div>
                    {{-- <div class="mb-3">
                        <label class="form-label">Multiple Image</label>
                        <input type="file" class="form-control" name="images[]" multiple id="gallery-photo-add" required>

                    </div> --}}
                    <div class="gallery mb-4"></div>

                </div>
                <div class="card-body ">
                    <div id="dynamicTable" class="mb-3">
                        <div class="mb-3 row ">
                            <div class="col-lg-6 col-12">
                                <label class="form-label">Packet Type </label>
                                {{-- <input type="text" class="form-control" name="packet_size" placeholder="Enter Packet Size "
                                required> --}}
                                <select class="form-control mb-2" name='addmore[0][packet_size_id]'>
                                    <option hidden>-- Packaging Type --</option>
                                    @foreach ($packetSize as $item)
                                        <option value={{ $item->id }}>{{ $item->packet_size }}</option>
                                    @endforeach
                                </select>
                                {{-- <span class="text-danger">@error('name')
                            {{$message}}
                        @enderror</span> --}}
                            </div>
                            <div class="col-lg-6 col-12">
                                <label class="form-label">Packet Size</label>
                                <input type="text" class="form-control" name="addmore[0][packating_type]"
                                    placeholder="Enter Packaging Size" required>
                                {{-- <span class="text-danger">@error('port_name')
                            {{$message}}
                        @enderror</span> --}}
                            </div>
                        </div>
                        <div class="mb-3 row ">
                            <div class="col-lg-6 col-12">
                                <label class="form-label">MRP</label>
                                <input type="number" class="form-control" name="addmore[0][mrp]" placeholder="Enter MRP"
                                    required>
                                {{-- <span class="text-danger">@error('port_name')
                            {{$message}}
                        @enderror</span> --}}
                            </div>
                            <div class="col-lg-6 col-12">
                                <label class="form-label">Offer MRP</label>
                                <input type="number" class="form-control" name="addmore[0][offer_mrp]"
                                    placeholder="Enter Offer MRP" required>
                                {{-- <span class="text-danger">@error('port_name')
                            {{$message}}
                        @enderror</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 float-end">
                        <button class="btn btn-success " name="add" id="add" class="btn btn-success">Add
                            More</button>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary " type="submit">Submit</button>
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

    <script>
        $(function() {
            // Multiple images preview in browser
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
    </script>

    <script type="text/javascript">
        var i = 0;
        $("#add").click(function() {
              ++i;
            $("#dynamicTable").append(`
            <div id='remove'>
                   <div class="mb-2 mt-3 row ">
                        <div class="col-lg-6 col-12">
                            <label class="form-label">Packet Type </label>
                            {{-- <input type="text" class="form-control" name="packet_size" placeholder="Enter Packet Size "
                                required> --}}
                                <select class="form-control mb-3" name="addmore[`+i+`][packet_size_id]">
                                    <option hidden>-- Packaging Type --</option>
                                    @foreach ($packetSize as $item)
                                    <option value={{ $item->id }}>{{ $item->packet_size }}</option>
                                    @endforeach
                                  </select>
                            {{-- <span class="text-danger">@error('name')
                            {{$message}}
                        @enderror</span> --}}
                        </div>
                        <div class="col-lg-6 col-12">
                            <label class="form-label">Packet Size</label>
                            <input type="text" class="form-control" name="addmore[`+i+`][packating_type]" placeholder="Enter Packaging Size"
                                required>
                            {{-- <span class="text-danger">@error('port_name')
                            {{$message}}
                        @enderror</span> --}}
                        </div>
                    </div>
                    <div class="mb-2 row ">
                        <div class="col-lg-6 col-12">
                            <label class="form-label">MRP</label>
                            <input type="number" class="form-control" name="addmore[`+i+`][mrp]" placeholder="Enter MRP" required>
                            {{-- <span class="text-danger">@error('port_name')
                            {{$message}}
                        @enderror</span> --}}
                        </div>
                        <div class="col-lg-6 col-12">
                            <label class="form-label">Offer MRP</label>
                            <input type="number" class="form-control" name="addmore[`+i+`][offer_mrp]" placeholder="Enter Offer MRP" required>
                            {{-- <span class="text-danger">@error('port_name')
                            {{$message}}
                            @enderror</span> --}}
                        </div>
                        <div class='mt-2 mb-3 '>
                            <button type="button" class="btn btn-danger remove-tr float-end">Remove</button>
                        </div>
                    </div>

    `);
        });
        $(document).on('click', '.remove-tr', function() {
            $(this).parents('#remove').remove();
        });
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
{{-- <script type="text/javascript">
        tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script> --}}



@endsection
