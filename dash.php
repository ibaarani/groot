<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    th{ 
        color:#fff;
            }
</style>
<body>

<table class="table table-striped">
    <tr  class="bg-info">
        <th>S.no</th>
        <th>Name</th>
        <th>Age</th>
        <th>DOB</th>
	<th>first Name</th>
	<th>Last Name</th>
  <th> Add1</th>
  <th> Add2 </th>
  <th> Add3 </th>
	<th>more</th>
    </tr>

    <tbody id="myTable">
        
    </tbody>
</table>
<center><button id="myBtn"> POPup</button></center>
<p><center>
        <a href="#" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a> 

        <!--<a href="#" class="previous round">&#8249;</a>
  <a href="#" class="next round">&#8250;</a>--></center></p>
  </div>
<p><center><a href="../groot/index.php">Sign out</a></center></p>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
   
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Welcome to great </p>
    <p>

	    
    <center><a href="#" class="previous round">&#8249;</a>
    <a href="#" class="next round">&#8250;</a></center>
    </p>
  </div>

</div>


<script>
	
        const api_url = 'https://grootpsna.free.beeceptor.com/users';
	async function getis()
	{
	const response = await fetch(api_url);
	const data = await response.json();
	console.log(data.data);
	const dattas = data.data;
  const more = dattas.more;
	var myArray = dattas;

	buildTable(myArray)
        }
	getis();
        



	function buildTable(data){
		var table = document.getElementById('myTable')
    //var table = document.getElementById('hello')


		for (var i = 0; i < data.length; i++){
			var row = `<tr>
              <td>${data[i].id}</td>
							<td>${data[i].name}</td>
							<td>${data[i].age}</td>
							<td>${data[i].DOB}</td>
							<td>${data[i].firstname}</td>
							<td>${data[i].lastname}</td>
              <td>${data[i].more.address_line1} </td>
              <td>${data[i].more.address_line2} </td>
              <td>${data[i].more.address_line3} </td>
              <td> <button id="myBtn"> More </button> </td>
							
					  </tr>`
			table.innerHTML += row
     // hello.innerHTML += row


		}
	}
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
</body>
</html>

