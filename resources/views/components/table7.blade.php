<html>
<head>
  <style>
  body {
    font-family: 'georgia', sans-serif;
    background: #fcfeff;
  }
  .coontainerr {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #36c5f5;
    margin-top: 100px;
  margin-bottom: 100px;
    margin-left: 120px;

    /* margin-left: 100px; */
     /*background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);*/
  }
  table {
    width: 1000px;
    border-collapse: collapse;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);

  }
  th,
  td {
    padding: 15px;
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff;
  }
  th {
    text-align: left;
  }
  th {
    background-color: #556081;
  }
  tr:hover {
    background-color: rgba(255, 255, 255, 0.3);
  }
  td {
    position: relative;
  }
  td:hover:before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: -9999px;
    bottom: -9999px;
    background-color: rgba(255, 255, 255, 0.2);
    z-index: -1;
  }
  table input[type='submit']{
  	text-decoration: none;
  	background: transparent;
  	outline: none;
  	border: none;
  	color: white;
  }
  table input[type='submit']:hover{
  	background: #12dec9;
  	width: 70%;
  	height: 5%;
  	color: black;
  }
  td a{
    text-decoration: none;
    color: white;
    text-align: center;
  }

  td a:hover{
    background: #12dec9;
    width: 70%;
    height: 5%;
    color: black;
  }
  .border{
    margin-right: 800px;
    margin-bottom: 200px;
  }
  .fix{
    height: 70px;
    width:80px;
    float: right;
  }
  </style>
</head>
<body>

  <div class="border">
    <div class="coontainerr">
      <div class="hheader">
        <h1>Dorm Members <img class="fix" src="/images/{{ Session()->get('photo')}}" /></h1>
      </div>
  	<table>
  		<thead>
  			<tr>
  				<th>Name</th>
  				<th>Gender</th>
  				<th>Length Of Residency</th>
          <th>Email</th>
          <th>Action</th>
  			</tr>
  		</thead>
  		<tbody>
        @foreach (Session()->get('Members') as $Members)
  			<tr>
  				<td>{{$Members->FirstName ." ".$Members->LastName}}</td>
  				<td>{{$Members->Gender}}</td>
  				<td>{{$Members->LengthOfResidency ." months"}}</td>
          <td>{{$Members->Email}}</td>
          <td><a href="{{ url('/Send-Email-To-Members/'.$Members->Email) }}" >Send Email</a></td>

  			</tr>
        @endforeach
  		</tbody>
  	</table>
  </div>
</div>
</body>
</html>
