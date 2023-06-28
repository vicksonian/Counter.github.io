<!DOCTYPE html>
<html>

<head>
    <title>CountDown Timer</title>
    <link rel="stylesheet" type="text/css" href="me.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!--header section for navigation-->
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Counter">Timer</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="About" id="About">
        <h2>About</h2>
        <p>This project contains a <strong> <a href="#Counter"> CountDown timer</a></strong> </p>
        <p>
            The <strong>CountDown Timer</strong> is a simple yet powerful tool that helps you track and manage your time
            effectively. Whether you're counting down to an important event, monitoring a project deadline, or simply
            wanting to stay focused on your tasks, our timer has got you covered.
        </p>
        <p>
            With its intuitive interface and customizable features, you can set timers for days, hours, minutes, and
            seconds. Stay organized, improve productivity, and never miss a deadline again.
        </p>
        <p>
            Start using the CountDown Timer today and take control of your time!
        </p>
    </section>

    <section class="Counter" id="Counter">
        <div class="container">
            <div class="header">
                <h1>CountDown Timer</h1>
            </div>
            <div id="timer">
                <div class="timer-section">
                    <input class="timer" type="number" id="days" placeholder="0" min="0">
                    <p><span>DAYS</span></p>
                </div>

                <div class="timer-section">
                    <input class="timer" type="number" id="hours" placeholder="00" min="00" max="23">
                    <p><span>HOURS</span></p>
                </div>

                <div class="timer-section">
                    <input class="timer" type="number" id="minutes" placeholder="00" min="00" max="59">
                    <p><span>MINUTES</span></p>
                </div>

                <div class="timer-section">
                    <input class="timer" type="number" id="seconds" placeholder="00" min="00" max="59">
                    <p><span>SECONDS</span></p>
                </div>
            </div>
            <div class="start">
                <button id="start-btn">Start</button>
            </div>
        </div>
    </section>

    <audio id="beep">
        <source src="mixkit-high.wav" type="audio/mpeg">
    </audio>


    <footer class="footer">
        <div class="footer__left">
            <p> Copyright © 2023 <strong>Group 3</strong> | All rights reserved</p>
        </div>

        <div id="contactForm">

            <h1>Keep in touch!</h1>
            <small>I'll get back to you as quickly as possible</small>

            <form action="#">
                <input placeholder="Name" type="text" required />
                <input placeholder="Email" type="email" required />
                <input placeholder="Subject" type="text" required />
                <textarea placeholder="Comment"></textarea>
                <input class="formBtn" type="submit" />
                <input class="formBtn" type="reset" />
            </form>
        </div>

        <div class="footer__center" id="contact">Contact</div>
        <div class="footer__right">
            <a href="https://github.com/vicksonian/michaelpussl.github.io.git" target="_blank"><img src="images/github_icon-icons.com_60477.png" alt=""></a>
            <a href="https://wa.me/+254705100641" target="_blank"><img src="images/whatsapp_108042.png" alt=""></a>
            <a href="https://www.github.com" target="_blank"><img src="images/facebook_108044.png" alt=""></a>
        </div>
        <h5></h5>
    </footer>
    <script src="script.js"></script>
</body>

</html>