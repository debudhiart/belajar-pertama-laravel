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
                            <a href="#" class="badge badge-danger">Delate</a>
                        </td>
                        
                </tr>
                @endforeach

            </table>
            {{ $data_barang->links() }}
        </div>
    </div>
</div>

@endsection

@push('page-script')

    
@endpush