<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpFin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1; /* Pushes footer to the bottom */
        }

        .card:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Global Fonts */
body {
    font-family: 'Roboto', sans-serif;
    line-height: 1.6;
    color: #343a40;
}

/* Headings */
h1, h2 {
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

h2 {
    font-size: 2.5rem;
    font-weight: 600;
    color: #2a3b5f;
}

h3 {
    font-size: 1.5rem;
    font-weight: 300;
    color: #2a3b5f;
    text-align: center;
    padding: 20px 0;
}

/* Body Text */
p {
    font-size: 1rem;
    font-weight: 300;
    color: #343a40;
}

p1 {
    font-size: 1rem;
    font-weight: 300;
    color: #e8eff7;
}


/* Buttons */
.btn {
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 10px 20px;
    font-size: 1rem;
}

.btn-primary {
    background-color: #3d9df1;
    border-color: #2a3b5f;
    color: #fff;
}

.btn-primary:hover {
    background-color: #2a3b5f;
    border-color: #3d9df1;
}


.btn:hover {
    transform: scale(1.05);
}


        .chat-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
       }

       .chat-modal {
    display: none;
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 300px;
    border: 1px solid #ddd;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    z-index: 999;
       }

        
        .hero-section {
            background: url('https://www.freewebheaders.com/wp-content/gallery/computer/cache/business-people-working-on-computer-web-header.jpg-nggid044256-ngg0dyn-1280x375x100-00f0w010c010r110f110r010t010.jpg') no-repeat center center/cover;
            color: white;
            padding: 80px 20px;
        }

        footer {
            background-color: rgb(42, 59, 95);
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">OpFin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('loginsignup') }}">YourFin</a></li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Our Products
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                              <li><a class="dropdown-item" href="#">Payday Loans</a></li>
                              <li><a class="dropdown-item" href="#">Payroll Outsourcing</a></li>
                              <li><a class="dropdown-item" href="#">HR Management</a></li>
                              <li><a class="dropdown-item" href="#">Sign Up Your Company</a></li>
                          </ul>
                      </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section text-center text-light py-5">
            <div class="container">
                <h1 class="display-4">Welcome to OpFin</h1>
                <p1 class="lead">Your Finance, Simplified</p1>
                <br>
                <a href="#features" class="btn btn-primary btn-lg mt-3">Learn More</a>
                <a href="#contact-us" class="btn btn-outline-light btn-lg mt-3 ms-3">Contact Us</a>
            </div>
        </section>

        <!-- Page Content -->
        <section class="container py-5">
          <h3>Manage teams, track progress, and stay connected—all from one platform. With OpFin, the world is Optimised for your Finance.</h3>  
            <hr>
            <h2>About OpFin</h2>
            <p> Built to streamline team management, track performance, and provide seamless connectivity, OpFin serves as the ultimate solution for businesses looking to enhance both their HR and financial functions—all in one platform.
              At OpFin, we understand that in today’s fast-paced business world, efficiency and accuracy are paramount. That’s why we’ve created an all-in-one solution that empowers you to manage teams, oversee payroll, and track progress with ease, while also offering critical financial services like payday loans and payroll outsourcing.</p>
        
          </section>
    </div>

    <section id="features" class="py-5">
      <div class="container text-center">
          <h2 class="mb-4">Why Choose OpFin?</h2>
          <div class="row">
              <div class="col-md-4">
                  <i class="fa fa-line-chart fa-3x mb-3" style="color: rgb(61,157,241);"></i>
                  <h5>Analytics and Reporting</h5>
                  <p>OpFin takes advantage of advanced analytics and reporting tools to give users valuable insights into their operations. Whether you’re analyzing team productivity, financial outcomes, or employee satisfaction, OpFin makes it simple to generate reports and use data-driven insights to optimize performance across departments.</p>
              </div>
              <div class="col-md-4">
                  <i class="fa fa-users fa-3x mb-3" style="color: rgb(61,157,241);"></i>
                  <h5>Manage Teams</h5>
                  <p>OpFin allows managers to effortlessly create, organize, and assign tasks to teams. Whether you're leading a small startup or a large corporation, you can assign roles, track individual performance, and ensure everyone is aligned with company goals. The platform’s intuitive interface makes it easy for both employees and managers to stay on top of their responsibilities.</p>
              </div>
              <div class="col-md-4">
                  <i class="fa fa-cogs fa-3x mb-3" style="color: rgb(61,157,241);"></i>
                  <h5>Secure and Scalable</h5>
                  <p>With top-tier security features and a highly scalable system, OpFin is designed to grow with your business. The platform ensures that sensitive employee and financial data is protected, with robust encryption and secure data storage practices. As your company expands, OpFin adapts to your changing needs without compromising performance.</p>
              </div>
          </div>
      </div>
  </section>
  
  <section id="statistics" class="py-5 bg-light">
    <div class="container text-center animate__animated animate__fadeInDown">
        <h2 class="mb-4">OpFin by the Numbers</h2>
        <div class="row">
            <div class="col-md-4">
                <h1 class="text-primary">5,000+</h1>
                <p>Users Served</p>
            </div>
            <div class="col-md-4">
                <h1 class="text-primary">$10M+</h1>
                <p>Loans Processed</p>
            </div>
            <div class="col-md-4">
                <h1 class="text-primary">300+</h1>
                <p>Teams Onboarded</p>
            </div>
        </div>
    </div>
</section>

<section id="meet-the-team" class="py-5 animate__animated animate__fadeInUp">
  <div class="container text-center">
      <h2 class="mb-4">Client Reviews</h2>
      <div class="row justify-content-center">
          <!-- Team Member 1 -->
          <div class="col-md-4 mb-4">
              <div class="card border-0 shadow-lg">
                  <img src="https://i.pinimg.com/736x/60/58/64/605864b0c5f7569a8edaf3942b18f339.jpg" class="card-img-top rounded-circle mt-3 mx-auto" style="width: 150px; height: 150px;" alt="Team Member">
                  <div class="card-body">
                      <h5 class="card-title">Nana Okofwo</h5>
                      <p class="card-text">CEO & Founder - InSynk inc.</p>
                      <p class="text-muted">"Passionate about creating financial solutions for businesses worldwide."</p>
                  </div>
              </div>
          </div>
          <!-- Team Member 2 -->
          <div class="col-md-4 mb-4">
              <div class="card border-0 shadow-lg">
                  <img src="https://i.pinimg.com/736x/81/74/b0/8174b079530db919cc9b9bc44f267a01.jpg" class="card-img-top rounded-circle mt-3 mx-auto" style="width: 150px; height: 150px;" alt="Team Member">
                  <div class="card-body">
                      <h5 class="card-title">Josephine Agwang</h5>
                      <p class="card-text">Head of Product development - Syren.co</p>
                      <p class="text-muted">"Building intuitive tools to simplify financial management."</p>
                  </div>
              </div>
          </div>
          <!-- Team Member 3 -->
          <div class="col-md-4 mb-4">
              <div class="card border-0 shadow-lg">
                  <img src="https://i.pinimg.com/736x/12/10/c6/1210c62959cbeeace3cd52b78d4977d0.jpg" class="card-img-top rounded-circle mt-3 mx-auto" style="width: 150px; height: 150px;" alt="Team Member">
                  <div class="card-body">
                      <h5 class="card-title">Agatha Reba Stella</h5>
                      <p class="card-text">Lead Developer - GoodEats.Org</p>
                      <p class="text-muted">"Ensuring seamless performance for our users with cutting-edge tech."</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>



<section id="how-it-works" class="py-5 bg-light">
  <div class="container text-center">
      <h2 class="mb-4">How It Works</h2>
      <div class="row">
          <div class="col-md-4">
              <i class="fa fa-user-plus fa-3x text-primary mb-3"></i>
              <h5>1. Sign Up</h5>
              <p>Create an account to get started with OpFin's all-in-one solution.</p>
          </div>
          <div class="col-md-4">
              <i class="fa fa-tasks fa-3x text-primary mb-3"></i>
              <h5>2. Manage</h5>
              <p>Access HR, payroll, and financial tools all in one place.</p>
          </div>
          <div class="col-md-4">
              <i class="fa fa-check-circle fa-3x text-primary mb-3"></i>
              <h5>3. Succeed</h5>
              <p>Optimize operations and ensure your team thrives with OpFin's solutions.</p>
          </div>
      </div>
  </div>
</section>

<section id="faq" class="py-5">
  <div class="container">
      <h2 class="mb-4 text-center">Frequently Asked Questions</h2>
      <input type="text" class="form-control mb-4" id="faq-search" placeholder="Search FAQs">
      <div id="faq-list">
          <div class="faq-item">
              <h5>What is OpFin?</h5>
              <p>OpFin is an all-in-one platform for payroll, HR management, and payday loans.</p>
          </div>
          <div class="faq-item">
              <h5>How do payday loans work?</h5>
              <p>Employees can request quick loans directly through our secure platform.</p>
          </div>
      </div>
  </div>
</section>



    <!-- Footer -->
    <footer id="contact-us">
        <p1>© 2025 OpFin. All Rights Reserved.</p1>
        <br>
        <p1>Contact Us at: Opfinmail.fin@gmail.com</p1>
        <div>
            <a href="#" class="text-light me-3"><i class="fa fa-facebook"></i></a>
            <a href="#" class="text-light me-3"><i class="fa fa-twitter"></i></a>
            <a href="#" class="text-light"><i class="fa fa-linkedin"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chat Button -->
<div class="chat-button" style="position: fixed; bottom: 20px; right: 20px;">
  <button class="btn btn-primary rounded-circle" onclick="toggleChat()" style="width: 60px; height: 60px; display: flex; justify-content: center; align-items: center;">
      <i class="fa fa-comments fa-2x"></i>
  </button>
</div>

<!-- Chat Modal -->
<div id="chatModal" class="chat-modal" style="display: none; position: fixed; bottom: 90px; right: 20px; width: 300px; border: 1px solid #ddd; background: #fff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 999;">
  <div class="chat-header" style="padding: 10px; background: rgb(61,157,241); color: white; border-radius: 10px 10px 0 0;">
      <h5 class="m-0">Live Chat</h5>
      <button class="btn-close btn-close-white" onclick="toggleChat()" style="float: right;"></button>
  </div>
  <div class="chat-body" style="padding: 10px; max-height: 300px; overflow-y: auto;">
      <p class="text-muted">How can we help you today?</p>
  </div>
  <div class="chat-footer" style="padding: 10px;">
      <form id="chatForm">
          <input type="text" class="form-control" placeholder="Type a message..." id="chatInput">
          <button type="submit" class="btn btn-primary mt-2 w-100">Send</button>
      </form>
  </div>
</div>

<script>
  function toggleChat() {
      const chatModal = document.getElementById('chatModal');
      chatModal.style.display = chatModal.style.display === 'none' || chatModal.style.display === '' ? 'block' : 'none';
  }

  document.getElementById('chatForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const chatInput = document.getElementById('chatInput');
      const message = chatInput.value.trim();
      if (message) {
          const chatBody = document.querySelector('.chat-body');
          const newMessage = document.createElement('p');
          newMessage.textContent = message;
          chatBody.appendChild(newMessage);
          chatInput.value = '';
      }
  });
</script>

<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
      });
  });
</script>

<script>
  const searchInput = document.getElementById('faq-search');
  const faqItems = document.querySelectorAll('.faq-item');

  searchInput.addEventListener('input', function () {
      const query = this.value.toLowerCase();
      faqItems.forEach(item => {
          const text = item.innerText.toLowerCase();
          item.style.display = text.includes(query) ? 'block' : 'none';
      });
  });
</script>


</body>
</html>
