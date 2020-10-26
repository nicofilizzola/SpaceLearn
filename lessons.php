<?php
    include('public/php/header.php');
?>

        <!--------------------------------

            CONTENT

        -------------------------------->
        
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <form method="get">

                        <?php
                            category_buttons();
                        ?>
                        
                    </form>
                </div>
            </div>


            <!--Lesson cards-->

            <?php
                lessonCards($images, $titles, $headings, $lesson_urls, $categories[0], $categories, $lesson_categories, count($titles));
            ?>

        </div>

<?php
    include 'public/php/footer.php';
?>

