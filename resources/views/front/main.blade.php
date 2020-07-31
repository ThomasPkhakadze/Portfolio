@extends('layouts.front')

@section('content')
<!--
@if(request()->has('#success'))
<div class="card rounded-sm dark" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.3)), url('https://source.unsplash.com/4qSb_FWhHKs') no-repeat center center / cover; padding: 60px 50px; border: 12px solid #FFF">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h2 class="card-title text-white font-body">Subscribe to our Newsletter!</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nisi beatae temporibus nobis optio eos?</p>

        <div class="subscribe-widget" data-loader="button">

            <div class="widget-subscribe-form-result"></div>

            <form action="include/subscribe.php" role="form" method="post" class="mb-0">
                <label for="widget-subscribe-form-email">Email Address <span>*</span></label>
                <input type="email" name="widget-subscribe-form-email" id="widget-subscribe-form-email" class="form-control required not-dark" placeholder="name@email.com">
                <button class="btn rounded btn-danger py-2 mt-3 btn-block uppercase ls1 t600" type="submit">Subscribe</button>
            </form>

        </div>
    </div>
</div>
@endif
-->
@foreach ($intros as $intro)
<section id="slider" class="slider-element full-screen force-full-screen clearfix">
    <div class="full-screen force-full-screen"
        style="position: fixed; width: 100%; background: #FFF url('{{ asset($intro->image) }}') no-repeat  center; background-size: cover; background-attachment: fixed;">

        <div class="container clearfix">
            <div class="slider-caption dark slider-caption-right">
                <h2 class="font-primary ls5" data-animate="fadeIn">{{ $intro->title_ge }}</h2>
                <p class="t300 ls1 d-none d-sm-block" data-animate="fadeIn" data-delay="400">{{ $intro->desc_ge }}.</p>
                <a class="font-primary noborder ls1 topmargin-sm inline-block more-link text-white dark d-none d-sm-inline-block"
                    data-animate="fadeIn" data-delay="800" data-scrollto="#section-works" data-offset="0"
                    href="#"><u>{{ $intro->link_ge }}</u> &rarr;</a>
            </div>
        </div>

    </div>
    <div class="full-screen force-full-screen blurred-img"
        style="position: fixed; width: 100%; top: 0; left: 0; background: #FFF url('{{ asset($intro->image) }}') no-repeat  center; background-size: cover; background-attachment: fixed;">
    </div>
</section>

<!-- Content
		============================================= -->
