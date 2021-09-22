<html>
<head>
  <link rel="icon" href="images\tab.png"/>
  <title>Heart Dormitory</title>
  <style>
  *{
    margin:0;
    padding:0;
    box-sizing: border-box;
  }
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
    background:#fafcff;
    color:white;
  }
  .box-content{
    padding: 1em;
    color:black;
    background:#fafcff;
  }
  .box-content h3{
    font-weight: 200px;
    font-size: 26px;
    font-family:fantasy;
    letter-spacing: 0.2em;
    margin-bottom: 30px;
    color:black;
  }
  .box-content h4{
    color:#4184e8;
  }

  </style>
</head>
<body>
  <x-navigation />
  <div class="main">
  <div class="box">
    <div class="box-content">
    <h3>Message Sent!</h3>
    <img src="https://img.icons8.com/color/48/000000/circled-envelope.png" />
    <h4>Thanks for Sending An Email</h4>
  </div>
  </div>
  </div>
  <x-footer />
</body>
</html>
