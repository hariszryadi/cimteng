<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('storage/'.Auth::user()->avatar)}}" class="img-circle img-sm" alt="" onerror="this.src='{{asset('assets/admin/images/placeholder.jpg')}}';"></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{Auth::user()->name}}</span>
                        <div class="text-size-mini text-muted">
                            {{Auth::user()->email}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span></span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="icon-home4"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(1)->first()->read_right == true ||
                        auth()->user()->roles()->first()->permission_role()->byId(2)->first()->read_right == true ||
                        auth()->user()->roles()->first()->permission_role()->byId(3)->first()->read_right == true) --}}
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-cube3"></i>
                                <span>CMS</span></a>
                            <ul>
                                {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(1)->first()->read_right == true) --}}
                                    <li class="nav-item {{ request()->is('admin/cms/banner/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.cms.banner.index') }}">Banner</a>
                                    </li>
                                {{-- @endif --}}

                                {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(2)->first()->read_right == true) --}}
                                    <li class="nav-item {{ request()->is('admin/cms/news/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.cms.news.index') }}">Berita</a>
                                    </li>
                                {{-- @endif --}}

                                {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(3)->first()->read_right == true) --}}
                                    <li class="nav-item {{ request()->is('admin/cms/video/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.cms.video.index') }}">Video</a>
                                    </li>
                                {{-- @endif --}}

                                <li class="nav-item {{ request()->is('admin/cms/greeting/*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.cms.greeting.index') }}">Sambutan Camat</a>
                                </li>
                            </ul>
                        </li>
                    {{-- @endif --}}

                    {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(4)->first()->read_right == true ||
                        auth()->user()->roles()->first()->permission_role()->byId(5)->first()->read_right == true) --}}
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-cube2"></i>
                                <span>Kecamatan</span></a>
                            <ul>
                                {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(4)->first()->read_right == true) --}}
                                    <li class="nav-item">
                                        <a href="#">Data Lakip</a>
                                    </li>
                                {{-- @endif --}}

                                {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(5)->first()->read_right == true) --}}
                                    <li class="nav-item {{request()->is('admin/vision-mission/*') ? 'active' : ''}}">
                                        <a href="{{route('admin.visionMission.index')}}">Visi & Misi</a>
                                    </li>
                                {{-- @endif --}}
                            </ul>
                        </li>
                    {{-- @endif --}}

                    {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(6)->first()->read_right == true) --}}
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-cube4"></i>
                                <span>Kelurahan</span></a>
                            <ul>
                                <li class="nav-item {{request()->is('admin/urban-village/monograph/*') ? 'active' : ''}}">
                                    <a href="{{route('admin.urbanVillage.monograph.index')}}">Monografi</a>
                                </li>
                                <li class="nav-item {{request()->is('admin/urban-village/employee/*') ? 'active' : ''}}">
                                    <a href="{{route('admin.urbanVillage.employee.index')}}">Kepegawaian</a>
                                </li>
                                <li class="nav-item {{request()->is('admin/urban-village/potency/*') ? 'active' : ''}}">
                                    <a href="{{route('admin.urbanVillage.potency.index')}}">Potensi</a>
                                </li>
                            </ul>
                        </li>
                    {{-- @endif --}}

                    <li class="nav-item {{ request()->is('admin/media-social/*') ? 'active' : '' }}">
                        <a href="{{ route('admin.mediaSocial.index') }}" class="nav-link"><i class="icon-iphone"></i>
                            <span>Media Sosial</span>
                        </a>
                    </li>

                    @if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->read_right == true)
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stack"></i>
                                <span>Master</span></a>
                            <ul>
                                <li class="nav-item {{request()->is('admin/master/type-potency/*') ? 'active' : ''}}">
                                    <a href="{{route('admin.master.typePotency.index')}}">Jenis Usaha</a>
                                </li>

                            </ul>
                        </li>
                    @endif

                    {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(8)->first()->read_right == true ||
                        auth()->user()->roles()->first()->permission_role()->byId(9)->first()->read_right == true ||
                        auth()->user()->roles()->first()->permission_role()->byId(10)->first()->read_right == true) --}}
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-user-lock"></i>
                                <span>User Config</span></a>
                            <ul>
                                {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(9)->first()->read_right == true) --}}
                                    <li class="nav-item {{ request()->is('admin/role/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.role.index') }}">Role</a>
                                    </li>
                                {{-- @endif --}}

                                {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(10)->first()->read_right == true) --}}
                                    <li class="nav-item {{ request()->is('admin/user-admin/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.userAdmin.index') }}">User Admin</a>
                                    </li>
                                {{-- @endif --}}
                            </ul>
                        </li>
                    {{-- @endif --}}

                    {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(11)->first()->read_right == true ||
                        auth()->user()->roles()->first()->permission_role()->byId(12)->first()->read_right == true)
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-download4"></i>
                                <span>Report</span></a>
                            <ul>
                                @if (auth()->user()->roles()->first()->permission_role()->byId(11)->first()->read_right == true)
                                    <li class="nav-item {{request()->is('admin/report/leave') ? 'active' : ''}}">
                                        <a href="{{route('admin.report.leave')}}">Report Cuti/Izin</a>
                                    </li>
                                @endif

                                @if (auth()->user()->roles()->first()->permission_role()->byId(12)->first()->read_right == true)
                                    <li class="nav-item {{request()->is('admin/report/overtime') ? 'active' : ''}}">
                                        <a href="{{route('admin.report.overtime')}}">Report Lembur</a>
                                    </li>
                                @endif

                                @if (auth()->user()->roles()->first()->permission_role()->byId(13)->first()->read_right == true)
                                    <li class="nav-item {{request()->is('admin/report/fee') ? 'active' : ''}}">
                                        <a href="{{route('admin.report.fee')}}">Report Fee</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif --}}
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
