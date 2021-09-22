<head>
  <link rel="icon" href="images\tab.png"/>
  <style>
title{

}
body{

}
h1{
  font-family: 'georgia', sans-serif;
  font-size: 30px;
  text-align: center;
  /* margin: 0 auto; */
}
h2{
  font-family: 'georgia', sans-serif;
  font-size: 30px;
  text-align: center;
  margin: 0 auto;
}
p{
  font-family: 'georgia', sans-serif;
  font-size: 30px;
  font-weight: 300px;
}
a{
  padding: 20px;
  margin-top: 20px;
  text-decoration: none;
  font-family: 'georgia', sans-serif;
  background: blue;
  color:white;
  width:200px;
}
a:hover{
  background: white;
  color:blue;
}
</style>
</head>
<body>
  <h2> Topic: {{ $details['title'] }}</h2>
  <p> {{$details['body']}}</p>
  <a href="http://heartdormitory.dorm/Login">Click to go to Heart Dormitory</a>
</body>
