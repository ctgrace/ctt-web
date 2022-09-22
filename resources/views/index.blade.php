<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cashtree CTT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
  </head>

  <body>
    <div class="menu-mobile">
      <img class="close-menu mbottom-10" src="{{asset('images/close_menu.svg')}}" alt="" width="10">
      <ul class="navbar-menu">
        <li><a href="#scn-ctt-is">What is CTT</a></li>
        <li><a href="#scn-utility">Utility</a></li>
        <li><a href="#scn-token">Tokenomics</a></li>
        <li><a href="#scn-roadmap">Roadmaps</a></li>
        <li><a href="#scn-team">Team</a></li>
      </ul>
      <ul id="sub-menu-lang" class="lang-dropdown mtop-20">
        <li class="{{\Illuminate\Support\Facades\Config::get('app.locale') == 'en' ? 'active' : ''}}">
          <a class="language" href="{{url('/setlang/en')}}">@lang('lang.english')</a>
          <img src="{{asset('images/flag_eng.svg')}}" alt="">
        </li>
        <li class="{{\Illuminate\Support\Facades\Config::get('app.locale') == 'id' ? 'active' : ''}}">
          <a class="language" href="{{url('/setlang/id')}}">@lang('lang.indonesian')</a>
          <img src="{{asset('images/flag_ind.svg')}}" alt="">
        </li>
        {{-- <li>
          <a href="#">Korea</a>
          <img src="{{asset('images/flag_kor.svg')}}" alt="">
        </li> --}}
      </ul>
    </div>

    <div class="overlay"></div>

    <header>
      <div class="navbar">
        <div class="logo-container">
          <img class="mright-15" src="{{asset('images/logo.svg')}}" alt="" width="55">
          <div class="text-logo">CTT</div>
          <div class="text-logo-2">
            <div class="sub-text-logo">Blokchain Based</div>
            <div class="sub-text-logo">Advertising Mobile Platform</div>
          </div>
        </div>
        {{-- <div class="ctt_balance">
          <div class="balance">
            <img src="{{asset('images/small_ctt_logo.svg')}}" alt="">
            3.56 USD
          </div>
          <div id="dropdown-currency" class="drpdwn_crncy d-flex align-center pointer relative">
            <img class="mright-5 mleft-10" src="{{asset('images/arrow_lang.svg')}}" alt="" width="10">
            <div class="change_currency">
              <a href="#">USD</a>
              <div id="sub-menu-currency" class="currency-dropdown d-none">
                <div class="d-flex align-start">
                  <img class="mtop-5 mright-5" src="{{asset('images/arrow_lang.svg')}}" alt="" width="10">
                  <ul>
                    <li><a href="#">USD</a></li>
                    <li><a href="#">IDR</a></li>
                    <li><a href="#">BTC</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <button class="sale">Coming Soon!</button>
        <ul class="navbar-menu">
          <li><a class="nav" href="#scn-ctt-is">What is CTT</a></li>
          <li><a class="nav" href="#scn-utility">Utility</a></li>
          <li><a class="nav" href="#scn-token">Tokenomics</a></li>
          <li><a class="nav" href="#scn-roadmap">Roadmaps</a></li>
          <li><a class="nav" href="#scn-team">Team</a></li>
        </ul>
        <div id="dropdown-lang" class="menu-lang d-flex pointer relative justify-between">
          <div class="d-flex align-center absolute w-100 justify-between option-lang">
            <img class="z-2" src="{{asset('images/arrow_lang.svg')}}" alt="" width="10">
            <a href="javascript:void(0)" class="fp-white mright-5 mleft-5 z-2" href="#">@lang('lang.active_lang')</a>
            <img class="z-2" src="{{asset('images/globe_lang.svg')}}" alt="" width="17">
          </div>
          <ul id="sub-menu-lang" class="lang-dropdown d-none">
            <li class="{{\Illuminate\Support\Facades\Config::get('app.locale') == 'en' ? 'active' : ''}}">
              <a class="language" href="{{url('/setlang/en')}}">@lang('lang.english')</a>
              <img src="{{asset('images/flag_eng.svg')}}" alt="">
            </li>
            <li class="{{\Illuminate\Support\Facades\Config::get('app.locale') == 'id' ? 'active' : ''}}">
              <a class="language" href="{{url('/setlang/id')}}">@lang('lang.indonesian')</a>
              <img src="{{asset('images/flag_ind.svg')}}" alt="">
            </li>
            {{-- <li>
              <a href="#">Korea</a>
              <img src="{{asset('images/flag_kor.svg')}}" alt="">
            </li> --}}
          </ul>
        </div>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </div>
    </header>
  
    <div class="container-fluid">
      <section id="scn-landing">
        <div class="container-section relative">
          <h2 class="tle-web-1">@lang('lang.tle_web_1')</h2>
          <h1 class="tle-web-2">@lang('lang.tle_web_2')</h1>
          <div class="row absolute mtop-15 option-button">
            {{-- <a href="{{asset('whitepaper/CTT-Whitepaper.pdf')}}" class="btn-download mright-20 disabled">@lang('lang.dw_wp')</a> --}}
            <a class="btn-download mright-20 disabled">@lang('lang.dw_wp')</a>
            <button class="btn-pink disabled">@lang('lang.buy_ctt')</button>
          </div>
          <div class="row ornament absolute">
            <hr class="mright-10">
            <div class="dots"></div>
            <div class="dots"></div>
            <div class="dots"></div>
            <hr class="mleft-10">
          </div>
          <div class="ct-p absolute">
            <p>@lang('lang.ctt_is')</p>
          </div>
          <button class="ln-mr absolute open-modal pointer">@lang('lang.ln_mr')</button>
          <img class="arrow-ln absolute" src="{{asset('images/arrow_down_purple.svg')}}" alt="">
          <div class="modal-video d-none">
            <div class="modal-content relative">
              <button class="close-modal pointer"></button>
              <div class="video-player relative">
                <video autoplay src="{{asset('video/ctt-video.mp4')}}"></video>
                <img class="pointer" src="{{asset('images/ic_play_video.svg')}}" alt="">
              </div>
              <div class="caption-video text-center">
                Learn More : <b>CTT Reward, How to earn
                  <div class="button-video">
                    <button><img src="{{asset('images/replay.svg')}}" alt=""></button>
                    <button><img src="{{asset('images/share.svg')}}" alt=""></button>
                  </div>
              </div>
            </div>
          </div>
      </section>

      <section id="scn-tw">
        <div class="container-section relative">
          <img class="img-for-mobile" src="{{asset('images/img_section_tw_mobile.svg')}}" alt="">
          <div class="scn-tw-text absolute">
            <h3 class="fw-300 fp-purple fs-46">Cashtree :</h3>
            <h3 class="fp-purple fs-46">@lang('lang.the_gate')</h3>
            <h3 class="fp-purple fs-46 mbottom-15">@lang('lang.adoption')</h3>
            <div class="ct-p">
              <p class="fp-black fw-300 w-40">@lang('lang.ct_bv')</p>
            </div>
            <h6 class="fw-300 fp-purple fs-20 mtop-60">@lang('lang.through')</h6>
            <h4 class="fp-purple fs-36 w-65">@lang('lang.be_gate')</h4>
          </div>
        </div>
      </section>

      <section id="scn-ctt-is">
        <div class="container-section">
          <img class="img-for-mobile" src="{{asset('images/img_section_ctt_mobile.svg')}}" alt="">
          <div class="scn-tw-text">
            <h3 class="fw-300 fp-purple fs-46">@lang('lang.what_is')</h3>
            <h3 class="fp-purple fs-46 mbottom-15">@lang('lang.ctoken_ctt')</h3>
            <div class="ct-p">
              <p class="fp-black fw-300 w-40">@lang('lang.ctt_new')</p>             
            </div>
          </div>
          <a href="{{asset('whitepaper/CTT-Whitepaper.pdf')}}" class="btn-download disabled mright-20">@lang('lang.dw_wp')</a>
        </div>
      </section>

      <section id="how-to-earn">
        <div class="centered-content">
          <h3 class="fp-purple fs-36 mbottom-15">@lang('lang.how_to')</h3>
          <h3 class="fw-300 fp-purple fs-46 mbottom-15">@lang('lang.th_ctt_app')</h3>
          <div class="row mbottom-30 align-start">
            <div class="ct-p w-75">
              <p>@lang('lang.user_can')</p>
            </div>
            <div class="row justify-center">
              <img class="ct mright-20" src="{{asset('images/logo_ct.svg')}}" alt="">
              <a target="blank" class="pointer" href="https://play.google.com/store/apps/details?id=com.vitiglobal.cashtree&hl=en&gl=id">
                <img class="bitmap" src="{{asset('images/logo_gplay.svg')}}" alt="">
              </a>
            </div>
          </div>
          <div class="border-bottom mbottom-30"></div>
          <h3 class="fw-300 fp-purple fs-46 mbottom-15">@lang('lang.dep_on')</h3>
          <div class="ct-p mbottom-15 w-50">
            <p>@lang('lang.dep_on')</p>
          </div>
        </div>
      </section>
  
      <section id="scn-utility">
        <div class="container-section relative">
          <img class="img-for-mobile" src="{{asset('images/img_section_utility_mobile.svg')}}" alt="">
          <div class="scn-tw-text">
            <h3 class="fw-600 fp-purple fs-46 mbottom-10">@lang('lang.utility')</h3>
            <div class="ct-p w-45">
              <p>@lang('lang.ctt_utility')</p>
            </div>
            <div class="d-flex w-50 mtop-40">
              <div class="col-3 desc-product relative">
                <h5 class="fp-purple fs-26 mbottom-15">@lang('lang.reward')</h3>
                  <div class="container-desc ct-p">
                    <p id="desc-lang" class="text-description">@lang('lang.p_reward')</p>
                  </div>
                  <button class="read-more pointer" data-id="desc-lang">
                    <div>@lang('lang.ln_mr')</div>
                    <img src="{{asset('images/arrow_ln_more.svg')}}" alt="">
                  </button>
                  <button class="read-less pointer" data-id="desc-lang">
                    <div>@lang('lang.ln_ls')</div>
                    <img width="10" src="{{asset('images/arrow_ln_more.svg')}}" alt="">
                  </button>
              </div>
              <div class="col-3 desc-product relative">
                <h5 class="fp-purple fs-26 mbottom-15">@lang('lang.staking')</h3>
                  <div class="container-desc ct-p">
                    <p id="desc-lang2" class="text-description">@lang('lang.p_staking')</p>
                  </div>
                  <button class="read-more pointer" data-id="desc-lang2">
                    <div>@lang('lang.ln_mr')</div>
                    <img src="{{asset('images/arrow_ln_more.svg')}}" alt="">
                  </button>
                  <button class="read-less pointer" data-id="desc-lang2">
                    <div>@lang('lang.ln_ls')</div>
                    <img width="10" src="{{asset('images/arrow_ln_more.svg')}}" alt="">
                  </button>
              </div>
              <div class="col-3 desc-product relative">
                <h5 class="fp-purple fs-26 mbottom-15">@lang('lang.withdraw')</h3>
                  <div class="container-desc ct-p">
                    <p id="desc-lang3" class="text-description">@lang('lang.p_withdraw')</p>
                  </div>
                  <button class="read-more pointer" data-id="desc-lang3">
                    <div>@lang('lang.ln_mr')</div>
                    <img src="{{asset('images/arrow_ln_more.svg')}}" alt="">
                  </button>
                  <button class="read-less pointer" data-id="desc-lang3">
                    <div>@lang('lang.ln_ls')</div>
                    <img width="10" src="{{asset('images/arrow_ln_more.svg')}}" alt="">
                  </button>
              </div>
            </div>
            <div class="ct-p w-50 mtop-45 mbottom-45">
              <p>@lang('lang.ctt_priority')</p>
            </div>
            <button class="btn-buy disabled">@lang('lang.buy_ctt')</button>
          </div>
        </div>
      </section>
  
      <section id="scn-token">
        <div class="container-section">
          <div class="scn-tw-text">
            <h3 class="fw-300 fp-white fs-46 mbottom-15">CTT <span class="fw-600">@lang('lang.token')</span></h3>
            <div class="ct-p">
              <p class="fp-white w-60">@lang('lang.p_token')</p>
            </div>
            <div class="relative circle-diagram">
              <div class="token-table">
                <ul class="mright-60">
                  <li>
                    <div class="pv-sale"></div>
                    <p>Private-Sale</p>
                  </li>
                  <li>
                    <div class="pb-sale"></div>
                    <p>Public-Sale</p>
                  </li>
                  <li>
                    <div class="fndt"></div>
                    <p>Foundation</p>
                  </li>
                  <li>
                    <div class="tm"></div>
                    <p>Team</p>
                  </li>
                  <li>
                    <div class="adv"></div>
                    <p>Advisors</p>
                  </li>
                  <li>
                    <div class="usr-rwrd"></div>
                    <p>Product (User Rewards)</p>
                  </li>
                </ul>
                <ul>
                  <li>
                    <div class="st-in"></div>
                    <p>Product (Staking Incentives)</p>
                  </li>
                  <li>
                    <div class="p2e"></div>
                    <p>Product (P2E)</p>
                  </li>
                  <li>
                    <div class="ct-com"></div>
                    <p>Product (Cashtree Community)</p>
                  </li>
                  <li>
                    <div class="mrktg"></div>
                    <p>Marketing</p>
                  </li>
                  <li>
                    <div class="pne"></div>
                    <p>Partnership & Ecosystem</p>
                  </li>
                  <li>
                    <div class="rnc"></div>
                    <p>Reserves & Contingency</p>
                  </li>
                </ul>
              </div>
              <img class="absolute" src="{{asset('images/circle_diagram.svg')}}" alt="">
            </div>
            <table>
                <thead>
                    <tr>
                    <th class="description" rowspan="2">Description</th>
                    <th class="vesting" colspan="2">Vesting Period</th>
                    <th class="token" rowspan="3">Percentage</th>
                    <th class="numb-token" rowspan="3">Number of Token</th>
                    </tr>
                    <tr>
                    <th class="idt">Initial<br>Distribution Terms</th>
                    <th class="sdt">Subsequent<br>Distribution Terms</th>
                    </tr>
                    <tr style="height: 2rem;">
                    <th class="bg-purple fw-300">Total Token Circulation</th>
                    <th class="bg-purple fw-500" colspan="2">5,000,000,000</th>
                    </tr>
                </thead>
                <tbody>
                <tr class="dist-token">
                  <td>Private Sale</td>
                  <td>12 Months Upfront Lockup</td>
                  <td>Monthly Distribution across 12 months</td>
                  <td>12%</td>
                  <td>600.000.000</td>
                </tr>
                <tr class="dist-token">
                  <td>Public Sale</td>
                  <td>6 Months Upfront Lockup</td>
                  <td>Monthly Distribution across 12 months</td>
                  <td>5%</td>
                  <td>250.000.000</td>
                </tr>
                <tr class="dist-token">
                  <td>Foundation (Corporation)</td>
                  <td>6 Months Upfront Lockup</td>
                  <td>Annual Distribution across 36 months</td>
                  <td>10%</td>
                  <td>500.000.000</td>
                </tr>
                <tr class="dist-token">
                  <td>Team</td>
                  <td>12 Months Upfront Lockup</td>
                  <td>Annual Distribution Across 3 years</td>
                  <td>10%</td>
                  <td>500.000.000</td>
                </tr>
                <tr class="dist-token">
                    <td>Partner</td>
                    <td>12 Months Upfront Lockup</td>
                    <td>Monthly Distribution Across 12 months</td>
                    <td>8%</td>
                    <td>400.000.000</td>
                </tr>
                <tr class="dist-token">
                  <td>Advisors</td>
                  <td>12 Months Upfront Lockup</td>
                  <td>Monthly Distribution Across 12 months</td>
                  <td>2%</td>
                  <td>100.000.000</td>
                </tr>
                <tr class="dist-token">
                  <td>Ecosystem (Product)</td>
                  <td>No lockup</td>
                  <td>Monthly distribution across 60 months</td>
                  <td>30%</td>
                  <td>1.500.000.000</td>
                </tr>
                <tr class="dist-token">
                    <td>Ecosystem (Marketing)</td>
                    <td>6 Months Upfront Lockup</td>
                    <td>Monthly Distribution across 24 months</td>
                    <td>10%</td>
                    <td>500.000.000</td>
                </tr>
                <tr class="dist-token">
                  <td>Reserves & Contingency</td>
                  <td>No lockup</td>
                  <td>No Lockup</td>
                  <td>13%</td>
                  <td>650.000.000</td>
                </tr>
                <tr class="dist-token total">
                    <td>
                        <div>
                            <div>Total</div>
                            <div></div>
                            <div></div>
                            <div>100%</div>
                            <div>5.000.000.000</div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
          </div>
      </section>

      <section id="scn-roadmap">
        <h3 class="fw-300 fp-white fs-46 mbottom-15">Dev. <span class="fw-600">Roadmap</span></h3>
        <img class="w-90 d-flex m-auto roadmap_desk" src="{{asset('images/ctt_roadmap.svg')}}" alt="">
        <img class="w-90 d-flex m-auto roadmap_mobile" src="{{asset('images/ctt_roadmap_mobile.svg')}}" alt="">
      </section>
  
      <section id="scn-team">
        <div class="container-section">
          <div class="scn-tw-text">
            <h3 class="fw-600 fp-purple fs-46 mbottom-15">@lang('lang.team')</h3>
            <div class="ct-p w-50 mbottom-45">
              <p>@lang('lang.ctt_team')</p>
            </div>
            <div class="title-style">
              <div class="title-team">Team Member</div>
              <hr>
            </div>
            <div class="ctt-team mtop-40">
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Founder & CEO</h5>
                  <h4>Dallen Kim</h4>
                  <ul>
                    <li>Co-Founder & COO of Neoplea</li>
                    <li>(Developed “Dungeon & Fighter”, the highest grossing game of all time)</li>
                    <li>Working in Neople from beginning until exit</li>
                    <li>Investor & Advisor, Pulse9 - Company that develops the first global Virtual Idol "ETERNITY"</li>
                    <li>Advisor & Investor on various startup companies Industry</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/dallen.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>CSO</h5>
                  <h4>Bonifacio</h4>
                  <ul>
                    <li>Cashtree For Indonesia Head of Business Development</li>
                    <li>MarComm Asst. Manager - AXA Mandiri GI</li>
                    <li>Business Development - PEACH (UK AdTech Company)</li>
                    <li>Master Degree in Design - ITB</li>
                    <li>12+ years of experience in creative industry as Project Manager dealing with global clients</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/boni.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>CTO</h5>
                  <h4>Agust Tampubolon</h4>
                  <ul>
                    <li>Software Architecture & Senior Engineer</li>
                    <li>Front End Developer Asst. Manager AXA Services Indonesia</li>
                    <li>SCRUM Certified</li>
                    <li>B.S in Information System</li>
                    <li>10+ years of experience in IT Industry</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/agust.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Co-Founder & CPO</h5>
                  <h4>Robin Jang</h4>
                  <ul>
                    <li>CoinOne Indonesia COO</li>
                    <li>Publishing PM for Perfect World</li>
                    <li>Bachelor's Degree in UIBE, China</li>
                    <li>14+ years of experience in IT Industry</li>  
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/robin.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Head of Marketing</h5>
                  <h4>Anynda</h4>
                  <ul>
                    <li>Associate of Broadcasting - University of Indonesia </li>
                    <li>Six Dimensions Cosmopolitan Magazine</li>
                    <li>Matari Advertising JakJazz International Festival</li>
                    <li>10+ years of experience in creative industry,  assisting global brands integrated campaigns</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/anynda.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Head Designer</h5>
                  <h4>Ridho</h4>
                  <ul>
                    <li>Hakuhodo Indonesia Advertising Agency</li>
                    <li>Electronic Solution</li>
                    <li>Topindo Lucky Sport</li>
                    <li>Cashtree For Indonesia</li>
                    <li>B.A Visual Communication Design</li>
                    <li>Graphic Designer with 12+ years of experience in design and creative industries</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/ridho.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Sr. Software Engineer</h5>
                  <h4>Ridcat Simbolon</h4>
                  <ul>
                    <li>ARC Indonesia</li>
                    <li>HDI Indonesia</li>
                    <li>Cashtree For Indonesia - Senior IT Manager & Backend Programmer</li>
                    <li>B.S Informatics Engineering</li>
                    <li>10+ years experience in IT industry</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/ridcat.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Product Development</h5>
                  <h4>Rifa Herlandy</h4>
                  <ul>
                    <li>Media Baru Digital</li>
                    <li>Cashtree For Indonesia - Project Operation Manager</li>
                    <li>Product Development Manager</li>
                    <li>B.S Information System</li>
                    <li>10+ years of experience in IT Industry</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/rifa.webp')}}" alt="">
                </div>
              </div>
            </div>
            <div class="title-style mtop-40">
              <div class="title-team">Advisor</div>
              <hr>
            </div>
            <div class="ctt-team mtop-40">
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Alexander Markl</h4>
                  <ul>
                    <li>Co-Founder SW DAO</li>
                    <li>Co-Founder Nucleon Finance AG</li>
                    <li>10 years of experience Developer</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/markl.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Jenny</h4>
                  <ul>
                    <li>Co Founder SW DAO</li>
                    <li>Business Developmentlopment</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/jenny.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Heuibae Kim</h4>
                  <ul>
                    <li>CEO & Founder SOMESING</li>
                    <li>Blockchain based karaoke apps on Klaytn with more than 1.5M users and 10M TX</li>
                    <li>Solid business relationships with major mobile companies in Korea</li>
                    <li>7+ years of experience, comprehensive technical know-how and expertise in mobile “Singing Content Platform” and blockchain Industry</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/kim.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Sangsoo Kim</h4>
                  <ul>
                    <li>20 years experience in Private Equity, Venture Capital, Infrastructure and Startup</li>
                    <li>CPA, CFA</li>
                    <li>Accounting Director - MVL</li>
                    <li>Regional Head - Korea Venture Investment Corporation</li>
                    <li>KPMG Samjong Accounting Corp.</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/sangsoo.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Tammy</h4>
                  <ul>
                    <li>20 years experience in the finance and technology sectors.</li>
                    <li>Investment strategist - Citibank</li>
                    <li>Co-founder of Jenga K (Blockchain consultancy) and Lodestart (Startups research)</li>
                    <li>Accelerating and advising various global blockchain projects</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/tammy.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Gun Gun Febrianza</h4>
                  <ul>
                    <li>Cashtree For Indonesia Head of Business Development</li>
                    <li>MarComm Asst. Manager - AXA Mandiri GI</li>
                    <li>Business Development - PEACH (UK AdTech Company)</li>
                    <li>Master Degree in Design - ITB</li>
                    <li>12+ years of experience in creative industry as Project Manager dealing with global clients</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/gun.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Jay Lim</h4>
                  <ul>
                    <li>10+ years of experience in Startup Acceleration, Investment, and Strategy.</li>
                    <li>Vice President/ Hanwha Asset Management/ Global Innovation Team</li>
                    <li>Shinhan Financial Group</li>
                    <li>E&Y</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/jay.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Balqis</h4>
                  <ul>
                    <li>B.A Humanities in Korean Studies</li>
                    <li>ASEAN International Mobility Scholarship Awardee</li>
                    <li>Harvard National MUN Diplomatic Commendation</li>
                    <li>Euro MUN Academic Excellence</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/balqis.webp')}}" alt="">
                </div>
              </div>
              <div class="ctt-card">
                <div class="top-card"></div>
                <div class="body-card">
                  <h5>Advisor</h5>
                  <h4>Nikolay Akatyev</h4>
                  <ul>
                    <li>8 years cyber security experience, 10 years software development experience</li>
                    <li>CSSLP, CCSK</li>
                    <li>Digital forensics mentor at Korea Best of the Best (BoB) Cybersecurity program.</li>
                    <li>Founder of Seoul Tech Society, crew at Div0 Singapore cybersecurity community & organizer of Global Cybersecurity Camp (GCC).</li>
                    <li>Organizing Committee  International Conference on Digital Forensics and Cyber Crime (ICDF2C).</li>
                    <li>Regularly published academic papers and presented at cyber security conferences.</li>
                  </ul>
                </div>
                <div class="elips absolute">
                  <img src="{{asset('images/nikolay.webp')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>

    <footer>
      <div class="footer-content">
        <div class="d-flex align-center">
          <img class="ct-footer mright-30" src="{{asset('images/ct_footer.svg')}}" alt="">
          <div class="white-dots mright-30"></div>
          <div class="d-flex align-center">
            <img class="ct-small-logo mright-5" src="{{asset('images/small_ctt_logo.svg')}}" alt="">
            <div class="text-logo">CTT</div>
          </div>
        </div>
        <div class="d-flex align-center">
          <div class="fp-white fw-600 mright-20 copyright">©2022 - Cashtree. All right reserved</div>
          {{-- <div class="fp-white fw-600 mright-20 policy">Privacy Policy</div> --}}
          <ul>
            <li class="mright-20"><a target="blank" href="https://www.instagram.com/cashtreetoken"><img src="{{asset('images/ft_ctt_ig.svg')}}" alt=""></a></li>
            {{-- <li class="mright-20"><a target="blank" href="#"><img src="{{asset('images/ft_ctt_yt.svg')}}" alt=""></a></li> --}}
            <li class="mright-20"><a target="blank" href="https://www.facebook.com/cashtreetoken"><img src="{{asset('images/ft_ctt_fb.svg')}}" alt=""></a></li>
            <li class="mright-20"><a target="blank" href="https://twitter.com/Cashtree_Token"><img src="{{asset('images/ft_ctt_tw.svg')}}" alt=""></a></li>
            <li class="mright-20"><a target="blank" href="https://t.me/CashtreeToken"><img src="{{asset('images/ft_ctt_tl.svg')}}" alt=""></a></li>
            <li class="mright-20"><a target="blank" href="https://discord.gg/RPcAXXSKEY"><img src="{{asset('images/ft_ctt_dc.svg')}}" alt=""></a></li>
            <li class="mright-20"><a target="blank" href="https://medium.com/@CashtreeToken"><img src="{{asset('images/ft_ctt_md.svg')}}" alt=""></a></li>
          </ul>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('/js/index.js') }}"></script>

    <script>
      const text = $('#desc-lang').text().length
      if(text > 100){
        $('.text-description').addClass('active');
        $('.read-more').addClass('active')
      } else{
        $('.text-description').removeClass('active');
        $('.read-more').removeClass('active');
      }

      // $(function() {
      //   $('.nav').click(function() {
      //     var id = $(this).attr('id');
      //     $('html, body').animate({
      //       scrollTop: ($('#' + id + '.section').offset().(0,0))
      //     }, 100000);
      //   });
      // })();
    </script>

  </body>
</html>
