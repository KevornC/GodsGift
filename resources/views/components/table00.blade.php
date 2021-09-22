<html>
<head>
  <style>
  body {
    font-family: 'georgia', sans-serif;
    background: #fcfeff;
  }
  .diffcontainer {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #36c5f5;
    margin-top: 200px;
    margin-bottom: 500000px;
    margin-left: 120px;

    /* margin-left: 100px; */
     /*background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);*/
  }
  table {
    width: 900px;
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
    margin-bottom: 900px;
  }
  .fix{
    height: 80px;
    width:80px;
    float: right;
    width: 100px;
  }
  </style>
</head>
<body>

  <div class="border">
    <div class="diffcontainer">
      <div class="hheader">
        <h1>All Dorms <img class="fix" src="images\dorm.jpg" /></h1>
      </div>
  	<table>
  		<thead>
  			<tr>
  				<th>Dorm Names</th>
  				<th>Dorm Mottos</th>
          <th>Total Dorm Members</th>
  			</tr>
  		</thead>
  		<tbody>
        @foreach (Session()->get('AllRooms') as $Rooms)
  			<tr>
  				<td>{{$Rooms->DormName }}</td>
  				<td>{{$Rooms->DormMotto}}</td>
          <td>{{$Rooms->TotalMembers}}
  			</tr>
        @endforeach
  		</tbody>
  	</table>
  </div>
</div>
</body>
</html>
