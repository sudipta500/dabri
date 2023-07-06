@extends('dabri.layout')
@section('title')
Packet Size
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

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header d-flex justify-content-between ">
                <h5 class="card-title mb-0">Packet Size Data</h5>
                {{-- <form action="" method="POST" class="d-flex gap-1">
                    @csrf
                      <input type='search' class='form-control rounded rounded-lg ' name="search" placeholder='Searching...'/>
                      <button class="btn btn-primary" type="submit">Search</button>
                </form> --}}
               <a href="{{route('create-packet-size')}}">
                <button class="btn btn-primary">Add New Packing Size </button>
               </a>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Packet Type</th>
                        <th >Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packetSize as $index => $item )
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$item->packet_size}}</td>
                        <td class=" d-md-table-cell">
                            <a href="{{url('/admin/edit-packet-size',$item->id)}}"><button class="btn btn-success" >Edit</button></a>
                            <button class="btn btn-danger" onclick="deleteData('{{ $item->id }}')">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {!! $packetSize->appends(Request::all())->links() !!}
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
              window.location=`/admin/delete-packet-size/${id}`
          }
      })
     }
  </script>
@endsection
