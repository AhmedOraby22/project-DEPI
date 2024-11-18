@extends('web.layouts.searchtemp')
    @section('content')

<div class="container mt-9">
<div class="row">
    <div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0">
                <form id="search-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control dep border-0" id="exampleFormControlSelect1">
                                        <option>Location</option>
                                        <option>London</option>
                                        <option>Boston</option>
                                        <option>Mumbai</option>
                                        <option>New York</option>
                                        <option>Toronto</option>
                                        <option>Paris</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                    <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                </div>
                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                    <button type="submit" class="btn btn-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-12">
            <div class="card card-margin">
                <div class="card-body">
                    <div class="row search-body">
                        <div class="col-lg-12">
                            <div class="search-result">
                                <div class="result-header">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="records">Showing: <b>1-20</b> of <b>200</b> result</div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="result-actions">
                                                <div class="result-sorting">
                                                    <span>Sort By:</span>
                                                    <select class="form-control border-0 dep" id="exampleOption">
                                                        <option value="1">Relevance</option>
                                                        <option value="2">Names (A-Z)</option>
                                                        <option value="3">Names (Z-A)</option>
                                                    </select>
                                                </div>
                                                <div class="result-views">
                                                    <button type="button" class="btn btn-soft-base btn-icon">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-list"
                                                        >
                                                            <line x1="8" y1="6" x2="21" y2="6"></line>
                                                            <line x1="8" y1="12" x2="21" y2="12"></line>
                                                            <line x1="8" y1="18" x2="21" y2="18"></line>
                                                            <line x1="3" y1="6" x2="3" y2="6"></line>
                                                            <line x1="3" y1="12" x2="3" y2="12"></line>
                                                            <line x1="3" y1="18" x2="3" y2="18"></line>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn btn-soft-base btn-icon">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-grid"
                                                        >
                                                            <rect x="3" y="3" width="7" height="7"></rect>
                                                            <rect x="14" y="3" width="7" height="7"></rect>
                                                            <rect x="14" y="14" width="7" height="7"></rect>
                                                            <rect x="3" y="14" width="7" height="7"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="result-body">
                                    <div class="table-responsive">
                                        <table class="table widget-26">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">Senior Software Engineer / Developer</a>
                                                            <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Full-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 50/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-base">
                                                            <i class="indicator bg-base"></i>
                                                            <span>Software Development</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">Marketing &amp; Communication Supervisor</a>
                                                            <p class="m-0"><a href="#" class="employer-name">AxiomUI Llc.</a> <span class="text-muted time">2 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Part-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">New York, US</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 60/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-warning">
                                                            <i class="indicator bg-warning"></i>
                                                            <span>Marketing</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">Senior Data Analyst / Scientist</a>
                                                            <p class="m-0"><a href="#" class="employer-name">AxiomUI Inc.</a> <span class="text-muted time">4 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Part-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">New York, US</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 60/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-success">
                                                            <i class="indicator bg-success"></i>
                                                            <span>Artificial Intelligence</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">UX Designer &amp; UI Developer</a>
                                                            <p class="m-0"><a href="#" class="employer-name">AxiomUI Inc.</a> <span class="text-muted time">5 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Part-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">Toronto, CAN</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 35/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-danger">
                                                            <i class="indicator bg-danger"></i>
                                                            <span>Design</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">Information Security Analyst / Expert</a>
                                                            <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">6 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Part-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">Mumbai, IN</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 70/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-info">
                                                            <i class="indicator bg-info"></i>
                                                            <span>Infra Supervision</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star starred"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">Senior Software Engineer / Developer</a>
                                                            <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Full-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 50/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-base">
                                                            <i class="indicator bg-base"></i>
                                                            <span>Software Development</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">Marketing &amp; Communication Supervisor</a>
                                                            <p class="m-0"><a href="#" class="employer-name">AxiomUI Llc.</a> <span class="text-muted time">2 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Part-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">New York, US</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 60/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-warning">
                                                            <i class="indicator bg-warning"></i>
                                                            <span>Marketing</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">Senior Data Analyst / Scientist</a>
                                                            <p class="m-0"><a href="#" class="employer-name">AxiomUI Inc.</a> <span class="text-muted time">4 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Part-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">New York, US</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 60/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-success">
                                                            <i class="indicator bg-success"></i>
                                                            <span>Artificial Intelligence</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">UX Designer &amp; UI Developer</a>
                                                            <p class="m-0"><a href="#" class="employer-name">AxiomUI Inc.</a> <span class="text-muted time">5 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Part-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">Toronto, CAN</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 35/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-danger">
                                                            <i class="indicator bg-danger"></i>
                                                            <span>Design</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="widget-26-job-emp-img">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Company" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <a href="#">Information Security Analyst / Expert</a>
                                                            <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">6 days ago</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-info">
                                                            <p class="type m-0">Part-Time</p>
                                                            <p class="text-muted m-0">in <span class="location">Mumbai, IN</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-salary">$ 70/hr</div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-category bg-soft-info">
                                                            <i class="indicator bg-info"></i>
                                                            <span>Infra Supervision</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-starred">
                                                            <a href="#">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-star starred"
                                                                >
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="d-flex justify-content-center">
                        <ul class="pagination pagination-base pagination-boxed pagination-square mb-0">
                            <li class="page-item">
                                <a class="page-link no-border" href="#">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link no-border" href="#">1</a></li>
                            <li class="page-item"><a class="page-link no-border" href="#">2</a></li>
                            <li class="page-item"><a class="page-link no-border" href="#">3</a></li>
                            <li class="page-item"><a class="page-link no-border" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link no-border" href="#">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <script type="text/javascript"> --}}
@endsection
