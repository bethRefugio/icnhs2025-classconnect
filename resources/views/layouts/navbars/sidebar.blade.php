<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('') }}</a>
            @php /*
            <a href="#" class="simple-text logo-normal">{{ _('I C N H S') }}</a>
            */ @endphp
            <a href="#" class="simple-text logo-normal">{{ config('app.name', 'DepEd Iligan') }}</a>
        </div>
        <ul class="nav">
        
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ auth()->user()->account_id == 1 ? 'Dashboard' : 'Search' }}</p>
                </a>
            </li>

        @if (auth()->user()->account_id == 3)
        <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="/search-teacher">
                <i class="tim-icons icon-chart-bar-32"></i>
                    <p>{{ 'Browse All' }}</p>
                </a>
            </li>
        @endif

        <!-- 
        @if (auth()->user()->account_id != 3)
            <li>
                <a data-toggle="collapse" href="#school-div" aria-expanded="true">
                    <i class="tim-icons icon-chart-bar-32"></i>
                    <span class="nav-link-text" >{{ __('Schools') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $pageParent == 'School' ? 'show' : '' }}" id="school-div">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'schools') class="active " @endif>
                            <a href="{{ route('school.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('List of schools') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'addSchool') class="active " @endif>
                            <a href="{{ route('school.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>{{ _('Add School') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            -->

            <li>
                <a data-toggle="collapse" href="#building-div" aria-expanded="true">
                    <i class="tim-icons icon-components"></i>
                    <span class="nav-link-text" >{{ __('Buildings') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $pageParent == 'Building' ? 'show' : '' }}" id="building-div">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'buildings') class="active " @endif>
                            <a href="{{ route('building.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('List of buildings') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'addBuilding') class="active " @endif>
                            <a href="{{ route('building.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>{{ _('Add Building') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#classroom-div" aria-expanded="true">
                    <i class="tim-icons icon-basket-simple"></i>
                    <span class="nav-link-text" >{{ __('Classrooms') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $pageParent == 'Classroom' ? 'show' : '' }}" id="classroom-div">
                    <ul class="nav pl-4">
                      <li @if ($pageSlug == 'classrooms') class="active " @endif>
                          <a href="{{ route('classroom.index') }}">
                              <i class="tim-icons icon-bullet-list-67"></i>
                              <p>{{ _('List of classrooms') }}</p>
                          </a>
                      </li>
                      <li @if ($pageSlug == 'addClassroom') class="active " @endif>
                          <a href="{{ route('classroom.create')  }}">
                              <i class="tim-icons icon-simple-add"></i>
                              <p>{{ _('Add Classroom') }}</p>
                          </a>
                      </li>
                    </ul>
                </div>
            </li>


            <li>
                <a data-toggle="collapse" href="#department-div" aria-expanded="true">
                    <i class="tim-icons icon-tablet-2"></i>
                    <span class="nav-link-text" >{{ __('Departments') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $pageParent == 'Department' ? 'show' : '' }}" id="department-div">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'departments') class="active " @endif>
                            <a href="{{ route('department.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('List of departments') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'addDepartment') class="active " @endif>
                            <a href="{{ route('department.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>{{ _('Add Department') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            
            <li>
                <a data-toggle="collapse" href="#subject-div" aria-expanded="true">
                    <i class="tim-icons icon-tablet-2"></i>
                    <span class="nav-link-text" >{{ __('Subjects') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $pageParent == 'Subject' ? 'show' : '' }}" id="subject-div">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'subjects') class="active " @endif>
                            <a href="{{ route('subject.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('List of subjects') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'addSubject') class="active " @endif>
                            <a href="{{ route('subject.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>{{ _('Add Subject') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#teacher-div" aria-expanded="true">
                    <i class="tim-icons icon-badge"></i>
                    <span class="nav-link-text" >{{ __('Teachers') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $pageParent == 'Teacher' ? 'show' : '' }}" id="teacher-div">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'teachers') class="active " @endif>
                            <a href="{{ route('teacher.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('List of teachers') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('teacher.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>{{ _('Add Teacher') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#parent-div" aria-expanded="true">
                    <i class="tim-icons icon-badge"></i>
                    <span class="nav-link-text" >{{ __('Parents') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $pageParent == 'Parent' ? 'show' : '' }}" id="parent-div">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'parents') class="active " @endif>
                            <a href="{{ route('parent.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('List of parents') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('parent.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>{{ _('Add Parent') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

        @if (auth()->user()->account_id == 1)
            <li>
                <a data-toggle="collapse" href="#staff-div" aria-expanded="true">
                    <i class="tim-icons icon-badge"></i>
                    <span class="nav-link-text" >{{ __('Staffs') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $pageParent == 'Staff' ? 'show' : '' }}" id="staff-div">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'staffs') class="active " @endif>
                            <a href="{{ route('staff.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('List of staffs') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('staff.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>{{ _('Add Staff') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

            <li @if ($pageSlug == 'profile') class="active " @endif>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ _('My Profile') }}</p>
                </a>
            </li>

            @php /*
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ _('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ _('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ _('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ _('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ _('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ _('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ _('Upgrade to PRO') }}</p>
                </a>
            </li>
            */ @endphp

        </ul>
    </div>
</div>
