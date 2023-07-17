

<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");
*
{
  padding:0;
  margin:0;
  box-sizing:border-box;
}
.curved-header
{
  width:100%;
  height:80vh;
  display:flex;
  justify-content:space-between;
  align-items:baseline;
  font-family: Montserrat, sans-serif;
  position:relative;
}
.curved-header::before
{
  content:"";
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("https://res.cloudinary.com/dliyqijim/image/upload/v1666775654/pexels-fauxels-3183197_tphzpp.jpg");
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  border-radius: 0 0 50% 50%/ 0 0 100% 100%;
  transform:scale(1.5);
  z-index:-1;
}
.curved-header .logo
{
  margin:50px;
}
.curved-header .logo a 
{
  text-decoration:none;
  color:#fff;
  font-size:30px;
}
.curved-header .nav-links
{
  margin:50px;
  list-style-type:none;
  display:flex;
  justify-content:flex-end;
  width:40%;
}
.curved-header .nav-links li 
{
  margin: 0 15px;
}
.curved-header .nav-links li a
{
  text-decoration:none;
  color:#fff;
  font-size:20px;
  position:relative;
}
.nav-links li a:after
{
  content:"";
  position:absolute;
  bottom:-5px;
  left:0;
  right:0;
  width:100%;
  height:2px;
  background-color:#fff;
  transform: scaleX(0);
  transition: transform 0.3s;
}
.nav-links li a:hover:after
{
  transform:scaleX(1);
}
.toggle-button 
{
  position:absolute;
  top:0.55rem;
  right:2rem;
  display:none;
  flex-direction:column;
  justify-content:space-between;
  width:20px;
  height:16px;
  text-decoration:none;
}
.toggle-button i 
{
  color:white;
  font-size:35px;
}
/*
@media (max-width:850px)
{
  
  .toggle-button
  {
    display:block;
  }
  .nav-links
  {
    /*display:none;
  }
  
}*/
</style>
<header class="curved-header">
<div class="logo">
  <a href="">Logo</a>
</div>
  <a href="#" class="toggle-button">
  <i class="ri-layout-grid-fill"></i>
</a>
<ul class="nav-links">
  <li><a href="">Home</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">Services</a></li>
  <li><a href="">About Us</a></li>
  <li><a href="login.php">Login</a></li>
</ul>

</header>



