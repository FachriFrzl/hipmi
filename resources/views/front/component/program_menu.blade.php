<div class="accordion accordion-program d-none d-sm-block" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed {{ (request()->is('preschool')) ? 'program-active' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Preschool
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse {{ (request()->is('preschool','preschool-life','preschool-calendar')) ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <li class="{{ (request()->is('preschool')) ? 'active' : '' }}"><a href="{{route('home')}}/preschool">Tentang Preschool</a> </li>
            <li class="{{ (request()->is('preschool-life')) ? 'active' : '' }}"><a href="{{route('home')}}/preschool-life">Kehidupan Sekolah TK</a> </li>
            <li class="{{ (request()->is('preschool-calendar')) ? 'active' : '' }}"><a href="{{route('home')}}/preschool-calendar">Kalender Akademik</a></li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Primary School
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse {{ (request()->is('primary-school','primary-school-life','primary-school-calendar','primary-school-curriculum')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <li class="{{ (request()->is('primary-school')) ? 'active' : '' }}"><a href="{{route('home')}}/primary-school">Tentang SD</a></li>
        <li class="{{ (request()->is('primary-school-curriculum')) ? 'active' : '' }}"><a href="{{route('home')}}/primary-school-curriculum">Kurikulum SD</a></li>
        <li class="{{ (request()->is('primary-school-life')) ? 'active' : '' }}"><a href="{{route('home')}}/primary-school-life">Kehidupan SD</a></li>
        <li class="{{ (request()->is('primary-school-calendar')) ? 'active' : '' }}"><a href="{{route('home')}}/primary-school-calendar">Kalender Akademik</a></li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Secondary School
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse {{ (request()->is('secondary-school','secondary-school-curriculum','secondary-school-life','pesantren','secondary-school-calendar')) ? 'show' : '' }}" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <li class="{{ (request()->is('secondary-school')) ? 'active' : '' }}"><a href="{{route('home')}}/secondary-school">Tentang SMP-SMA</a></li>
        <li class="{{ (request()->is('secondary-school-curriculum')) ? 'active' : '' }}"><a href="{{route('home')}}/secondary-school-curriculum">Kurikulum SMP-SMA</a></li>
        <li class="{{ (request()->is('secondary-school-life')) ? 'active' : '' }}"><a href="{{route('home')}}/secondary-school-life">Kehidupan SMP-SMA</a></li>
        <li class="{{ (request()->is('pesantren')) ? 'active' : '' }}"><a href="{{route('home')}}/pesantren">Asrama & Pesantren</a></li>
        <li class="{{ (request()->is('secondary-school-calendar')) ? 'active' : '' }}"><a href="{{route('home')}}/secondary-school-calendar">Kalender Akademik</a></li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        Tahfidz Takhasus
      </button>
    </h2>
    <div id="collapse4" class="accordion-collapse collapse {{ (request()->is('tahfidz')) ? 'show' : '' }}" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <li class="{{ (request()->is('tahfidz')) ? 'active' : '' }}"><a href="{{route('home')}}/tahfidz">Tentang Tahfidz Takhasus</a></li>
      </div>
    </div>
  </div>
</div>