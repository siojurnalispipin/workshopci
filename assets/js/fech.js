$(document).ready(function () {
	tampil_buku();
	tampil_tabel();

	function tampil_buku() {
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

				var html = '';
				var i;
				for (i = 0; i < data.data.length; i++) {
					html += '<tr>' +
						'<td>' + data.data[i].id + '</td>' +
						'<td>' + data.data[i].judul + '</td>' +
						'<td>' + data.data[i].deskripsi + '</td>' +
						'<td>' + data.data[i].penulis + '</td>' +
						'<td>' + data.data[i].rating + '</td>' +
						'<td style="text-align:right;">' +
						'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-product_code="' +
						data.data[i].id + '" data-product_name="' + data.data[i].judul +
						'" data-price="' + data.data[i].deskripsi + '">Edit</a>' + ' ' +
						'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="' +
						data.data[i].id + '">Delete</a>' +
						'</td>' +
						'</tr>';
				}
				$('#show_data').html(html);
			}
		})
	}


	function tampil_tabel() {
		// alert('hi');
		return $('#mydata').DataTable({
			"processing": true,
			"pagingType": "full_numbers",
			"lengthMenu": [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			],
			responsive: true,
			language: {
				search: "_INPUT_",
				searchPlaceholder: "Search Buku",
			}
		});
	}
});
