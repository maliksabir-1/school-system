 <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="{{asset('assets/img/kaiadmin/logo_light.svg')}}"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('dashboard') }}">
                        <span class="sub-item">Dashboard 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>

               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Students</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('students.index') }}">
                        <span class="sub-item">Student List</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#teachers">
                  <i class="fas fa-pen-square"></i>
                  <p>Teachers</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="teachers">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('teachers.index') }}">
                        <span class="sub-item">Teacher List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#attendance">
                  <i class="fas fa-pen-square"></i>
                  <p>Attendance</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="attendance">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('attendance.index') }}">
                        <span class="sub-item">attendance List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#class">
                  <i class="fas fa-pen-square"></i>
                  <p>Class</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="class">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('class.index') }}">
                        <span class="sub-item">Class List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#subject">
                  <i class="fas fa-pen-square"></i>
                  <p>Subjects</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="subject">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('subject.index') }}">
                        <span class="sub-item">Subject List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#parent">
                  <i class="fas fa-pen-square"></i>
                  <p>Parents</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="parent">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('parent.index') }}">
                        <span class="sub-item">Parents List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#section">
                  <i class="fas fa-pen-square"></i>
                  <p>Sections</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="section">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('section.index') }}">
                        <span class="sub-item">Sections List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Setting">
                  <i class="fas fa-pen-square"></i>
                  <p>Settings</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Setting">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('setting.index') }}">
                        <span class="sub-item">Settings List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Exam">
                  <i class="fas fa-pen-square"></i>
                  <p>Exams</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Exam">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('exam.index') }}">
                        <span class="sub-item">Exams List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Book">
                  <i class="fas fa-pen-square"></i>
                  <p>Books</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Book">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('book.index') }}">
                        <span class="sub-item">Books List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#FeePayment">
                  <i class="fas fa-pen-square"></i>
                  <p>FeePayments</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="FeePayment">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('feepayment.index') }}">
                        <span class="sub-item">FeePayments List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Feestructure">
                  <i class="fas fa-pen-square"></i>
                  <p>Feestructures</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Feestructure">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('feestructure.index') }}">
                        <span class="sub-item">Feestructures List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Mark">
                  <i class="fas fa-pen-square"></i>
                  <p>Marks</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Mark">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('mark.index') }}">
                        <span class="sub-item">Marks List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#timetable">
                  <i class="fas fa-pen-square"></i>
                  <p>Timetables</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="timetable">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('timetable.index') }}">
                        <span class="sub-item">Timetables List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#subjectteacher">
                  <i class="fas fa-pen-square"></i>
                  <p>Class Subject Teachers</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="subjectteacher">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('subjectteacher.index') }}">
                        <span class="sub-item">Class Subject Teachers List</span>
                      </a>
                    </li>
                  </ul>
                </div>
             </li>
            </ul>
          </div>
        </div>
      </div>
      