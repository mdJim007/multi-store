
						<div class="d-flex">
						    <a class="header-brand" href="{{url('index')}}">
{{--								<img src="{{URL::asset('assets/images/logo.jpeg')}}" class="header-brand-img main-logo" alt="Olfat logo">--}}
{{--								<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img darklogo" alt="Sparic logo">--}}
{{--								<img src="{{URL::asset('assets/images/brand/icon.png')}}" class="header-brand-img icon-logo" alt="Sparic logo">--}}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 512 522" width="40" height="40">
                                        <path fill="none" d="M0 0h512v512H0z"></path>
                                        <path d="M257-3a256 256 0 110 512 256 256 0 010-512zm1.5 79a178.5 178.5 0 100 357 178.5 178.5 0 000-357z" fill="#1D1D1B"></path>
                                        <path d="M-16-12zm138.3 414l173-103.8-69.4-68.2-103.6 172z" fill="#999"></path>
                                        <path d="M404 120L231 223.8l69.4 68.2L404 120z" fill="#D9217D"></path>
                                    </svg>

							</a><!-- logo-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<a href="#" data-toggle="search" class="nav-link nav-link  navsearch"><i class="fa fa-search"></i></a><!-- search icon -->
							<ul class="nav navbar-nav horizontal-nav header-nav">

							</ul>
							<div class="d-flex order-lg-2 ml-auto header-rightmenu">

								<div class="dropdown">
									<a  class="nav-link icon full-screen-link" id="fullscreen-button">
										<i class="fe fe-maximize-2"></i>
									</a>
								</div><!-- full-screen -->
								<div class="dropdown header-notify">
									<a href="#" class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
										<i class="fe fe-bell "></i>
										<span class="pulse bg-success"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<a href="#" class="dropdown-item text-center">4 New Notifications</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-green">
												<i class="fe fe-mail"></i>
											</div>
											<div>
												<strong>Message Sent.</strong>
												<div class="small text-muted">12 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-pink">
												<i class="fe fe-shopping-cart"></i>
											</div>
											<div>
												<strong>Order Placed</strong>
												<div class="small text-muted">2  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-blue">
												<i class="fe fe-calendar"></i>
											</div>
											<div>
												<strong> Event Started</strong>
												<div class="small text-muted">1  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-orange">
												<i class="fe fe-monitor"></i>
											</div>
											<div>
												<strong>Your Admin Lanuch</strong>
												<div class="small text-muted">2  days ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notifications</a>
									</div>
								</div><!-- notifications -->
								<div class="dropdown header-user">
									<a class="nav-link leading-none siderbar-link"  data-toggle="sidebar-right" data-target=".sidebar-right">
										<span class="mr-3 d-none d-lg-block ">
											<span class="text-gray-white"><span class="ml-2">{{ ucfirst(optional(auth()->user())->name) }}</span></span>
										</span>
										<span class="avatar avatar-md brround"><img src="{{URL::asset('assets/images/users/avatars/19.png')}}" alt="Profile-img" class="avatar avatar-md brround"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="header-user text-center mt-4 pb-4">
											<span class="avatar avatar-xxl brround"><img src="{{URL::asset('assets/images/users/avatars/19.png')}}" alt="Profile-img" class="avatar avatar-xxl brround"></span>
											<a href="#" class="dropdown-item text-center font-weight-semibold user h3 mb-0">{{ ucfirst(optional(auth()->user())->name) }}</a>
{{--											<small>Web Designer</small>--}}
										</div>
										<div class="card-body border-top">
											<div class="row">
												<div class="col-6 text-center">
													<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
													<div>Inbox</div>
												</div>
												<div class="col-6 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
													<div>Sign out</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- profile -->
								<div class="dropdown">
									<a  class="nav-link icon siderbar-link" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-more-horizontal"></i>
									</a>
								</div><!-- Right-siebar-->
							</div>
						</div>
