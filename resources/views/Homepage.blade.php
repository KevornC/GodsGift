<html>
<head>
  <link rel="icon" href="images\tab.png"/>
  <title>Heart Dormitory</title>
  <style>
  body{
    position: relative;
  }
  main{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 94vh;
    /* background-image: url('images\\books-21849_1920.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center; */
    }
  .box{
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
    height: 700px;
    width: 700px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align:center;
    /* background: #f5f7fa; */
    background: #fafcff;
    color:black;
    padding: 1em;
  }
  .box-content{
    padding: 1em;
    color:black;
    background: #fafcff;
  }
  .box-content h1{
    font-weight: 200px;
    font-family:fantasy;
    letter-spacing: 0.3em;
    margin-bottom: 30px;
    color:black;
  }
  .box-content a{
    text-decoration: none;
    background: none;
    outline: none;
  }
  .rbox{
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
    height: 500px;
    width: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align:center;
    /* background: #f5f7fa; */
    background: #36c5f5;
    color:black;
    padding: 1em;
  }
  .rbox-content{
    padding: 1em;
    color:black;
    background: #36c5f5;
  }
  .rbox-content h1{
    font-weight: 200px;
    font-family:fantasy;
    letter-spacing: 0.3em;
    margin-bottom: 30px;
    color:black;
  }
  .rbox-content a{
    text-decoration: none;
    background: none;
    outline: none;
  }
  /* 12 */
  .btn-12{
    position: relative;
    right: 20px;
    bottom: 20px;
    border:none;
    width: 130px;
    height: 40px;
    line-height: 40px;
    -webkit-perspective: 230px;
    perspective: 230px;
    cursor:pointer;
    /* background: #f5f7fa; */
    background: #36c5f5;
    color:white;
  }
  .btn-12 span {
    display: block;
    position: absolute;
    width: 130px;
    height: 40px;
    border: 2px solid #000;
    margin:0;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all .3s;
    transition: all .3s;
  }
  .btn-12 span:nth-child(1) {
    box-shadow:
     -7px -7px 20px 0px #fff9,
     -4px -4px 5px 0px #fff9,
     7px 7px 20px 0px #0002,
     4px 4px 5px 0px #0001;
    -webkit-transform: rotateX(90deg);
    -moz-transform: rotateX(90deg);
    transform: rotateX(90deg);
    -webkit-transform-origin: 50% 50% -20px;
    -moz-transform-origin: 50% 50% -20px;
    transform-origin: 50% 50% -20px;
  }
  .btn-12 span:nth-child(2) {
    -webkit-transform: rotateX(0deg);
    -moz-transform: rotateX(0deg);
    transform: rotateX(0deg);
    -webkit-transform-origin: 50% 50% -20px;
    -moz-transform-origin: 50% 50% -20px;
    transform-origin: 50% 50% -20px;
  }
  .btn-12:hover span:nth-child(1) {
    -webkit-transform: rotateX(0deg);
    -moz-transform: rotateX(0deg);
    transform: rotateX(0deg);
  }
  .btn-12:hover span:nth-child(2) {
    background: #36c5f5;
    color: #36c5f5;
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
  }
  /* section{
    margin: 50px;
    width: 900px;
    height:900px;
  } */
  .content{
    display: flex;
    /* flex-basis: 50%; */
    background: white;
    margin-bottom: 200px;
  }

  .newbox{
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
    height: 300px;
    width: 500px;
    /* display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; */
    /* display: grid; */
    text-align:center;
    background: #f5f7fa;
    height: 100%;
    width: 100%;
  }
  .first{
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
    height: 300px;
    width: 1500px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align:center;
    background: #f5f7fa;
    margin-left: 10px;
    margin-bottom: 200px;
  }
  /*
  .content-2{
    display: flex;
      flex-basis: 50%;
  }
  .content-2{
    display: flex;
      flex-basis: 50%;
  }
  .content-2{
    display: flex;
      flex-basis: 50%;
  } */
  .sbox{
    width: 100%;
    max-width: 700px;
    margin: 0 auto;
    margin-top:100px;
  }
  .sbox-content{
    background: white;
    padding: 2em;
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
    background: #fafcff;
    color:black;
    width: 100%;
    line-height: 30px;
  }
  .sbox-content h1{
    padding: 1em;
  }
  .bigbox{
    background: white;
    padding: 2em;
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
    /* background-image: url('images/mainbg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center; */
  }
  .box ul{
    list-style: circle;
    text-align: left;
  }
  .box ul li{
    line-height: 38px;
  }
  .box p{
    text-align: left;
    line-height: 30px;
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
    margin-top: 10px;

    position: sticky;
    bottom: 100px;
    z-index: -1;
  }
  a{
    text-decoration: none;
  }
  /* .section {
    display: grid;
    grid-template-columns: 1fr;
  } */
  .dorm{
    background-image: url('images/dorm.jpg');
  background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
  }

