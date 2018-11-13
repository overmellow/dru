<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<br><br>
<div class="container">
    <div class="row">
        <div class="col col-9">
            <?php if ($tabs && user_is_logged_in()): ?>
                <div class="tabs">
                    <?php print render($tabs); ?>
                </div>
            <?php endif; ?>
            
            <div class="row">
                <div class="col-4">
                    <?php // print render($user_profile['user_picture']); ?>
                    <?php print render($user_profile['field_image']); ?>
                </div>
                <div class="col-8">
                    <h2><?php print render($user_profile['field_first_name']); ?></h2>
                    <p class="lead">Professor of English</p>
                    <div class="border-top my-3"></div>
                    <p><?php print render($user_profile['field_email']); ?></p>
                    <p><strong>Website:</strong> mfaraji.berkeley.edu</p>
                    <p><?php print render($user_profile['field_phone']); ?></p>
                    <p><?php print render($user_profile['field_cv']); ?></p>
                </div>
            </div>
            <br>
            <div class="row mb-2">
                <div class="col-12">
                    <h4>Bio</h4>
                    <div class="border-top"></div>
                    <p>I received my PhD in European History from the University of Chicago. Since coming to Berkeley in 1999, I have been working on two main research tracks: one on the history of legal and political ideas, and the other on the relationship between technology, science, and the history of human cognition. My undergraduate courses and graduate seminars are usually divided between these two main topic areas. My new book project will bring these interests closer together, as my research now focuses on the connections between reason, technology, war, and political organizations as they develop in the age of cybernetic systems theory and the</p>
                </div>                
            </div>            
            <div class="row mb-4">
                <div class="col-12">
                    <h4>Books</h4>
                    <div class="border-top mb-2"></div>
                    <div class="card-deck">
                        <div class="card" style="width:400px">
                          <img class="card-img-top" src="http://localhost/dru/sites/default/files/altieri.jpg" alt="Card image cap">                          
                        </div>
                        <div class="card" style="width:400px">
                          <img class="card-img-top" src="http://localhost/dru/sites/default/files/altieri.jpg" alt="Card image cap">                         
                        </div>
                        <div class="card" style="width:400px">
                          <img class="card-img-top" src="http://localhost/dru/sites/default/files/altieri.jpg" alt="Card image cap">
                        </div>
                    </div>
                </div>                
            </div>    
            <div class="row mb-2">
                <div class="col">
                    <div>                       
                        <ul class="nav nav-tabs nav-justified mb-3 quicktabs-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="home" aria-selected="true">Courses</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="profile" aria-selected="false">Select Publications</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="contact" aria-selected="false">Articles</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="home-tab">
                                Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="profile-tab">
                                Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="contact-tab">
                                Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem. Ullamco ut ad minim do mollit labore ipsum laboris ipsum commodo sunt tempor enim incididunt. Commodo quis sunt dolore aliquip aute tempor irure magna enim minim reprehenderit. Ullamco consectetur culpa veniam sint cillum aliqua incididunt velit ullamco sunt ullamco quis quis commodo voluptate. Mollit nulla nostrud adipisicing aliqua cupidatat aliqua pariatur mollit voluptate voluptate consequat non.
                            </div>
                        </div>
                    </div>                   
                    
                </div>
            </div>
        </div>
        <div class="col col-3">                                
            <?php print render($region['sidebar_right']); ?>
        </div>
    </div>        
<!--</div>
<div class="card">
    <div class="card-title">
        <?php print render($user_profile['field_username']);
            if ($account = menu_get_object('user'))
                {   print $account->name; } ?>
    </div>
    <div class="card-content">
        <div class="row blue lighten-5" style="margin: 0;">
            <div class="col s12 m12 l12" style="border: 1px solid #ddd; padding: 20px;">
                <div class="col s6 m3" style="min-height: 220px; min-width: 220px;">
                    <div class="white z-depth-1" style="border: 1px solid #ddd; height: 226px; width:226px; padding: 3px; border-radius: 5px;">
                        <?php print render($user_profile['field_image']); ?>
                    </div>
                </div>
                <div class="col s6 m9">
                    <h5>
                        <?php print render($user_profile['field_admin_title']); ?>
                    </h5>
                    <?php print render($user_profile['field_public_email_address']); ?>
                    <?php print render($user_profile['field_office']); ?>
                    <?php print render($user_profile['field_office_hours']); ?>
                    <?php print render($user_profile['field_education']); ?>
                    <?php $user_profile['field_research_areas']['#items'][0]['attributes']['target'] = "_blank"; print render($user_profile['field_research_areas']); ?>
                    <?php $user_profile['field_secondary_research_area']['#items'][0]['attributes']['target'] = "_blank"; print render($user_profile['field_secondary_research_area']); ?>                    
                    <?php $user_profile['field_laboratory_links']['#items'][0]['attributes']['target'] = "_blank"; print render($user_profile['field_laboratory_links']); ?>
                    <?php $user_profile['field_external_link']['#items'][0]['attributes']['target'] = "_blank"; print render($user_profile['field_external_link']); ?>
                    <?php print render($user_profile['field_school']); ?>
                    <?php $user_profile['field_curriculum_vitae']['#items'][0]['attributes']['target'] = "_blank"; print render($user_profile['field_curriculum_vitae']); ?>
                    <?php print render($user_profile['field_contact_info']); ?>
                    <?php print render($user_profile['field_other_info']); ?>
                </div>
                <div class="col s12 divider" style="margin-top: 15px;"></div>
                <div class="col s12" style="padding-top: 10px;">
                    <?php print render($user_profile['field_research_interests']); ?>                              
                </div>
            </div>
        </div>                    
        <div class="row" style="margin-bottom: 0px;">
            <div class="col s12 m12 l12">
                <ul class="collapsible z-depth-0" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active founders-rock"><i class="material-icons">whatshot</i>Research Description</div>
                        <div class="collapsible-body"><?php print render($user_profile['field_lab_and_research_narrative']); ?></div>
                    </li>
                    <li>
                        <div class="collapsible-header active founders-rock"><i class="material-icons">place</i>Selected Publications</div>
                        <div class="collapsible-body"><?php print render($user_profile['field_selected_publications']); ?></div>
                    </li>
                    <li>
                        <div class="collapsible-header active founders-rock"><i class="material-icons">filter_drama</i>Teaching</div>
                        <div class="collapsible-body"><?php print render($user_profile['field_teaching']); ?></div>
                    </li>                          
                </ul>
            </div>
        </div>
    </div>
</div>-->
