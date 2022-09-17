@if(isset($templates['news-letter'][0]) && $newsLetter = $templates['news-letter'][0])


<!-- REFFERAL -->
<section style="padding: 120px 0"id="refferal">
    <div class="container">
        <div class="row" id="subscribe">
            {{-- @dd($referralLevel) --}}
            <div @if(isset($templates['news-letter-referral'][0]) ) class="col-md-6" @else class="col-md-12"  @endif>
                <div
                    class="d-flex align-items-center justify-content-center justify-content-md-start h-fill wow fadeInLeft"
                    data-wow-duration="1s" data-wow-delay="0.15s">
                    <div class="w-fill text-center text-md-left pr-30">
                        <h3 class="h3 text-capitalize">@lang(@$newsLetter->description->title)</h3>
                        <p class="text mt-20 mb-20">@lang(@$newsLetter->description->sub_title)</p>
                        <div class="subscribe" >
                            <form class="subscribe-form" action="{{route('subscribe')}}" method="post">
                                @csrf
                                <input class="form-control" name="email" type="email" placeholder="@lang('Email Address')">
                                @error('email')
                                <span class="">{{$message}}</span>
                                @enderror
                                <button class="btn-subscribe" type="submit">{{trans('Subscribe')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- /REFFERAL -->
@endif
