<?php include('header.php'); ?>
<section id="home">
        <ul class="slideshow">
            <li style="background-image:url('img/theconnection_twitch.gif')">
                <a href="https://www.twitch.tv/ratatatpark" target="_blank">
                    <img src="img/theconnection_twitch.gif" alt="Recent Projects: The Connection">
                    <span>
                        <h3>May 7th at 7:30 EST</h3>
                        <h3>Watch on twitch.tv ></h3>
                        <h2>The Connection</h2>
                        <h5>LIVE!</h5>
                        <h6>The</h6>
                        <h6>Connection</h6>
                    </span>
                </a>
            </li>
        </ul>
</section>
</div><!--closing wrap-->


<section id="work">
    <div>
    <h2>Selected Work</h2>
        <ul id="lightgallery" class="grid-container">

            <!--Happy Birthday Casey-->
            <li class="gallery-item"
                data-src="img/work/happy-birthday-casey-1.jpg"
                data-sub-html="<h4>Happy Birthday Casey</h4><p>Written by Emily J. Daly</p><p>photo by Nathaniel Johnston</p>">
                <div style="background-image: url('img/happy-birthday-casey.jpg')" class="grid-item">
                    <img src="img/happy-birthday-casey.jpg">
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
            <li class="gallery-item"
                data-src="img/work/the-connection-1.jpg"
                data-sub-html="<h4>The Connection</h4><p>Coming Soon</p>">
                <div style="background-image: url('img/the-connection.jpg')" class="grid-item">
                    <img src="img/the-connection.jpg">
                </div>
                <h3>The Connection</h3>
            </li>

            <!--Acting Reel-->
            <li class="gallery-item"
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
            </li>

        </ul>
    </div>
</section>

<script>
    lightGallery(document.getElementById('lightgallery'), {
        selector: '.gallery-item'
    });
</script>


<div class="wrap"><!--opening wrap-->
    <section id="about">
        <div style="background-image:url('img/nina-fry-director.jpg')">
            <img src="img/nina-fry-director.jpg" alt="Nina Fry, Director" data-credit="photograph by Nathaniel Johnston">
        </div>
        <div>
            <h2>About</h2>
            <h1>Nina Fry<span> Director</span></h1>
            <p>Originally from London, England, Nina has lived in Brooklyn, NY for the past 10 years. She is a director of plays and operas with an emphasis on new work that explores the complexities of the human experience.</p>
        </div>
    </section>
</div><!--closing wrap-->

<!--<section id="resume">
    <div>
        <h2>Resume</h2>

        <section>
            <h3>Directing</h3>
            <ul class="grid-container">
                <li><strong>The Turn of the Screw</strong> <br>(Assistant Director) <br>Directed by Kate Whoriskey <br>Gerald W Lynch Theatre</li>
                <li><strong>Nightlife The Stonewall Operas</strong> (AOP / NYU)&nbsp; <br>Shubert Theatre &amp; The Stonewall Inn</li>
                <li><strong>Harper Regan by Simon Stephens</strong> <br>Lee Strasberg Theatre &amp; Film Institute<br>The Irma Sandy Theatre</li>
                <li><strong>Shotz</strong> (monthly productions) <br>AMIOS Cooperative <br>The Kraine Theatre</li>
                <li><strong>The Secret World Inside Me / SHIT</strong> <br>Cimientos 2017 &amp; 2018 <br>IATI Theater</li>
                <li><strong>World Builders</strong> (Assistant Director) <br>Flux Theatre Ensemble <br>Kelly O’Donnell (Director)</li>
                <li><strong>My Favourite Flower</strong> <br>Love Drunk Series 11 <br>The Drama League</li>
                <li><strong>My Favourite Flower</strong> (film version) <br>2n8 Productions, LLC</li>
            </ul>
        </section>

        <section>
            <h3>Directing Programs</h3>
            <ul class="grid-container">
                <li><strong>Directors Workshop I</strong> <br>The Barrow Group 11 week course</li>
                <li><strong>Directors Lab Chicago</strong> <br>Victory Gardens Theater <br>Class of 2017</li>
                <li><strong>SDC Foundation Observership</strong> <br>321 West 44th Theatre <br>Class of 2017/18</li>
                <li><strong>Di Trevis Shakespeare Workshop</strong> <br>The Freedom Theatre</li>
                <li><strong>Michael Howard Studios</strong> <br>Polina Klimovitskaya</li>
            </ul>
        </section>

        <section>
            <h3>Acting</h3>
            <h4>Television</h4>
            <ul class="grid-container">
                <li><strong>EastEnders</strong> <br>Series Regular (1997-98) BBC (Contracted)</li>
                <li><strong>Bombshell</strong> <br>Guest Star Shed Productions, Jim Loach (Director)</li>
                <li><strong>Grange Hill</strong> <br>Series Regular (1989-95) BBC (Contracted)</li>
            </ul>
            <h4>Theatre</h4>
            <ul class="grid-container">
                <li><strong>Spring Awakening</strong><br>Martha Union Theatre</li>
                <li><strong>The Art Of Success</strong> <br>Louisa DCL</li>
                <li><strong>You Never Can Tell</strong> <br>Gloria DCL</li>
            </ul>
            <h4>Film</h4>
            <ul class="grid-container">
                <li><strong>Vera Drake </strong><br>Mary McWilliams<br>Mike Leigh (Director)</li>
            </ul>
        </section>

        <section>
            <h3>Education</h3>
            <ul class="grid-container">
                <li><strong>The New School</strong><br/>MFA in Directing (2021)</li>
                <li><strong>Drama Centre London</strong><br/>BA Hons in Acting</li>
                <li><strong>Barnet College, London</strong><br/>Access Course in Psychology &amp; Social Sciences</li>
                <li><strong>Trinity TESOL, Granada</strong><br/>TEFL Certified</li>
            </ul>
        </section>

        <section>
            <h3>Additional</h3>
            <ul class="grid-container">
                <li><strong>Full Equity</strong> (US/UK)</li>
                <li><strong>Dual Citizenship</strong> (US/UK)</li>
                <li><strong>Driving &amp; Motorcycle Licenses</strong></li>
            </ul>
        </section>
    </div>
</section>-->

<div class="wrap"><!--opening wrap-->

    <section id="contact">
        <div>
            <h2>Contact</h2>
            <address>
                <h4>Nina Fry, Director</h4>
                Brooklyn, NY<br/>
                <!--email-->
                <a href="ninafry77@gmail.com">ninafry77@gmail.com</a><br/>
                <!--phone-->
                <!--<a href="tel:222-222-2222">222-222-2222</a>-->
            </address>
        </div>
    </section>



<?php include('footer.php'); ?>
