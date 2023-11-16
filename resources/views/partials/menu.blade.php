<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    {{ __('Dashboard') }}
                    </p>
                </a>
            </li>
            @can('user_management_access')
            <li class="nav-item {{ request()->is('admin/permissions*') || request()->is('admin/roles*') || request()->is('admin/users*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('admin/permissions*') || request()->is('admin/roles*') || request()->is('admin/users*') ? 'active' : '' }}">
                <i class="nav-icon fa-solid fa-users nav-icon"></i>
                <p>
                    {{ trans('cruds.user_management.title') }}
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.permissions.index') }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fa-solid fa-unlock nav-icon"></i>
                            <p>{{ trans('cruds.permission.title') }}</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.roles.index') }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fa-solid fa-briefcase nav-icon"></i>
                            <p>{{ trans('cruds.role.title') }}</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fa-solid fa-user nav-icon"></i>
                            <p>{{ trans('cruds.user.title') }}</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
            @can('setting_access')
            <li class="nav-item">
            <a href="{{ route("admin.settings.index") }}" class="nav-link {{ request()->is('admin/settings') || request()->is('admin/settings/*') ? 'active' : '' }}">
            <i class="fa-fw fas fa-cogs nav-icon">

            </i>
            <p>
                <span>{{ trans('cruds.setting.title') }}</span>
            </p>
            </a>
            </li>
            @endcan
            @can('speaker_access')
            <li class="nav-item">
            <a href="{{ route("admin.speakers.index") }}" class="nav-link {{ request()->is('admin/speakers') || request()->is('admin/speakers/*') ? 'active' : '' }}">
            <i class="fa-fw fas fa-users nav-icon">

            </i>
            <p>
                <span>{{ trans('cruds.speaker.title') }}</span>
            </p>
            </a>
            </li>
            @endcan
            @can('schedule_access')
            <li class="nav-item">
                <a href="{{ route("admin.schedules.index") }}" class="nav-link {{ request()->is('admin/schedules') || request()->is('admin/schedules/*') ? 'active' : '' }}">
                    <i class="fa-fw far fa-clock nav-icon">

                    </i>
                    <p>
                    <span>{{ trans('cruds.schedule.title') }}</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('venue_access')
            <li class="nav-item">
                <a href="{{ route("admin.venues.index") }}" class="nav-link {{ request()->is('admin/venues') || request()->is('admin/venues/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-map-marker-alt nav-icon">

                    </i>
                    <p>
                    <span>{{ trans('cruds.venue.title') }}</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('hotel_access')
            <li class="nav-item">
                <a href="{{ route("admin.hotels.index") }}" class="nav-link {{ request()->is('admin/hotels') || request()->is('admin/hotels/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-hotel nav-icon">

                    </i>
                    <p>
                    <span>{{ trans('cruds.hotel.title') }}</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('gallery_access')
            <li class="nav-item">
                <a href="{{ route("admin.galleries.index") }}" class="nav-link {{ request()->is('admin/galleries') || request()->is('admin/galleries/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-images nav-icon">

                    </i>
                    <p>
                    <span>{{ trans('cruds.gallery.title') }}</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('sponsor_access')
            <li class="nav-item">
                <a href="{{ route("admin.sponsors.index") }}" class="nav-link {{ request()->is('admin/sponsors') || request()->is('admin/sponsors/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-hand-holding-usd nav-icon">

                    </i>
                    <p>
                    <span>{{ trans('cruds.sponsor.title') }}</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('faq_access')
            <li class="nav-item">
                <a href="{{ route("admin.faqs.index") }}" class="nav-link {{ request()->is('admin/faqs') || request()->is('admin/faqs/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-question nav-icon">

                    </i>
                    <p>
                    <span>{{ trans('cruds.faq.title') }}</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('amenity_access')
            <li class="nav-item">
                <a href="{{ route("admin.amenities.index") }}" class="nav-link {{ request()->is('admin/amenities') || request()->is('admin/amenities/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-check nav-icon">

                    </i>
                    <p>
                    <span>{{ trans('cruds.amenity.title') }}</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('price_access')
            <li class="nav-item">
                <a href="{{ route("admin.prices.index") }}" class="nav-link {{ request()->is('admin/prices') || request()->is('admin/prices/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-money-bill nav-icon">

                    </i>
                    <p>
                    <span>{{ trans('cruds.price.title') }}</span>
                    </p>
                </a>
            </li>
            @endcan
        </ul>
    </nav>
</div>