function myTest(){
	alert('Успех');

	var arr = [$('#userName').val(), $('#userMail').val(), $('#userPhone').val(), $('#userMessage').val(), ];

	console.log(arr);

	$.ajax({
	url: '/database3/mail.php',
	method: 'post',
	dataType: 'html',
	data: {myArr: arr},
	success: function(data){
		alert(data);
	}
});
}
