<?php
    include('public/php/header.php');
?>

        <!--------------------------------

            CONTENT

        -------------------------------->

        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="jumbotron mt-4" id="about">
                        <h1>Welcome to SpaceLearn!</h1>
                        <p>
                            In this website you’ll discover awesome videos and lessons about space, physics and some other crazy stuff. This page is meant for those who are thirsty for knowledge about The Universe.
                        </p>
                        <p>
                            Most of this webpage's content comes from <strong>Kurzgesagt</strong>, an amazing animation and design agency that creates wonderfully animated informative videos about all sorts of topics. If you want to learn more about them, check out <a href="https://kurzgesagt.org/" target="_blank">their website</a> and their <a href="https://www.youtube.com/user/Kurzgesagt" target="_blank">Youtube channel</a>, in which you’ll find more content like the one in this page.
                        </p>
                        <p class="text-right"><i><b>Curated by <a href="https://www.linkedin.com/in/nicofilizzolaprod/">Nicolas Filizzola</a></b></i></p>
                        <img class="mx-auto mt-4 d-block" src="public/img/logo.svg" width="200">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <h2>Popular lessons</h2>
                </div>
            </div>

            <?php
                lessonCards($images, $titles, $headings, $lesson_urls, $categories[0], $categories, $lesson_categories, 3);
            ?>

            <div class="row">
                <div class="col text-center my-4">
                    <a href="lessons.php">
                        <button class="btn btn-primary w-100">More lessons</button>
                    </a>
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id="carouselControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/img/carousel-1.jpg" class="d-block w-100">
                            <span>Photo by <a href="https://unsplash.com/@nasa?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">NASA</a> on <a href="https://unsplash.com/s/photos/space?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                        </div>
                        <div class="carousel-item">
                            <img src="public/img/carousel-2.jpg" class="d-block w-100">
                            <span>Photo by <a href="https://unsplash.com/@nasa?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">NASA</a> on <a href="https://unsplash.com/s/photos/space?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                        </div>
                        <div class="carousel-item">
                            <img src="public/img/carousel-3.jpg" class="d-block w-100">
                            <span>Photo by <a href="https://unsplash.com/@nasa?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">NASA</a> on <a href="https://unsplash.com/s/photos/space?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                        </div>
                        <div class="carousel-item">
                            <img src="public/img/carousel-4.jpg" class="d-block w-100">
                            <span>Photo by <a href="https://unsplash.com/@spacex?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">SpaceX</a> on <a href="https://unsplash.com/s/photos/space?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                        </div>
                        <div class="carousel-item">
                            <img src="public/img/carousel-5.jpg" class="d-block w-100">
                            <span>Photo by <a href="https://unsplash.com/@nasa?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">NASA</a> on <a href="https://unsplash.com/s/photos/space?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

<?php
    include 'public/php/footer.php';
?>
