<section class="py-5 bg-gray">
    <div class="container py-5">
    <style>
    .gallery-image {
        transition: transform 0.3s ease-in-out;
    }

    .gallery-image:hover {
        transform: scale(1.1);
    }
    </style>

    <h2 class="lined mb-4">Image Gallery</h2> <!-- needs 600x400 image -->
        <p class="lead">Photos of animals in their habitat.</p>
        <div class="row">
            <?php foreach ($galleryImage as $img) { ?>
                <a href="../img/gallery/image/<?= $img['g_file_name'] ?>" data-lightbox="gallery" data-title="Description of Project No.1" class="col-lg-4 col-sm-6 p-2 gallery-image"> 
                    <img src="../img/gallery/image/<?= $img['g_file_name'] ?>" alt="" class="img-fluid">
                </a>
            <?php } ?>
        </div>
        <style>
            .gallery-video {
                transition: transform 0.3s ease-in-out;
            }

            .gallery-video:hover {
                transform: scale(1.1);
            }
        </style>

        <h2 class="lined mb-4 mt-5">Video Gallery</h2>
        <p class="lead">Videos of animals in their habitat.</p>
        <div class="row justify-content-center">
            <?php foreach ($galleryVideo as $video) { ?>
                <div class="col-12 text-center gallery-video" onclick="toggleVideo(this)">
                    <video src="../img/gallery/video/<?= $video['g_file_name'] ?>" poster="" width="480" controls></video>
                </div>
            <?php } ?>
        </div>

    </div>
</section>