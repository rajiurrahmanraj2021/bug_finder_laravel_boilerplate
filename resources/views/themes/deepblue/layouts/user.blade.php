<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en" @if(session()->get('rtl') == 1) dir="rtl" @endif >
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    @include('partials.seo')

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Open+Sans&family=Ubuntu:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <!----  How to load Css Library, Here is an example ----->
    {{--    <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'css/bootstrap.min.css')}}"/>--}}
    @stack('css-lib')
<!---- Here is your Css Library----->

    <!----  Push your custom css  ----->
    @stack('style')

</head>

<body>


<nav id="navbar">
    <div class="container">
        <div class="navbar navbar-expand-md flex-wrap">
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="w-100" src="{{getFile(config('location.logoIcon.path').'logo.png')}}"
                     alt="{{config('basic.site_title')}}">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#investmentnavbar">
					<span class="menu-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
            </button>

            <div class="collapse navbar-collapse" id="investmentnavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.home')}}">@lang('Dashboard')</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.addFund')}}">@lang('Add Fund')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.fund-history')}}">@lang('Fund History')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.transaction')}}">@lang('Transaction')</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.payout.money')}}">@lang('Payout')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.payout.history')}}">@lang('Payout History')</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.profile')}}">@lang('My Profile')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.twostep.security')}}">@lang('2FA Security')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.ticket.list')}}">@lang('Support Ticket')</a>
                    </li>


                </ul>
                <ul class="navbar-nav nav-registration  d-none d-md-block">


                    @auth
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>@lang('Logout')</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>


@include($theme.'partials.banner')<section style="padding: 120px 0"

@yield('content')


@include($theme.'partials.footer')


@stack('loadModal')
@stack('extra-content')


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<!----  How to load JS Library, Here is an example ----->
{{--<script src="{{asset($themeTrue.'js/jquery-3.5.1.min.js')}}"></script>--}}
<script src="{{asset('assets/global/js/bootstrap.min.js')}}"></script>

@stack('extra-js')

<script src="{{asset('assets/global/js/notiflix-aio-2.7.0.min.js')}}"></script>
<script src="{{asset('assets/global/js/pusher.min.js')}}"></script>
<script src="{{asset('assets/global/js/vue.min.js')}}"></script>
<script src="{{asset('assets/global/js/axios.min.js')}}"></script>


<script>
    'use strict';
    let pushNotificationArea = new Vue({
        el: "#pushNotificationArea",
        data: {
            items: [],
        },
        mounted() {
            this.getNotifications();
            this.pushNewItem();
        },
        methods: {
            getNotifications() {
                let app = this;
                axios.get("{{ route('user.push.notification.show') }}")
                    .then(function (res) {
                        app.items = res.data;
                    })
            },
            readAt(id, link) {
                let app = this;
                let url = "{{ route('user.push.notification.readAt', 0) }}";
                url = url.replace(/.$/, id);
                axios.get(url)
                    .then(function (res) {
                        if (res.status) {
                            app.getNotifications();
                            if (link != '#') {
                                window.location.href = link
                            }
                        }
                    })
            },
            readAll() {
                let app = this;
                let url = "{{ route('user.push.notification.readAll') }}";
                axios.get(url)
                    .then(function (res) {
                        if (res.status) {
                            app.items = [];
                        }
                    })
            },
            pushNewItem() {
                let app = this;
                // Pusher.logToConsole = true;
                let pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
                    encrypted: true,
                    cluster: "{{ env('PUSHER_APP_CLUSTER') }}"
                });
                let channel = pusher.subscribe('user-notification.' + "{{ Auth::id() }}");
                channel.bind('App\\Events\\UserNotification', function (data) {
                    app.items.unshift(data.message);
                });
                channel.bind('App\\Events\\UpdateUserNotification', function (data) {
                    app.getNotifications();
                });
            }
        }
    });
</script>

@stack('script')


@include($theme.'partials.notification')
<script>
    $(document).ready(function () {
        $(".language").find("select").change(function () {
            window.location.href = "{{route('language')}}/" + $(this).val()
        })
    })

</script>

</body>
</html>
