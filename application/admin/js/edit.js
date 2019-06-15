$(function() {
  //Buat event ketika tombol edit on click
  $('.pdf_edit').on('click', function() {
    // Ubah isi html #modalTitle
    $('#modalTitle').html('Ubah Data Mahasiswa');

    // Mengambil data-id dari tombol yang di click
    const id_data = $(this).data('id');

    // Jalankan ajax
    $.ajax({
      // Tujuan url yang di req
      url: 'http://localhost/GITHUB/BETA/PHP_MVC/public/mahasiswa/getubah',
      //Data yang di kirim
      data: {id : id_data},
      //Tipe method pengiriman
      method: 'post',
      //Format data yang di terima
      dataType: 'json',
      // Jika req sukses jalankan fungsi ini
      success: function(data) {
        //Ganti valuenya dengan object dari id yang di kembalikan
        $('#id').val(data.id);
        //Ganti valuenya dengan object dari nama yang di kembalikan
        $('#nama').val(data.nama);
        //Ganti valuenya dengan object dari nrp yang di kembalikan
        $('#nrp').val(data.nrp);
        //Ganti valuenya dengan object dari email yang di kembalikan
        $('#email').val(data.email);
        //Ganti valuenya dengan object dari jurusan yang di kembalikan
        $('#jurusan').val(data.jurusan);
      }
    });
  });

});
