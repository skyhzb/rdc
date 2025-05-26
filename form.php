
<!-- contact us start -->
<?php


// Function to sanitize form input
function sanitize_input($data)
{
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
    $address = sanitize_input($_POST['address']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['details']);

    // Email headers
    $headers = array(
        'From' => $email,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    // Construct the email body
    $body = "Name: " . $name . "\r\n";
    $body = "Address: " . $address . "\r\n";
    $body = "Phone: " . $phone . "\r\n";
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

            <!-- Form Section -->
            <h2><b>Get In Touch with Us</b></h2>
            <div class="form-container" style="margin-top: 40px;">
                <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>

                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required>

                    <label for="phone">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>

                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required />

                    <label for="subject">Subject:</label>
                    <select class="form-control" id="subject" name="subject" required>
                        <option value="" disabled selected>Select a subject</option>
                        <option value="Construction">Construction</option>
                        <option value="Real-Estate">Real-Estate</option>
                    </select>

                    <label for="details">Details:</label>
                    <textarea id="details" class="form-control" name="details" rows="4" required></textarea>

                    <button type="submit" name="submit" onclick="redirectToWhatsApp()">Submit</button>
                </form>
            </div>
        </div>
    </div>

<!-- JavaScript Code -->
<script>
    function redirectToWhatsApp() {
        let name = document.getElementById('name').value;
        let address = document.getElementById('address').value;
        let phone = document.getElementById('phone').value;
        let email = document.getElementById('email').value;
        let subject = document.getElementById('subject').value;
        let details = document.getElementById('details').value;

        if (!name || !address || !phone || !subject || !details || !email) {
            alert('Please fill out all fields before submitting.');
            return;
        }

        let message = `Hello, my name is ${name}.\nAddress: ${address}\nPhone: ${phone}\nEmail: ${email}\nSubject: ${subject}\nDetails: ${details}`;
        let encodedMessage = encodeURIComponent(message);
        let whatsappURL = `https://wa.me/919482731510?text=${encodedMessage}`;

        window.open(whatsappURL, '_blank');
    }
</script>