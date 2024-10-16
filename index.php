<?php
// Slides section
$slides_section = '
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/slide1.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
        <img src="images/slide2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
</div>';

// Hospital treatment section
$hospital_treatment_section = '
<section id="treatment">
    <h2>Hospital Treatment</h2>
    <p>Details about treatment services...</p>
</section>';

// Our doctors section
$our_doctors_section = '
<section id="doctors">
    <h2>Our Doctors</h2>
    <div class="doctor-list">
        <div>Doctor 1</div>
        <div>Doctor 2</div>
        <div>Doctor 3</div>
    </div>
</section>';

// Testimonials section
$testimonials_section = '
<section id="testimonial">
    <h2>Testimonials</h2>
    <div class="testimonials">
        <div>Customer testimonial 1</div>
        <div>Customer testimonial 2</div>
    </div>
</section>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Website</title>
    <link rel="stylesheet" href="styles.css"> <!-- თქვენი CSS ფაილი -->
</head>
<body>

<header>
    <h1>Hospital Name</h1>
    <nav>
        <ul>
            <li><a href="#treatment">Treatment</a></li>
            <li><a href="#doctors">Our Doctors</a></li>
            <li><a href="#testimonial">Testimonials</a></li>
        </ul>
    </nav>
</header>

<?php
echo $slides_section; // სლაიდების სექციის გამოტანა
echo $hospital_treatment_section; // ჰოსპიტალური სექციის გამოტანა
echo $our_doctors_section; // ექიმების სექციის გამოტანა
echo $testimonials_section; // მომხმარებელთა კომენტარების გამოტანა
?>

<section id="appointment">
    <h2>Book an Appointment</h2>
    <form action="book_appointment.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="date" name="date" required>
        <button type="submit">Book Appointment</button>
    </form>
</section>

<section id="contact">
    <h2>Get in Touch</h2>
    <form action="submit_contact.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Submit</button>
    </form>
</section>

</body>
</html>

