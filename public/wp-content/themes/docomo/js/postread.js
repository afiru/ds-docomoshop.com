$(window).ready( function() {
	$('#postnum').jpostal({
		postcode : [
			'#postnum' //郵便番号のid
		],
		address : {
			'#pref'  : '%3',//都道府県のid
			'#sikutyouson' : '%4%5%6' //住所のid
		}
	});
});
