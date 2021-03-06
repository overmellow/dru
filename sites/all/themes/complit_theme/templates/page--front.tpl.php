<header>
    <div>        
        <nav class="navbar navbar-expand-sm navbar-dark bg-black text-white hide-on-med-and-down" id="top-header-nav">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">                
                    <?php print render($page['menu_top']); ?>
                </div>
            </div>
        </nav>        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm" id="main-menu">
            <div class="container">
<!--                <a class="navbar-brand" href="/">Complit</a>-->
                <a class="navbar-brand" href="/"><img src="<?php print $logo; ?>" width="150px" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <?php print render($page['menu_bottom']); ?>
                </div>
            </div>
        </nav>             
    </div>
</header>

<main role="main">
    
    <div class="shadow-sm">
        <?php print render($page['sliding']); ?> 
    </div>       
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <ul class="nav nav-tabs nav-justified mb-3 quicktabs-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="home" aria-selected="true">
                            <h4>News</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="profile" aria-selected="false">
                            <h4>Feature Courses</h4>
                        </a>
                    </li>                    
                </ul>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php print render($page['sidebar_left']); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <?php print render($page['sidebar_left_second']); ?> 
                    </div>
                </div>                    
            </div>               
            <div class="col-md-12 col-lg-4">
                <?php print render($page['sidebar_right']); ?>  
            </div>              
        </div>
    </div>

</main>

<footer class="footer"> 
    <div id="footer-top">
        <div class="container">
            <div class="row pt-2">
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 d-flex justify-content-center" id="subscribe-newsletter">
                            <div class="text">Subscribe to<br> our newsletter</div>
                        </div>
                        <div class="col-md-12 col-lg-8 pr-5 py-2">
                            <?php print render($page['footer_top_one']); ?>   
                        </div>                                     
                    </div>                    
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-4" id="social-bookmarks">
                            <div class="text">Follow us<br>on social media</div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <ul class="social-bookmarks">                                
                                <li>
                                    <a href="https://www.facebook.com/morethan.just.themes/"><i class="fab fa-facebook-f"></i></a>
                                </li>                           
                                <li>
                                    <a href="https://www.linkedin.com/company/more-than-themes/"><i class="fab fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/morethanthemes/"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
<!--                        <div class="col-8 px-5 py-1">-->
                    <?php // print render($page['footer_top_two']); ?>
                        
<!--                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <div id="footer-middle">
        <div class="container">
            <div class="row">
                <?php if (!empty($page['footer_one'])): ?>
                <div class="col-md-12 col-lg-4">
                    <?php print render($page['footer_one']); ?>                             
                </div>
                <?php endif; ?>
                <?php if (!empty($page['footer_two'])): ?>
                <div class="col-md-12 col-lg-5">
                    <?php print render($page['footer_two']); ?>                             
                </div>
                <?php endif; ?>
                <?php if (!empty($page['footer_three'])): ?>
                <div class="col-md-12 col-lg-3">                
                    <?php print render($page['footer_three']); ?>                                 
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="subfooter">
        <div class="container">
            <div class="row" id="subfooter">
                <div class="col-sm">
                    <span class="text-muted"><?php print render($page['footer_copyright']); ?></span>
                </div>                
            </div>                        
        </div>
    </div>                    
</footer>