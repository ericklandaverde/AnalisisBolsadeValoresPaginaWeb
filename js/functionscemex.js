$(document).ready(function() {
	$.ajax({
			url: './include/processcemex.php',
			type: 'post',
			data: { tag: 'getData'},
			dataType: 'json',
			success: function (data) {
				if (data.success) {
					$.each(data, function (index, record) {
						if ($.isNumeric(index)) { 
							var row = $("<tr />");
							$("<td />").text(record.Fecha).appendTo(row);
							$("<td />").text(record.PrecioApertura).appendTo(row);
							$("<td />").text(record.Maximo).appendTo(row);
							$("<td />").text(record.Minimo).appendTo(row);
							$("<td />").text(record.Cierre).appendTo(row);
							$("<td />").text(record.Volumen).appendTo(row);
							$("<td />").text(record.CierreAjustado).appendTo(row);
							row.appendTo("table");
						}
					})
				}

				$('table').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				})
			}
		});
})