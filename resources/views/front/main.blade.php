@extends('layouts.front')

@section('content')



@foreach ($intros as $intro)
<section id="slider" class="slider-element full-screen force-full-screen clearfix">
    <div class="full-screen force-full-screen"
        style="position: fixed; width: 100%; background: #FFF url('{{ asset($intro->image) }}') no-repeat  center; background-size: cover; background-attachment: fixed;">

        <div class="container clearfix">
            <div class="slider-caption  slider-caption-right">
                {!! $intro->title !!}
                <p class="t300 ls1 d-none d-sm-block" data-animate="fadeIn" data-delay="400">{!! $intro->desc !!}.</p>
                <a class="font-primary noborder ls1 topmargin-sm inline-block more-link text-white dark d-none d-sm-inline-block"
                    data-animate="fadeIn" data-delay="800" data-scrollto="#section-about" data-offset="0"
                    href="#"><u>{!! $intro->button !!}</u> &rarr;</a>
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
                    <h2 class="font-secondary center">{{ __('My Experiments') }}</h2>
                </div>
                @foreach ($skills as $skill)
                @php
                    $counter++
                @endphp
                @if($counter % 3 != 0)
                <div class="col_one_third ">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="{{ asset($skill->image) }}" alt=""></a>
                        </div>
                        <h3 class="t400 ls2" style="color: #FFF">{{ $skill->title }}</h3>
                        {!! $skill->desc !!}
                    </div>
                </div>
                @elseif($counter % 3 == 0)
                <div class="col_one_third col_last">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="{{ asset($skill->image) }}" alt=""></a>
                        </div>
                        <h3 class="t800 ls2" style="color: #FFF">{{ $skill->title }}</h3>
                        {!! $skill->desc !!}
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
                    <div class="col-md-5 offset-md-7 clearfix col-sm-6 " style="padding : 30px;">
                        <div class="video-wrap ">
                            <div class="video-overlay d-sm-block d-md-none"
                                style="background: rgba(179, 173, 142, 0.815);">
                            </div>
                        </div>
                        <div class="heading-block">
                            <h2 class="font-secondary">{{ __('About Me') }}</h2>
                            <span>{{ __('Check out small info about the upcoming developer') }}</span>
                        </div>
                        <table class=" table">
                            <tbody>
                                <tr>
                                    <td class="notopborder"><strong>{{ __('Name') }} :</strong></td>
                                    <td class="notopborder">{!! $about->name !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>{{ __('Gender') }}:</strong></td>
                                    <td>{!! $about->gender !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>{{ __('Email') }}:</strong></td>
                                    <td>{!! $about->email !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>{{ __('Phone') }}:</strong></td>
                                    <td>{!! $about->phone_number !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>{{ __('DOB') }}:</strong></td>
                                    <td>{!! $about->birth_date !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>{{ __('Nationality') }}:</strong></td>
                                    <td>{!! $about->nationality !!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('pdf.download',['locale' => app()->getLocale()]) }}"
                            class="button button-large button-border button-black button-dark noleftmargin"><i
                                class="icon-line-cloud-download"></i> Download CV</a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

        <div class="section nomargin skill-area  dark clearfix"  >
            <div class="container clearfix">
                <div class="row clearfix">

                    <div class="col-lg-4 col-12">
                        <h4 style="color: rgba(131, 93, 202, 0.856)">{{ __('Skills') }}</h4>
                        <ul class="skills">
                            @foreach ($SS as $ss)
                            <li data-percent="{{ $ss->skills_int }}">
                                <span>{!! $ss->skills_str !!}</span>
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
                        <h4 style="color: rgba(131, 93, 202, 0.856)">{{ __('Education') }}</h4>
                        <div class="skill-info">
                            {!! $fact->education !!}
                        </div>
                    </div>

                    @endforeach

                    <div class="col-lg-4 col-md-6">
                        <h4 style="color: rgba(131, 93, 202, 0.856)">{{ __('Experience') }}</h4>
                        <div class="skill-info">
                            {!! $fact->experience !!}
                        </div>
                    </div>

                    <div class="w-100 bottommargin d-block d-lg-none clear"></div>

                    



                </div>
                
            </div>
            <div class="video-wrap">
                <div class="video-overlay d-block d-xl-none" style="background-image: linear-gradient( rgba(236, 230, 195, 0.856),  rgba(189, 225, 255, 0.801));">
                </div>
            </div>
        </div>

        
        <div id="section-works" class="section page-section nomargin clearfix"
         style=" background-image: url({{ asset('front/images/sections/background-clouds.jpg') }});
        background-repeat: no-repeat; background-size: 100%; no-repeat center right; background-size: cover; padding: 100px 0">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="heading-block">
                            <h2 class="font-secondary">{{ __('Works') }}</h2>
                            <span class="notopmargin">{{ __('Gaze upon my creations') }}</span>
                           
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <ul class="niche-demos-lists nobottommargin lists-1">
                                    @foreach ($works as $work)
                                    <li><a href="demo-travel.html"><img src="{{ asset($work->image) }}"
                                        alt="">{{ $work->work }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-wrap">
                <div class="video-overlay d-block d-xl-none" style="background: rgba(220, 250, 253, 0.562);">
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
                            <h2 class="font-secondary">{{ $MenuItem->title }}</h2>
                            <span class="notopmargin">.</span>
                        </div>
                        <div class="row clearfix">
                            {{ $MenuItem->body }}
                        </div>

                    </div>
                    <div class="col-lg-7" >
                        <img src="{{ asset($MenuItem->image) }}" height = "100%" width="100%">
                    </div>
                    @else
                    <div class="col-lg-12 offset-lg-1">
                        <div class="heading-block">
                            <h2 class="font-secondary">{{ $MenuItem->title }}</h2>
                            <span class="notopmargin">.</span>
                        </div>
                        <div class="row clearfix">
                            {{ $MenuItem->body }}
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

        <section class="section page-section nomargin clearfix " id="contact" style="background-image: url({{ asset('front/images/sections/12345.jpg') }});
                 background-repeat: no-repeat; background-size: 100%;">
            <div class="container">
                <div class="row">
                    <h2 class=" font-secondary center ">{{ __('Contact Form') }}</h2>
                    <div class="col-md-6">
                        <form class="row" id="event-registration" action="{{ route('mail.send',['locale' => app()->getLocale()]) }}" method="POST">
                            @csrf
                            <div class="col-6 form-group">
                                <label>{{ __('Name') }}:</label>
                                <input type="text" name="name"  class="form-control required" value="" placeholder="Enter your First Name">
                            </div>
                            <div class="col-12 form-group">
                                <label>{{ __('Email') }}:</label>
                                <input type="email" name="email" id="event-registration-email" class="form-control required" value="" placeholder="Enter your Email Address">
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>{{ __('Text') }}:</label>
                                    <textarea name="text"  class="form-control required" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit"  class="btn btn-primary">Send</button>
                            </div>
            
                            <input type="hidden" name="prefix" value="event-registration-">
                        </form>
                    </div>
                    <div class="col-md-6">
                       <div class="center">
                        <h3 class="font-secondary">{{ __('If you have any idea for a website, do not be shy') }}</h3> <br>
                        <h2 class="font-secondary">{{ __('Lets Talk!') }}</h2>
                       </div>
                    </div>
                
                </div>
            </div>
            <div class="video-wrap">
                <div class="video-overlay d-block d-xl-none" style="background-image: linear-gradient(rgba(202, 232, 255, 0.445), #dfded96e, rgba(82, 70, 10, 0.082)   );">
                </div>
            </div>
        </section>

    </div>

</section><!-- #content end -->
@endforeach
@endsection