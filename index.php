<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150215778-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-150215778-1');
    </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Building beautiful, responsive websites for personal and small to medium business use">
        <meta name="keywords" content="web developer, hire web developer, freelance web developer, build website, greater lowell, greater boston, dunstable, nashua, tyngsboro, greater nashua, new hampshire, massachusetts">
        <meta name="author" content="Kevin Whelan">
        <meta property="og:image" content="images/site-preview.png" />
        <link rel="stylesheet" href="styles/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
        <title>Kevin Whelan Freelance Web Developer</title>
    </head>

    <body>
        <header>
           

           <div class="welcome-div">
               
                <!-- just for mobile nav -->
            <img id="hamburger" src="images/hamburger.jpg" alt="navigation button">

                <!-- for desktop -->
                <h1 id="wider-h1" class="animated zoomIn">Hi, I'm <section id="h1-name">Kevin Whelan</section> 
                    <br>
                    &emsp; &emsp; &emsp; &emsp; Freelance Web Developer
                </h1>

                <!-- for mobile -->
                <h1 id="mobile-h1">
                        Hi, I'm <section id="h1-name">Kevin Whelan</section> 
                        <br>
                        &emsp; Freelance Web Developer
                </h1>
           </div>
        
           <!-- for desktop -->
           <nav id="desktop-nav">
                <ul id="nav-list" class="animated zoomIn">
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#collaboration">Collaboration</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#philosophy">Design Philosophy</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <aside id="mobile-nav">
                <ul id="mobile-nav-list">
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#collaboration">Collaboration</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#philosophy">Design Philosophy</a></li>
                    <li><a href="https://kwhelanblog.com">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </aside>

        </header>

        <main>

            <div class="container-flex">

               <!-- start a flex item-->  
            
                <div id="about" class="flex-item">
                    <h2>About Me</h2>
                  
                        <ul>
                            <li>Husband</li>
                            <li>Father</li>
                            <li>Technology Lover</li>
                            <li>Anything Outdoors</li>
                            <li>Dangerously Curious</li>
                            <li>Coffee</li>
                        </ul>
                </div>

                <div id="profile-picture" class="flex-item flex-item-img">
                    <img class="flex-item-img" src="images/me.jpg" alt="kevin whelan">
                </div>

                <!-- end a flex item -->

                <!-- start a flex item-->   

                <div id="comp-coffee-pic" class="flex-item">
                    <img class="flex-item-img" src="images/computer&coffee.jpeg" alt="picture computer and coffee">
                </div>

                <div id="collaboration" class="flex-item ">
                    <h2>Collaboration</h2>

                    <p>My goal is to make building your website exciting, stress free, and rewarding.</p>
              
                    <p>The way to achieve this is through collaboration and maintaining meaningful contact throughout the process. You will always work directly with me so no need to worry about any middleman, lost messages, or things getting lost in translation. This makes for a smoother and easier process of getting your website up and running to show off to the world.
                    </p>
                </div>

                <!-- end a flex item -->

                <!-- start a flex item -->

                <div id="skills" class="flex-item">
                    <h2>Technical Skills</h2>

                    <ul class="list-items">
                        <li>HTML5 - The Content</li>
                        <li>CSS3 - The Styling</li>
                        <li>JavaScript - The Behavior </li>
                        <li>PHP - The Logic</li>
                        <li>MySQL - Database</li>
                    </ul>
              
                    <p> So what does this all mean? I have the skills and experience to make your website come to life.</p>
                </div>

                <div id="skills-icons" class="flex-item">
                    <img class="flex-item-icons" src="images/html5.png" alt="html icon">

                    <img class="flex-item-icons" src="images/css3.jpg" alt="html icon">
              
                    <img class="flex-item-icons" src="images/javascript.png" alt="html icon">
              
                    <img class="flex-item-icons" src="images/php.png" alt="html icon">
              
                    <img class="flex-item-icons" src="images/mysql.png" alt="html icon">
                </div>

                <!-- end a flex item -->

                <!-- start a flex item -->

                <div id="iphone-picture">
                    <img class="flex-item-img" src="images/phone.jpg" alt="picture of cell phone">
                </div>

                <div id="philosophy" class="flex-item">
                    <h2>Design Philosophy</h2>

                    <p>I design and build websites following the industry philosophy: "mobile first."</p>
              
                    <p>Designing for mobile viewing first ensures your content looks great on even the smallest of screen sizes.</p>
              
                    <p>This practice allows for quicker and easier adjustments to be made in code to account for larger screen sizes such as desktops.</p>
                </div>

                <!-- end a flex item -->

                <!-- start a flex item -->

                <div id="message-bottle" class="flex-item">
                    <img class="flex-item-img" src="images/contact.jpg" alt="picture of keyboard">

                    <h2 id="contact-form">Contact</h2>
                
                    <form id="contact" accept-charset="utf-8">
                
                        <input id="name" class="form-fields" type="text" name="name" placeholder="Full Name" required>

                        <br>

                        <input id="email" class="form-fields" type="email" name="email" placeholder="Email" required>

                          <br>

                        <input id="phone" class="form-fields" type="tel" name="phone" placeholder="Phone Number" required>

                          <br>

                        <input id="subject" class="form-fields" type="text" name="subject" placeholder="Subject" >

                          <br>
                          <br>
                          
                        <textarea id="message" class="form-fields" name="message" placeholder="Enter Message..."></textarea>

                          <br>

                       <!-- <input type="submit" value="Submit" id="submit-button"> -->
                        <button type="submit" value="Submit" id="submit-button">Submit</button>
                
                    </form>


                    <div id="response-message">
                        <!--Placeholder for form errors or success-->
                        
                    </div>

                    <div class="favicons">
                            <a id="twitter-fav" href="https://twitter.com/kevinwhelandev" target="_blank"><img src="images/twitter-favicon.png" alt="favicon"></a>
                            <a id="instagram-fav" href="https://instagram.com/kevinwhelandev" target="_blank"><img src="images/instagram-favicon.png" alt="favicon"></a>
                        </div>
                </div>
    
                  
            </div> <!-- end flex container -->

            <a href="#"><img id="up-arrow" src="images/up-arrow.png" alt="up arrow"></a>

                
        </main>

        <footer>Created by Kevin Whelan &copy; 2019</footer>

       
    </body>

    <script src="javascript/script.js"></script>

</html>