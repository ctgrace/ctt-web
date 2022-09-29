@extends('layout.app_user')

@section('content')

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

    <section id="scn-tw" data-aos="fade-up" data-aos-duration="800">
      <div class="container-section relative">
        <img class="img-for-mobile" src="{{asset('images/img_section_tw_mobile.svg')}}" alt="">
        <img class="img-for-ipad" src="{{asset('images/img_section_tw_ipad.svg')}}" alt="">
        <div class="scn-tw-text absolute">
          <h3 class="fw-300 fp-purple fs-46" data-aos="fade-up" data-aos-duration="800">Cashtree :</h3>
          <h3 class="fp-purple fs-46" data-aos="fade-up" data-aos-duration="800">@lang('lang.the_gate')</h3>
          <h3 class="fp-purple fs-46 mbottom-15" data-aos="fade-up" data-aos-duration="800">@lang('lang.adoption')</h3>
          <div class="ct-p" data-aos="fade-up" data-aos-duration="800">
            <p class="fp-black fw-300 w-40">@lang('lang.ct_bv')</p>
          </div>
          <h6 class="fw-300 fp-purple fs-20 mtop-60" data-aos="fade-up" data-aos-duration="800">@lang('lang.through')</h6>
          <h4 class="fp-purple fs-36 w-65" data-aos="fade-up" data-aos-duration="800">@lang('lang.be_gate')</h4>
        </div>
      </div>
    </section>

    <section id="scn-ctt-is" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
      <div class="container-section">
        <img class="img-for-mobile" src="{{asset('images/img_section_ctt_mobile.svg')}}" alt="" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <img class="img-for-ipad" src="{{asset('images/img_section_ctt_ipad.svg')}}" alt="" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="scn-tw-text">
          <h3 class="fw-300 fp-purple fs-46" data-aos="fade-up" data-aos-anchor-placement="center-bottom">@lang('lang.what_is')</h3>
          <h3 class="fp-purple fs-46 mbottom-15" data-aos="fade-up" data-aos-anchor-placement="center-bottom">@lang('lang.ctoken_ctt')</h3>
          <div class="ct-p">
            <p class="fp-black fw-300 w-40" data-aos="fade-up" data-aos-anchor-placement="center-bottom">@lang('lang.ctt_new')</p>             
          </div>
        </div>
        <div class="container-btn">
          <a href="{{asset('whitepaper/CTT-Whitepaper.pdf')}}" class="btn-download disabled mright-20"  data-aos="fade-up" data-aos-anchor-placement="center-bottom">@lang('lang.dw_wp')</a>
        </div>
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
          <p>@lang('lang.ctt_can')</p>
        </div>
      </div>
    </section>

    <section id="scn-utility" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="center-bottom">
      <div class="container-section relative">
        <img class="img-for-mobile" src="{{asset('images/img_section_utility_mobile.svg')}}" alt="">
        <img class="img-for-ipad" src="{{asset('images/img_section_utility_ipad.svg')}}" alt="">
        <div class="scn-tw-text" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="center-bottom">
          <h3 class="fw-700 fp-purple fs-46 mbottom-10">@lang('lang.utility')</h3>
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
          <h3 class="fw-300 fp-white fs-46 mbottom-15" data-aos="zoom-in" data-aos-duration="1000">CTT <span class="fw-700">@lang('lang.token')</span></h3>
          <div class="ct-p" data-aos="zoom-in" data-aos-duration="1000">
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
                <td>Monthly distribution across 48 months</td>
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
                          <div>
                            <div>100%</div>
                            <div>5.000.000.000</div>
                          </div>
                      </div>
                  </td>
              </tr>
              </tbody>
          </table>
        </div>
    </section>

    <section id="scn-roadmap">
      <h3 class="fw-300 fp-white fs-46 mbottom-15">Dev. <span class="fw-700">Roadmap</span></h3>
      <img class="w-90 d-flex m-auto roadmap-desk" src="{{asset('images/ctt_roadmap.svg')}}" alt="" data-aos="zoom-in" data-aos-duration="1000">
      <img class="w-90 d-flex m-auto roadmap-mobile" src="{{asset('images/ctt_roadmap_mobile.svg')}}" alt="" data-aos="zoom-in" data-aos-duration="1000">
    </section>

    <section id="scn-team">
      <div class="container-section">
        <div class="scn-tw-text">
          <h3 class="fw-700 fp-purple fs-46 mbottom-15">@lang('lang.team')</h3>
          <div class="ct-p w-50 mbottom-45">
            <p>@lang('lang.ctt_team')</p>
          </div>
          <div class="title-style">
            <div class="title-team">Team Member</div>
            <hr>
          </div>
          <div class="ctt-team mtop-40">
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <div class="top-card"></div>
              <div class="body-card">
                <h5>Advisor</h5>
                <h4>Nikolay "Niko" Akatyev</h4>
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
            <div class="ctt-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <div class="top-card"></div>
              <div class="body-card">
                <h5>Advisor</h5>
                <h4>Khrisna R</h4>
                <ul>
                  <li>Founder & Chairman, Digital Insight</li>
                  <li>Global Head of Fintech / Blockchain & Digitalisation</li>
                  <li>Ex-Chairman, Selvam LLC</li>
                  <li>Immediate Past Chairman & Managing Director of Duane Morris & Selvam LLP (Singapore, Myanmar, Sri Lanka)</li>
                  <li>Senior Advisor of Global Blockchain Foundation</li>
                  <li>Blockchain Expert Speaker of World Knowledge Forum</li>
                </ul>
              </div>
              <div class="elips absolute">
                <img src="{{asset('images/khrisna.webp')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

</div>

@endsection