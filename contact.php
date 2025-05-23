<?php include 'header.php'; ?>

<!-- Contact Section -->
<section id="contact">
    <div class="contact wow fadeInUp">
        <div class="container">
            <div class="section-header text-center">
                <p>Stay Connected</p>
                <h2>We’re here to help. Reach out anytime.</h2>
            </div>
            <div class="d-flex flex-wrap contact-addr">
                <!-- Address Section -->
                <div class="p-4 " style="flex: 1;background:#c2e59c;  background: -webkit-linear-gradient(to right, #64b3f4, #c2e59c); 
                background: linear-gradient(to right, #64b3f4, #c2e59c);">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                               RD Builders and Developers <br> Opposite of Police Station, Madahalli Road, Gundlupet <br> Chamaraja Nagara
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p>+91 9482731510 | 78924 05504</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>rdbuildersanddeveloper23@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Map Section -->
                <div class="map" style="flex: 1;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d499418.1224639!2d76.32636951383662!3d12.063869960893678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDQ4JzQxLjIiTiA3NsKwNDEnMDUuMCJF!5e0!3m2!1sen!2sin!4v1744712395875!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div> <br>
            
            <!-- Form Section -->
            <h2><b>Get In Touch with Us</b></h2>
            <div class="form-container" style="margin-top: 40px;">
                <form id="contactForm">
                    <label for="name">Name:</label>
                    <input type="text" class= "form-control" id="name" name="name" required>

                    <label for="address">Address:</label>
                    <input type="text" class= "form-control" id="address" name="address" required>

                    <label for="phone">Phone Number:</label>
                    <input type="tel" class= "form-control" id="phone" name="phone" required>

                    <label for="subject">Subject:</label>
                    <select class="form-control" id="subject" name="subject" required="">
                            <option value="" disabled="" selected="">Select a subject</option>
                            <option value="Sales">Sales</option>
                            <option value="Services">Services</option>
                        </select>
j
                    
                    <label for="details">Details:</label>
                    <textarea id="details" class= "form-control" name="details" rows="4" required></textarea>

                    <button type="button" onclick="redirectToWhatsApp()">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>



      
    <!-- Footer -->
    <?php include 'footer.php'; ?>
<!-- JavaScript Code -->
<script>
    function redirectToWhatsApp() {
        let name = document.getElementById('name').value;
        let address = document.getElementById('address').value;
        let phone = document.getElementById('phone').value;
        let subject = document.getElementById('subject').value;
        let details = document.getElementById('details').value;

        if (!name || !address || !phone || !subject || !details) {
            alert('Please fill out all fields before submitting.');
            return;
        }

        let message = `Hello, my name is ${name}.\nAddress: ${address}\nPhone: ${phone}\nSubject: ${subject}\nDetails: ${details}`;
        let encodedMessage = encodeURIComponent(message);
        let whatsappURL = `https://wa.me/9482731510?text=${encodedMessage}`;

        window.open(whatsappURL, '_blank');
    }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>