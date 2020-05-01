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
                    <li><a href="/" style="color: white;">HOME</a></li>
                    <?php $crowned=\App\Models\Crowned::where('published',1)->count(); 
                                    if($crowned > 0){ ?>
                    <li><a href="crowned" style="color: white;">Crowned</a></li>
                    <?php } ?>
                    <li><a href="photos">Photos</a></li>

                    <li><a class="apply" style="color: white;" href="candidate-application">APPLY
                            NOW</a></li>

                    <li><a class="can-voting" style="color: white;" href="selected-candidates">SA Region-15
                            Preselected</a></li>
                    <!-- <li><a class="can-voting" style="color: white;" href="selected-candidates">VOTE PRESELECTED CANDIDATES</a></li> -->

                    <li><a class="" style="color: white;" href="past-candidates">PAST CANDIDATES</a></li>


                    <li><a style="color: white;" href="#">ORGANIZATION</a>
                        <ul class="fh5co-sub-menu">
                            <li><a href="blog">Our Blog</a></li>
                            <li><a href="scope">Our scope</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a style="color: white;" href="#">SUPPORT</a>
                        <ul class="fh5co-sub-menu">
                            <li><a href="volunteer">Become a volunteer</a></li>
                            <li><a href="sponsor">Become a sponsor</a></li>
                        </ul>
                    </li>
                    <li><a style="color: white;" href="#">MORE..</a>
                        <ul class="fh5co-sub-menu" style="margin-left:-50px">
                            <li><a href="book-mca" style="color: white;">BOOK HER</a></li>

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
