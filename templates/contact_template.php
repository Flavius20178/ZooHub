<section class="py-5 bg-cover bg-gray">
    <div class="container py-5">
        <h1 class="lined">Contact</h1>
        <p class="lead my-4">Feel free to reach out to us with any questions, inquiries, or feedback. Our team is dedicated to providing you with the best assistance and information.</p>
    </div>
</section>

<section class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-map-2"></i></div>
                        <h5 class="lined mb-4">Address</h5>
                        <p class="text-muted mb-0 text-small">Bulevardul Vasile Pârvan 4</p>
                        <p class="text-muted mb-0 text-small">Timișoara, <strong>TM </strong></p>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-phone"></i></div>
                        <h5 class="lined mb-4">Call center</h5>
                        <p class="text-muted mb-3 text-small">Please feel free to call us for extra information.</p>
                        <p class="text-muted font-weight-bold">Mobile +40-0712-345-678</p>
                        <p class="text-muted font-weight-bold">Mobile +40-0712-345-678</p>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-mail-open"></i></div>
                        <h5 class="lined mb-4">Electronic support</h5>
                        <p class="text-muted mb-3 text-small">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                        <ul>
                            <li><a href="#" class="font-weight-bold text-small" style="color: black;">info@ZooHub.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ml-auto">
                <div class="col-lg-12 col-md-6 mb-4">
                    <div class="icon mb-4"><i class="pe-7s-pen"></i></div>
                    <?php
                    if (isset($_GET['msg'])) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                         </div>';
                    } ?>
                    <h5 class="lined mb-4">Contact Form</h5>
                    <p class="text-muted text-small">Feel free to get in touch with us by using the contact form below. We value your feedback and inquiries.</p>
                    <form id="contact-form" method="post" action="" class="contact-form form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="name" class="font-weight-normal">Firstname</label>
                                <input id="name" type="text" name="f_firstname" class="form-control" value="<?= isset($_SESSION['v_firstname']) ? $_SESSION['v_firstname']  : "" ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="surname" class="font-weight-normal">Lastname </label>
                                <input id="surname" type="text" name="f_lastname" class="form-control" value="<?= isset($_SESSION['v_lastname']) ? $_SESSION['v_lastname']  : "" ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email" class="font-weight-normal">Email</label>
                                <input id="email" type="email" name="f_email" class="form-control" value="<?= isset($_SESSION['v_email']) ? $_SESSION['v_email']  : "" ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="subject" class="font-weight-normal">Subject</label>
                                <input id="subject" type="text" name="f_subject" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="message" class="font-weight-normal">Message</label>
                                <textarea id="message" rows="4" name="f_message" class="form-control" required></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <?php if (isset($_SESSION['authenticated'])) { ?>
                                    <button type="submit" class="btn btn-outline-primary" name="submit"> <i class="far fa-envelope mr-2"> </i>Send message</button>
                                <?php } else { ?>
                                    <button class="btn btn-outline-danger" disabled>You have to be logged in to send messages</button>
                                <?php } ?>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2006510444903!2d21.22904027581714!3d45.747123214517785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d84610655bf%3A0xfd169ff24d29f192!2sUniversitatea%20de%20Vest%20din%20Timi%C8%99oara!5e0!3m2!1sro!2sro!4v1702229896602!5m2!1sro!2sro" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<!-- <script src="vendor/lightbox2/js/lightbox.min.js"></script> -->
<!-- <script src="vendor/leaflet/leaflet.js"></script> -->
<!-- <script src="js/front.js"></script> -->