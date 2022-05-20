
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
                <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li>
                        <a href="{{route('index')}}" class="dropdown-toggle no-arrow" style="text-align: right;font-family: Yekan;font-weight: bold">
                            <span class="micon dw dw-home"></span><span class="mtext">خانه</span>
                        </a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 'ADM')
                        <li>
                            <a href="{{route('Adminhome')}}" class="dropdown-toggle no-arrow" style="text-align: right;font-family: Yekan;font-weight: bold">
                                <span class="micon dw dw-home"></span><span class="mtext">ادمین</span>
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{route('index')}}" class="dropdown-toggle no-arrow" style="text-align: right;font-family: Yekan;font-weight: bold">
                                <span class="micon dw dw-home"></span><span class="mtext">خانه</span>
                            </a>
                        </li>
                        @endif
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" style="text-align: right;font-family: Yekan;font-weight: bold">
                            <span class="micon dw dw-writing"></span><span class="mtext" style="padding-right: 20px;">وبسایت</span>
                        </a>
                        <ul class="submenu" style="direction: rtl;text-align: right;font-family: Yekan">
                            <li><a href="form-basic.html" style="font-family: Yekan;font-weight: bold">اضافه کردن مطلب</a></li>
                            <li><a href="advanced-components.html" style="font-family: Yekan;font-weight: bold">اضافه کردن پادکست</a></li>
                            <li><a href="form-wizard.html" style="font-family: Yekan;font-weight: bold">مطالب کاربران</a></li>
                            <li><a href="html5-editor.html" style="font-family: Yekan;font-weight: bold">کامنت ها</a></li>
                            <li><a href="form-pickers.html" style="font-family: Yekan;font-weight: bold">تبلیغات</a></li>
                            <li><a href="image-cropper.html" style="font-family: Yekan;font-weight: bold">فاکتور ها</a></li>
                            <li><a href="image-dropzone.html" style="font-family: Yekan;font-weight: bold">دسته بندی</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">بیشتر</div>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="introduction.html">Introduction</a></li>
                            <li><a href="getting-started.html">Getting Started</a></li>
                            <li><a href="color-settings.html">Color Settings</a></li>
                            <li><a href="third-party-plugins.html">Third Party Plugins</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-paper-plane1"></span>
                            <span class="mtext">Landing Page <img src="vendors/images/coming-soon.png" alt="" width="25"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
