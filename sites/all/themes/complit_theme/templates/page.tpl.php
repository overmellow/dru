<header>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" <?php if (user_is_logged_in()): ?> style="margin-top: 28px; z-index: 990;" <?php endif; ?>>
            <a class="navbar-brand" href="/">Complit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <?php print render($page['menu_top']); ?>
            </div>
        </nav>
    </div>
</header>

<main role="main">
    <div>
        <?php print render($page['content']); ?>
    </div>
</main>

<footer class="footer-top">        
    <div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex">
                <span class="text-muted"><?php print render($page['footer_top_one']); ?></span>
            </div>
            <div class="col-sm-6 d-flex">
                <span class="text-muted"><?php print render($page['footer_top_two']); ?></span>
            </div>
        </div>                        
    </div>
</footer>

<footer class="footer">        
    <div class="container">
        <div class="row">
            <?php if (!empty($page['footer_one'])): ?>
            <div class="col-sm d-flex">
    `            <?php print render($page['footer_one']); ?>                             
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_two'])): ?>
            <div class="col-sm d-flex justify-content-center">
                <?php print render($page['footer_two']); ?>                             
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_three'])): ?>
            <div class="col-sm d-flex justify-content-center">                
                <?php print render($page['footer_three']); ?>                                 
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_four'])): ?>
            <div class="col-sm d-flex justify-content-end">                
                <?php print render($page['footer_four']); ?>                                 
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