.contactbutton{
  margin-left: 1350px;
  position: sticky;
  top:500px;
  bottom: 400px;
  /* right:100px; */
  width:100%;
  padding: 20px;
}
.contactbutton a{
  text-decoration: none;
  padding: 20px;
  width: 300px;
  color:white;
  background: blue;
  z-index: 1;
}
.contactbutton a:hover{
  color:blue;
  background: orange;;
}


  </style>

</head>
<body>
  <x-navigation />
  <main>
    <div class="rbox">
      <div class="rbox-content">
        <h1>Register Today</h1>
        <a href="/Register"><button class="custom-btn btn-12"><span>Click!</span><span>Register</span></button></a>
      </div>
    </div>
  </main>
  <!-- <section class="dorm">
    <div class="dormContent">
      <h1>Dorm Architecture</h1>
      <img src="/images/dorm.jpg"/>
    </div>
  </section> -->
<div class="bigbox" style="height: 100vh; display:flex; justify-content:center; align-items:center;">

  <div style="height: 100vh; width:50vw; display: flex; justify-content:center;align-items:center;flex-direction:row">

    <div class="box">
    <h1>WHAT WE DO</h1>
    <p>We provide skilled and competent workers through our institutional-based training programmes or</p>
    <p>through our ‘on-the-job’ training approaches such as the National Service Corps, and School-Leaver</p>
    <p>Training Opportunity Programme. We also provide employers with customized workforce solutions for their businesses.</p>

    <h1>For individuals, we provide the following services:</h1>
    <ul>
    <li>Assessment, training and certification</li>
    <li>Work experience</li>
    <li>Volunteering and mentorship opportunities</li>
    <li>Adult continuing education</li>
    <li>Career mentorship and guidance</li>
    <li>Professional development services</li>
    <li>Start-up funding for small business</li>
    </ul>
    <p>Our programme suites are carefully crafted to address the training needs of a wide spectrum of</p><p>young prospective Jamaican employees and entrepreneurs, as well as employees already incorporated within the Jamaican workforce.</p>
</div>


</div>

<div style="height: 100vh; width:50vw; display: flex; justify-content:center;align-items:center;">

  <div class="box">
    <h1>WHO WE ARE</h1>
<p>HEART exists to build and sustain a globally-competitive Jamaican labour force, responsive to the demands and complexities of the modern workplace. We are passionate about creating a Jamaican workforce, trained and certified at international standards, who can improve Jamaica’s national productivity and competitiveness.</p>
<div>
<h3>Mission</h3>
<p>To facilitate and ensure the development of human capital</p>
</div>
<h1>CORE VALUES</h1>
<p>In executing our mandate, we ascribe to the core values of:</p>
<ul>
  <li>Respect</li>
<li>Care</li>
<li>Relevance</li>
<li>Teamwork</li>
<li>Integrity</li>
<li>Quality</li>
<li>Accountability</li>
<li>Customer Focus</li>
</ul>
</div>

</div>
</div>

<section class="sbox">
  <div class="sbox-content">
    <h1>Our Story</h1>
    <p>THE HEART Trust/NTA was established in 1982 by former Prime Minister, the Most Honourable Edward Seaga. In a bid to satisfy the demand for solutions to the persistent problem of underdevelopment in the country,Seaga, during the Budget Debate on April 22, 1982, announced that one of his priorities was that of creating a skills-training and employment programme for Jamaicans.</p>
</div>
<a href="/Register"><h1 class="Register">Register Now</h1></a>
</section>
  <x-footer/>
</body>
</html>
