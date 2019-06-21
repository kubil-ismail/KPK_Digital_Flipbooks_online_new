$(document).ready(function() {
	$('.formUpload').on('submit', function(event){
		event.preventDefault();
		var formData = new FormData($('.formUpload')[0]);

		$('.msg').hide();
		$('.progress').show();

		$.ajax({
			xhr : function() {
				var xhr = new window.XMLHttpRequest();
				xhr.upload.addEventListener('progress', function(e){
					if(e.lengthComputable){
						console.log('Bytes Loaded : ' + e.loaded);
						console.log('Total Size : ' + e.total);
						console.log('Persen : ' + (e.loaded / e.total));

						var percent = Math.round((e.loaded / e.total) * 100);

						$('#progressBar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
					}
				});
				return xhr;
			},

			type : 'POST',
			url : 'upload.php',
			data : formData,
			processData : false,
			contentType : false,
			success : function(response){
				$('.formUpload')[0].reset();
				$('.progress').hide();
				$('.msg').show();
				if(response == ""){
					alert('File gagal di upload');
				}else{
					var msg = 'File berhasil di upload.';
					$('.msg').html(msg);
				}
			}
		});
	});
});
