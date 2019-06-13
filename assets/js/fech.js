$(document).ready(function () {
	tampil_buku();

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
				console.log(data.data[0].judul)
			}
		})
	}
});
