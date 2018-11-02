<header>
    <div>        
        <nav class="navbar navbar-expand-sm navbar-dark bg-black text-white" id="top-header-nav">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">                
                        <?php print render($page['menu_top']); ?>
                    </div>
                </div>
            </div>            
        </nav>        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm" id="main-menu">
            <div class="wrapper">
                <div class="container-fluid">
<!--                    <a class="navbar-brand" href="/">Complit</a>-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <a class="navbar-brand" href="/">Complit</a>
                        <?php print render($page['menu_bottom']); ?>
                        
                    </div>
                </div>
            </div>            
        </nav>             
    </div>
</header>

<main role="main">
    <div class="shadow-sm">
        <?php print render($page['sliding']); ?> 
    </div>       
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
<!--                    <nav>
                        <div class="nav nav-tabs nav-justified mb-3" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                <h3>News</h3>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <h3>Feature Courses</h3>
                            </a>
                        </div>
                    </nav>-->
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
                <div class="col-4">
                    <?php print render($page['sidebar_right']); ?>  
                </div>              
            </div>
        </div>
    </div>    
</main>


<footer class="footer-top">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 d-flex">
                    <span class="text-muted"><?php print render($page['footer_top_one']); ?></span>
                </div>
                <div class="col-sm-6 d-flex">
                    <span class="text-muted"><?php print render($page['footer_top_two']); ?></span>
                </div>
            </div>                        
        </div>
    </div>    
</footer>

<footer class="footer">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <?php if (!empty($page['footer_one'])): ?>
                <div class="col-sm d-flex">
                    <?php print render($page['footer_one']); ?>                             
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
    </div>
</footer>

<footer class="footer-copyright"> 
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm">
                    <span class="text-muted"><?php print render($page['footer_copyright']); ?></span>
                </div>                
            </div>                        
        </div>
    </div>    
</footer>