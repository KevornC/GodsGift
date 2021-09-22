<html>
<head>
  <link rel="icon" href="images\tab.png"/>
  <title>Heart Dormitory</title>
  <style>
  .main{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align:center;
    height: 90vh;
  }
  .box{
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
    height: 500px;
    width: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align:center;
    /* background: #f5f7fa; */
    background: #fafcff;
    color:white;
  }
  .box-content{
    padding: 1em;
    color:black;
    background: #fafcff;
  }
  .box-content h3{
    /* font-weight: 200px; */
    font-family:fantasy;
    letter-spacing: 0.2em;
    margin-bottom: 30px;
    color:black;
  }
  .box-content p{
    font-size: 20px;
    line-height: 35px;
    /* font-family:fantasy; */
    /* letter-spacing: 0.1em; */
    margin-bottom: 30px;
    color:black;
  }
  </style>
</head>
<body>
  <x-navigation />
  <div class="main">
  <div class="box">
    <div class="box-content">
    <h3>Vision</h3>
    <p>
      A globally competitive workforce impacting nation building through human capital development.
    </p>
  </div>
</div>
</div>
  <x-footer />
</body>
</html>
