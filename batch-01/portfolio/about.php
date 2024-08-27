<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Document</title>
    <style>
        body {
  dispaly:block;
  overflow-x: hidden;
}

nav {
  background-color: white;
}

.navbar-brand img {
  max-heigth:50px;
}

.navbar-brand {
  font-size:24px;
  text-transform:uppercase;
  font-weight: 900;
  color: #683aa4;
}

nav > ul > li > a {
  text-color: #a9a9a9;
  font-size:22px;
  margin: auto 10px;
}

nav > ul > li > a:hover{
   color: #683aa4;
}

section {
  padding-top: 100px;
  padding-bottom:10px;
}

section h1 {
  text-transform:uppercase;
  font-weight: 900;
  color: #683aa4;
  text-align: left;
  margin-bottom: 20px;
  margin-top:50px;
}

section p {
  font-size: 16px;
  font-weight: 30px;
}

button {
  max-width: 50%;
  border-radius: 50px !important;
}

#hero {
  justify-content: center;
  flex-direction: column;
  dispaly: flex;
}

#hero .img-col{
  justify-content: flex-end;
  margin-top:10px;
}

#hero img {
  max-width: 110% !important;
  width:110%;
}

#hero .cards {
  box-shadow: 11px 7px 16px #f9f9f9;
  border:0;
  text-aling: center;
  margin:0 10px 0 10px;
}

#hero .icon {
 width:190px;
 heigth:190px;
 padding-left: 50px;
  padding-top:15px;
}

#projects .projects {
  margin-bottom:50px;
}

#contact {
  text-align:center;
  background-color: #683aa4;
  color:white;
}

#contact h1 {
  color: white;
  text-align: center;
}
    </style>
</head>
<body>
    <!-- Navbar-->
<nav class="py-3 navbar navbar-expand-lg fixed-top auto-hiding-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://www.1solo.com/wp-content/uploads/2019/03/iconcina-collezionista-premium.png" alt="Logo" width=50px>
      SoftwareHouse
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- end nav bar-->

<!-- Hero Section-->
<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Software<br/>Development</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        <button type="button" class="btn btn-dark btn-lg">Learn More</button>
      </div>
      
      <div class="col img-col">
        <img src="https://image.freepik.com/free-vector/developer-laptop-computer-with-open-robotic-soft-open-automation-architecture-open-source-robotics-soft-free-development-concept-bright-vibrant-violet-isolated-illustration_335657-474.jpg" alt="software development" class="img-fluid"/>
      </div> 
    </div>
    
    <div class="row cards">
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Web Developer</h5>
            <img        src="https://image.flaticon.com/icons/png/512/1251/1251737.png" alt="Service1" class="icon"/>
          <p class="card-text">Some quick example text to build on the card             title and make up the bulk of the card's content.</p>
          </div>
      </div>
    </div>  
      <div class="col-md-4 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Machine Learning</h5>
            <img        src="https://image.flaticon.com/icons/png/512/1118/1118896.png"           alt="Service2" class="icon">
          <p class="card-text">Some quick example text to build on the card             title and make up the bulk of the card's content.</p>
          </div>
      </div>
      </div>
      
    <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Web Security</h5>
            <img        src="https://image.flaticon.com/icons/png/512/970/970899.png"           alt="Service2" class="icon"/>
          <p class="card-text">Some quick example text to build on the card             title and make up the bulk of the card's content.</p>
          </div>
      </div>
  </div>  
  </div>
</section>
<!--End Hero Section-->
 
<!-- About Us Section-->
  <section id="about-us">
    <div class="container">
      <div class="row aling-items-center">
        <div class="col">
          <img src="https://image.freepik.com/free-vector/business-team-brainstorm-idea-lightbulb-from-jigsaw-working-team-collaboration-enterprise-cooperation-colleagues-mutual-assistance-concept-pinkish-coral-bluevector-isolated-illustration_335657-1651.jpg" alt="" class="img-fluid"/>
        </div>
        <div class="col">
          <h1>About Us</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <button type="button" class="btn btn-dark btn-lg">Meet Us</button>
        </div>
      </row>
    </div>
  </section>
<!-- End About Us Section--> 
  
<!-- Project Section-->
  <section id="projects">
   <div class="container">
    <div class="row aling-items-center projects">
      <div class="col">
        <h1>Our Projects</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>
    
    <div class="row aling-items-center projects">
      <div class="col">
        <div class="card mb-3">
  <img src="https://image.freepik.com/free-vector/financial-business-investment-illustration-mobile-onboard-screen-user-interface-concept_106954-1240.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Investment app</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">React Native, Java. REST API</small></p>
  </div>
</div>
      </div>
      <div class="col">
         <div class="card mb-3">
  <img src="https://image.freepik.com/free-vector/mobile-ui-kit-with-unlock-system-security-page-vector-illustration-set_106954-1185.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">My Docs</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Kotlin, REST API</small></p>
  </div>
</div>
      </div> 
    </div>
    <div class="row aling-items-center">
      <div class="col">
         <div class="card mb-3">
  <img src="https://image.freepik.com/free-vector/onboard-mobile-screen-with-traveling-app-illustration-concept_106954-1267.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Socialize</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Kotlin, REST API</small></p>
  </div>
</div>
      </div>
      <div class="col">
         <div class="card mb-3">
  <img src="https://image.freepik.com/free-vector/mobile-onboard-screen-user-interface-with-tax-report-illustration-concept_106954-1249.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Give Me a Ride</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Google Api. Javascript ecc..</small></p>
  </div>
</div>
      </div> 
    </div>
   </div>
  </section>
<!-- End Project Section-->
  
<!-- Contact Us Section-->
  <section id="contact">
    <div class="container">
    <div class="row aling-items-center projects">
      <div class="col">
        <h1>Contact Us</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>
  </section>
 <!-- End Contact Us Section-->
</body>
</html>