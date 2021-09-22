<style>
/*Footer*/
.fcontainer{
    /* max-width: 1100vw; */
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.frow{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
/*Footer*/
.footer{
    background-color: black;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
    margin-top: 100px;
    position: relative;
    bottom: 0;
}
.footer p{
    color: #8a8a8a;
}
.footer h3{
    color:#fff;
    margin-bottom: 20px;
}
.footer-col-1,.footer-col-2,.footer-col-3,.footer-col-4{
    min-width: 250px;
    margin-bottom: 20px;
}
.footer-col-1{
    flex-basis: 30%;
}
.footer-col-2{
    flex:1;
    text-align: center;
}
.footer-col-2 img{
    width: 180px;
    margin-bottom: 20px;
}
.footer-col-3,.footer-col-4{
    flex-basis: 12%;
    text-align: center;
}
ul{
    list-style: none;
}
.app-logo{
    margin-top: 20px;
}
.app-logo img{
    width: 140px;
}
.footer hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}
.copyright{
    text-align: center;
}
.menu-icon{
    width: 28px;
    margin-left: 20px;
    display: none;
}
a{
  text-decoration: none;
  color: #8a8a8a;;
}
a li:hover{
  color:blue;
}
.fcontainer img{
  width:100px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}

</style>
<!----------- footer------>
<div class="footer">
    <div class="fcontainer">
        <div class="frow">
            <div class="footer-col-1">
              <h3>Vision Statement</h3>
                <p>A globally competitive workforce impacting nation building through human capital development.</p>
            </div>
            <div class="footer-col-2">
              <h3>Mission Statement</h3>
                <p>To facilitate and ensure the development of human capital.</p>
            </div>
            <div class="footer-col-3">
                <h3>Navigation</h3>
                <ul>
                  <a href="/"<li>Home</li></a>
                  <a href="/Login"><li>Login</li></a>
                  <a href="/Register"><li>Sign Up</li></a>
                  <a href="/Mission"><li>Mission</li></a>
                  <a href="/Vision"><li> Vision</li></a>
                  <a href="/Contact"><li>Contact</li></a>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <img src="\images\HEART-NSTA-Trust-Logo.png">
        <p class="copyright">Copyright 2021 - HEART/NSTA TRUST</p>
    </div>
</div>























<!-- <div class="wrapper">
  <div class="icon facebook">
    <div class="tooltip">Facebook</div>
    <span><i class="fab fa-facebook-f"></i></span>
  </div>
  <div class="icon twitter">
    <div class="tooltip">Twitter</div>
    <span><i class="fab fa-twitter"></i></span>
  </div>
  <div class="icon instagram">
    <div class="tooltip">Instagram</div>
    <span><i class="fab fa-instagram"></i></span>
  </div>
  <div class="icon github">
    <div class="tooltip">Github</div>
    <span><i class="fab fa-github"></i></span>
  </div>
  <div class="icon youtube">
    <div class="tooltip">Youtube</div>
    <span><i class="fab fa-youtube"></i></span>
  </div>
</div>



<style>
    /* Auther: Abdelrhman Said */

@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

*:focus,
*:active {
  outline: none !important;
  -webkit-tap-highlight-color: transparent;
}

html,
body {
  display: grid;
  height: 100%;
  width: 100%;
  font-family: "Poppins", sans-serif;
  place-items: center;
  background: linear-gradient(315deg, #ffffff, #d7e1ec);
}

.wrapper {
  display: inline-flex;
}

.wrapper .icon {
  position: relative;
  background-color: #ffffff;
  border-radius: 50%;
  padding: 15px;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background-color: #ffffff;
  color: #ffffff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background-color: #ffffff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background-color: #3b5999;
  color: #ffffff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background-color: #46c1f6;
  color: #ffffff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background-color: #e1306c;
  color: #ffffff;
}

.wrapper .github:hover,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip::before {
  background-color: #333333;
  color: #ffffff;
}

.wrapper .youtube:hover,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip::before {
  background-color: #de463b;
  color: #ffffff;
} -->
