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
               <a href="{{url('/admin/create-new-image',$id)}}">
                <button class="btn btn-primary">Add New Image </button>
               </a>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Images</th>
                        {{-- <th >Ingredients</th>
                        <th >Description</th>
                        <th >Benefits</th>
                        <th >When To Consume</th> --}}
                        {{-- <th >Images</th> --}}
                        <th >Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($allimage as $index => $item )
                    <tr>
                        <td>{{$index+1}}</td>
                        <td><img src={{asset('images/'.$item->Product_image)}} alt="" width='30px' height='30px'></td>
                        </td>
                        <td class=" d-md-table-cell">
                            <a href="{{url('/admin/edit-image',$item->id)}}"><button class="btn btn-success" >Edit</button></a>
                            {{-- <a href="{{url('/admin/delete-product',$item->id)}}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{url('/admin/delete-product',$item->id)}}"><button class="btn btn-info">Add Image</button></a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
