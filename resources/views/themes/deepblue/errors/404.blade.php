@extends($theme.'layouts.app')
@section('title','404')


@section('content')
    <section style="padding: 120px 0"id="add-recipient-form" class="wow fadeInUp" data-wow-delay=".2s" data-wow-offset="300">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 text-center">
                    <span class="display-1 d-block">{{trans('Opps!')}}</span>
                    <div class="mb-4 lead">{{trans('The page you are looking for was not found.')}}</div>
                    <a class="btn btn-primary " href="{{url('/')}}" >@lang('Back To Home')</a>
                </div>
            </div>
        </div>
    </section>
@endsection
