$(document).ready(function() {

	$("#user-datas").click(function() {
		$.post('/cubosweb-test/founders/index', function( data ) {
			if(data){
				data = $.parseJSON(data);
				$('#set-datas1').show();
				$("#name1").html(data[0].Founder.name);
				$("#address1").html(data[0].Founder.address);
				$("#email1").html(data[0].Founder.email);
			}
			 
		});
	});
	
	$("#bussiness-datas").click(function() {
		$.post('/cubosweb-test/startups/index', function( data ) {
			if(data){
				data = $.parseJSON(data);
				$('#set-datas2').show();
				$("#name2").html(data[0].Startup.name);
				$("#address2").html(data[0].Startup.address);
				$("#type2").html(data[0].Startup.type);
			}
			 
		});
	});

});
