<x-layout>
    <x-slot name='page_content'>
        <div class="row gy-4">
            <div class="col-lg-9">
                <!-- Widgets Start -->
                <div class="row gy-4">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-2">{{ $totalKlinik }}</h4>
                                <span class="text-gray-600">Klinik</span>
                                <div class="flex-between gap-8 mt-16">
                                    <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl"><i class="fas fa-clinic-medical"></i></span>
                                    <div id="complete-course" class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-2">{{ $totalPasien }}</h4>
                                <span class="text-gray-600">Pasien Terdaftar</span>
                                <div class="flex-between gap-8 mt-16">
                                    <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-two-600 text-white text-2xl"><i class="ph-fill ph-certificate"></i></span>
                                    <div id="earned-certificate" class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-2">{{ $inProgress }}</h4>
                                <span class="text-gray-600">Pasien Dalam Pemeriksaan</span>
                                <div class="flex-between gap-8 mt-16">
                                    <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-purple-600 text-white text-2xl"><i class="ph-fill ph-users-three"></i></span>
                                    <div id="course-progress" class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-2">{{ $completed }}</h4>
                                <span class="text-gray-600">Telah Diperiksa</span>
                                <div class="flex-between gap-8 mt-16">
                                    <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-warning-600 text-white text-2xl"><i class="ph-fill ph-users-three"></i></span>
                                    <div id="community-support" class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Widgets End -->

                    <!-- Top Course Start -->
                    <div class="card mt-24">
                        <div class="card-body">
                            <div class="mb-20 flex-between flex-wrap gap-8">
                                <h2 class="text-center fw-bold">
    Halo, Admin! Selamat datang kembali 👋 Siap melayani pasien hari ini? 
    Mari kelola antrian dan layanan dengan nyaman.
</h2>

                                <div class="flex-align gap-16 flex-wrap">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Top Course End -->

                    <!-- Top Course Start -->
                    <div class="card mt-24">
                        <div class="card-body">
                            <div class="mb-20 flex-between flex-wrap gap-8">
                                
                               
                            </div>
                            
                            <div class="row g-20">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="{{ asset('admin/images/jj.jpg')}}" alt="Course Image">
                                            </a>
                                            <div class="p-8">
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Menangani Daftar Pasien</a></h5>
                                                <div class="flex-align gap-8 flex-wrap mt-16">
                                                    <div>
                                                    </div>
                                                </div>

                                               
                                                
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <div class="flex-align gap-4">

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-9">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="{{ asset('admin/images/gg.jpg')}}" alt="Course Image">
                                            </a>
                                            <div class="p-8">
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Melayani Pasien dengan Baik</a></h5>

                                                

                                                <div class="flex-align gap-8 mt-12 pt-12 border-top border-gray-100">
                                                    <div class="flex-align gap-4">
                                                       
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <div class="flex-align gap-4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="{{ asset('admin/images/uu.jpg')}}" alt="Course Image">
                                            </a>
                                            <div class="p-8">
                                                
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Memberikan Pelayanan Maksimal</a></h5>

                                                <div class="flex-align gap-8 mt-12 pt-12 border-top border-gray-100">
                                                    <div class="flex-align gap-4">
                                                        
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top Course End -->
                </div>

                <div class="col-lg-3">
                    <!-- Calendar Start -->
                    <div class="card">
                        <div class="card-body">
                            <div class="calendar">
                                <div class="calendar__header">
                                    <button type="button" class="calendar__arrow left"><i class="ph ph-caret-left"></i></button>
                                    <p class="display h6 mb-0">""</p>
                                    <button type="button" class="calendar__arrow right"><i class="ph ph-caret-right"></i></button>
                                </div>
                            
                                <div class="calendar__week week">
                                    <div class="calendar__week-text">Su</div>
                                    <div class="calendar__week-text">Mo</div>
                                    <div class="calendar__week-text">Tu</div>
                                    <div class="calendar__week-text">We</div>
                                    <div class="calendar__week-text">Th</div>
                                    <div class="calendar__week-text">Fr</div>
                                    <div class="calendar__week-text">Sa</div>
                                </div>
                                <div class="days"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Calendar End -->
                    
                    <!-- Assignment Start -->
                    <div class="card mt-24">
                        <div class="card-body">
                            <div class="mb-20 flex-between flex-wrap gap-8">
                                <h4 class="mb-0">Assignments</h4>
                                <a href="assignment.html" class="text-13 fw-medium text-main-600 hover-text-decoration-underline">See All</a>
                            </div>
                            <div class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1 mb-16">
                                <div class="flex-align flex-wrap gap-8">
                                    <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i class="fas fa-clinic-medical"></i></span>
                                    <div>
                                        <h6 class="mb-0">Klinik</h6>
                                    </div>
                                </div>
                                <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
                            </div>
                            <div class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1 mb-16">
                                <div class="flex-align flex-wrap gap-8">
                                    <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i class="ph-fill ph-users-three"></i></span>
                                    <div>
                                        <h6 class="mb-0">Pasien</h6>
                                    </div>
                                </div>
                                <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
                            </div>
                            <div class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1">
                                <div class="flex-align flex-wrap gap-8">
                                    <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i class="ph-fill ph-users-three"></i></span>
                                    <div>
                                        <h6 class="mb-0">Akun</h6>
                                    </div>
                                </div>
                                <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Assignment End -->
                    

                </div>

            </div>
    </x-slot>
</x-layout>