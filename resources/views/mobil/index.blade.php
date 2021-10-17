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
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_mobil">Kode Mobil :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="kode_mobil" placeholder="Kode Model">
                </div>
                <div class="form-group">
                  <label for="merk">Merk :</label>
                  <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk">
                </div>
                <div class="form-group">
                    <label for="type">Type :</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Type">
                </div>
                <div class="form-group">
                    <label for="warna">Warna :</label>
                    <input  type="text" class="form-control" name="warna" placeholder="Warna">
                </div>
                <div class="form-group">
                    <label for="harga_mobil">Harga Mobil :</label>
                    <input  type="text" class="form-control" name="harga_mobil" placeholder="Harga Mobil">
                </div>
                <div class="form-group">
                    <label for="gambar">gambar :</label>
                    <input  type="file" class="form-control" name="gambar" placeholder="gambar">
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
                <th>KODE MOBIL</th>
                <th>MERK</th>
                <th>TYPE</th>
                <th>WARNA</th>
                <th>HARGA MOBIL</th>
                <th>GAMBAR</th>
                <th colspan="2">Hii</th>
            </tr>
            <a href="{{ url('cash')}}">Pembelian Cash</a>
            @foreach ($datas as $key=>$value )
            <tr>
                <td>{{$value->kode_mobil}} </td>
                <td>{{$value->merk}}</td>
                <td>{{$value->type}}</td>
                <td>{{$value->warna}}</td>
                <td>{{$value->harga_mobil}}</td>
                <td><img src="{{ asset('img') }}/{{$value->gambar}}" width="100" alt=""></td>
                <td>@include('mobil.update')@include('mobil.delete')</td>

            </tr>
            @endforeach

        </table>
        @endsection


