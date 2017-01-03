@extends('web.layouts.template')
@section('content')
<div class="detail-img-div"></div>
<div class="clearfix"></div>
<div class="gallery-div">
    <div class="container">
        <div class="col-md-3">

            <div class="clearfix"></div>
            <div class="left-package-list">
                <div class="widget banners">
                    <div class="banner">
                        @include('web.common.tripadvisor-widget')
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
            <img src="images/003.jpg" class="img-responsive"> <br>
            <img src="images/7fdc3fb083f48a1.jpg" class="img-responsive"></div>
        <div class="col-md-9 gallery-div-bg-right">

            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (1).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (2).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (3).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (5).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (6).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (7).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (8).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (9).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (10).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit (12).jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="images/carous1/fit.jpg" alt="...">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var $lightbox = $('#lightbox');

        $('[data-target="#lightbox"]').on('click', function(event) {
            var $img = $(this).find('img'),
                    src = $img.attr('src'),
                    alt = $img.attr('alt'),
                    css = {
                        'maxWidth': $(window).width() - 100,
                        'maxHeight': $(window).height() - 100
                    };

            $lightbox.find('.close').addClass('hidden');
            $lightbox.find('img').attr('src', src);
            $lightbox.find('img').attr('alt', alt);
            $lightbox.find('img').css(css);
        });

        $lightbox.on('shown.bs.modal', function (e) {
            var $img = $lightbox.find('img');

            $lightbox.find('.modal-dialog').css({'width': $img.width()});
            $lightbox.find('.close').removeClass('hidden');
        });
    });
</script>
@endpush
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
        </div>
    </div>
</div>