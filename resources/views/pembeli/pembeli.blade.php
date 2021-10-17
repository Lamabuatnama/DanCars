@extends('layout.index')
@section('container')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah
  </button>
    <div style="margin-top:20px">
    @if(session('success'))
        <div class="alert alert-success text-center" role="alert" id="success-alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="close" >
            <span aria-hidden="true" >&times; </span>
            </button>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <ul>
        @foreach ($errors—>all() as $error)
            <li>{{ $error }}</li>
        @endforeach
            </ul>
            Xixixi
        </div>
        @endif
    </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="tambahpembeli" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahpembeli">Tambah Data Pembeli</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="ktp_pembeli">KTP Pem :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="ktp_pembeli" placeholder="Kode Model">
                </div>
                <div class="form-group">
                  <label for="nama_pembeli">nama_pembeli :</label>
                  <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" placeholder="nama_pembeli">
                </div>
                <div class="form-group">
                    <label for="alamat_pembeli">Alamat Pembeli :</label>
                    <input  type="text" class="form-control" name="alamat_pembeli" placeholder="alamat_pembeli">
                </div>
                <div class="form-group">
                    <label for="telp_pembeli">No Pembeli :</label>
                    <input type="text" class="form-control" id="telp_pembeli" name="telp_pembeli" placeholder="telp_pembeli">
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<br>

        <table class="table table-bordered">
            <tr>
                <td>No. KTP</td>
                <td>Nama</td>
                <td>Alamat Rumah</td>
                <td>No. HP</td>
                <th colspan="2">Hii</th>
            </tr>
            <a href="{{ url('cash')}}">Pembelian Cash</a>
            @foreach ($datas as $key=>$value )
            <tr>
                <td>{{$value->ktp_pembeli}} </td>
                <td>{{$value->nama_pembeli}}</td>
                <td>{{$value->alamat_pembeli}}</td>
                <td>{{$value->telp_pembeli}}</td>
                <td>@include('pembeli.update')@include('pembeli.delete')</td>

            </tr>
            @endforeach

        </table>
        @endsection


