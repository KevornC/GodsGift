<html>
<head>
  <style>
  body {
    font-family: 'georgia', sans-serif;
    background: #fcfeff;
  }
  .dcontainer {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #36c5f5;
    margin-top: 100px;
      /* margin-right: 900px; */
    margin-left: 120px;
     /*background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);*/
  }
  table {
    width: 900px;
    border-collapse: collapse;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      /* margin-right: 500px; */
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
    width: 100%;
    color: white;
  }
  .big{
    margin-right: 900px;
    margin-top: 200px;
    margin-bottom: 500px;
  }
  .fix{
    height: 80px;
    width:80px;
    float: right;
  }
  </style>
</head>
<body>

  <div class="big">
    <div class="dcontainer">
      <div class="hheader">
        <h1>Profile <img class="fix" src="/images/{{ Session()->get('photo')}}" /></h1>
      </div>
  	<table>
  		<thead>
  			<tr>
  				<th>First Name</th>
  				<th>Middle Name</th>
  				<th>Last Name</th>
          <th>Gender</th>
          <th>LengthOfResidency</th>
          <th>DormNumber</th>
          <th>Email</th>
          <th>Action</th>
  			</tr>
  		</thead>
  		<tbody>
  			<tr>
  				<td>{{ Session()->get('Firstname')}}</td>
  				<td>{{ Session()->get('Middlename')}}</td>
  				<td>{{ Session()->get('Lastname')}}</td>
          <td>{{ Session()->get('Gender')}}</td>
  				<td>{{ Session()->get('LengthOfResidency') ."  months"}}</td>
  				<td>{{"A". Session()->get('DormNumber')}}</td>
  				<td>{{ Session()->get('Email')}}</td>
  				<td><a href="/ChangeProfile">Edit</a></td>
  			</tr>
  			</tr>
  		</tbody>
  	</table>
  </div>
</div>
</body>
</html>
