<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layouts.partials.__head')   
</head>
<body>
    @include('front.layouts.partials.__nav')
    @include('front.layouts.partials.__banner')       

    <div class="container">
        @yield('content')
    </div>
    
    @include('front.layouts.partials.__footer')       
    
    @include('front.layouts.partials.__js-scripts')       
</body>
</html>