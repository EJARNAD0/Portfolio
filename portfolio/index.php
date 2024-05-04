<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Personal Portfolio Website Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="header">
        <a href="#home"></a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">

        <div class="image" data-aos="fade-right">
            <img src="images/ejarnado.jpeg" alt="">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">hi, I am EJ ARNADO</h3>
            <span data-aos="fade-up">ASPIRING BACKEND DEVELOPER</span>
            <p data-aos="fade-up">I am a hard worker who finds joy in simple things. I believe in putting my best effort into everything I do, whether it's work or play. Outside of my professional life, I have a passion for sports and enjoy playing them in my free time.</p>
            <a data-aos="fade-up" href="#about" class="btn">About Me</a>
        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"> <span>Biography</span> </h1>

        <div class="biography">

            <p data-aos="fade-up">So grateful to be sharing my world with you.</p>

            <div class="bio">
                <h3 data-aos="zoom-in"> <span>name : </span> EJ ARNADO </h3>
                <h3 data-aos="zoom-in"> <span>email : </span> arnadoej@gmail.com </h3>
                <h3 data-aos="zoom-in"> <span>address : </span> Prk, Dalawidaw, Brgy 16, Bacolod City. </h3>
                <h3 data-aos="zoom-in"> <span>phone : </span> +639388899419 </h3>
                <h3 data-aos="zoom-in"> <span>age : </span> 21 years old </h3>
            </div>

            <a href="#" class="btn" data-aos="fade-up">Download CV</a>

        </div>

        <div class="skills" data-aos="fade-up">

            <h1 class="heading"> <span>Skills</span> </h1>

            <div class="progress">
                <div class="bar" data-aos="fade-left"> <h3><span>PHP</span> <span>90%</span></h3> </div>
                <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
                <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
                <div class="bar" data-aos="fade-right"> <h3><span>Java</span> <span>80%</span></h3> </div>
            </div>

        </div>

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span>Education</span> </h1>

            <div class="row">

                <div class="box-container">


                    <div class="box" data-aos="fade-right">
                        <span>( 2009-2015 )</span>
                        <h3>Education and Training Center School-1</h3>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>( 2015-2019 )</span>
                        <h3>Negros Occidental High School</h3>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>( 2019 - 2021 )</span>
                        <h3>Liceo De Lasalle Senior High School</h3>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="portfolio" id="portfolio">

        <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <img src="images/img-1.jpg" alt="">
                <h3>26th Cafe Inventory System</h3>
                <ul>
                    <li><a href="recipes.html">CLICK ME</a></li>
                </ul>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/ejarnado.jpeg" alt="">
                <h3>SouthStyle Mobile Appllication </h3>
                <ul>
                    <li><a href="lt3.html">CLICK ME</a></li>
                </ul>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-3.jpg" alt="">
                <h3>School Spot Mobile Application</h3>
                <ul>
                    <li><a href="lt4.html">CLICK ME</a></li>
                </ul>
            </div>

        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
        </form>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+123-456-7890</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>s2120076@usls.edu.ph</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Prk, Dalawidaw, Brgy 16, Bacolod City.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="https://www.facebook.com/wanderej01/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <h3>Facebook</h3>
                <p>FACEBOOK.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="https://www.instagram.com/ejarnado_/"target="_blank"><i class="fab fa-instagram"></i></a>
                <h3>Instagram</h3>
                <p>Instagram.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="https://github.com/EJARNADO11" target="_blank"><i class="fab fa-github"></i></a>
                <h3>Github</h3>
                <p>Github.</p>
            </div>

        </div>

    </section>

    <div class="credit">&copy; Copyright 2022 - <script>document.write(new Date().getFullYear());</script> by <span>All Rights Reserved.</span>
    </div>

    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            delay: 300
        });
    </script>

</body>

</html>
