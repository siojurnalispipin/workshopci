$(document).ready(function () {
	buku_populer();
	daftar_buku();
	$('#mydata').dataTable({
		"processing": true,
		"aLengthMenu": [
			[5, 10, 50],
			[5, 10, 50]
		],
		"searching": false,
		scrollY: 300,
		paging: true
	});

	function buku_populer() {
		$.ajax({
			type: "ajax",
			url: "http://localhost/ci/api/book",
			async: true,
			dataType: "json",
			contentType: 'application/json',
			headers: {
				'api-key': 'myKey'
			},
			success: function (data) {
				$('#judulbuku').text(data.data[0].judul);
				$('#rating').text(data.data[0].rating);
				$('#deskripsi').text(data.data[0].deskripsi);
			}
		});
	}

	function daftar_buku() {
		$.ajax({
			type: 'ajax',
			url: 'http://localhost/ci/api/book',
			async: true,
			dataType: 'json',
			success: function (data) {
				var html = '';
				var i;
				for (i = 0; i < data.data.length; i++) {
					html += '<tr>' +
						'<td>' + data.data[i].id + '</td>' +
						'<td>' + data.data[i].judul + '</td>' +
						'<td>' + data.data[i].penulis + '</td>' +
						'<td>' + data.data[i].rating + '</td>' +
						'<td style="text-align:right;">' +
						'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="' + data.data[i].id + '" data-judul="' + data.data[i].judul + '" data-deskripsi="' + data.data[i].deskripsi + '" data-penulis="' + data.data[i].penulis + '" data-rating="' + data.data[i].rating + '" >Edit</a>' + ' ' +
						'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="' + data.data[i].id + '">Delete</a>' +
						'</td>' +
						'</tr>';
				}
				$('#show_data').html(html);
			}

		});
	}

	//Save product
	$('#btn_save').on('click', function () {
		var judul = $('#judul').val();
		var deskripsi = $('#deskripsi').val();
		var penulis = $('#penulis').val();
		var rating = $('#rating').val();
		$.ajax({
			type: "POST",
			url: "http://localhost/ci/api/book",
			dataType: "JSON",
			data: {
				judul: judul,
				deskripsi: deskripsi,
				penulis: penulis,
				rating: rating
			},
			success: function (data) {
				$('[name="judul"]').val("");
				$('[name="deskripsi"]').val("");
				$('[name="penulis"]').val("");
				$('[name="rating"]').val("");
				$('#Modal_Add').modal('hide');
				daftar_buku();
			}
		});
		return false;
	});

	//get data for update record
	$('#show_data').on('click', '.item_edit', function () {
		var id = $(this).data('id');
		var judul = $(this).data('judul');
		var penulis = $(this).data('penulis');
		var deskripsi = $(this).data('deskripsi');
		var rating = $(this).data('rating');

		$('#Modal_Edit').modal('show');
		$('[name="id_edit"]').val(id);
		$('[name="judul_edit"]').val(judul);
		$('[name="penulis_edit"]').val(penulis);
		$('[name="deskripsi_edit"]').val(deskripsi);
		$('[name="rating_edit"]').val(rating);
	});

	//update record to database
	$('#btn_update').on('click', function () {
		var id = $('#id_edit').val();
		var judul = $('#judul_edit').val();
		var deskripsi = $('#deskripsi_edit').val();
		var penulis = $('#penulis_edit').val();
		var rating = $('#rating_edit').val();
		$.ajax({
			type: "PUT",
			url: "http://localhost/ci/api/book/" + id,
			dataType: "JSON",
			data: {
				judul: judul,
				deskripsi: deskripsi,
				penulis: penulis,
				rating: rating
			},
			success: function (data) {
				$('[name="id_edit"]').val("");
				$('[name="judul_edit"]').val("");
				$('[name="deskripsi_edit"]').val("");
				$('[name="penulis_edit"]').val("");
				$('[name="rating_edit"]').val("");
				$('#Modal_Edit').modal('hide');
				daftar_buku();
			}
		});
		return false;
	});

	//get data for delete record
	$('#show_data').on('click', '.item_delete', function () {
		var id = $(this).data('id');

		$('#Modal_Delete').modal('show');
		$('[name="id_delete"]').val(id);
	});

	//delete record to database
	$('#btn_delete').on('click', function () {
		var id = $('#id_delete').val();
		$.ajax({
			type: "DELETE",
			url: "http://localhost/ci/api/book/" + id,
			dataType: "JSON",
			success: function (data) {
				$('[name="id_delete"]').val("");
				$('#Modal_Delete').modal('hide');
				daftar_buku();
			}
		});
		return false;
	});

});
