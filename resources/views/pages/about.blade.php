@extends('layouts.main')

@section('content')

    @include('partials.status-panel')

   
<!--Section: Author box-->
<section class="mb-4">

    <!--Author box-->
    <div class="author-box">

        <div class="row">
            <!--Name-->
            <h3 class="h3-responsive text-xs-center">About author</h3>
            <hr>

            <!--Avatar-->
            <div class="col-xs-12 col-sm-2">
                <img src="http://2.gravatar.com/avatar/e9de252843e9ff541060127dac7126ed?s=150&d=mm&r=g" class="img-fluid rounded-circle z-depth-2">
            </div>

            <!--Author Data-->
            <div class=" col-xs-12 col-sm-10">

                <p><strong>Yuttapong Napikun</strong></p>

                <div class="personal-sm">
                    <a class="email-ic"><i class="fa fa-home"> </i></a>
                    <a class="fb-ic"><i class="fa fa-facebook"> </i></a>
                    <a class="tw-ic"><i class="fa fa-twitter"> </i></a>
                    <a class="gplus-ic"><i class="fa fa-google-plus"> </i></a>
                    <a class="li-ic"><i class="fa fa-linkedin"> </i></a>
                    <a class="email-ic"><i class="fa fa-envelope-o"> </i></a>
                </div>

                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint esse nulla quia quam veniam commodi dicta, iusto inventore. Voluptatum pariatur eveniet ea, officiis vitae praesentium beatae quas libero, esse
                    facere.</p>
            </div>

        </div>
    </div>
    <!--/.Author box-->

</section>
<!--/Section: Author box-->




<!--Section: Comments list-->
<section>

    <!--Main wrapper-->
    <div class="comments-list">
        <div class="section-heading">
            <h1>Comments <span class="tag blue">3</span></h1>
        </div>
        <!--First row-->
        <div class="row">
            <!--Image column-->
            <div class="col-sm-2 col-xs-12">
                <img src="http://mdbootstrap.com/images/avatars/avatar-1.jpg">
            </div>
            <!--/.Image column-->

            <!--Content column-->
            <div class="col-sm-10 col-xs-12">
                <a><h3 class="user-name">John Doe</h3></a>

                <div class="card-data">
                    <ul>
                        <li class="comment-date"><i class="fa fa-clock-o"></i> 05/10/2015</li>
                    </ul>
                </div>

                <p class="comment-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident.</p>
            </div>
            <!--/.Content column-->

        </div>
        <!--/.First row-->

        <!--Second row-->
        <div class="row">
            <!--Image column-->
            <div class="col-sm-2 col-xs-12">
                <img src="http://mdbootstrap.com/images/avatars/avatar-2.jpg">
            </div>
            <!--/.Image column-->

            <!--Content column-->
            <div class="col-sm-10 col-xs-12">
                <a><h3 class="user-name">Marta Tev</h3></a>

                <div class="card-data">
                    <ul>
                        <li class="comment-date"><i class="fa fa-clock-o"></i> 08/10/2015</li>
                    </ul>
                </div>

                <p class="comment-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur.</p>
            </div>
            <!--/.Content column-->

        </div>
        <!--/.Second row-->

        <!--Third row-->
        <div class="row">
            <!--Image column-->
            <div class="col-sm-2 col-xs-12">
                <img src="http://mdbootstrap.com/images/avatars/img%20(1).jpg">
            </div>
            <!--/.Image column-->

            <!--Content column-->
            <div class="col-sm-10 col-xs-12">
                <a><h3 class="user-name">Anna Maria</h3></a>

                <div class="card-data">
                    <ul>
                        <li class="comment-date"><i class="fa fa-clock-o"></i> 17/10/2015</li>
                    </ul>
                </div>

                <p class="comment-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                    qui officia.
                </p>
            </div>
            <!--/.Content column-->

        </div>
        <!--/.Third row-->

    </div>
    <!--/.Main wrapper-->

</section>
<!--/Section: Comments list-->

@stop