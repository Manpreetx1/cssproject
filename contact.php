<?php include 'header.php'; ?>

<main>
    <section class="contact">
        <h2>Contact Us</h2>
        <p>Have a question or feedback? We'd love to hear from you! Get in touch with us using the form below or reach out to us via phone or email.</p>
        
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
        
        <div class="contact-info">
            <h3>Our Location</h3>
            <p>123 Main Street<br>City, State ZIP<br>Country</p>
            
            <h3>Contact Information</h3>
            <p>Phone: (123) 456-7890<br>Email: info@example.com</p>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
