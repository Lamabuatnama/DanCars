@extends('layout.index')
@section('container')

<form action="{{ route('cash.store') }}" method="post" id="f-cash">
    @csrf

@include('cash.pembeli')
@include('cash.cashmobil')

<table>
<tr>
    <td class="table-warning"> Tanggal Transaksi </td>
    <td><input type="date" class="form-control" name="tgl_pembeli" id="tgl_pembeli" required></td>
</tr>
<tr>
    <td class="table-warning"> Uang Yang Harus DiBayarkan</td>
    <td><input type="text" class="form-control" name="cash_bayar" id="cash_bayar" required></td>
</tr>
</table>
<div style="text-align: right">
    <button  class="btn btn-primary" type="submit">Bayar</button>
</div>
</form>



@include('cash.script')
@endsection
