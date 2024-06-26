<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/logotest.css">

    <title>Peer Academic Advisors</title>
    
</head>
<body>

<section id="section1">
    <header>
        <div class="logo">
          <span class="main-text">CCAPS |</span>
          <span class="sub-text"> Peer Academic Advisors</span>
        </div>
      </header>
   
    <div id="navbar">
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Meet the Team <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="twentyseven.php">2027 Academic Advisors</a>
                        <a href="twentysix.php">2026 Academic Advisors</a>
                        <a href="twentyfive.php">2025 Academic Advisors</a>
                    </div>
                </li>
                <li><a href="#Peer Tutors">Peer Tutors</a></li>
                <li><a href="tips.php">Tips</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
        
    </div>

    <div id="buttom-text">
        Striving for Academic Success
    </div>

    <img src="./design_images/graduation_pic.jpg" alt="Background Image">
</section>

<section id="section2">
    <div id="section2-content">
        <h2>Academic Advising</h2>
        <p>
            Academic Advising provides comprehensive academic guidance across all the years of your undergraduate
            career.
            From the summer before you begin your Stanford journey through graduation, Academic Advising is here for
            you.
        </p>
        <p>
            Academic Advising helps you launch your educational journey beginning with Approaching Stanford,
            New Student Orientation and Frosh 101. Academic Advisors will also be there throughout your Stanford
            education—to help with course selection, choice of major, pre-professional pathways, research
            opportunities, and more.
            <p>
                <button id="makeAppointmentBtn">Make an Appointment</button>

            </p>

        </p>
    </div>
</section>

<section id="section3">
    <div class="container">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to reach out to us:</p>
        <form action="#">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<footer>
    <p>&copy; 2024 Peer Academic Advisors. All rights reserved.</p>
</footer>

</body>
</html>
