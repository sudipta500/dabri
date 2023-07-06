@extends('dabri.layout')
@section('title')
Product
@endsection
@section('container')
<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header d-flex justify-content-between ">
                <h5 class="card-title mb-0">Product</h5>
                {{-- <form action="" method="POST" class="d-flex gap-1">
                    @csrf
                      <input type='search' class='form-control rounded rounded-lg ' name="search" placeholder='Searching...'/>
                      <button class="btn btn-primary" type="submit">Search</button>
                </form> --}}
               <a href="{{route('create-product')}}">
                <button class="btn btn-primary">Add New Product </button>
               </a>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Flavour Name</th>
                        <th>Packet Size</th>
                        <th >Packaging Type</th>
                        <th >Category</th>
                        <th>Image</th>
                        <th >MRP</th>
                        <th >Offer MRP</th>
                        {{-- <th >Ingredients</th>
                        <th >Description</th>
                        <th >Benefits</th>
                        <th >When To Consume</th> --}}
                        {{-- <th >Images</th> --}}
                        <th >Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $index => $item )
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$item->flavour_name}}</td>
                        <td>{{$item->packating_type}}</td>
                        <td>{{$item->packetSize->packet_size}}</td>
                        <td>{{$item->category->category_name}}</td>
                        <td><img src={{asset('images/'.$item->one_image)}} alt="" width='30px' height='30px'></td>
                        <td>{{$item->mrp}}</td>
                        <td>{{$item->offer_mrp}}</td>
                        {{-- <td>
                            @php
                            $images=explode('|',$item->images);
                            @endphp
                            <div class="d-flex gap-3">
                            @foreach ($images as $Allitem)
                            <img src={{asset('images/'.$Allitem)}} alt="" width='30px' height="30px">
                            @endforeach
                        </div> --}}
                        </td>
                        <td class=" d-md-table-cell">
                            <a href="{{url('/admin/edit-product',$item->id)}}"><button class="btn btn-success" >Edit</button></a>
                            <a href="{{url('/admin/delete-product',$item->id)}}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{url('/admin/create-image',$item->id)}}"><button class="btn btn-info">Add Image</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
