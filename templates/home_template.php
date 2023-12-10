<section style="background: url(../img/banner2.jpg) no-repeat; background-size: cover; background-position: top center;" class="py-5 bg-cover bg-center">
    <div class="hero-overlay"></div>
    <div class="container py-5 px-0 text-white text-left">
        <h1 class="text-shadow hero-heading font-weight-normal">Welcome to ZooHub</h1>
        <p class="text-shadow font-weight-light mt-3 mb-4" style="width: 40%;">
            Enjoy the wonderful adventure of the animals
        </p>
    </div>
</section>

<!-- welcome to ZooHub -->
<section class="pb-2 pt-5">
    <div class="container-fluid p-5 pb-2">
        <div class="row px-2">
            <div class="col-lg-6 col-sm-12">
                <h2>Welcome to <span class="font-weight-bold text-light-green">ZooHub</span></h2>
                <div style="width: 8%">

                    <hr style="border-top: 10px solid #489A33;">
                </div>
                <p class="lead text-secondary">In the vast world of nature, where diversity thrives, there's an exciting journey awaiting those who seek it. 
                    From the depths of the oceans to the highest peaks of mountains, you can find all the most popular species, each with its unique charm. 
                    Whether it's the majestic lions roaming the African savannah, the graceful dolphins dancing in the deep blue sea, 
                    or the colorful birds adorning the skies, the beauty of Earth's inhabitants knows no bounds.</p>
                <p class="text-secondary">Exploring and discovering these remarkable creatures is a 
                    thrilling adventure that promises to inspire awe and wonder in every soul. 
                    So, embark on this wondrous quest and unveil the secrets of the world's most beloved species.</p>
                <a href="gallery" class="btn btn-primary btn-sm" style="border-radius: 50px;">View Gallery</a>
            </div>
            <div class="col-lg-6 col-sm-12 mt-sm-4">
                <div class="row">
                    <div class="col">
                        <img src="../img/ausgeck.jpg" alt="" class="img-fluid mb-4" width="200px">
                        <h4 class="h5 mb-2">Australian Gecko</h4>
                        <p class="text-small text-muted">Australian geckos don’t have eyelids. Their eyes are protected by a transparent membrane, and they take care of them by licking them clean.</p>
                    </div>
                    <div class="col">
                        <img src="../img/grizzlybear.jpg" alt="" class="img-fluid mb-4" width="200px">
                        <h4 class="h5 mb-2">Grizzly Bear</h4>
                        <p class="text-small text-muted">The grizzly-polar bear hybrid is a cross between a Polar bear and a grizzly bear and named the ‘pizzly bear.’</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our sponsors -->
<section class="p-3" style="background-color: #489A33">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3 class="text-center font-weight-bold text-white">Our Sponsors</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($testimonials as $testimonial) { ?>
                <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                    <div class="">
                        <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3E7331">
                    </div>
                    <h5 class="text-white mt-2"><?= $getSponsorName($testimonial['sponsor_id']) ?></h5>
                    <p class="" style="color: #ebe1e1"><?= $testimonial['test_message'] ?></p>
                </div>
            <?php  } ?>
            <!-- <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                <div class="">
                    <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3E7331">
                </div>
                <h5 class="text-white mt-2">Alicia Doe</h5>
                <p class="" style="color: #ebe1e1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos molestiae ex ratione deleniti fuga libero a. Nobis, voluptatum magnam?</p>
            </div> -->

            <!-- <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                <div class="">
                    <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3E7331">
                </div>
                <h5 class="text-white mt-2">Alicia Doe</h5>
                <p class="" style="color: #ebe1e1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos molestiae ex ratione deleniti fuga libero a. Nobis, voluptatum magnam?</p>
            </div>
            <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                <div class="">
                    <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3E7331">
                </div>
                <h5 class="text-white mt-2">Alicia Doe</h5>
                <p class="" style="color: #ebe1e1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos molestiae ex ratione deleniti fuga libero a. Nobis, voluptatum magnam?</p>
            </div> -->
        </div>
    </div>
</section>

<!-- animal of the week -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    This week's featured <span class="font-weight-bold" style="color: #BE9D0D">Animal</span>
                    <img src="../img/number_1_hand.png" alt="" width="40px">
                </h2>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <!-- <div style="width: 8%">
                    <hr style="border-top: 10px solid #FFE263;">
                </div> -->
                <div>
                    <img src="../img/animals/<?= $getImageName($currAnimal['animal_id']) ?>" alt="" style="border-radius: 20px">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 pt-sm-4 pt-lg-2">
                <div class="row">
                    <div class="col">
                        <h3> <span class="text-dark"><?= $currAnimal['an_given_name'] ?></h3>
                        <h6> <span class="text-muted">Species name:</span>&ensp;<?= $currAnimal['an_species_name'] ?></h6>
                        <h6> <span class="text-muted">Date of birth:</span>&ensp;<?= $currAnimal['an_dob'] ?></h6>
                        <h6> <span class="text-muted">Gender:</span>&ensp;<?= $currAnimal['an_gender'] == "m" ? "Male" : "Female" ?></h6>
                        <h6> <span class="text-muted">Zoo join date:</span>&ensp;<?= $currAnimal['an_joindate'] ?></h6>
                        <?php if ($currAnimal['an_description'] != "") { ?>
                            <h6> <span class="text-muted">Description</span>&ensp;<?= $currAnimal['an_description'] ?></h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-gray py-5">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-5 lined ml-5">Map of Zoo</h2>
                <div class="row">
                    <div class="col-xs-10 col-lg-6">
                        <img src="../img/zoo_map.jpg" alt="" width="90%">
                    </div>
                    <div class="col-xs-10 col-lg-6 mt-xs-3 mt-3">
                        <img src="../img/zoo_areas.png" alt="" width="80%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>