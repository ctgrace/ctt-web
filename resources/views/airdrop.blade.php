@extends('layout.app_user')

@section('content')

<div class="container-fluid">
    <section id="scn-airdrop">
        <div class="container-section relative mbottom-60 airdrop">
            <div class="d-flex">
                <div class="w-55">
                    <h1 class="fp-purple fw-400 fs-46">Cashtree Token (CTT) <br><b class="fw-700">@lang('lang.ad_p1')</b></h1>
                    <div class="text-airdrop">
                        @lang('lang.t_airdrop1')
                        <br>
                        @lang('lang.t_airdrop2')
                        <br>
                        @lang('lang.t_airdrop3')
                        <br>
                        @lang('lang.t_airdrop4')
                        <br>
                        @lang('lang.t_airdrop5')
                        <br>
                    </div>
                </div>
                <div class="w-45">
                    <img class="w-100 mtop-30 mbottom-30" src="{{asset('images/ilustration-airdrop.png')}}" alt="">
                </div>
            </div>
            <div class="d-flex align-center justify-between">
                <div class="w-55">
                    <div class="text-airdrop">
                        @lang('lang.t_airdrop6')
                        <br>
                        @lang('lang.t_airdrop7')
                    </div>
                    <ol class="progressbar">
                        <li><span>@lang('lang.t_airdrop8')</span></li>
                        <li><span>@lang('lang.t_airdrop9')</span></li>
                    </ol>
                </div>
                <div class="ct-user w-45">
                    <span>@lang('lang.t_airdropbtn')<br><b>@lang('lang.t_airdropid')</b></span>
                    <a href="https://play.google.com/store/apps/details?id=com.vitiglobal.cashtree&pli=1">
                        <button>@lang('lang.download_ct')</button>
                    </a>
                </div>
            </div>
            <div class="d-flex align-center justify-between">
                <div class="w-45">
                    <div class="text-airdrop">
                        @lang('lang.t_airdrop10')
                    </div>
                    <ol class="progressbar">
                        <li><span>@lang('lang.t_airdrop11')</span></li>
                        <li><span>@lang('lang.t_airdrop9')</span></li>
                    </ol>
                </div>
                <div class="w-55 ct-user">
                    <span>@lang('lang.t_airdropbtn')<br><b>@lang('lang.t_airdropglobal')</b></span>
                    <a href="https://gleam.io/bQ88Z/crypto-airdrop-cashtree-token">
                        <button>@lang('lang.event_airdrop')</button>
                    </a>
                </div>
            </div>
            <div class="padding-mobile">
                <div class="text-airdrop">
                    @lang('lang.t_airdrop12')
                </div>
                <div class="text-airdrop">
                    @lang('lang.t_airdrop13')
                </div>
                <div class="text-airdrop">
                    @lang('lang.t_airdrop14')
                </div>
                <div class="text-airdrop">
                    @lang('lang.t_airdrop15')
                    <br>
                    @lang('lang.t_airdrop16')
                    <br>
                    @lang('lang.t_airdrop17')
                </div>
            </div>
        </div>
      </section>
</div>

@endsection