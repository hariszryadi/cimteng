<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{ asset('storage/'.Auth::user()->avatar) }}" class="img-circle img-sm" alt="" onerror="this.src='{{ asset('assets/admin/images/placeholder.jpg') }}';"></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
                        <div class="text-size-mini text-muted">
                            {{ Auth::user()->email }}
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

                    @if (auth()->user()->can('read banner') ||
                        auth()->user()->can('read news')||
                        auth()->user()->can('read video') ||
                        auth()->user()->can('read greeting'))
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-cube3"></i>
                                <span>CMS</span></a>
                            <ul>
                                @can('read banner')
                                    <li class="nav-item {{ request()->is('admin/cms/banner/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.cms.banner.index') }}">Banner</a>
                                    </li>
                                @endcan

                                @can('read news')
                                    <li class="nav-item {{ request()->is('admin/cms/news/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.cms.news.index') }}">Berita</a>
                                    </li>
                                @endcan

                                @can('read video')
                                    <li class="nav-item {{ request()->is('admin/cms/video/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.cms.video.index') }}">Video</a>
                                    </li>
                                @endcan

                                @can('read greeting')
                                    <li class="nav-item {{ request()->is('admin/cms/greeting/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.cms.greeting.index') }}">Sambutan Camat</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endif

                    {{-- <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-stack"></i>
                            <span>Master</span></a>
                        <ul>
                            @can('update', $post)
                                
                            @endcan
                            <li class="nav-item {{ request()->is('admin/master/type-potency/*') ? 'active' : '' }}">
                                <a href="{{ route('admin.master.typePotency.index') }}">Jenis Usaha</a>
                            </li>

                        </ul>
                    </li> --}}

                    @if (auth()->user()->can('read lakip') ||
                        auth()->user()->can('read district monograph') ||
                        auth()->user()->can('read vision mission') ||
                        auth()->user()->can('read organizational structure') ||
                        auth()->user()->can('read district employee') ||
                        auth()->user()->can('read gallery photo'))
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stack-text"></i>
                                <span>Kecamatan</span></a>
                            <ul>
                                @can('read lakip')
                                    <li class="nav-item {{ request()->is('admin/district/lakip/*') ? 'active' : ''}} ">
                                        <a href="{{ route('admin.district.lakip.index') }}">Data Lakip</a>
                                    </li>
                                @endcan

                                @can('read district monograph')
                                    <li class="nav-item {{ request()->is('admin/district/monograph/*') ? 'active' : ''}} ">
                                        <a href="{{ route('admin.district.monograph.index') }}">Monografi</a>
                                    </li>
                                @endcan

                                @can('read vision mission')
                                    <li class="nav-item {{ request()->is('admin/district/vision-mission/*') ? 'active' : ''}} ">
                                        <a href="{{ route('admin.district.visionMission.index') }}">Visi & Misi</a>
                                    </li>
                                @endcan

                                @can('read organizational structure')
                                    <li class="nav-item {{ request()->is('admin/district/organizational-structure/*') ? 'active' : ''}} ">
                                        <a href="{{ route('admin.district.organizationalStructure.index') }}">Struktur Organisasi</a>
                                    </li>
                                @endcan

                                @can('read district employee')
                                    <li class="nav-item {{ request()->is('admin/district/employee/*') ? 'active' : '' }} ">
                                        <a href="{{ route('admin.district.employee.index') }}">Kepegawaian</a>
                                    </li>
                                @endcan
                                
                                @can('read gallery photo')
                                    <li class="nav-item {{ request()->is('admin/district/gallery-photo/*') ? 'active' : '' }} ">
                                        <a href="{{ route('admin.district.galleryPhoto.index') }}">Galeri Foto</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endif

                    @if (auth()->user()->can('read urban village monograph') ||
                        auth()->user()->can('read urban village employee') ||
                        auth()->user()->can('read urban village potency'))
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stack-empty"></i>
                                <span>Kelurahan</span></a>
                            <ul>
                                @can('read urban village monograph')
                                    <li class="nav-item {{ request()->is('admin/urban-village/monograph/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.urbanVillage.monograph.index') }}">Monografi</a>
                                    </li>
                                @endcan
                                @can('read urban village employee')
                                    <li class="nav-item {{request()->is('admin/urban-village/employee/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.urbanVillage.employee.index') }}">Kepegawaian</a>
                                    </li>
                                @endcan
                                @can('read urban village potency')
                                    <li class="nav-item {{request()->is('admin/urban-village/potency/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.urbanVillage.potency.index') }}">Potensi</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endif

                    @can('read service')
                        <li class="nav-item {{ request()->is('admin/service/*') ? 'active' : '' }} ">
                            <a href="{{ route('admin.service.index') }}" class="nav-link"><i class="icon-user-check"></i>
                                <span>Layanan</span>
                            </a>
                        </li>
                    @endcan
                    
                    @can('read media social')
                        <li class="nav-item {{ request()->is('admin/media-social/*') ? 'active' : '' }} ">
                            <a href="{{ route('admin.mediaSocial.index') }}" class="nav-link"><i class="icon-share3"></i>
                                <span>Media Sosial</span>
                            </a>
                        </li>
                    @endcan

                    {{-- <li class="nav-item {{ request()->is('admin/iumk/*') ? 'active' : '' }} ">
                        <a href="{{ route('admin.iumk.index') }}" class="nav-link"><i class="icon-stack-check"></i>
                            <span>IUMK</span>
                        </a>
                    </li> --}}

                    @can('read comment')
                        <li class="nav-item {{ request()->is('admin/comment/*') ? 'active' : '' }} ">
                            <a href="{{ route('admin.comment.index') }}" class="nav-link"><i class="icon-comments"></i>
                                <span>Komentar & Saran</span>
                            </a>
                        </li>
                    @endcan

                    @if (auth()->user()->can('read role') ||
                        auth()->user()->can('read user'))
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-user-lock"></i>
                                <span>User Config</span></a>
                            <ul>
                                @can('read role')
                                    <li class="nav-item {{ request()->is('admin/role/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.role.index') }}">Role</a>
                                    </li>
                                @endcan

                                @can('read user')
                                    <li class="nav-item {{ request()->is('admin/user-admin/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.userAdmin.index') }}">User Admin</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
