<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="row">
        @foreach($projects as $project)
            <div class="col-md-4 col-sm-6 recent-project-div py-2" >
                <div>
                    <a href="{{ isset($project->url) ? $project->url : 'javascript:void(0)' }}" target="_blank" class="nav-link">
                        <div class="card mb-0" >
                            <img src="{{ isset($project->file) ? asset($project->file) : $project->image_url }}" title="{{$project->name.' ('.$project->url.')'}}" style="min-height: 200px;" class="w-100 card-img-top" alt="{{ $project->name }}">
                            {{--                                    <img src="{{ asset('/') }}front/img/portfolio/carhub.png" title="carhub(carhub.com)" style="min-height: 200px;" class="w-100 card-img-top" alt="">--}}
                            <div class="card-body py-0">
                                {{--                                        <h6 class="text-center text-secondary f-s-23 text-capitalize dancing-script">affordable collumbus</h6>--}}
                                <h6 class="text-center text-secondary f-s-23 text-capitalize dancing-script">{{ $project->name }}</h6>
                            </div>
                        </div>
                    </a>
                    <!--                                <a href="">-->
                <!--                                    <img src="{{ asset('/') }}front/img/portfolio/carhub.png" class="w-100" style="height: 100%" alt="">-->
                    <!--                                    <p class="text-center f-s-19 text-secondary">carhub</p>-->
                    <!--                                </a>-->
                </div>
            </div>
        @endforeach

        {{--                        {{ $projects->links() }}--}}
    </div>
    {{--                pagination--}}

    <div class="row">
        <div class="col-md-12">
            <div class="links">
{{--                {!! $projects->links() !!}--}}
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</div>
