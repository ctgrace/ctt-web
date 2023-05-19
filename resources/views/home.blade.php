@extends('layout.app_user')

@section('content')

<div class="container-fluid">
    <section id="team" class="bg-section">
      <div class="w-8 m-auto d-flex flex-column h-100 justify-center">
          <div>
              <div class="ctt-team">
                  <div class="team-card">
                      {{-- <img class="images-card" src="{{asset('/assets/dallen.webp')}}" alt=""> --}}
                      <div class="top-card">
                        <div class="container-img">
                          <img class="images-card" src="{{asset('images/dallen.webp')}}" alt="">
                        </div>
                      </div>
                      <div class="body-card">
                          <h5 class="fw-9">Dallen Kim</h5>
                          <h5 class="fw-4">Founder & Co-CEO</h5>
                          <ul>
                              <li>Co-Founder & COO of Neoplea</li>
                              <li>(Developed “Dungeon & Fighter”, the highest grossing game of all time)</li>
                              <li>Working in Neople from beginning until exit</li>
                              <li>Investor & Advisor, Pulse9 - Company that develops the first global Virtual Idol "ETERNITY"</li>
                              <li>22+ years of experience in StartUp / IT</li>
                              <li>Advisor & Investor on various startup companies Industry</li>
                          </ul>
                      </div>
                  </div>
                  <div class="team-card">
                      <img class="images-card" src="{{asset('/assets/boni.webp')}}" alt="">
                      <div class="body-card">
                          <h5 class="fw-9">CSO</h5>
                          <h5 class="fw-4">Bonifacio</h4>
                          <ul>
                              <li>
                                  <div>
                                      <p>PT. Cashtree For Indonesia</p>
                                      <p>Head of Business Development</p>
                                  </div>
                              </li>
                              <li>
                                  <div>
                                      <p>MarComm Asst. Manager - AXA Mandiri GI</p>
                                      <p>Business Development - PEACH (UK AdTech Company)</p>
                                  </div>
                              </li>
                              <li>Master Degree in Design - ITB</li>
                              <li>12+ years of experience in creative industry as Project Manager dealing with global clients</li>
                          </ul>
                      </div>
                  </div>
                  <div class="team-card">
                      <img class="images-card" src="{{asset('/assets/boni.webp')}}" alt="">
                      <div class="body-card">
                      <h5 class="fw-9">Co-CEO & CTO</h5>
                      <h5 class="fw-4">Agust Tampubolon</h5>
                      <ul>
                      <li>Software Architecture & Senior Engineer</li>
                      <li>Front End Developer Asst. Manager AXA Services Indonesia</li>
                      <li>SCRUM Certified</li>
                      <li>B.S in Information System</li>
                      <li>10+ years of experience in IT Industry</li>
                      </ul>
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
                  <img src="{{asset('assets/robin.webp')}}" alt="">
              </div>
              </div>
              <div class="ctt-card">
              <div class="top-card"></div>
              <div class="body-card">
                  <h5>Head Designer</h5>
                  <h4>Ridho</h4>
                  <ul>
                  <li>Graphic Designer with 12+ years of experience in design and creative industries</li>
                  <li>Hakuhodo Indonesia Advertising Agency</li>
                  <li>Electronic Solution</li>
                  <li>Topindo Lucky Sport</li>
                  <li>PT. Cashtree For Indonesia</li>
                  <li>B.A Visual Communication Design</li>
                  </ul>
              </div>
              <div class="elips absolute">
                  <img src="{{asset('assets/ridho.webp')}}" alt="">
              </div>
              </div>
              <div class="ctt-card">
              <div class="top-card"></div>
              <div class="body-card">
                  <h5>Sr. Software Engineer</h5>
                  <h4>Ridcat Simbolon</h4>
                  <ul>
                  <li>10+ years experience in IT industry</li>
                  <li>B.S Informatics Engineering</li>
                  <li>PT. ARC Indonesia</li>
                  <li>PT. HDI Indonesia</li>
                  <li>
                      <div>
                      <p>PT. Cashtree For Indonesia</p>
                      <p>Senior IT Manager & Backend Programmer</p>
                      </div>
                  </li>
                  </ul>
              </div>
              <div class="elips absolute">
                  <img src="{{asset('assets/ridcat.webp')}}" alt="">
              </div>
              </div>
              <div class="ctt-card">
              <div class="top-card"></div>
              <div class="body-card">
                  <h5>Product Development</h5>
                  <h4>Rifa Herlandy</h4>
                  <ul>
                  <li>10+ years of experience in IT Industry</li>
                  <li>B.S Information System</li>
                  <li>PT. Media Baru Digital</li>
                  <li>
                      <div>
                      <p>PT. Cashtree For Indonesia</p>
                      <p>Project Operation Manager</p>
                      <p>Product Development Manager</p>
                      </div>
                  </li>
                  </ul>
              </div>
              <div class="elips absolute">
                  <img src="{{asset('assets/rifa.webp')}}" alt="">
              </div>
              </div>
          </div>

              </div>
          </div>
      </div>
  </section>

</div>

@endsection