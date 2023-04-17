<section id="work">
    <div class="insider">
        <h2>Selected Work</h2>
        <ul class="grid-container">

            <!--Happy Birthday Casey-->
            <li>
                <div class="grid-item" style="background-image: url('img/happy-birthday-casey.jpg')">
                    <a href="project.php">
                        <img src="img/happy-birthday-casey.jpg">
                    </a>

                </div>
                <h3>Happy Birthday Casey</h3>
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/happy-birthday-casey-2.jpg"
                data-sub-html="<h4>Happy Birthday Casey</h4><p>Written by Emily J. Daly</p><p>photo by Nathaniel Johnston</p>">
                <h3>Happy Birthday Casey</h3>
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/happy-birthday-casey-3.jpg"
                data-sub-html="<h4>Happy Birthday Casey</h4><p>Written by Emily J. Daly</p><p>photo by Nathaniel Johnston</p>">
                <h3>Happy Birthday Casey</h3>
            </li>

            <!--Pump Ballet-->
            <li class="gallery-item"
                data-src="img/work/pump-ballet-1.jpg"
                data-sub-html="<h4>Pump Ballet</h4><p>written by natyna bean</p><p>photo by Nathaniel Johnston</p>">
                <div style="background-image: url('img/pump-ballet.jpg')" class="grid-item">
                    <img src="img/pump-ballet.jpg">
                </div>
                <h3>Pump Ballet</h3>
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/pump-ballet-2.jpg"
                data-sub-html="<h4>Pump Ballet</h4><p>written by natyna bean</p><p>photo by Nathaniel Johnston</p>">
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/pump-ballet-3.jpg"
                data-sub-html="<h4>Pump Ballet</h4><p>written by natyna bean</p><p>photo by Nathaniel Johnston</p>">
            </li>

            <!--Stonewall Operas-->
            <li class="gallery-item"
                data-src="img/work/stonewall-operas-1.jpg"
                data-sub-html="<h4>The Stonewall Operas</h4><p>photo by Steven Pisano</p>">
                <div style="background-image: url('img/stonewall.jpg')" class="grid-item">
                    <img src="img/stonewall.jpg">
                </div>
                <h3>The Stonewall Operas</h3>
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/stonewall-operas-2.jpg"
                data-sub-html="<h4>The Stonewall Operas</h4><p>photo by Steven Pisano</p>">
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/stonewall-operas-3.jpg"
                data-sub-html="<h4>The Stonewall Operas</h4><p>photo by Steven Pisano</p>">
            </li>

            <!--Skint-->
            <li class="gallery-item"
                data-src="img/work/skint-1.jpg"
                data-sub-html="<h4>Skint</h4>">
                <div style="background-image: url('img/skint.jpg')" class="grid-item">
                    <img src="img/skint.jpg">
                </div>
                <h3>Skint</h3>
            </li>
            <li class="gallery-item hide-gallery"
                data-src=" https://vimeo.com/477599785"
                data-sub-html="<h4>Skint</h4>">
            </li>

            <!--The Connection-->
            <li id="connection_ss" class="gallery-item"
                data-src="img/work/the-connection-1.jpg"
                data-sub-html="<h4>The Connection</h4><p>Performed live on twitch.tv 5/7/21</p><p>Contact ninafry77@gmail.com to view full show.</p>">
                <div style="background-image: url('img/the-connection.jpg')" class="grid-item">
                    <img src="img/the-connection.jpg">
                </div>
                <h3>The Connection</h3>
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/the-connection-2.jpg"
                data-sub-html="<h4>The Connection</h4><p>Performed live on twitch.tv 5/7/21</p><p>Contact ninafry77@gmail.com to view full show.</p>">
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/the-connection-3.jpg"
                data-sub-html="<h4>The Connection</h4><p>Performed live on twitch.tv 5/7/21</p><p>Contact ninafry77@gmail.com to view full show.</p>">
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/the-connection-4.jpg"
                data-sub-html="<h4>The Connection</h4><p>Performed live on twitch.tv 5/7/21</p><p>Contact ninafry77@gmail.com to view full show.</p>">
            </li>

            <?php
            $i = 1;
            while($i <= 5){
                echo  '<li class="gallery-item hide-gallery" data-src="img/work/the-connection-shots_'.$i.'.jpg" data-sub-html="<h4>The Connection</h4><p>Photography by Nathaniel Johnston Photography</p><p>Contact ninafry77@gmail.com to view full show.</p>"></li>';
                $i++;
            }
            ?>


            <!--Acting Reel-->
            <!--<li class="gallery-item"
                data-src="https://vimeo.com/65434087"
                data-sub-html="<h4>Nina Fry: Acting Reel</h4>">
                <div style="background-image: url('img/nina-fry-actor.jpg')" class="grid-item">
                    <img src="img/nina-fry-actor.jpg">
                </div>
                <h3>Acting Reel</h3>
            </li>
            <li class="gallery-item hide-gallery"
                data-src="img/work/acting-reel-1.jpg"
                data-sub-html="<h4>Nina Fry: Acting Reel</h4>">
            </li>-->

        </ul>
    </div>
</section>