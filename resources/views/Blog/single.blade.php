@extends('layouts.bloglayout')

@section('content')
    <div class="col-md-12 col-sm-12">
        <h1>Blog Item</h1>
        <div class="content-page">
            <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->
                <div class="col-md-9 col-sm-9 blog-item">
                    <div class="blog-item-img">
                        <!-- BEGIN CAROUSEL -->
                        <div class="front-carousel">
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="assets/pages/img/posts/img1.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <!-- BEGIN VIDEO -->
                                        <iframe src="http://player.vimeo.com/video/56974716?portrait=0" style="width:100%; border:0" allowfullscreen="" height="259"></iframe>
                                        <!-- END VIDEO -->
                                    </div>
                                    <div class="item active">
                                        <img src="assets/pages/img/posts/img3.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END CAROUSEL -->
                    </div>
                    <h2><a href="javascript:;">Corrupti quos dolores etquas</a></h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
                    <blockquote>
                        <p>Pellentesque ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Integer posuere erat a ante.</p>
                        <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                    <p>Culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                    <ul class="blog-info">
                        <li><i class="fa fa-user"></i> By admin</li>
                        <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                        <li><i class="fa fa-comments"></i> 17</li>
                        <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                    </ul>

                    <h2>Comments</h2>
                    <div class="comments">
                        <div class="media">
                            <a href="javascript:;" class="pull-left">
                                <img src="assets/pages/img/people/img1-small.jpg" alt="" class="media-object">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading <span>5 hours ago / <a href="javascript:;">Reply</a></span></h4>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                <!-- Nested media object -->
                                <div class="media">
                                    <a href="javascript:;" class="pull-left">
                                        <img src="assets/pages/img/people/img2-small.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading <span>17 hours ago / <a href="javascript:;">Reply</a></span></h4>
                                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    </div>
                                </div>
                                <!--end media-->
                                <div class="media">
                                    <a href="javascript:;" class="pull-left">
                                        <img src="assets/pages/img/people/img3-small.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading <span>2 days ago / <a href="javascript:;">Reply</a></span></h4>
                                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    </div>
                                </div>
                                <!--end media-->
                            </div>
                        </div>
                        <!--end media-->
                        <div class="media">
                            <a href="javascript:;" class="pull-left">
                                <img src="assets/pages/img/people/img4-small.jpg" alt="" class="media-object">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading <span>July 25,2013 / <a href="javascript:;">Reply</a></span></h4>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <!--end media-->
                    </div>

                    <div class="post-comment padding-top-40">
                        <h3>Leave a Comment</h3>
                        <form role="form">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label>Email <span class="color-red">*</span></label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" rows="8"></textarea>
                            </div>
                            <p><button class="btn btn-primary" type="submit">Post a Comment</button></p>
                        </form>
                    </div>
                </div>
                <!-- END LEFT SIDEBAR -->

                <!-- BEGIN RIGHT SIDEBAR -->
                <div class="col-md-3 col-sm-3 blog-sidebar">
                    <!-- CATEGORIES START -->
                    <h2 class="no-top-space">Categories</h2>
                    <ul class="nav sidebar-categories margin-bottom-40">
                        <li><a href="javascript:;">London (18)</a></li>
                        <li><a href="javascript:;">Moscow (5)</a></li>
                        <li class="active"><a href="javascript:;">Paris (12)</a></li>
                        <li><a href="javascript:;">Berlin (7)</a></li>
                        <li><a href="javascript:;">Istanbul (3)</a></li>
                    </ul>
                    <!-- CATEGORIES END -->

                    <!-- BEGIN RECENT NEWS -->
                    <h2>Recent News</h2>
                    <div class="recent-news margin-bottom-10">
                        <div class="row margin-bottom-10">
                            <div class="col-md-3">
                                <img class="img-responsive" alt="" src="assets/pages/img/people/img2-large.jpg">
                            </div>
                            <div class="col-md-9 recent-news-inner">
                                <h3><a href="javascript:;">Letiusto gnissimos</a></h3>
                                <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                            </div>
                        </div>
                        <div class="row margin-bottom-10">
                            <div class="col-md-3">
                                <img class="img-responsive" alt="" src="assets/pages/img/people/img1-large.jpg">
                            </div>
                            <div class="col-md-9 recent-news-inner">
                                <h3><a href="javascript:;">Deiusto anissimos</a></h3>
                                <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                            </div>
                        </div>
                        <div class="row margin-bottom-10">
                            <div class="col-md-3">
                                <img class="img-responsive" alt="" src="assets/pages/img/people/img3-large.jpg">
                            </div>
                            <div class="col-md-9 recent-news-inner">
                                <h3><a href="javascript:;">Tesiusto baissimos</a></h3>
                                <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                            </div>
                        </div>
                    </div>
                    <!-- END RECENT NEWS -->

                    <!-- BEGIN BLOG TALKS -->
                    <div class="blog-talks margin-bottom-30">
                        <h2>Popular Talks</h2>
                        <div class="tab-style-1">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Multipurpose</a></li>
                                <li><a data-toggle="tab" href="#tab-2">Documented</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane row-fluid fade in active">
                                    <p class="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
                                    <p><a class="more" href="javascript:;">Read more</a></p>
                                </div>
                                <div id="tab-2" class="tab-pane fade">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. aliquip jean shorts ullamco ad vinyl aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END BLOG TALKS -->

                    <!-- BEGIN BLOG PHOTOS STREAM -->
                    <div class="blog-photo-stream margin-bottom-20">
                        <h2>Photos Stream</h2>
                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img5-small.jpg"></a></li>
                            <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img1.jpg"></a></li>
                            <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img4-large.jpg"></a></li>
                            <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img6.jpg"></a></li>
                            <li><a href="javascript:;"><img alt="" src="assets/pages/img/pics/img1-large.jpg"></a></li>
                            <li><a href="javascript:;"><img alt="" src="assets/pages/img/pics/img2-large.jpg"></a></li>
                            <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img3.jpg"></a></li>
                            <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img2-large.jpg"></a></li>
                        </ul>
                    </div>
                    <!-- END BLOG PHOTOS STREAM -->

                    <!-- BEGIN BLOG TAGS -->
                    <div class="blog-tags margin-bottom-20">
                        <h2>Tags</h2>
                        <ul>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i>OS</a></li>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i>Metronic</a></li>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i>Dell</a></li>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i>Conquer</a></li>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i>MS</a></li>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i>Google</a></li>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i>Keenthemes</a></li>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i>Twitter</a></li>
                        </ul>
                    </div>
                    <!-- END BLOG TAGS -->
                </div>
                <!-- END RIGHT SIDEBAR -->
            </div>
        </div>
    </div>
@endsection
