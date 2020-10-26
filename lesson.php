<?php
    include('public/php/header.php');
?>

        <!--------------------------------

            CONTENT

        -------------------------------->

        <div class="container bg-light mt-4 rounded">
            <div class="row p-4">
                <div class="col">
                    <h2 class="text-center">

                        <?php
                            setTitle($titles, $lesson_id);
                        ?>

                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col justify-content-center">
                    <div class="embed-responsive-16by9 text-center my-4">
                
                        <?php
                            setLink($links, $lesson_id);
                        ?>

                    </div>
                </div>
            </div>
            <div class="row p-4">
                <div class="col">
                    <h5 class="text-center">Overview</h5>
                    <p>

                        <?php
                            setOverview($overviews, $lesson_id);
                        ?>

                    </p>
                </div>
            </div>
        </div>

        <!--------------------------------

            OTHER LESSONS

        -------------------------------->


        <!-- SCRIPTS -->
        <script>
            
            let videoFrame = document.querySelector('#videoFrame');
            const breakpoint = 768;

            function resizeFrame(){
                let w = window.innerWidth;
                if(w < breakpoint){
                    videoFrame.width = 300;
                    videoFrame.height = 'auto';
                } else if (videoFrame.width = 300 && w > breakpoint){
                    videoFrame.width = 560;
                    videoFrame.height = 315;
                }
            }
            setInterval(resizeFrame, 100); 

        </script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <!-- SCRIPTS WERE ADDED HERE BECAUSE OF WARNING IN LINE 101 -->

        <div class="container mt-4" id="moreLikeThis">
            <div class="row">
                <div class="col">
                    <h2>More like this</h2>
                </div>
            </div>

            <?php
                lessonCards($images, $titles, $headings, $lesson_urls, $categories[0], $categories, $lesson_categories, 3);
            ?>
        
        </div>

<?php
    // WARNING: DOES NOT WORK FOR SOME REASON
    // WARNING CAUSE: LESSONCARDS FUNCTION IN LINE 94
    include 'public/php/footer.php';
?>

