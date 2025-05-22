<?php include 'header.php'; ?>


<!-- about us -->
 <br>
 <h1 class="h1 text-center"> <strong>About Us</strong></h1>
 <br><br>
<section class="container-fluid" >

<div class="row align-items-center mb-5 project-box">
    <div class="col-lg-6 mb-4 mb-lg-0">
      <img src="images/c3.jpg" class="img-fluid rounded shadow " alt="Skyline Heights">
    </div>
    <div class="col-lg-6">
      <h2 class="fw-bold">RD Builders and Developers </h2>
      <hr>
      <p class="project-description">
        At RD Builders and Developer, we build more than structures—we build trust. With years of experience in residential, commercial, and industrial construction, our team is dedicated to delivering high-quality, cost-effective projects on time and within budget. From planning to completion, we prioritize safety, innovation, and client satisfaction in everything we do. Whether it's a small renovation or a large-scale development, we bring craftsmanship and commitment to every project.</p>
      
    </div>
  </div>
</section>

    <!-- Vission -->
    <section class="py-5 fade-in">
      <div class="container text-center">
          <h3 class="fw-bold"> Our VISION</h3>
          <p>
            To be most admired and trusted construction  with professional
            services provider.</p>
      </div>
  </section>
    <!-- Mission Section -->
    <section class="py-5 fade-in">
        <div class="container text-center">
            <h3 class="fw-bold">Our Mission</h3>
            <p>Working together with result oriented and team spirit and to
              provide innovative customized solutions. To built the best
              future.</p>
        </div>
    </section>

    <!-- Project Gallery -->
    <section class="py-5 bg-light text-center fade-in">
      <div class="container">
          <h3 class="fw-bold">We Provide</h3>
          <div class="row">
              <div class="col-md-4">
                  <img src="images/1.jpeg" class="project-img img-fluid rounded" alt="Project 1">
              </div>
              <div class="col-md-4">
                  <img src="images/3.jpeg" class="project-img img-fluid rounded" alt="Project 2">
              </div>
              <div class="col-md-4">
                  <img src="images/2.jpeg" class="project-img img-fluid rounded" alt="Project 3">
              </div>
          </div>
      </div>
  </section>
  
    <!-- Contact Section -->
    <section class="py-5 bg-light text-center fade-in">
        <div class="container">
            <h3 class="fw-bold">Contact Us</h3>
            <p>📍 <strong>Office:</strong> RD Builders and Developers <br> Opposite of Police Station, Madahalli Road, Gundlupete <br> Chamaraja Nagara</p>
            <p>📧 <strong>Email:</strong> rdbuildersanddeveloper23@gmail.com</p>
            <p>📞 <strong>Phone:</strong>  +91 9482731510 | 78924 05504</p>
            
        </div>
    </section>

    <!-- Footer -->

<?php include 'footer.php'; ?>
   
      
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scroll Animation -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll(".fade-in");
            function revealOnScroll() {
                sections.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 50) {
                        section.classList.add("visible");
                    }
                });
            }
            window.addEventListener("scroll", revealOnScroll);
            revealOnScroll();
        });
    </script>
</body>
</html>
