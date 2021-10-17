@push('script')
<script>
$(function(){
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });


    // $("#tp").DataTable();
    $("#tp").on("click",".pilih-pelanggan", function(){
        let ele = $(this).closest('tr');
        let ktp = ele.find('td:eq(1)').text();
        let nama = ele.find('td:eq(3)').text();
        let alamat = ele.find('td:eq(2)').text();
        let telp = ele.find('td:eq(4)').text();
        $('#v-ktp').text(ktp);
        $('#v-nama').text(nama);
        $('#v-alamat').text(alamat);
        $('#v-telp').text(telp);
        $('#piliPelangganModal').modal('hide')
    });

    $("#tm").on("click",".pilih-mobil", function(){
            let ala = $(this).closest('tr');
            let nama = ala.find('td:eq(1)').text();
            let merk = ala.find('td:eq(2)').text();
            let type = ala.find('td:eq(3)').text();
            let warna = ala.find('td:eq(4)').text();
            let harga = ala.find('td:eq(5)').text();
            $('#m-nama').text(nama);
            $('#m-merk').text(merk);
            $('#m-type').text(type);
            $('#m-warna').text(warna);
            $('#m-harga').text(harga);
            $('#pilihmobilModal').modal('hide')
        });
        Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});

        $('#tgl_pembeli').val(new Date().toDateInputValue());

        $('#f-cash').submit(function(e){
            e.preventDefault();
            if($('#v-ktp').val() == ""){
                alert('data pelanggan belum dipilih')
            }else if($('#m-kode-mobil').val()== ""){
                alert('data mobil Belum DiPilih')
            }else{
                e.currentTarget.submit()
            }
        })
})
</script>

@endpush
