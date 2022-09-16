<nav class="navbar navbar-expand-lg navbar-light bg-dark-blue">
    <div class="container">
        <a class="navbar-brand" href="{{ route('Home') }}"><img class="logo"
                src="{{ URL::asset('/src/img/ivao-co.png') }}" /></a>
        <button class="navbar-toggler" style="background: white" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('Home') }}"><i
                            class="fas fa-home fa-fw"></i>&nbsp;{{ __('custom.Home') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLangDrop" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-file-invoice fa-fw"></i>&nbsp;{{ __('custom.Briefing') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarLangDrop">
                        <li>
                            <a class="dropdown-item" href="{{ route('PilotsBriefing') }}"><i
                                    class="fas fa-user-tie fa-fw"></i>&nbsp;{{ __('custom.PilotsBriefing') }}</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLangDrop" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-calendar-check fa-fw"></i>&nbsp;{{ __('custom.Bookings') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarLangDrop">
                        <li>
                            <a class="dropdown-item" href="{{ route('flights.index') }}"><i
                                    class="fas fa-plane fa-fw"></i>&nbsp;{{ __('custom.PilotsBooking') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('AtcBooking') }}"><i
                                    class="fas fa-broadcast-tower fa-fw"></i>&nbsp;{{ __('custom.AtcBooking') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Statistics') }}">&nbsp;<i
                            class="fas fa-chart-bar fa-fw"></i>{{ __('custom.Statistics') }}</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLangDrop" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle fa-fw"></i>&nbsp;{{ Auth::id() }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLangDrop">
                            <li>
                                <a class="dropdown-item" href="{{ route('Profile') }}"><i
                                        class="fas fa-user-circle fa-fw"></i>&nbsp;{{ __('custom.Profile') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('Logout') }}"><i
                                        class="fas fa-sign-out-alt fa-fw"></i>&nbsp;{{ __('custom.Logout') }}</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Login') }}">&nbsp;<i
                                class="fas fa-sign-in-alt fa-fw"></i>{{ __('custom.Login') }}</a>
                    </li>
                @endif
                <div class="clearfix" style="width: 5rem"></div>
                <li class="nav-item">
                    <h4 id="countdown" style="font-weight: 700">
                        @include('layouts/members/widgets/nav/countdown')
                    </h4>
                </li>
            </ul>
        </div>
    </div>
</nav>
