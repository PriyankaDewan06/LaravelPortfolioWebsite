<!--Portfolio-->
<section class="section-six" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center text-capitalize py-4 font-italic font-weight-bold tangerine orange-text"><span class="green-text">R</span>ecent Projects</h2>
                <!--                    <h6 class="ml-5 font-weight-light mb-4">Here are some of my work.</h6>-->
{{--                <div class="row">--}}
{{--                    @foreach($projects as $project)--}}
{{--                    <div class="col-md-4 col-sm-6 recent-project-div py-2" >--}}
{{--                        <div>--}}
{{--                            <a href="{{ isset($project->url) ? $project->url : 'javascript:void(0)' }}" target="_blank" class="nav-link">--}}
{{--                                <div class="card mb-0" >--}}
{{--                                    <img src="{{ isset($project->file) ? asset($project->file) : $project->image_url }}" title="{{$project->name.' ('.$project->url.')'}}" style="min-height: 200px;" class="w-100 card-img-top" alt="{{ $project->name }}">--}}
{{--                                    <img src="{{ asset('/') }}front/img/portfolio/carhub.png" title="carhub(carhub.com)" style="min-height: 200px;" class="w-100 card-img-top" alt="">--}}
{{--                                    <div class="card-body py-0">--}}
{{--                                        <h6 class="text-center text-secondary f-s-23 text-capitalize dancing-script">affordable collumbus</h6>--}}
{{--                                        <h6 class="text-center text-secondary f-s-23 text-capitalize dancing-script">{{ $project->name }}</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <!--                                <a href="">-->--}}
{{--                        <!--                                    <img src="{{ asset('/') }}front/img/portfolio/carhub.png" class="w-100" style="height: 100%" alt="">-->--}}
{{--                            <!--                                    <p class="text-center f-s-19 text-secondary">carhub</p>-->--}}
{{--                            <!--                                </a>-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}

{{--                        {{ $projects->links() }}--}}
{{--                </div>--}}
{{--                pagination--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="links">--}}
{{--                            {!! $projects->links() !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <livewire:front.site />

            </div>
        </div>
    </div>
</section>
<!--/Portfolio-->
<!--slider-->
<section class="slider-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="font-weight-bold text-uppercase my-5 text-center orange-text tangerine f-s-45"><span class="green-text">W</span>eb &nbsp; Applications <span>&nbsp;(CMS)</span></h1>
                @foreach($cmsDetails as $cmsDetail)
                    <div class="cms-div-cursor my-4">
                    <div class="card">
                        <div class=" row ">
                            <div class="col-lg-5 col-md-6 cms-img">
                                <img src="{{ isset($cmsDetail->file) ? asset($cmsDetail->file) : $cmsDetail->image_url }}" class="card-img w-100" style="height: 100%!important" alt="{{$cmsDetail->name}}">
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="card-body py-5 text-dark">
                                    <h4 class="font-weight-bold mt-4 f-s-23 roboto" style="line-height: 30px;">{{$cmsDetail->name}}</h4>
                                    <p class="text-justify dancing-script mt-4 f-s-22">{{$cmsDetail->details}}</p>
                                    <p class="mt-5">USED STACK</p>
                                    <ul class="nav flex-items-bottom">
                                        <?php
                                            $stacks = \App\Models\admin\Stack::where('cms_id', $cmsDetail->id)->get();
                                        ?>
                                            @foreach($stacks as $stack)
                                        <li class="mx-2 mt-3"><button type="button" class="border-light stack-btn " >{{$stack->stack}}</button></li>
                                            @endforeach
                                    </ul>
                                    <div class="mt-5">
                                        <a href="{{$cmsDetail->url}}" class="nav-link">Demo Link</a>
                                        <p>
                                            @if(!isset($cmsDetail->user) || !isset($cmsDetail->pass))
                                                <a href="{{$cmsDetail->url}}" target="_blank">{{$cmsDetail->url}}</a>
                                            @else
                                                [username: {{$cmsDetail->user}}, pass: {{$cmsDetail->pass}}]
                                            @endif
                                            <!--                                                <a href="http://google.com" class="nav-link disable-links">[username: monu@hi.com, pass: 123456]</a>-->
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="links">
{{--                    {{ $cmsDetails->links() }}--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--/slider-->
