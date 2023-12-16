@extends('layouts.dashboard.app')

@section('title', 'User Profile')

@section('content')
<div class="profile-foreground position-relative mx-n4 mt-n4">
    <div class="profile-wid-bg">
        <img src="/assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
    </div>
</div>
<div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
    <div class="row g-4">
        <div class="col-auto">
            <div class="avatar-lg">
                <img src="/assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="p-2">
                <h3 class="text-white mb-1">{{ auth()->user()->name }}</h3>
                <p class="text-white-75">{{ auth()->user()->getRoleNames()[0] }}</p>
                <div class="hstack text-white-50 gap-1">
                    <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>California, United States</div>
                    <div>
                        <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>Themesbrand
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-12 col-lg-auto order-last order-lg-0">
            <div class="row text text-white-50 text-center">
                <div class="col-lg-6 col-4">
                    <div class="p-2">
                        <h4 class="text-white mb-1">24.3K</h4>
                        <p class="fs-14 mb-0">Followers</p>
                    </div>
                </div>
                <div class="col-lg-6 col-4">
                    <div class="p-2">
                        <h4 class="text-white mb-1">1.3K</h4>
                        <p class="fs-14 mb-0">Following</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

    </div>
    <!--end row-->
</div>

<div class="row">
    <div class="col-lg-12">
        <div>
            <div class="d-flex">
                <!-- Nav tabs -->
                <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                            <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                            <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Activities</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                            <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Projects</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                            <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Documents</span>
                        </a>
                    </li>
                </ul>
                <div class="flex-shrink-0">
                    <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content pt-4 text-muted">
                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-5">Complete Your Profile</h5>
                                    <div class="progress animated-progress custom-progress progress-label">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <div class="label">30%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Info</h5>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <th class="ps-0" scope="row">Full Name :</th>
                                                    <td class="text-muted">Anna Adame</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Mobile :</th>
                                                    <td class="text-muted">+(1) 987 6543</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">E-mail :</th>
                                                    <td class="text-muted">daveadame@velzon.com</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Location :</th>
                                                    <td class="text-muted">California, United States
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Joining Date</th>
                                                    <td class="text-muted">24 Nov 2021</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Portfolio</h5>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <a href="javascript:void(0);" class="avatar-xs d-block">
                                                <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                    <i class="ri-github-fill"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="avatar-xs d-block">
                                                <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                    <i class="ri-global-fill"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="avatar-xs d-block">
                                                <span class="avatar-title rounded-circle fs-16 bg-success">
                                                    <i class="ri-dribbble-fill"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="avatar-xs d-block">
                                                <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                    <i class="ri-pinterest-fill"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Skills</h5>
                                    <div class="d-flex flex-wrap gap-2 fs-15">
                                        <a href="javascript:void(0);" class="badge badge-soft-primary">Photoshop</a>
                                        <a href="javascript:void(0);" class="badge badge-soft-primary">illustrator</a>
                                        <a href="javascript:void(0);" class="badge badge-soft-primary">HTML</a>
                                        <a href="javascript:void(0);" class="badge badge-soft-primary">CSS</a>
                                        <a href="javascript:void(0);" class="badge badge-soft-primary">Javascript</a>
                                        <a href="javascript:void(0);" class="badge badge-soft-primary">Php</a>
                                        <a href="javascript:void(0);" class="badge badge-soft-primary">Python</a>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Suggestions</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill fs-14"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink2">
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center py-3">
                                            <div class="avatar-xs flex-shrink-0 me-3">
                                                <img src="/assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="fs-14 mb-1">Esther James</h5>
                                                    <p class="fs-13 text-muted mb-0">Frontend Developer</p>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <button type="button" class="btn btn-sm btn-outline-success"><i class="ri-user-add-line align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-3">
                                            <div class="avatar-xs flex-shrink-0 me-3">
                                                <img src="/assets/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="fs-14 mb-1">Jacqueline Steve</h5>
                                                    <p class="fs-13 text-muted mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <button type="button" class="btn btn-sm btn-outline-success"><i class="ri-user-add-line align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-3">
                                            <div class="avatar-xs flex-shrink-0 me-3">
                                                <img src="/assets/images/users/avatar-5.jpg" alt="" class="img-fluid rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="fs-14 mb-1">George Whalen</h5>
                                                    <p class="fs-13 text-muted mb-0">Backend Developer</p>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <button type="button" class="btn btn-sm btn-outline-success"><i class="ri-user-add-line align-middle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                            <!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Popular Posts</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill fs-14"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1">
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0">
                                            <img src="/assets/images/small/img-4.jpg" alt="" height="50" class="rounded" />
                                        </div>
                                        <div class="flex-grow-1 ms-3 overflow-hidden">
                                            <a href="javascript:void(0);">
                                                <h6 class="text-truncate fs-14">Design your apps in your own way</h6>
                                            </a>
                                            <p class="text-muted mb-0">15 Dec 2021</p>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0">
                                            <img src="/assets/images/small/img-5.jpg" alt="" height="50" class="rounded" />
                                        </div>
                                        <div class="flex-grow-1 ms-3 overflow-hidden">
                                            <a href="javascript:void(0);">
                                                <h6 class="text-truncate fs-14">Smartest Applications for Business</h6>
                                            </a>
                                            <p class="text-muted mb-0">28 Nov 2021</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="/assets/images/small/img-6.jpg" alt="" height="50" class="rounded" />
                                        </div>
                                        <div class="flex-grow-1 ms-3 overflow-hidden">
                                            <a href="javascript:void(0);">
                                                <h6 class="text-truncate fs-14">How to get creative in your work</h6>
                                            </a>
                                            <p class="text-muted mb-0">21 Nov 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">About</h5>
                                    <p>Hi I'm Anna Adame, It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</p>
                                    <p>You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you’re working with reputable font websites. This may be the most commonly encountered tip I received from the designers I spoke with. They highly encourage that you use different fonts in one design, but do not over-exaggerate and go overboard.</p>
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-user-2-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Designation :</p>
                                                    <h6 class="text-truncate mb-0">Lead Designer / Developer</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-global-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Website :</p>
                                                    <a href="#" class="fw-semibold">www.velzon.com</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div><!-- end card -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0  me-2">Recent Activity</h4>
                                            <div class="flex-shrink-0 ms-auto">
                                                <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#today" role="tab">
                                                            Today
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#weekly" role="tab">
                                                            Weekly
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab">
                                                            Monthly
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content text-muted">
                                                <div class="tab-pane active" id="today" role="tabpanel">
                                                    <div class="profile-timeline">
                                                        <div class="accordion accordion-flush" id="todayExample">
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="headingOne">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Jacqueline Steve
                                                                                </h6>
                                                                                <small class="text-muted">We has changed 2 attributes on 05:16PM</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5">
                                                                        In an awareness campaign, it is vital for people to begin put 2 and 2 together and begin to recognize your cause. Too much or too little spacing, as in the example below, can make things unpleasant for the reader. The goal is to make your text as comfortable to read as possible. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="headingTwo">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0 avatar-xs">
                                                                                <div class="avatar-title bg-light text-success rounded-circle">
                                                                                    M
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Megan Elmore
                                                                                </h6>
                                                                                <small class="text-muted">Adding a new event with attachments - 04:45PM</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5">
                                                                        <div class="row g-2">
                                                                            <div class="col-auto">
                                                                                <div class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                    <div class="flex-shrink-0">
                                                                                        <i class="ri-image-2-line fs-17 text-danger"></i>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <h6>
                                                                                            <a href="javascript:void(0);" class="stretched-link">Business Template - UI/UX design</a>
                                                                                        </h6>
                                                                                        <small>685 KB</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                    <div class="flex-shrink-0">
                                                                                        <i class="ri-file-zip-line fs-17 text-info"></i>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <h6>
                                                                                            <a href="javascript:void(0);" class="stretched-link">Bank Management System - PSD</a>
                                                                                        </h6>
                                                                                        <small>8.78 MB</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="headingThree">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapsethree" aria-expanded="false">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1"> New ticket received</h6>
                                                                                <small class="text-muted mb-2">User <span class="text-secondary">Erica245</span> submitted a ticket - 02:33PM</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="headingFour">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0 avatar-xs">
                                                                                <div class="avatar-title bg-light text-muted rounded-circle">
                                                                                    <i class="ri-user-3-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Nancy Martino
                                                                                </h6>
                                                                                <small class="text-muted">Commented on 12:57PM</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                        " A wonderful serenity has
                                                                        taken possession of my
                                                                        entire soul, like these
                                                                        sweet mornings of spring
                                                                        which I enjoy with my whole
                                                                        heart. Each design is a new,
                                                                        unique piece of art birthed
                                                                        into this world, and while
                                                                        you have the opportunity to
                                                                        be creative and make your
                                                                        own style choices. "
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="headingFive">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Lewis Arnold
                                                                                </h6>
                                                                                <small class="text-muted">Create new project buildng product - 10:05AM</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5">
                                                                        <p class="text-muted mb-2"> Every team project can have a velzon. Use the velzon to share information with your team to understand and contribute to your project.</p>
                                                                        <div class="avatar-group">
                                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="Christi">
                                                                                <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                            </a>
                                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="Frank Hook">
                                                                                <img src="/assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xs">
                                                                            </a>
                                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title=" Ruby">
                                                                                <div class="avatar-xs">
                                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                        R
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="more">
                                                                                <div class="avatar-xs">
                                                                                    <div class="avatar-title rounded-circle">
                                                                                        2+
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end accordion-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="weekly" role="tabpanel">
                                                    <div class="profile-timeline">
                                                        <div class="accordion accordion-flush" id="weeklyExample">
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading6">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse6" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Joseph Parker
                                                                                </h6>
                                                                                <small class="text-muted">New people joined with our company - Yesterday</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse6" class="accordion-collapse collapse show" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5">
                                                                        It makes a statement, it’s
                                                                        impressive graphic design.
                                                                        Increase or decrease the
                                                                        letter spacing depending on
                                                                        the situation and try, try
                                                                        again until it looks right,
                                                                        and each letter has the
                                                                        perfect spot of its own.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading7">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse7" aria-expanded="false">
                                                                        <div class="d-flex">
                                                                            <div class="avatar-xs">
                                                                                <div class="avatar-title rounded-circle bg-light text-danger">
                                                                                    <i class="ri-shopping-bag-line"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Your order is placed <span class="badge bg-soft-success text-success align-middle">Completed</span>
                                                                                </h6>
                                                                                <small class="text-muted">These customers can rest assured their order has been placed - 1 week Ago</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading8">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse8" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0 avatar-xs">
                                                                                <div class="avatar-title bg-light text-success rounded-circle">
                                                                                    <i class="ri-home-3-line"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Velzon admin dashboard templates layout upload
                                                                                </h6>
                                                                                <small class="text-muted">We talked about a project on linkedin - 1 week Ago</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse8" class="accordion-collapse collapse show" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                        Powerful, clean & modern
                                                                        responsive bootstrap 5 admin
                                                                        template. The maximum file
                                                                        size for uploads in this demo :
                                                                        <div class="row mt-2">
                                                                            <div class="col-xxl-6">
                                                                                <div class="row border border-dashed gx-2 p-2">
                                                                                    <div class="col-3">
                                                                                        <img src="/assets/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                                                                    </div>
                                                                                    <!--end col-->
                                                                                    <div class="col-3">
                                                                                        <img src="/assets/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                                                                    </div>
                                                                                    <!--end col-->
                                                                                    <div class="col-3">
                                                                                        <img src="/assets/images/small/img-7.jpg" alt="" class="img-fluid rounded" />
                                                                                    </div>
                                                                                    <!--end col-->
                                                                                    <div class="col-3">
                                                                                        <img src="/assets/images/small/img-9.jpg" alt="" class="img-fluid rounded" />
                                                                                    </div>
                                                                                    <!--end col-->
                                                                                </div>
                                                                                <!--end row-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading9">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse9" aria-expanded="false">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    New ticket created <span class="badge badge-soft-info align-middle">Inprogress</span>
                                                                                </h6>
                                                                                <small class="text-muted mb-2">User <span class="text-secondary">Jack365</span> submitted a ticket - 2 week Ago</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading10">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse10" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Jennifer Carter
                                                                                </h6>
                                                                                <small class="text-muted">Commented - 4 week Ago</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse10" class="accordion-collapse collapse show" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5">
                                                                        <p class="text-muted fst-italic mb-2">
                                                                            " This is an awesome
                                                                            admin dashboard
                                                                            template. It is
                                                                            extremely well
                                                                            structured and uses
                                                                            state of the art
                                                                            components (e.g. one of
                                                                            the only templates using
                                                                            boostrap 5.1.3 so far).
                                                                            I integrated it into a
                                                                            Rails 6 project. Needs
                                                                            manual integration work
                                                                            of course but the
                                                                            template structure made
                                                                            it easy. "</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end accordion-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="monthly" role="tabpanel">
                                                    <div class="profile-timeline">
                                                        <div class="accordion accordion-flush" id="monthlyExample">
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading11">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse11" aria-expanded="false">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0 avatar-xs">
                                                                                <div class="avatar-title bg-light text-success rounded-circle">
                                                                                    M
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Megan Elmore
                                                                                </h6>
                                                                                <small class="text-muted">Adding a new event with attachments - 1 month Ago.</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse11" class="accordion-collapse collapse show" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5">
                                                                        <div class="row g-2">
                                                                            <div class="col-auto">
                                                                                <div class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                    <div class="flex-shrink-0">
                                                                                        <i class="ri-image-2-line fs-17 text-danger"></i>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <h6>
                                                                                            <a href="javascript:void(0);" class="stretched-link">Business Template - UI/UX design</a>
                                                                                        </h6>
                                                                                        <small>685 KB</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                    <div class="flex-shrink-0">
                                                                                        <i class="ri-file-zip-line fs-17 text-info"></i>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <h6>
                                                                                            <a href="javascript:void(0);" class="stretched-link">Bank Management System - PSD</a>
                                                                                        </h6>
                                                                                        <small>8.78 MB</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                    <div class="flex-shrink-0">
                                                                                        <i class="ri-file-zip-line fs-17 text-info"></i>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <h6>
                                                                                            <a href="javascript:void(0);" class="stretched-link">Bank Management System - PSD</a>
                                                                                        </h6>
                                                                                        <small>8.78 MB</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading12">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse12" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Jacqueline Steve
                                                                                </h6>
                                                                                <small class="text-muted">We has changed 2 attributes on 3 month Ago</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse12" class="accordion-collapse collapse show" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5">
                                                                        In an awareness campaign, it
                                                                        is vital for people to begin
                                                                        put 2 and 2 together and
                                                                        begin to recognize your
                                                                        cause. Too much or too
                                                                        little spacing, as in the
                                                                        example below, can make
                                                                        things unpleasant for the
                                                                        reader. The goal is to make
                                                                        your text as comfortable to
                                                                        read as possible. A
                                                                        wonderful serenity has taken
                                                                        possession of my entire
                                                                        soul, like these sweet
                                                                        mornings of spring which I
                                                                        enjoy with my whole heart.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading13">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse13" aria-expanded="false">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    New ticket received
                                                                                </h6>
                                                                                <small class="text-muted mb-2">User <span class="text-secondary">Erica245</span> submitted a ticket - 5 month Ago</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading14">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse14" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0 avatar-xs">
                                                                                <div class="avatar-title bg-light text-muted rounded-circle">
                                                                                    <i class="ri-user-3-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Nancy Martino
                                                                                </h6>
                                                                                <small class="text-muted">Commented on 24 Nov, 2021.</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse14" class="accordion-collapse collapse show" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                        " A wonderful serenity has
                                                                        taken possession of my
                                                                        entire soul, like these
                                                                        sweet mornings of spring
                                                                        which I enjoy with my whole
                                                                        heart. Each design is a new,
                                                                        unique piece of art birthed
                                                                        into this world, and while
                                                                        you have the opportunity to
                                                                        be creative and make your
                                                                        own style choices. "
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item border-0">
                                                                <div class="accordion-header" id="heading15">
                                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse15" aria-expanded="true">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img src="/assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="fs-14 mb-1">
                                                                                    Lewis Arnold
                                                                                </h6>
                                                                                <small class="text-muted">Create new project buildng product - 8 month Ago</small>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse15" class="accordion-collapse collapse show" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body ms-2 ps-5">
                                                                        <p class="text-muted mb-2">
                                                                            Every team project can
                                                                            have a velzon. Use the
                                                                            velzon to share
                                                                            information with your
                                                                            team to understand and
                                                                            contribute to your
                                                                            project.</p>
                                                                        <div class="avatar-group">
                                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="Christi">
                                                                                <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                            </a>
                                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="Frank Hook">
                                                                                <img src="/assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xs">
                                                                            </a>
                                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title=" Ruby">
                                                                                <div class="avatar-xs">
                                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                        R
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="more">
                                                                                <div class="avatar-xs">
                                                                                    <div class="avatar-title rounded-circle">
                                                                                        2+
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end accordion-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Projects</h5>
                                    <!-- Swiper -->
                                    <div class="swiper project-swiper mt-n4">
                                        <div class="d-flex justify-content-end gap-2 mb-2">
                                            <div class="slider-button-prev">
                                                <div class="avatar-title fs-18 rounded px-1">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </div>
                                            </div>
                                            <div class="slider-button-next">
                                                <div class="avatar-title fs-18 rounded px-1">
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card profile-project-card shadow-none profile-project-success mb-0">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate mb-1">
                                                                    <a href="#" class="text-dark">ABC Project Customization</a>
                                                                </h5>
                                                                <p class="text-muted text-truncate mb-0"> Last Update : <span class="fw-semibold text-dark">4 hr Ago</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="badge badge-soft-warning fs-10"> Inprogress</div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                    A
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end slide item -->
                                            <div class="swiper-slide">
                                                <div class="card profile-project-card shadow-none profile-project-danger mb-0">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate mb-1">
                                                                    <a href="#" class="text-dark">Client - John</a>
                                                                </h5>
                                                                <p class="text-muted text-truncate mb-0"> Last Update : <span class="fw-semibold text-dark">1 hr Ago</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="badge badge-soft-success fs-10"> Completed</div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                    C
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end slide item -->
                                            <div class="swiper-slide">
                                                <div class="card profile-project-card shadow-none profile-project-info mb-0">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate mb-1">
                                                                    <a href="#" class="text-dark">Brand logo Design</a>
                                                                </h5>
                                                                <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">2 hr Ago</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="badge badge-soft-warning fs-10"> Inprogress</div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end slide item -->
                                            <div class="swiper-slide">
                                                <div class="card profile-project-card shadow-none profile-project-danger mb-0">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate mb-1">
                                                                    <a href="#" class="text-dark">Project update</a>
                                                                </h5>
                                                                <p class="text-muted text-truncate mb-0"> Last Update : <span class="fw-semibold text-dark">4 hr Ago</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="badge badge-soft-success fs-10"> Completed</div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end slide item -->
                                            <div class="swiper-slide">
                                                <div class="card profile-project-card shadow-none profile-project-warning mb-0">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate mb-1">
                                                                    <a href="#" class="text-dark">Chat App</a>
                                                                </h5>
                                                                <p class="text-muted text-truncate mb-0"> Last Update : <span class="fw-semibold text-dark">1 hr Ago</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="badge badge-soft-warning fs-10"> Inprogress</div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                    A
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end slide item -->
                                        </div>

                                    </div>

                                </div>
                                <!-- end card body -->
                            </div><!-- end card -->

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="tab-pane fade" id="activities" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Activities</h5>
                            <div class="acitivity-timeline">
                                <div class="acitivity-item d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Oliver Phillips <span class="badge bg-soft-primary text-primary align-middle">New</span></h6>
                                        <p class="text-muted mb-2">We talked about a project on linkedin.</p>
                                        <small class="mb-0 text-muted">Today</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                        <div class="avatar-title bg-soft-success text-success rounded-circle">
                                            N
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Nancy Martino <span class="badge bg-soft-secondary text-secondary align-middle">In Progress</span></h6>
                                        <p class="text-muted mb-2"><i class="ri-file-text-line align-middle ms-2"></i> Create new project Buildng product</p>
                                        <div class="avatar-group mb-2">
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Christi">
                                                <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Hook">
                                                <img src="/assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title=" Ruby">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                        R
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="more">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle">
                                                        2+
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <small class="mb-0 text-muted">Yesterday</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Natasha Carey <span class="badge bg-soft-success text-success align-middle">Completed</span>
                                        </h6>
                                        <p class="text-muted mb-2">Adding a new event with attachments</p>
                                        <div class="row">
                                            <div class="col-xxl-4">
                                                <div class="row border border-dashed gx-2 p-2 mb-2">
                                                    <div class="col-4">
                                                        <img src="/assets/images/small/img-2.jpg" alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-4">
                                                        <img src="/assets/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-4">
                                                        <img src="/assets/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <small class="mb-0 text-muted">25 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Bethany Johnson</h6>
                                        <p class="text-muted mb-2">added a new member to velzon dashboard</p>
                                        <small class="mb-0 text-muted">19 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs acitivity-avatar">
                                            <div class="avatar-title rounded-circle bg-soft-danger text-danger">
                                                <i class="ri-shopping-bag-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Your order is placed <span class="badge bg-soft-danger text-danger align-middle ms-1">Out of Delivery</span></h6>
                                        <p class="text-muted mb-2">These customers can rest assured their order has been placed.</p>
                                        <small class="mb-0 text-muted">16 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Lewis Pratt</h6>
                                        <p class="text-muted mb-2">They all have something to say
                                            beyond the words on the page. They can come across as
                                            casual or neutral, exotic or graphic. </p>
                                        <small class="mb-0 text-muted">22 Oct</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs acitivity-avatar">
                                            <div class="avatar-title rounded-circle bg-soft-info text-info">
                                                <i class="ri-line-chart-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Monthly sales report</h6>
                                        <p class="text-muted mb-2">
                                            <span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a>
                                        </p>
                                        <small class="mb-0 text-muted">15 Oct</small>
                                    </div>
                                </div>
                                <div class="acitivity-item d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">New ticket received <span class="badge bg-soft-success text-success align-middle">Completed</span></h6>
                                        <p class="text-muted mb-2">User <span class="text-secondary">Erica245</span> submitted a ticket.</p>
                                        <small class="mb-0 text-muted">26 Aug</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end tab-pane-->
                <div class="tab-pane fade" id="projects" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-warning">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Chat App Update</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">2 year Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-warning fs-10">Inprogress</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        J
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-success">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">ABC Project Customization</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">2 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-primary fs-10"> Progress</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        2+
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-info">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Client - Frank Hook</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">1 hr Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-info fs-10">New</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        M
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-primary">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Velzon Project</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">11 hr Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-success fs-10">Completed</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-danger">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Brand Logo Design</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">10 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-info fs-10">New</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        E
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-primary">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Chat App</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">8 hr Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-warning fs-10">Inprogress</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        R
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-warning">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Project Update</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">48 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-warning fs-10">Inprogress</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-success">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Client - Jennifer</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">30 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-primary fs-10">Process</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mb-xxl-0 profile-project-info">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Bsuiness Template - UI/UX design</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">7 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-success fs-10">Completed</div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        2+
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mb-xxl-0  profile-project-success">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Update Project</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">1 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-info fs-10">New</div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        A
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mb-sm-0  profile-project-danger">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Bank Management System</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">10 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-success fs-10">Completed</div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        2+
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mb-0  profile-project-primary">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">PSD to HTML Convert</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">29 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge badge-soft-info fs-10">New</div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mt-4">
                                        <ul class="pagination pagination-separated justify-content-center mb-0">
                                            <li class="page-item disabled">
                                                <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="javascript:void(0);" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end tab-pane-->
                <div class="tab-pane fade" id="documents" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                <div class="flex-shrink-0">
                                    <input class="form-control d-none" type="file" id="formFile">
                                    <label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">File Name</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Upload Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                    <i class="ri-file-zip-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0)">Artboard-documents.zip</a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Zip File</td>
                                                    <td>4.57 MB</td>
                                                    <td>12 Dec 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-soft-danger text-danger rounded fs-20">
                                                                    <i class="ri-file-pdf-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Bank Management System</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>PDF File</td>
                                                    <td>8.89 MB</td>
                                                    <td>24 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-soft-secondary text-secondary rounded fs-20">
                                                                    <i class="ri-video-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Tour-video.mp4</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MP4 File</td>
                                                    <td>14.62 MB</td>
                                                    <td>19 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink4">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-soft-success text-success rounded fs-20">
                                                                    <i class="ri-file-excel-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Account-statement.xsl</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>XSL File</td>
                                                    <td>2.38 KB</td>
                                                    <td>14 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink5">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-soft-info text-info rounded fs-20">
                                                                    <i class="ri-folder-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Project Screenshots Collection</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Floder File</td>
                                                    <td>87.24 MB</td>
                                                    <td>08 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink6">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-soft-danger text-danger rounded fs-20">
                                                                    <i class="ri-image-2-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0">
                                                                    <a href="javascript:void(0);">Velzon-logo.png</a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>PNG File</td>
                                                    <td>879 KB</td>
                                                    <td>02 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink7">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end tab-pane-->
            </div>
            <!--end tab-content-->
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection

@push('plugin-css')
<!-- swiper css -->
<link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">
@endpush

@push('plugin-script')
<!-- swiper js -->
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- profile init js -->
<script src="{{ asset('assets/js/pages/profile.init.js') }}"></script>
@endpush