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
        <div id="menu-btn" className="fas fa-bars"></div>
    </div>        
</header>
    

    <section className="animalInfo" id="animalInfo">
        <h2 className="deco-title">Animal Information</h2>

        <div id="animalInfo">

        </div>

        {/* <script>
            function getQueryParam(name) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            function fetchAnimalInfo() {
                const apiKey = 'Z7eTAJ/s3zBIZ/O7e6yCJQ==Y70ecxJwFVIjjfJw';
                const apiUrl = 'https://api.api-ninjas.com/v1/animals?name=';

                const animalName = getQueryParam('name');

                if (!animalName) {
                    console.error('Animal name not provided.');
                    document.getElementById('animalInfo').innerHTML = 'Animal name not provided.';
                    return;
                }

                const fullUrl = apiUrl + encodeURIComponent(animalName);

                fetch(fullUrl, {
                    headers: {
                        'X-Api-Key': apiKey
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('API Response:', data);

                    if (Array.isArray(data) && data.length > 0) {
                        const firstAnimal = data[0];

                        const animalInfoContainer = document.getElementById('animalInfo');

                        if (firstAnimal.name && firstAnimal.taxonomy && firstAnimal.characteristics) {
                            animalInfoContainer.innerHTML = `
                                <h2>${firstAnimal.name}</h2>
                                <p>Family: ${firstAnimal.taxonomy.family}</p>
                                <p>Description: ${firstAnimal.characteristics.distinctive_feature}</p>
                                <!-- Add more details as needed -->
                            `;
                        } else {
                            throw new Error('Invalid data format in the first animal');
                        }
                    } else {
                        throw new Error('Invalid API response format');
                    }
                })
                .catch(error => {
                    console.error('Error fetching animal information:', error);
                    document.getElementById('animalInfo').innerHTML = 'Error fetching animal information.';
                });
            }

            fetchAnimalInfo();
        </script> */}
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