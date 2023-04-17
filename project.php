<?php include('header.php'); ?>

    <?php
        //get the url title parameter
        $url_title = $_GET['title'];
        $pro = $projects[$url_title];

        //need url rewrite

    ?>

    <section id="project_head">
        <?php if($pro['vimeo_id']): ?>
        <div id="video-head">
            <a class="video-item" data-src=" https://vimeo.com/<?= $pro['vimeo_id']; ?>" data-sub-html="<h4><?= $pro['title']; ?></h4>">
                <img class="vid" src="img/<?= $pro['lead_image']; ?>">
            </a>
        </div>
        <?php else: ?>
            <img src="img/<?= $pro['lead_image']; ?>">
        <?php endif;?>
    </section>


    <section id="project-detail">
            <div class="project_description">
                <h1><?= $projects[$url_title]['title']; ?></h1>
                <!-- details -->
                <p class="gray">by Johnathan Doe, Main Street Theatre</p>
                <!-- description -->
                <p><?= $projects[$url_title]['description']['text']; ?></p>
            </div>

            <div class="project_images">
                <ul id="lightgallery" class="grid">
                    <li class="gallery-item"
                        data-src="img/work/the-connection-1.jpg"
                        data-sub-html="<h4>The Connection</h4><p>Performed live on twitch.tv 5/7/21</p><p>Contact ninafry77@gmail.com to view full show.</p>">
                        <img src="img/work/the-connection-1.jpg">
                    </li>
                    <li class="gallery-item"
                        data-src="img/work/the-connection-2.jpg"
                        data-sub-html="<h4>The Connection</h4><p>Performed live on twitch.tv 5/7/21</p><p>Contact ninafry77@gmail.com to view full show.</p>">
                        <img src="img/work/the-connection-2.jpg">
                    </li>
                    <li class="gallery-item"
                        data-src="img/work/the-connection-3.jpg"
                        data-sub-html="<h4>The Connection</h4><p>Performed live on twitch.tv 5/7/21</p><p>Contact ninafry77@gmail.com to view full show.</p>">
                        <img src="img/work/the-connection-3.jpg">
                    </li>
                    <li class="gallery-item"
                        data-src="img/work/the-connection-4.jpg"
                        data-sub-html="<h4>The Connection</h4><p>Performed live on twitch.tv 5/7/21</p><p>Contact ninafry77@gmail.com to view full show.</p>">
                        <img src="img/work/the-connection-4.jpg">
                    </li>
                </ul>
            </div>
    </section>

</div><!--closing wrap-->

    <?php include('selected-work.php'); ?>

<div class="wrap"><!--opening wrap-->

    <section id="contact">
        <div>
            <h2>Contact</h2>
            <address>
                <h4>Nina Fry, <span>Director</span></h4>
                Brooklyn, NY<br/>
                <!--email-->
                <a href="mailto:ninafry77@gmail.com">ninafry77@gmail.com</a><br/>
                <!--phone-->
                <!--<a href="tel:222-222-2222">222-222-2222</a>-->
            </address>
        </div>
    </section>

    <?php include('footer.php'); ?>
