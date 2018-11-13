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
                <a class="navbar-brand" href="/">Complit</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <!--<a class="navbar-brand" href="/">Complit</a>-->
                    <?php print render($page['menu_bottom']); ?>

                </div>
            </div>
        </nav>             
    </div>
</header>

<main role="main">
    <?php print render($page['content']); ?>
</main>

<footer class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 d-flex">
                <span class="text-muted"><?php print render($page['footer_top_one']); ?></span>
            </div>
            <div class="col-md-12 col-lg-6 d-flex">
                <span class="text-muted"><?php print render($page['footer_top_two']); ?></span>
            </div>
        </div>
    </div>
</footer>

<footer class="footer">
    <div class="container">
        <div class="row">
            <?php if (!empty($page['footer_one'])): ?>
            <div class="col-md-12 col-lg-4 d-flex">
                <?php print render($page['footer_one']); ?>                             
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_two'])): ?>
            <div class="col-md-12 col-lg-4 d-flex">
                <?php print render($page['footer_two']); ?>                             
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_three'])): ?>
            <div class="col-md-12 col-lg-4 d-flex">                
                <?php print render($page['footer_three']); ?>                                 
            </div>
            <?php endif; ?>
        </div>            
    </div>
</footer>

<footer class="footer-copyright"> 
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <span class="text-muted"><?php print render($page['footer_copyright']); ?></span>
            </div>                
        </div>                        
    </div>
</footer>