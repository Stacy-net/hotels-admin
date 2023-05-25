 $('#commentForm').on('submit', function(e) {
 	e.preventDefault();
 	
 	let form = $('#commentForm');
   let form_data = form.serialize();
 	
    //let file_data = $('#twitImage').prop('files')[0];
    //let form_data = new FormData($('#commentForm')[0]);
       // form_data.append('file', file_data);
        //console.dir(form_data);
 	
 	$.ajax({
 		type: "POST",
 		url: "/add-coment.php",
 		data: form_data,
        //processData: false,
        //contentType: false,
 		success: function(data) {
 		      $('#listTwits').prepend(data);
 			}
 	});
 });