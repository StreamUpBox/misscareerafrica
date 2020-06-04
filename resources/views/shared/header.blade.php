<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#Translate"
    style="position:fixed; bottom:10px;right:2px; color:#fff">
    <span>Translate</span>
</button>

<div id="Translate" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title pull-left">Translate </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>

            </div>
            <div class="modal-body" style="overflow:hidden; text-align:left;">

                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="modal-title pull-left">Translate </h4>
                    </div>
                </div>
                <div id="google_translate_element"></div>
                <script type="text/javascript"
                    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'en'
                        }, 'google_translate_element');
                    }

                </script>

            </div>
        </div>
    </div>
</div>

<header id="fh5co-header-section">
    <div class="mr-5 ml-5">
        <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <span id="fh5co-logo"><a href="/"><img src="images/logo.png" class="img-rounded"
                        style="width: 200px;height:80px;position: relative;bottom:25px"></a></span>
            <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                    <li><a href="/" style="color: #556cd6;;">HOME</a></li>
                    <?php $crowned=\App\Models\Crowned::where('published',1)->count(); 
                      $finalSelected =    \App\Models\Session::where('final_selected',1)->first();
                      $preSelected =    \App\Models\Session::where('is_voting_open',1)->first();
                                    if($crowned > 0){ ?>
                    <li><a href="crowned" style="color: #556cd6;;">Crowned</a></li>
                    <?php } ?>

                    <!-- SA Region-15 Preselected -->
                    <li><a href="photos" style="color: #556cd6;;">Photos</a></li>

                    <li><a class="apply" style="color: #556cd6;;" href="candidate-application">APPLY</a></li>
                    <?php if($preSelected){ ?>
                    <li><a class="can-voting" style="color: #556cd6;;" href="selected-candidates">
                    {{$preSelected->voting_candidate_title}}</a></li>
                    <?php } ?>

                 <?php if($finalSelected){ ?>
                    <li><a class="" style="color: #556cd6;;" href="top-selected-candidates">{{$finalSelected->top_selected_title}}</a></li>
                    <?php } ?>
                    <?php 
                    $opnDonateSessions=\App\Models\DonateSessions::where('can_open_donation_system',1)->count(); 

                    $appyDonateSessions=\App\Models\DonateSessions::where('can_start_application_system',1)->count(); 

                     if($opnDonateSessions > 0 || $appyDonateSessions){ ?>
                    <li><a style="color: #556cd6;;" href="#">DONATION</a>
                        <ul class="fh5co-sub-menu">
                        <?php  if($appyDonateSessions > 0){ ?>
                            <li><a href="apply-donation">Apply For Donation</a></li>
                            <?php } ?>
                            <?php  if($opnDonateSessions > 0){ ?>
                                    <li><a href="donate-to-her">Donate To Her</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>


                    <li><a class="" style="color: #556cd6;;" href="past-candidates">PAST CANDIDATES</a></li>

                    <li><a style="color: #556cd6;;" href="#">ORG</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="blog">Our Blog</a></li>
                                    <li><a href="scope">Our scope</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                </ul>
                             </li>

                    <li><a style="color: #556cd6;;" href="#">SUPPORT</a>
                        <ul class="fh5co-sub-menu">
                            <li><a href="volunteer">Become a volunteer</a></li>
                            <li><a href="sponsor">Become a sponsor</a></li>
                        </ul>
                    </li>
                    <li><a style="color: #556cd6;;" href="#">MORE..</a>
                        <ul class="fh5co-sub-menu" style="margin-left:-50px">
                       
                            <li><a href="book-mca" style="color: #556cd6;;">BOOK HER</a></li>

                            <li><a href="videos">VIDEO AND LINKS</a></li>
                            <li><a href="scholarship">MCA SCHOLARSHIP</a></li>
                            <li><a href="fund">MCA FUND</a></li>
                            <li><a href="book-mca">BOOK MCA</a></li>
                            <li><a href="eligibility">ELIGIBILITY</a></li>

                           

                        </ul>
                    </li>



                </ul>
            </nav>
        </div>
    </div>
</header>
