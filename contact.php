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
                               RD Builders and Developer <br> Opposite of Police Station, Madahalli Road, Gundlupet <br> Chamaraja Nagara
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p>+91-9482731510 | +91-7892405504</p>
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




<!-- contact us start -->
<?php


// Function to sanitize form input
function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        // Set recipient email based on subject
    if (isset($_POST['subject']) && $_POST['subject'] === 'Construction') {
        $to = 'engineer@rdbuildersanddeveloper.com';
    } elseif (isset($_POST['subject']) && $_POST['subject'] === 'Real-Estate') {
        $to = 'realestate@rdbuildersanddeveloper.com';
    } else {
        $to = 'rdbuildersanddeveloper23@gmail.com';
    }
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);

    // Email headers
    $headers = array(
        'From' => $email,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    // Construct the email body
    $body = "Name: " . $name . "\r\n";
    $body .= "Email: " . $email . "\r\n";
    $body .= "Subject: " . $subject . "\r\n\n";
    $body .= "Message:\r\n" . $message;

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo '<div class="alert alert-success">Thank you for your message. We will get back to you soon!</div>';
    } else {
        echo '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again.</div>';
    }
}
?>


<!-- Contact Section -->
<section class="section__container" id="contact">
    <div class="container py-5">
        <h1 class="text-center mb-4">Get In Touch</h1>
        <p class="text-center mb-5">We’d love to hear from you. Fill out the form below and our team will get back
            to you shortly.</p>

        <div class="row g-5">
            <div class="col-md-6">
                <h4>Contact Information</h4>
                <p><strong>Address:</strong> RD Builders and Developer <br> Opposite of Police Station, Madahalli Road, Gundlupet <br> Chamaraja Nagara</p>
                <p><strong>Phone:</strong> +91 9482731510 | +91 7892405504</p>
                <p><strong>Email:</strong> <a href="mailto:engineer@rdbuildersanddeveloper.com">engineer@rdbuildersanddeveloper.com</a> | <a href="mailto:realestate@rdbuildersanddeveloper.com">realestate@rdbuildersanddeveloper.com</a>  </p>
                <iframe class="w-100 rounded" height="250" style="border:0" loading="lazy"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.6282574892654!2d77.56238297084766!3d12.905144000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU0JzE4LjUiTiA3N8KwMzMnNDUuMyJF!5e0!3m2!1sen!2sin!4v1682431234567!5m2!1sen!2sin"
                    allowfullscreen="" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="col-md-6">
                <h4>Contact Form</h4>
                <form name="myForm" id="contact-form2" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Your Subject</label>
                        <select class="form-control" id="subject" name="subject" required>
                            <option value="" disabled selected>Select a subject</option>
                            <option value="Construction">Construction</option>
                            <option value="Real-Estate">Real-Estate</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
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
        let whatsappURL = `https://wa.me/919482731510?text=${encodedMessage}`;

        window.open(whatsappURL, '_blank');
    }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
