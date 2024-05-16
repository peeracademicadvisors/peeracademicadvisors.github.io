<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <title>Three Sections Page</title>
    <style>

body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
}

/* header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
} */

.container {
    width: 80%;
    margin: auto;
    padding: 20px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    margin-top: 50px;
    margin-left: 150px;
    padding: 0;

}

nav ul li {
    display: inline;
    margin-right: 50px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: larger;
    font-weight: 500;
}

section {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

section h2 {
    text-align: center;
    color: black
}

section p {
    text-align: center;
    color: black
}

#section1 {
    /* background-color: #3498db; */
    position: relative;
}

#section1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}


#navbar {
    position: absolute;
    top: 100px;
    left: 100px;
    z-index: 1;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

#section2 {
    background-color: #ffffff;
}

#section2-content p {
        font-family: "Poppins", sans-serif; /* Change this to your desired font */
        font-size: 20px; /* Change this to your desired font size */
        /* You can add more font properties as needed */
    }

#section2-content {
            max-width: 600px;
            /* margin: 0 auto; */
        }

        #makeAppointmentBtn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: maroon;
            color: white;
            border: none;
            font-family: "Poppins", sans-serif; 
            cursor: pointer;
            margin-top: 20px;
            margin-left: 190px;
            /* margin: 0 auto; */
        }

#section3 {
    background-color: maroon;
}

#section3 p {
        font-family: "Poppins", sans-serif; /* Change this to your desired font */
        font-size: 15px; /* Change this to your desired font size */
        color: white;
    }
#section3 h2{
        font-family: "Poppins", sans-serif; /* Change this to your desired font */
        font-size: 28px; /* Change this to your desired font size */
        color: white;
    }

        form {
    margin-top: 20px;
}

form label {
    display: block;
    margin-bottom: 5px;
}

form input,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}

form button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #555;
}


/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}


    </style>
</head>
<body>


    <section id="section1">
        <div id = "peerlogo">
        <img src = "./design_images/google-logo-transparent.png" alt="Logo" width="600" height="400">
    </div>

        <div id = "navbar">
            <nav>
                <ul>
                    <li><a href="#section2">About</a></li>

                    <li><a href="/twentyseven.html">Meet the Team</a></li>

                    <li><a href="#Peer Tutors">Peer Tutors</a></li>

                    <li><a href="#Tips">Tips from the Team</a></li>
                    
                    <li><a href="#section3">Contact Us</a></li>
                </ul>
            </nav>
        </div>


        <img src="./design_images/graduation_pic.jpg" alt="Background Image">
    </section>


    <section id="section2">
        <div id="section2-content">
            <h2>Academic Advising</h2>
            <p>
                Academic Advising provides comprehensive academic guidance across all the years of your undergraduate career. 
                From the summer before you begin your Stanford journey through graduation, Academic Advising is here for you.
            </p>
            <p>
                Academic Advising helps you launch your educational journey beginning with Approaching Stanford,
                 New Student Orientation and Frosh 101. Academic Advisors will also be there throughout your Stanford 
                 education—to help with course selection, choice of major, pre-professional pathways, research opportunities, and more.
            </p>
            <button id="makeAppointmentBtn">Make an Appointment</button>
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