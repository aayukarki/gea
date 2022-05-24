<div class="parents-students">
    <div class="container-fluid px-0">
        <h2 class="title font-weight-bold text-black text-center">Hear it from Parents & Students</h2>
        <?php if (have_rows('student_parent_testimonials', 'options')) :  ?>
            <div class="parents-students-testimonial-slider">
                <?php while (have_rows('student_parent_testimonials', 'options')) : the_row();
                    $title = get_sub_field('title');
                    $video_link = get_sub_field('video_link');
                ?>
                    <div class="youtube-videos" data-slide-name="<?= $title ?>">
                        <div class="video-frame">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= $video_link ?>"></iframe>
                            </div>
                        </div>
                    </div>
                <?php endwhile;  ?>
            </div>
        <?php endif; ?>
        <div class="slick-arrows">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-auto">
                                <div class="prev-slide1 text-left"></div>
                            </div>
                            <div class="col-md-6 col-auto">
                                <div class="next-slide1 text-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>