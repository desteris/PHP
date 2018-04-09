<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2><?php echo get_theme_mod('banner_heading', 'Follow Us');?></h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                    <li class="list-inline-item">
                      <?php if(get_theme_mod('facebook_url', 'facebook.com') != ''): ?>
                        <a href="<?php echo get_theme_mod('facebook_url', 'facebook.com'); ?>" class="btn btn-primary" target="_blank">Facebook <i class="fab fa-facebook "></i></a>
                      <?php endif; ?>
                    </li>
                    <li class="list-inline-item">
                      <?php if(get_theme_mod('twitter_url', 'twitter.com') != ''): ?>
                        <a href="<?php echo get_theme_mod('twitter_url', 'twitter.com'); ?>" class="btn btn-primary" target="_blank">Twitter <i class="fab fa-twitter "></i></a>
                      <?php endif; ?>
                    </li>
                    <li class="list-inline-item">
                      <?php if(get_theme_mod('linkedin_url', 'linkedin.com') != ''): ?>
                        <a href="<?php echo get_theme_mod('linkedin_url', 'linkedin.com'); ?>" class="btn btn-primary" target="_blank">Linked In <i class="fab fa-linkedin "></i></a>
                      <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#about">About</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#services">Services</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; CleanCut Theme 2016. All Rights Reserved</p>
            </div>
        </div>
    </div>

</footer>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script type="text/javascript">
// window.addEventListener("scroll", myScript);
//
// function myScript(){
//   let el = document.querySelector('.col-lg-5');
//   el.classList.add("animated");
//   el.classList.add("fadeInLeft");
// }
</script>
<?php wp_footer(); ?>
</body>
</html>
