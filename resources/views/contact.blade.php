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
    /* z-index: 1; */
    margin-top: 100px;
  }
  .box-content{
    padding: 1em;
    color:black;
    background: #fafcff;
  }
  .box-content h3{
    /* font-weight: 6000px; */
    font-family:fantasy;
    letter-spacing: 0.2em;
    margin-bottom: 30px;
    color:black;
  }
  .box-content p{
    font-size: 20px;
    /* font-family:fantasy; */
    /* letter-spacing: 0.1em; */
    margin-bottom: 30px;
    line-height: 50px;
    color:black;
  }
  .Register{
    background: blue;
    padding: 1em;
    margin: 0 auto;
    width: 75%;
    font-size: 1.5em;
    color:orange;
    font-weight: bold;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 100px;
    margin-left: 100px;
    margin-right: 500px;
  }
  a{
    text-decoration: none;
  }
  </style>
</head>
<body>
  <x-navigation />
  <div class="main">
  <div class="box">
    <div class="box-content">
      <h3>Contact</h3>
    <p>
      HEART/NSTA Trust Corporate Office 6B Oxford Road, Kingston 5 1-888-HEART-NTA (432-7868<br> ALL LOCATIONS
    </p>
  </div>
</div>
<a href="/Send-to-Dorm-Email"><h1 class="Register">Send Email</h1></a>
  </div>
  <x-footer />
</body>
</html>
