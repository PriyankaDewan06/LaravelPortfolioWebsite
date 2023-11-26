<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Priyanka Das-Portfolio</title>
    <link rel="shortcut icon" href="{{ asset('/') }}front/img/favicon.ico" type="image/x-icon">
    @include('front.includes.css')
</head>
<body>
@include('front.home.header')
@include('front.home.menu')
@include('front.home.about')
@include('front.home.services')
@include('front.home.skill')
@include('front.home.projects')
@include('front.home.clients')
@include('front.home.contact')
@include('front.home.footer')

{{--    social button test    --}}
<div class="nav-test position-fixed" style="right: 10px; top: 40%;">
    <h6 class="cookie f-s-30 px-2 py-1" style="background-color: orange; border-radius: 5px;">Hire Me On</h6>
        <ul class="nav flex-column icon-box float-right">
            <li><a href="" class="w-100 "><img src="https://cdn.worldvectorlogo.com/logos/fiverr-1.svg" title="fiverr" class="hire-me-icon" alt="fiverr"> </a></li>
            <li><a href="" class="w-100 "><img src="https://e7.pngegg.com/pngimages/744/960/png-clipart-upwork-computer-icons-freelancer-others-miscellaneous-text-thumbnail.png" title="Upwork" class="hire-me-icon" alt="Upwork"> </a></li>
            <li><a href="" class="w-100 "><img src="https://minutehack.com/public/images/articles/2015/04/pph.png" title="PeoplePerHour" class="hire-me-icon" alt="PeoplePerHour"> </a></li>

        </ul>

</div>

@include('front.includes.js')



</body>
</html>
