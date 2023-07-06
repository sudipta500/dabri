@extends('dabri.layout')
@section('title')
Category
@endsection
@section('container')

@if (isset($Sucess))
{{ $Sucess }}
@endif
<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header d-flex justify-content-between ">
                <h5 class="card-title mb-0">CuponData</h5>
                {{-- <form action="" method="POST" class="d-flex gap-1">
                    @csrf
                      <input type='search' class='form-control rounded rounded-lg ' name="search" placeholder='Searching...'/>
                      <button class="btn btn-primary" type="submit">Search</button>
                </form> --}}
               <a href="{{route('create-cupon')}}">
                <button class="btn btn-primary">Add New Cupon </button>
               </a>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Cupon Code</th>
                        <th>Value</th>
                        <th >Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cupon as $index => $item )
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$item->cupon_code}}</td>
                        <td>{{$item->value}}</td>
                        <td class=" d-md-table-cell">
                            <a href="{{url('/admin/edit-cupon',$item->id)}}"><button class="btn btn-success" >Edit</button></a>
                            <a href="{{url('/admin/delete-cupon',$item->id)}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
