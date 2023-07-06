@extends('dabri.layout')
@section('title')
Category
@endsection
@section('container')

@if (Session::get('success'))
<script>
    Swal.fire({
    title: 'Done',
    text: "{{Session::get('success')}}",
    icon: 'success',
    showConfirmButton: false,
    timer: 2500,
})
 </script>
@endif

{{-- @if (Session::get('successEdit'))
<script>
    Swal.fire({
    title: 'Done',
    text: "{{Session::get('successEdit')}}",
    icon: 'success',
    showConfirmButton: false,
    timer: 2500,
})
 </script>
@endif --}}



<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header d-flex justify-content-between ">
                <h5 class="card-title mb-0">Catagory Data</h5>
                {{-- <form action="" method="POST" class="d-flex gap-1">
                    @csrf
                      <input type='search' class='form-control rounded rounded-lg ' name="search" placeholder='Searching...'/>
                      <button class="btn btn-primary" type="submit">Search</button>
                </form> --}}
               <a href="{{route('create-catagory')}}">
                <button class="btn btn-primary">Add New Category </button>
               </a>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Catagory Name</th>
                        <th >Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catagory as $index => $item )
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$item->category_name}}</td>
                        <td class=" d-md-table-cell">
                            <a href="{{url('/admin/edit-catagory',$item->id)}}"><button class="btn btn-success" >Edit</button></a>
                            {{-- <a href="{{url('/admin/delete-catagory',$item->id)}}"> --}}
                                <button class="btn btn-danger" onclick="deleteData('{{ $item->id }}')">Delete</button>
                            {{-- </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {!! $catagory->appends(Request::all())->links() !!}
</div>
<script>
      function deleteData(id) {
     Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result)=>{
        if(result.value){
            window.location=`/admin/delete-catagory/${id}`
        }
    })
   }
</script>
@endsection
