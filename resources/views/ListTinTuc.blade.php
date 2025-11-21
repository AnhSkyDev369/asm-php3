@extends('layouts.admin.AdminLayout')
@section('content')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <!--  BEGIN BREADCRUMBS  -->
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <div class="d-flex breadcrumb-content">
                            <div class="page-header">

                                <div class="page-title">
                                </div>

                                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Layouts</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Full Width</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                        <ul class="navbar-nav flex-row ms-auto breadcrumb-action-dropdown">
                            <li class="nav-item more-dropdown">
                                <div class="dropdown  custom-dropdown-icon">
                                    <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Settings</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-down custom-dropdown-arrow">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">

                                        <a class="dropdown-item" data-value="Settings"
                                            data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-settings&quot;><circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;></circle><path d=&quot;M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z&quot;></path></svg>"
                                            href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-settings">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path
                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                </path>
                                            </svg> Settings
                                        </a>

                                        <a class="dropdown-item" data-value="Mail"
                                            data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-mail&quot;><path d=&quot;M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z&quot;></path><polyline points=&quot;22,6 12,13 2,6&quot;></polyline></svg>"
                                            href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg> Mail
                                        </a>

                                        <a class="dropdown-item" data-value="Print"
                                            data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-printer&quot;><polyline points=&quot;6 9 6 2 18 2 18 9&quot;></polyline><path d=&quot;M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2&quot;></path><rect x=&quot;6&quot; y=&quot;14&quot; width=&quot;12&quot; height=&quot;8&quot;></rect></svg>"
                                            href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-printer">
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path
                                                    d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                </path>
                                                <rect x="6" y="14" width="12" height="8"></rect>
                                            </svg> Print
                                        </a>

                                        <a class="dropdown-item" data-value="Download"
                                            data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-download&quot;><path d=&quot;M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4&quot;></path><polyline points=&quot;7 10 12 15 17 10&quot;></polyline><line x1=&quot;12&quot; y1=&quot;15&quot; x2=&quot;12&quot; y2=&quot;3&quot;></line></svg>"
                                            href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-download">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3">
                                                </line>
                                            </svg> Download
                                        </a>

                                        <a class="dropdown-item" data-value="Share"
                                            data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-share-2&quot;><circle cx=&quot;18&quot; cy=&quot;5&quot; r=&quot;3&quot;></circle><circle cx=&quot;6&quot; cy=&quot;12&quot; r=&quot;3&quot;></circle><circle cx=&quot;18&quot; cy=&quot;19&quot; r=&quot;3&quot;></circle><line x1=&quot;8.59&quot; y1=&quot;13.51&quot; x2=&quot;15.42&quot; y2=&quot;17.49&quot;></line><line x1=&quot;15.41&quot; y1=&quot;6.51&quot; x2=&quot;8.59&quot; y2=&quot;10.49&quot;></line></svg>"
                                            href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-share-2">
                                                <circle cx="18" cy="5" r="3"></circle>
                                                <circle cx="6" cy="12" r="3"></circle>
                                                <circle cx="18" cy="19" r="3"></circle>
                                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49">
                                                </line>
                                                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49">
                                                </line>
                                            </svg> Share
                                        </a>

                                    </div>

                                </div>
                            </li>
                        </ul>
                    </header>
                </div>
            </div>
            <!--  END BREADCRUMBS  -->

            <div class="row layout-top-spacing">

                {{-- <div class="col-12">
                    <div class="alert alert-arrow-right alert-icon-right alert-light-success alert-dismissible fade show mb-4"
                        role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-alert-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12" y2="16"></line>
                        </svg>
                        <strong>Kick Start you new project with ease!</strong>
                        Learn more about Starter Kit by
                        refering to
                        the <a target="_blank"
                            href="https://designreset.com/cork/documentation/getting-started.html">Documentation</a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6  mb-4">
                    <div class="card bg-primary">
                        <div class="card-body pt-3">
                            <h5 class="card-title mb-3">Card Title</h5>
                            <p class="card-text">Powerful CRM admin dashboard
                                template based on Bootstrap and
                                Sass for all
                                kind of back-end projects.</p>
                        </div>
                        <div class="card-footer px-4 pt-0 border-0">
                            <a href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188"
                                target="_blank">Visit on Themeforest.</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6  mb-4">
                    <div class="card bg-secondary">
                        <div class="card-body pt-3">
                            <h5 class="card-title mb-3">Card Title</h5>
                            <p class="card-text">Powerful CRM admin dashboard
                                template based on Bootstrap and
                                Sass for all
                                kind of back-end projects.</p>
                        </div>
                        <div class="card-footer px-4 pt-0 border-0">
                            <a href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188"
                                target="_blank">Visit on Themeforest.</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6  mb-4">
                    <div class="card bg-dark">
                        <div class="card-body pt-3">
                            <h5 class="card-title mb-3">Card Title</h5>
                            <p class="card-text">Powerful CRM admin dashboard
                                template based on Bootstrap and
                                Sass for all
                                kind of back-end projects.</p>
                        </div>
                        <div class="card-footer px-4 pt-0 border-0">
                            <a href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188"
                                target="_blank">Visit on Themeforest.</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6  mb-4">
                    <div class="card bg-danger">
                        <div class="card-body pt-3">
                            <h5 class="card-title mb-3">Card Title</h5>
                            <p class="card-text">Powerful CRM admin dashboard
                                template based on Bootstrap and
                                Sass for all
                                kind of back-end projects.</p>
                        </div>
                        <div class="card-footer px-4 pt-0 border-0">
                            <a href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188"
                                target="_blank">Visit on Themeforest.</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Table</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Sale</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Shaun</td>
                                            <td>10/08/2022</td>
                                            <td>320</td>
                                            <td class="text-center"><span class="badge badge-success">Approved</span>
                                            </td>
                                            <td class="text-center">

                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink1" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="19" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="5" cy="12" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alma</td>
                                            <td>11/08/2022</td>
                                            <td>420</td>
                                            <td class="text-center"><span class="badge badge-primary">In
                                                    Progress</span>
                                            </td>
                                            <td class="text-center">

                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink2" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="19" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="5" cy="12" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kelly</td>
                                            <td>12/08/2022</td>
                                            <td>130</td>
                                            <td class="text-center"><span class="badge badge-warning">Suspended</span>
                                            </td>
                                            <td class="text-center">

                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink3" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="19" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="5" cy="12" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Xavier</td>
                                            <td>13/08/2022</td>
                                            <td>260</td>
                                            <td class="text-center"><span class="badge badge-danger">Blocked</span>
                                            </td>
                                            <td class="text-center">

                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink4" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="19" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="5" cy="12" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Andy</td>
                                            <td>14/08/2022</td>
                                            <td>99</td>
                                            <td class="text-center"><span class="badge badge-secondary">On
                                                    leave</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink5" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="19" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="5" cy="12" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Justin</td>
                                            <td>15/08/2022</td>
                                            <td>555</td>
                                            <td class="text-center"><span class="badge badge-info">Pending</span></td>
                                            <td class="text-center">
                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink6" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="19" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="5" cy="12" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Amy</td>
                                            <td>16/08/2022</td>
                                            <td>300</td>
                                            <td class="text-center"><span class="badge badge-dark">Deleted</span></td>
                                            <td class="text-center">

                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink7" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="19" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="5" cy="12" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink7">
                                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <table class="table table-striped">
                    <thead>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th>Ngày đăng</th>
                        <th>Trích đoạn nội dung</th>
                    </thead>
                    <tbody>
                        @foreach ($tin_tucs as $key => $tt)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $tt->tieu_de ?? ''}}</td>
                                <td>{{ $tt->tac_gia ?? ''}}</td>
                                <td>{{ $tt->ngay_dang ?? ''}}</td>
                                <td>{{ Str::limit($tt->noi_dung, 50, '...')}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $tin_tucs -> links() }}
            </div>
        </div>
    </div>
@endsection
