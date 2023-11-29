<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">WPU Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} d-flex align-items-center gap-2"
                        aria-current="page" href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }} d-flex align-items-center gap-2"
                        href="/dashboard/posts">
                        {{-- <svg class="bi"><use xlink:href="#file-earmark" /></svg> --}}
                        <i class="bi bi-file-text"></i>
                        My Posts
                    </a>
                </li>
            </ul>

            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrator</span>
                    <u class="nav felx-column">
                        <li class=" nav-item">
                            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                                href="/dashboard/categories">
                                <span data-feather="grid">
                                    Post Categories
                                </span>
                        </li>
                    </u>
                </h6>
            @endcan
        </div>
    </div>
</div>