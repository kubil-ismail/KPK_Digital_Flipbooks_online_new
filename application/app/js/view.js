// Pdf ANAK
$(document).ready(function () {
  $('.PdfModalClick').click(async function() {
    const id = $(this).data('id');
    var json = {};
    var ido = '';
    await $.get("../config/buku_json.php?id=" + id).then(function(res) {
      json = JSON.parse(res);
      $('#D-unduh').html("Jumlah Unduh : "+"<b>"+json.pdf_download_count+"</b>");
      $('#D-baca').html('Jumlah Baca : '+"<b>"+json.pdf_read_count+"</b>");
      $('#D-pdfSize').html('Size: '+"<b>"+json.pdf_size +' MB'+"</b>");

      $('#T-unduh').html("Jumlah Unduh : "+"<b>"+json.pdf_download_count+"</b>");
      $('#T-baca').html('Jumlah Baca : '+"<b>"+json.pdf_read_count+"</b>");
      $('#T-pdfSize').html('Size: '+"<b>"+json.pdf_size +' MB'+"</b>");

      $('#M-unduh').html("Jumlah Unduh : "+"<b>"+json.pdf_download_count+"</b>");
      $('#M-baca').html('Jumlah Baca : '+"<b>"+json.pdf_read_count+"</b>");
      $('#M-pdfSize').html('Size: '+"<b>"+json.pdf_size +' MB'+"</b>");
      
      $('#headModal').html(json.pdf_title);
      $('#descModal').html(json.pdf_desc);
      $('#img-modal').attr("src", json.pdf_thumb);
      // $('.modal-read-button').attr("id", json.pdf_modal);
      $("#read").attr("href", "viewpdf.php?id="+json.id);
      $("#read").attr("target", "_blank");
      $('#downloadPdf').attr('href',"add_download.php?read="+json.id);
      $('#downloadSearch').attr('href',"add_download.php?read="+json.id);
      ido = json.id;
    });
  });
});
