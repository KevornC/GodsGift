<html>
<head>
  <link rel="icon" href="images\tab.png"/>
  <title>Heart Dormitory</title>
<style>
*{
  margin:0;
  padding: 0;
  font-style: san-serif;
  box-sizing: border-box;
}
body{
  background: #fcfeff;
}
nav{
  background: #36c5f5;
  height: 54px;
  /* opacity: 0.7; */
}
nav ul{
    display: flex;
    list-style: none;
    /* justify-content: space-between; */
}
nav ul a{
  text-decoration: none;
  padding: 15px;
  color:white;
  opacity: 0.9;
  position: relative;
  margin-left:10px;
}
.Active{
  background:blue;
  color:white;
}
/* nav ul a:nth-last-of-type(3){
  margin-left: auto;
} */
nav ul a:nth-last-of-type(6){
  margin-left: auto;

}
nav ul a:hover{
  background:blue;
  color:orange;
  /* transition: 250ms; */
}
nav ul a li:hover{
  background:blue;
  color:orange;
  /* transition: 250ms; */
}
nav ul img{
  margin-left: 7px;
  width:50px;
}
/* nav ul a:focus{
  background:orange;
  color:blue;
  transition: 250ms;

} */
nav ul a li img{
  width:28px;
  height:20px;
}
</style>
</head>
<body>
<header>
<nav>
  <ul>
    <img src="\images\HEART-NSTA-Trust-Logo.png">
    <a href="/" class="Active"><li><img src="\images\icons8-home-24.png"/> Home</li></a>
    <a href="/Login"><li><img src="\images\icons8-login-24.png"/> Login</li></a>
    <a href="/Register"><li><img src="\images\icons8-sign-up-24.png"/> Sign Up</li></a>
    <a href="/Mission"><li><img src="\images\icons8-mission-50.png"/> Mission</li></a>
    <a href="/Vision"><li><img src="\images\icons8-vision-48.png"/> Vision</li></a>
    <a href="/Contact"><li><img src="\images\icons8-mail-contact-80.png"/> Contact</li></a>
  </ul>
</nav>
</header>
</body>
</html>