<section id="content" class="nobg">

    <div class="content-wrap nobottompadding nobg">

        <div id="section-skills" class="section nomargin page-section dark nobg clearfix" style="padding-bottom: 50px">
            <div class="container clearfix">
                <div class="heading-block">
                    <h2 class="font-secondary center">My Experiments.</h2>
                </div>
                @foreach ($skills as $skill)
                {{ $counter++ }}
                @if($counter % 3 != 0)
                <div class="col_one_third ">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="{{ asset($skill->image) }}" alt=""></a>
                        </div>
                        <h3 class="t400 ls2" style="color: #FFF">{{ $skill->title_ge }}</h3>
                        {!! $skill->desc_ge !!}
                    </div>
                </div>
                @else
                <div class="col_one_third col_last">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="{{ asset($skill->image) }}" alt=""></a>
                        </div>
                        <h3 class="t400 ls2" style="color: #FFF">{{ $skill->title_ge }}</h3>
                        <p style="color:#AAA;">{!! $skill->desc_ge !!}</p>
                    </div>
                </div>

                <div class="clear"></div>
                @endif
                @endforeach




            </div>
        </div>

        @foreach ($abouts as $about)
        <div id="section-about" class="section page-section nomargin clearfix justException"
            style="background:  url('{{ asset($about->image) }}') no-repeat center center; background-size: cover; padding: 100px 0">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-md-5 offset-md-7 clearfix m-3">
                        <div class="video-wrap">
                            <div class="video-overlay d-sm-block d-md-none"
                                style="background: rgba(179, 173, 142, 0.815);">
                            </div>
                        </div>
                        <div class="heading-block">
                            <h2 class="font-secondary">{{ $about->title_ge }}</h2>
                            <span>{{ $about->desc_ge }}</span>
                        </div>
                        <table class=" table">
                            <tbody>
                                <tr>
                                    <td class="notopborder"><strong>Name:</strong></td>
                                    <td class="notopborder">{{ $about->name_ge }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Gender:</strong></td>
                                    <td>{{ $about->gender_ge }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $about->email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Phone:</strong></td>
                                    <td>{{ $about->phone_number }}</td>
                                </tr>
                                <tr>
                                    <td><strong>DOB:</strong></td>
                                    <td>{{ $about->birth_date_ge }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Nationality:</strong></td>
                                    <td>{{ $about->nationality_ge }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('pdf.download', app()->getLocale()) }}"
                            class="button button-large button-border button-black button-dark noleftmargin"><i
                                class="icon-line-cloud-download"></i> Download CV</a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

        <div class="section nomargin skill-area bgcolor dark clearfix" style="padding: 80px 0;">
            <div class="container clearfix">
                <div class="row clearfix">

                    <div class="col-lg-4 col-12">
                        <h4>Skills</h4>
                        <ul class="skills">
                            @foreach ($SS as $ss)
                            <li data-percent="{{ $ss->skills_int }}">
                                <span>{{ $ss->skills_str_ge }}</span>
                                <div class="progress">
                                    <div class="progress-percent">
                                        <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                data-to="{{ $ss->skills_int }}" data-refresh-interval="30"
                                                data-speed="1100"></span>%
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    @foreach ($facts as $fact)
                    <div class="col-lg-4 col-md-6">
                        <h4>Education</h4>
                        <div class="skill-info">
                            {{$fact->education_ge}}
                        </div>
                    </div>

                    @endforeach
                    <div class="w-100 bottommargin d-block d-md-none"></div>

                    <div class="col-lg-4 col-md-6">
                        <h4>Experience</h4>
                        <div class="skill-info">
                            {{ $fact->experience_ge }}
                        </div>
                    </div>

                    <div class="w-100 bottommargin d-block d-lg-none clear"></div>



                </div>
            </div>
        </div>

        
        <div id="section-works" class="section page-section nomargin clearfix"
           style="background: #EEE @foreach($works as $work)url('{{ asset($work->bg_img) }}') @endforeach no-repeat center right; background-size: cover; padding: 100px 0">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="heading-block">
                            @foreach ($works as $work)
                            <h2 class="font-secondary">@if(!empty($work->title_ge)) {{$work->title_ge }}@endif</h2>
                            <span class="notopmargin">@if(!empty($work->desc_ge)) {{$work->desc_ge }}@endif</span>
                            @endforeach
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <ul class="niche-demos-lists nobottommargin lists-1">
                                    @foreach ($works as $work)
                                    <li><a href="demo-travel.html"><img src="{{ asset($work->image) }}"
                                        alt="">{{ $work->work_ge }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        </div>
                        <a href="#"
                            class="button button-large button-border button-black button-dark topmargin-sm noleftmargin"><i
                                class="icon-line-stack-2"></i> See More Works</a>
                    </div>
                </div>
            </div>
            <div class="video-wrap">
                <div class="video-overlay d-block d-xl-none" style="background: rgba(208, 235, 250, 0.678);">
                </div>
            </div>
        </div>
        

        <div id="section-articles" class="section page-section nomargin bgcolor clearfix" style="padding: 100px 0">
            <div class="container clearfix">

                <div class="dark">
                    <div class="heading-block">
                        <h2 class="font-secondary">Latest Articles.</h2>
                        <span class="notopmargin">Lorem ipsum dolor sit amet.</span>
                    </div>
                </div>

                <div id="posts" class="post-grid grid-3 clearfix">
                    @foreach ($articles as $article)

                    <div class="entry nobottomborder nobottompadding clearfix">
                        <div class="entry-box-shadow">
                            <div class="entry-image nobottommargin" height="150px">
                                <a href="" data-lightbox="image"><img class="image_fade" width="150px"
                                        src="{{ asset($article->image) }}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-meta-wrapper">
                                <div class="entry-meta nomargin clearfix">
                                    <a href="#"
                                        class="text-muted">{{ date('M j, Y H:i', strtotime($article->created_at)) }}</a>
                                </div>
                                <div class="entry-title clearfix">
                                    <h2><a href="#">{{ $article->title_ge }}</a></h2>
                                </div>
                                <div class="entry-content clearfix">
                                    <p class="nobottommargin">{!! $article->body_ge !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        @foreach ($menuItems as $MenuItem)
        <div id="{{ $MenuItem->label }}" class="section page-section nomargin clearfix"
            style="background: #EEE url('{{ asset($MenuItem->image) }}') no-repeat center right; background-size: cover; padding: 100px 0">
            <div class="container clearfix">
                <div class="row clearfix">
                    @if(!empty($MenuItem->image))
                    <div class="col-lg-5 offset-lg-1">
                        <div class="heading-block">
                            <h2 class="font-secondary">{{ $MenuItem->title_ge }}</h2>
                            <span class="notopmargin">.</span>
                        </div>
                        <div class="row clearfix">
                            {{ $MenuItem->body_ge }}
                        </div>

                    </div>
                    <div class="col-lg-7" >
                        <img src="{{ asset($MenuItem->image) }}" height = "100%" width="100%">
                    </div>
                    @else
                    <div class="col-lg-12 offset-lg-1">
                        <div class="heading-block">
                            <h2 class="font-secondary">{{ $MenuItem->title_ge }}</h2>
                            <span class="notopmargin">.</span>
                        </div>
                        <div class="row clearfix">
                            {{ $MenuItem->body_ge }}
                        </div>

                    </div>
                    @endif
                </div>
            </div>
            <div class="video-wrap">
                <div class="video-overlay d-block d-xl-none" style="background: {{ $MenuItem->bg_color }};">
                </div>
            </div>
        </div>
        @endforeach

        <section class="section page-section nomargin clearfix ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form class="row" id="event-registration" action="{{ route('mail.send', app()->getLocale()) }}" method="POST">
                            @csrf
                            <div class="col-6 form-group">
                                <label>Name:</label>
                                <input type="text" name="name"  class="form-control required" value="" placeholder="Enter your First Name">
                            </div>
                            <div class="col-12 form-group">
                                <label>Email:</label>
                                <input type="email" name="email" id="event-registration-email" class="form-control required" value="" placeholder="Enter your Email Address">
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Bio:</label>
                                    <textarea name="text"  class="form-control required" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit"  class="btn btn-primary">Send</button>
                            </div>
            
                            <input type="hidden" name="prefix" value="event-registration-">
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

</section><!-- #content end -->
@endforeach
@endsection