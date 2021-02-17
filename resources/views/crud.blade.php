@extends('layout.master')
@section('title','Laravels')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="{{ route('crud.tambah')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
            <hr>
            <table class="table table-striped table-bordered table-sm" >
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Action</th>
                </tr>
                <tr>
                    @foreach ($data_barang as $no => $data)
                        <td>{{ $data_barang->firstItem()+$no }}</td>
                        <td>{{ $data->kode_barang }}</td>
                        <td>{{ $data->nama_barang }}</td>
                        <td>
                            <a href="#" class="badge badge-success">Edit</a>
                            <button href="#" data-id="{{ $data->id }}" class="badge badge-danger swal-confirm">
                                <form action="{{ route('crud.delete',$data->id) }}" id="delete-{{ $data->id }}" method="POST">
                                @csrf
                                @method('delete')
                                </form>
                                Delete{{ $data->id }}
                            </button>
                        </td>
                        
                </tr>
                @endforeach

            </table>
            {{ $data_barang->links() }}
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
<script src="{{asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>
    
@endpush

@push('after-script')
<script>
    $(".swal-confirm").click(function(e) {
    id = e.target.dataset.id
    console.log(id);
    swal({
      title: 'Are you sure? '+id,
      text: 'Once deleted, you will not be able to recover this imaginary file!',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
            console.log('halo');
            swal('Poof! Your imaginary file has been deleted!'+id, {
            icon: 'success',
            });
            document.getElementById('delete-'+id).submit();
            $(`#delete ${id}`).submit();
      } else {
            swal('Your imaginary file is safe!');
      }
    });
});
</script>
@endpush