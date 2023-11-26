import React from "react";

<div>    
    <header className="header">

        <a href="index.html" className="logo"> <i className="fas fa-paw"></i> zooHub</a>

        <nav className="navbar">
            <a href="index.html">home</a>
            <a href="index.html#about">about</a>
            <a href="index.html#gallery">gallery</a>
            <a href="index.html#animal">animals</a>
            <a href="index.html#pricing">pricing</a>
            <a href="index.html#contact">contact</a>
        </nav>

        <div className="icons">
            <div id="login-btn" className="fas fa-user"></div>
            <div id="menu-btn" className="fas fa-bars"></div>
        </div>


        <form action="" className="login-form">

            <h3>staff login</h3>
            
            <input type="email" placeholder="Enter your email" className="box" id="email"/>
            <input type="password" placeholder="Enter your password" className="box" id="password"/>
            <div className="remember">
                <input type="checkbox" name="" id="remember-me"/>
                <label for="remember-me">remember me</label>
            </div>
            <a href="#" className="btn" onclick="login(event)">login</a>

        </form>
        {/* <script>
            function login(event) {
                event.preventDefault();
        
                var emailInput = document.getElementById("email");
                var passwordInput = document.getElementById("password");
        
                var email = emailInput.value;
                var password = passwordInput.value;
        
                
                var correctEmail = "user@example.com";
                var correctPassword = "password123";
        
                if (email === correctEmail && password === correctPassword) {
                    window.location.href = "admin_login.php";
                } else {
                    if (email === "") {
                        emailInput.style.border = "2px solid red";
                    } else {
                        emailInput.style.border = "2px solid green";
                    }
        
                    if (password === "") {
                        passwordInput.style.border = "2px solid red";
                    }else {
                        passwordInput.style.border = "2px solid green";
                    }
        
                    alert("Incorrect email address or password. Please try again.");
                }
            }
        </script> */}
            
    </header>


        <section className="home" id="home">

            <div className="content">
                <h3>Enjoy the wonderful <br/>
                    adventure of the <br/> animals</h3>
                <a href="#" className="btn" onclick="hub()">Meet the zoo</a>
            </div>
            
            {/* <script>
                function hub() {
                    window.location.href = "hub.html";
                }
            </script> */}

            <img src="images/bottom_wave.png" alt="" className="wave"/>

        </section>

        <section className="about" id="about">

            <h2 className="deco-title">About us</h2>

            <div className="box-container">

                <div className="image">
                    <img src="images/about.png" alt=""/>
                </div>

                <div className="content">
                    <h3 className="title">you can find all the most popular species</h3>
                    <p>In the vast world of nature, where diversity thrives, there's an exciting journey awaiting those who seek it. 
                        From the depths of the oceans to the highest peaks of mountains, you can find all the most popular species, each with its unique charm. 
                        Whether it's the majestic lions roaming the African savannah, the graceful dolphins dancing in the deep blue sea, 
                        or the colorful birds adorning the skies, the beauty of Earth's inhabitants knows no bounds. Exploring and discovering these remarkable creatures is a 
                        thrilling adventure that promises to inspire awe and wonder in every soul. 
                        So, embark on this wondrous quest and unveil the secrets of the world's most beloved species.</p>
                    
                    <div className="icons-container">
                        <div className="icons">
                            <i className="fas fa-graduation-cap"></i>
                            <h3>we educate</h3>
                        </div>
                        <div className="icons">
                            <i className="fas fa-bullhorn"></i>
                            <h3>we play</h3>
                        </div>
                        <div className="icons">
                            <i className="fas fa-book-open"></i>
                            <h3>getting to know</h3>
                        </div>
                    </div>
                </div>

            </div>

        </section>


        <section className="gallery" id="gallery">

            <h2 className="heading">gallery</h2>

            <div className="swiper gallery-slider">

                <div className="swiper-wrapper">

                    <div className="swiper-slide slide">
                        <div className="image">
                            <img src="images/gallery-1.jpg" alt=""/>
                        </div>
                    </div>

                    <div className="swiper-slide slide">
                        <div className="image">
                            <img src="images/gallery-2.jpg" alt=""/>
                        </div>
                    </div>

                    <div className="swiper-slide slide">
                        <div className="image">
                            <img src="images/gallery-3.jpg" alt=""/>
                        </div>
                    </div>

                    <div className="swiper-slide slide">
                        <div className="image">
                            <img src="images/gallery-4.jpg" alt=""/>
                        </div>
                    </div>

                </div>

                <div className="swiper-button-next"></div>
                <div className="swiper-button-prev"></div>

            </div>

        </section>


        <section className="animal" id="animal">

            <h2 className="heading">animals</h2>

            <div className="box-container">

                <div className="box">
                    <img src="images/animal_1.jpg" alt=""/>
                    <div className="content">
                        <h3>cameleon</h3>
                        <a href="#" className="btn" onclick="animals()">see datails</a>
                    </div>
                </div>

                <div className="box">
                    <img src="images/animals_2.jpg" alt=""/>
                    <div className="content">
                        <h3>zebra</h3>
                        <a href="#" className="btn" onclick="animals()">see datails</a>
                    </div>
                </div>

                <div className="box">
                    <img src="images/animals_3.jpg" alt=""/>
                    <div className="content">
                        <h3>giraffe</h3>
                        <a href="#" className="btn" onclick="animals()">see datails</a>
                    </div>
                </div>

                <div className="box">
                    <img src="images/animals_4.jpg" alt=""/>
                    <div className="content">
                        <h3>monkey</h3>
                        <a href="#" className="btn" onclick="animals()">see datails</a>
                    </div>
                </div>

            </div>


        </section>
        {/* <script>
            function animals() {
                window.location.href = "zoo.html";
            }
        </script> */}


        <section className="banner" >

            <div className="row">
                
                <div className="content">
                    <h3>stay with pets</h3>
                <p>From the gentle purring of a cat to the playful antics of a hamster or 
                    the affectionate companionship of a loyal dog, small pets bring immeasurable joy to our lives. 
                    These furry and feathered friends become our confidants, offering comfort, loyalty, and endless moments of happiness. 
                    They teach us about responsibility, empathy, and the unconditional love that transcends language. 
                    When you stay with pets, you're not just sharing your home; you're sharing your heart with these charming creatures, 
                    creating lasting bonds that enrich our lives in ways beyond measure.</p> 
                </div>

                <div className="image">
                    <img src="images/banner_1.png" alt="" />
                </div>
                
            </div>

        </section>

        <section className="pricing" id="pricing">

            <h2 className="heading">pricing</h2>

            <div className="box-container">

                <a href="payment.html" className="box">
                    <img src="images/pricing1.png" alt="" />
                    <h3>individuals</h3>
                    <h4 className="price">$ 10</h4>
                    <p>the entrance is from 8:00 to 14:00</p>
                </a>

                <a href="payment.html" className="box">
                    <img src="images/pricing2.png" alt="" />
                    <h3>school</h3>
                    <h4 className="price">$ 20</h4>
                    <p>the entrance is from 8:00 to 14:00</p>
                </a>

                <a href="payment.html" className="box">
                    <img src="images/pricing1.png" alt="" />
                    <h3>family</h3>
                    <h4 className="price">$ 30</h4>
                    <p>the entrance is from 8:00 to 14:00</p>
                </a>

            </div>

        </section>

        <section className="contact" id="contact">

            <h2 className="heading">contact</h2>

            <form id="contact-form">
                <input type="hidden" name="contact_number" />
                <div className="inputBox">
                    <input type="text" id="name" placeholder="Your name" required />
                    <input type="email" id="email"  placeholder="Email id" required />
                </div>

                <div className="inputBox">
                    <input type="text" id="phone" placeholder="Phone no." required />
                    <input type="text" id="subject" placeholder="Subject" required />
                </div>

                <textarea id="message" rows="10" placeholder="How can we help you?"></textarea>

                <button className="btn" type="submit">send message</button>

            </form>
        </section>


        <section className="footer">

            <div className="box-container">

                <div className="box">
                    <h3><i className="fas fa-paw"></i> ZooHub</h3>
                    <p>Where Wildlife Meets Wonder</p>
                    <p className="links"><i className="fas fa-clock"></i>monday - friday</p>
                    <p className="days">7:00AM - 11:00PM</p>
                </div>

                <div className="box">
                    <h3>Contact Info</h3>
                    <a href="#" className="links"><i className="fas fa-phone"></i> +40-0712-345-678</a>
                    <a href="#" className="links"><i className="fas fa-phone"></i> +40-0712-345-678</a>
                    <a href="#" className="links"><i className="fas fa-envelope"></i> info@zoohub.com</a>
                    <a href="#" className="links"><i className="fas fa-map-marker-alt"></i> Timisoara, Romania</a>
                </div>

                <div className="box">
                    <h3>quick links</h3>
                    <a href="index.html" className="links"> <i className="fas fa-arrow-right"></i>Home</a>
                    <a href="index.html#about" className="links"> <i className="fas fa-arrow-right"></i>About</a>
                    <a href="index.html#gallery" className="links"> <i className="fas fa-arrow-right"></i>gallery</a>
                    <a href="index.html#animal" className="links"> <i className="fas fa-arrow-right"></i>Animals</a>
                    <a href="index.html#pricing" className="links"> <i className="fas fa-arrow-right"></i>Pricing</a>
                </div>

                <div className="box">
                    <h3>newsletter</h3>
                    <p>subscribe for latest updates</p>
                    <input type="email" placeholder="Your Email" className="email"/>
                    <a href="#" className="btn">subscribe</a>
                    <div className="share">
                        <a href="https://www.facebook.com/flavius.astratinei" className="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/Astra1Flavius" className="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/flav0.3/" className="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/in/flavius-astratinei-7948052a0/" className="fab fa-linkedin"></a>
                    </div>
                </div>

            </div>

            <div className="credit">&copy; 2024 zoohub. All rights reserved by Astratinei Flavius</div>

        </section>

















        {/* <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <script src="js/script.js"></script> */}

</div>

export default Index;