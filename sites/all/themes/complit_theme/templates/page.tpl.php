<header>
    <div>        
        <nav class="navbar navbar-expand-sm navbar-dark bg-black text-white container-fluid" id="top-header-nav">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <?php print render($page['menu_top']); ?>
            </div>
        </nav>        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm container-fluid" id="main-menu">
            <a class="navbar-brand" href="/">Complit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <?php print render($page['menu_bottom']); ?>
            </div>
        </nav>
    </div>
</header>

<main role="main">
    <div>
<!--        <nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">

                <div class="row justify-content-center">
                    <div class="col">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="pages-inner.html">Inner Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Starting Up - A Candid Documentary</li>
                        </ol>
                    </div>
                    end of col
                </div>
                end of row

            end of container
        </nav>-->
<!--    <nav aria-label="breadcrumb" role="navigation" class="text-white position-absolute">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>



                            <li class="breadcrumb-item active" aria-current="page">
                                Wingman Components
                            </li>
                        </ol>
                    </div>
                    end of col
                </div>
                end of row
            </div>
            end of container
        </nav>-->
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