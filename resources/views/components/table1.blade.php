<html>
<head>
  <style>
  body {
    font-family: 'georgia', sans-serif;
    background: #fcfeff;
  }
  .tcontainer {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #36c5f5;
    margin-top: 250px;
    margin-left: 120px;
    margin-bottom: 900px;
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
  .border1{
    /* margin-right: 700px; */
    margin-top: 100px;
    margin-bottom: 1000px;
  }
  .fix{
    height: 80px;
    width:80px;
    float: right;
  }
  </style>
</head>
<body>
  <div class="border1">
    <div class="tcontainer">
      <div class="hheader">
        <h1>Dorm Resources <img class="fix" src="images\dorm.jpg" /></h1>
      </div>
  	<table>
  		<thead>
  			<tr>
          <th>Dorm Room</th>
  				<th>Bunk Beds</th>
  				<th>Flat Beds</th>
  				<th>Lockers</th>
          <th>Desks</th>
          <th>Chairs</th>
          <th>Floor Condition</th>
  			</tr>
  		</thead>
  		<tbody>
  			<tr>
          <td>{{ Session()->get('DormRoom')}}</td>
  				<td>{{ Session()->get('Bunks')}}</td>
  				<td>{{ Session()->get('Flats')}}</td>
  				<td>{{ Session()->get('Lockers')}}</td>
  				<td>{{ Session()->get('Desk')}}</td>
  				<td>{{ Session()->get('Chairs')}}</td>
  				<td>{{ Session()->get('floorCondition')}}</td>
  			</tr>
  		</tbody>
  	</table>
  </div>
</div>
</body>
</html>
