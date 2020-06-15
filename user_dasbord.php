


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>


 	<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

 	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

 	<style type="text/css">
 		
 		.green-row{

 			background: #67d767 !important;
 		}

 	

 	</style>
  

 </head>
 <body>

 	<?php require_once('header.php'); ?>

 	<div id="gettable"></div>
 	<div class="loader"></div>

 	<script type="text/javascript">
 		
$(document).ready(function() {
    
	// posts list
	var root = 'https://jsonplaceholder.typicode.com';
	$.ajax({
	 url: root+"/comments",
	 method: 'GET',
	 contentType: 'application/json',
	 success: function(posts) {

	 	let data = Object.assign({}, posts);

	 	var row = '<table id="example" class="table table-striped table-bordered" style="width:100%">';
	 	row += '<thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Body</th></tr></thead><tbody>';
	 	for(let i = 0; i < posts.length; i++)
	 	{
	 		var green = '';
	 		if(data[i].email.substr(0, 1) == 'M')
	 		{
	 			var green = "class='green-row'";
	 		}	

	 		row += '<tr '+green+'><td><a href="detail.php/'+data[i].id+'">'+data[i].id+'</a></td><td>'+data[i].name+'</td><td>'+data[i].email+'</td><td>'+data[i].body+'</td></tr>';

	 	}

	 	row += '</tbody></table>';

	 	 $('#gettable').html(row);
	 	 $('#example').DataTable();
	 	 $('.loader').remove();

		

	 }

	});

});



 	</script>
 
 </body>
 </html>