<div class="header-top primary-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="top-cta">
                    <ul>
                        <li>
                            @if ($medsos[0]->email != null)
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{ $medsos[0]->email }}" target="_blank"><i class="fa fa-envelope"></i>{{ $medsos[0]->email }}</a>
                            @endif
                        </li>
                        <li>
                            @if ($medsos[0]->facebook != null)
                                <a href="{{ $medsos[0]->url_facebook }}" target="_blank"><i class="fa fa-facebook"></i>{{ $medsos[0]->facebook }}</a>
                            @endif
                        </li>
                        <li>
                            @if ($medsos[0]->twitter != null)
                                <a href="{{ $medsos[0]->url_twitter }}" target="_blank"><i class="fa fa-twitter"></i>{{ $medsos[0]->twitter }}</a>
                            @endif
                        </li>
                        <li>
                            @if ($medsos[0]->facebook != null)
                                <a href="{{ $medsos[0]->url_instagram }}" target="_blank"><i class="fa fa-instagram"></i>{{ $medsos[0]->instagram }}</a>
                            @endif
                        </li>
                        <li>
                            @if ($medsos[0]->youtube != null)
                                <a href="{{ $medsos[0]->url_youtube }}" target="_blank"><i class="fa fa-youtube-play"></i>{{ $medsos[0]->youtube }}</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <ul class="social-link pull-right">
                    <li><a href="{{ route('login') }}"><i class="fa fa-user"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>