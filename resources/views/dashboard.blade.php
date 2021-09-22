<html>
<head>
  <link rel="icon" href="images\tab.png"/>
  <title>Heart Dormitory</title>
  <style>
.header{
  text-align: center;
  margin-right: 100px;
  color: black;
}
hr.separate{
  border-top: 2px solid #36c5f5;
}
  </style>
</head>
<body>
  <div class="header">
    <h1>{{ Session()->get('DormName')}}</h1>
    <h3>{{ Session()->get('DormMotto')}}</h3>
  </div>
  <hr class="separate">
<x-sidebar1 />
<x-table0 />
<x-table />
<x-table1 />
</body>
</html>
