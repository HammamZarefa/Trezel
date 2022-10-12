@extends('templates.trezel.layouts.frontend')
@section('content')
    <!-- /.offcanvas-info -->
    <div class="wrapper dark-wrapper" style="direction: ltr !important;">
      <div class="rev_slider_wrapper fullwidth-container">
        <div id="slider2" class="rev_slider fullwidthbanner" data-version="5.4.7">
          <ul>
            <li data-transition="fade" data-thumb=""><img src="style/images/art/slider-bg4.jpg" alt="" />
              <div class="tp-caption font-weight-500 color-white text-center" 
	               data-x="center" 
	               data-y="middle" 
	               data-voffset="['-75','-75','-65','-95']" 
	               data-fontsize="['50','50','35','30']" 
	               data-lineheight="['65','65','50','45']" 
	               data-width="['1000','1000','600','340']" 
	               data-textAlign="['center','center','center','center']" 
	               data-whitespace="['normal','normal','normal','normal']" 
	               data-frames='[{"delay":1000,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
	               data-responsive="on" 
	               data-responsive_offset="on" style="z-index: 9;">{!! getContentTranslation(@$hero->data_values,'heading')!!} 
	          </div>
			  <!-- /.tp-caption -->
              <div class="tp-caption font-weight-400 color-white text-center" 
	               data-x="center" 
	               data-y="middle" 
	               data-voffset="['0','0','0','0']" 
	               data-fontsize="['26','26','26','20']" 
	               data-lineheight="['36','36','36','30']" 
	               data-width="['1000','1000','600','340']" 
	               data-textAlign="['center','center','center','center']" 
	               data-whitespace="['normal','normal','normal','normal']" 
	               data-frames='[{"delay":1500,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
	               data-responsive="on" 
	               data-responsive_offset="on" style="z-index: 9;">{!! getContentTranslation(@$hero->data_values,'sub_heading')!!}.  
	          </div>
			  <!-- /.tp-caption -->
              <a class="tp-caption btn btn-red btn-strong-hover scroll" 
	               data-x="center" 
	               data-y="middle" 
	               data-hoffset="['-80','-80','-80','-80']" 
	               data-voffset="['85','85','85','90']" 
	               data-width="['auto','auto','auto','auto']" 
	               data-textAlign="['center','center','center','center']" 
	               data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"x:-100px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' 
	               data-responsive="on" 
	               data-responsive_offset="on" style="z-index: 9;" href="#">{{getContentTranslation($hero->data_values,'button')}}  
	          </a>
			  <!-- /.tp-caption -->
              <a class="ml-4 tp-caption btn btn-green btn-strong-hover scroll" 
	               data-x="center" 
	               data-y="middle" 
	               data-hoffset="['80','80','80','80']" 
	               data-voffset="['85','85','85','90']" 
	               data-width="['auto','auto','auto','auto']" 
	               data-textAlign="['center','center','center','center']" 
	               data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"x:100px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
	               data-responsive="on" 
	               data-responsive_offset="on" style="z-index: 9;" href="#" target="_blank">Contact Us  
	          </a>
			  <!-- /.tp-caption -->
            </li>
            <li data-transition="fade" data-thumb=""><img src="style/images/art/slider-bg5.jpg" alt="" />
              <div class="tp-caption font-weight-500 color-white text-center" 
	               data-x="center" 
	               data-y="middle" 
	               data-voffset="['-75','-75','-65','-65']" 
	               data-fontsize="['50','50','35','30']" 
	               data-lineheight="['65','65','50','45']" 
	               data-width="['1000','1000','600','340']" 
	               data-textAlign="['center','center','center','center']" 
	               data-whitespace="['normal','normal','normal','normal']" 
	               data-frames='[{"delay":1000,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
	               data-responsive="on" 
	               data-responsive_offset="on" style="z-index: 9;">{!! getContentTranslation(@$hero->data_values,'heading')!!} 
	          </div>
			  <!-- /.tp-caption -->
              <div class="tp-caption font-weight-400 color-white text-center" 
	               data-x="center" 
	               data-y="middle" 
	               data-voffset="['0','0','0','0']" 
	               data-fontsize="['26','26','26','20']" 
	               data-lineheight="['36','36','36','30']" 
	               data-width="['1000','1000','600','340']" 
	               data-textAlign="['center','center','center','center']" 
	               data-whitespace="['normal','normal','normal','normal']" 
	               data-frames='[{"delay":1500,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
	               data-responsive="on" 
	               data-responsive_offset="on" style="z-index: 9;">{!! getContentTranslation(@$hero->data_values,'sub_heading')!!}.  
	          </div>
			  <!-- /.tp-caption -->
              <a class="tp-caption btn btn-yellow btn-strong-hover scroll" 
	               data-x="center" 
	               data-y="middle" 
	               data-voffset="['85','85','100','90']" 
	               data-width="['auto','auto','auto','auto']" 
	               data-textAlign="['center','center','center','center']" 
	               data-frames='[{"delay":2000,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-responsive="on" data-responsive_offset="on" style="z-index: 9;" href="#">{{getContentTranslation($hero->data_values,'button')}} 
	          </a>
			  <!-- /.tp-caption -->
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.rev_slider -->
        <div class="divider"><svg xmlns="http://www.w3.org/2000/svg" class="fill-light-wrapper" preserveAspectRatio="none" viewBox="0 0 1070 20.98">
            <path d="M0,0V21H1070V0A6830.24,6830.24,0,0,1,0,0Z" /></svg></div>
      </div>
      <!-- /.rev_slider_wrapper -->
    </div>
 
    <!-- /.wrapper -->
    <div class="wrapper white-wrapper">
        <div class="container inner">
            <h2 class="title-color color-gray text-center">@lang('Our Services')</h2>
            <h3 class="display-3 text-center">@lang('The full service we are offering is specifically') <br class="d-none d-lg-block" />@lang('designed to meet your business needs').</h3>
            <div class="space40"></div>
            <div class="row gutter-60 text-center align-items-end">
                @foreach($service_elements as $item)
                <div class="col-md-4">
                    <div class="img-blob blob8 mb-30"><img src="{{ getImage('assets/images/frontend/service/' . @$item->data_values->image, '633x539') }}" style="width: 30rem" alt="" /></div>
                    <h4>{{getContentTranslation($item->data_values,'title') }}</h4>
                    <p class="mb-15">{{ getContentTranslation($item->data_values,'content') }}.</p>
                    {{--<div class="text-center"><a href="#" class="more">@lang('Learn more')</a></div>--}}
                </div>
                <!--/column -->
                <div class="space20 d-md-none"></div>
                @endforeach
            </div>
            <!--/.row -->
            <!-- <div class="space160"></div>
            <h2 class="title-color color-gray text-center">Our Work Process</h2>
            <h3 class="display-3 text-center">The process steps on creating <br class="d-none d-lg-block" />our awesome and beautiful projects.</h3>
            <div class="space40"></div>
            <div class="row align-items-center">
              <div class="col-lg-8">
                <figure>
                  <img src="style/images/art/mockup11.png" alt="" />
                </figure>
              </div>
              <div class="space20 d-md-none"></div>
              <div class="space50 d-none d-md-block d-lg-none"></div>
              <div class="col-lg-4 pl-50 pr-lg-0 pl-md-0">
                <div class="d-flex flex-row justify-content-center">
                  <div>
                    <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">1</span></span>
                  </div>
                  <div>
                    <h5>Collect Ideas</h5>
                    <p class="mb-0">Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                  </div>
                </div>
                <div class="space40"></div>
                <div class="d-flex flex-row justify-content-center">
                  <div>
                    <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">2</span></span>
                  </div>
                  <div>
                    <h5>Design Concept</h5>
                    <p class="mb-0">Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                  </div>
                </div>
                <div class="space40"></div>
                <div class="d-flex flex-row justify-content-center">
                  <div>
                    <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">3</span></span>
                  </div>
                  <div>
                    <h5>Finalize Product</h5>
                    <p class="mb-0">Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                  </div>
                </div>
              </div>
            </div> -->
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
        <div class="container inner">
            <div class="row align-items-center text-center text-lg-left">
                <div class="col-lg-6">
                    <h2 class="saveTime title-color color-gray">@lang('Save Time and Money')</h2>
                    <h3 class="saveTime display-3">@lang('Save your time and money by choosing our professional team').</h3>
                </div>
                <!--/column -->
                <div class="space20 d-md-none"></div>
                <div class="space50 d-none d-md-block d-lg-none"></div>
                <div class="col-lg-6">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="progressbar circle pink" data-value="45"></div>
                            <h5>@lang('Money Saved')</h5>
                            <p>@lang('Integer posuere erat a ante venenatis dapibus posuere velit').</p>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="progressbar circle purple" data-value="35"></div>
                            <h5>@lang('Time Saved')</h5>
                            <p>@lang('Integer posuere erat a ante venenatis dapibus posuere velit').</p>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper white-wrapper" id="portfolio">
        <div class="container inner">
            <h2 class="title-color color-gray text-center">@lang('See Portfolio')</h2>
            <h3 class="display-3 text-center">@lang('Check out some of our awesome projects') <br class="d-none d-lg-block" />@lang('with creative ideas and great design').</h3>
            <div class="space40"></div>
            <div class="grid grid-view">
                <div class="tiles text-center light-gallery-wrapper">
                    <div class="row isotope">
                        @foreach($projects as $project)
                        <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                            <figure class="overlay overlay2 rounded mb-20"><a href="{{ getImage('assets/images/project/' . @$project->images[0]->filename) }}" class="lightbox"> <img src="{{ getImage('assets/images/project/' . @$project->images[0]->filename) }}" alt="" /></a></figure>
                            <div class="post-content">
                                <h2 class="post-title mb-10"><a href="{{route('project.show',$project->id)}}">{{$project->title}}</a></h2>
                                <div class="meta mb-0 community">{{$project->projectCategories->implode('title',' ,')}}</div>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        @endforeach
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.tiles -->
            </div>
            <!-- /.grid -->
            <div class="space20"></div>
            <div class="text-center">
                <a href="{{route('contact')}}" class="btn btn-l btn-default mb-0">@lang('Start a Project')</a>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper white-wrapper">
        <div class="container inner">
            <h2 class="title-color color-gray text-center">@lang('Our Blog')</h2>
            <h3 class="display-3 text-center">@lang('Here are the latest company news') <br class="d-none d-lg-block" />@lang('from our blog that got the most attention').</h3>
            <div class="space40"></div>
            <div class="grid-view dir">
                <div class="carousel owl-carousel" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}}'>
                    @foreach($featuredPosts as $post)
                    <div class="item">
                        <figure class="overlay overlay1 rounded mb-30"><a href="{{route('blog.show',$post->id)}}"> <img src="{{ getImage('assets/images/post/' . $post->cover) }}" alt="" /></a>
                            <figcaption>
                                <h5 class=" from-top mb-0">@lang('Read More')</h5>
                            </figcaption>
                        </figure>
                        <div class="end category"><a href="#" class="badge badge-pill bg-red">{{$post->category->title}}</a></div>
                        <h2 class="end post-title"><a href="{{route('blog.show',$post->id)}}">{{$post->title}}</a></h2>
                        <div class="end meta mb-0"><span class="date"><i class="jam jam-clock"></i>{{$post->date}}</span>
                            <span class="comments"><i class="jam jam-message-alt"></i><a href="#">{{$post->views}} @lang('Views')</a></span></div>
                    </div>
                    @endforeach
                </div>
                <!-- /.owl-carousel -->
            </div>
            <!-- /.grid-view -->
            {{--<div class="space80"></div>--}}
            {{--<div class="space70 d-md-none"></div>--}}
        </div>

        <!-- /.wrapper -->
        <div class="wrapper white-wrapper">
            <div class="container inner">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 play-wrapper light-gallery-wrapper text-center">
                        <div class="img-blob blob8"><img src="{{asset($activeTemplateTrue.'images/art/about2.jpg')}}" style="width: 30rem" alt="" /></div>
                        <a href="https://www.youtube.com/watch?v=26TbMXXOe0I" class="btn-play lightbox"></a>
                    </div>
                    <!--/column -->
                    <div class="space20 d-md-none"></div>
                    <div class="space50 d-none d-md-block d-lg-none"></div>
                    <div class="col-lg-6 pr-50 pr-md-15">
                        <h2 class="title-color color-gray text-center">@lang('What Makes Us Different')</h2>
                        <h3 class="display-3 text-center">@lang('We are a creative company that focuses on establishing long-term relationships with customers').</h3>
                        <div class="space30"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="diffrent d-flex flex-row">
                                    <div>
                                        <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">1</span></span>
                                    </div>
                                    <div>
                                        <h5>@lang('Rapid Solutions')</h5>
                                        <p>@lang('Rapid Solutions Description').</p>
                                    </div>
                                </div>
                            </div>
                            <!--/column -->
                            <div class="col-sm-6">
                                <div class="diffrent d-flex flex-row">
                                    <div>
                                        <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">2</span></span>
                                    </div>
                                    <div>
                                        <h5>@lang('Personal Support')</h5>
                                        <p>@lang('Personal Support Description').</p>
                                    </div>
                                </div>
                            </div>
                            <!--/column -->
                            <div class="space10 d-none d-md-block"></div>
                            <div class="col-sm-6">
                                <div class="diffrent d-flex flex-row">
                                    <div>
                                        <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">3</span></span>
                                    </div>
                                    <div>
                                        <h5>@lang('Passionate Team')</h5>
                                        <p>@lang('Passionate Team Description').</p>
                                    </div>
                                </div>
                            </div>
                            <!--/column -->
                            <div class="col-sm-6">
                                <div class="diffrent d-flex flex-row">
                                    <div>
                                        <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">4</span></span>
                                    </div>
                                    <div>
                                        <h5>@lang('100% Satisfaction')</h5>
                                        <p>@lang('100% Satisfaction Description').</p>
                                    </div>
                                </div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="space120"></div>
                <div class="wrapper image-wrapper bg-auto no-overlay bg-image text-center" data-image-src="{{asset($activeTemplateTrue.'images/art/map.png')}}">
                    <div class="container inner">
                        <h2 class="text-center title-color color-gray">@lang('Join Our Community')</h2>
                        <h3 class="display-3 mb-0">@lang('We are trusted by over 5000+ clients. Join them') <br class="d-none d-lg-block" />@lang('by using our services and grow your business').</h3>
                        <div class="space50"></div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="row counter">
                                    <div class="col-md-4 color-default">
                                        <h3 class="color-default"><span class="value">@lang('200')</span>K</h3>
                                        <p class="community">@lang('Transactions')</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-4 color-default">
                                        <h3 class="color-default"><span class="value">@lang('150')</span>K</h3>
                                        <p class="community">@lang('Accounts')</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-4 color-default">
                                        <h3 class="color-default"><span class="value">@lang('100')</span>K</h3>
                                        <p class="community">@lang('Reviews')</p>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div><!-- /.wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection