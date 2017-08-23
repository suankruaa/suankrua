<ul id="menu" class="page-sidebar-menu">
    <li  <?php if($page == 'index') echo 'class="active" id="active"'; ?> >
        <a href="index.php">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">หน้าแรก</span>
        </a>

    </li>
    <li <?php if(($page == 'users') || ($page == 'adduser') || ($page == 'view_user') || ($page == 'deleted_users')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
            <span class="title">ข้อมูลพื้นฐาน</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'users') echo 'class="active" id="active"'; ?> >
                <a href="funds.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลกองทุนหมู่บ้าน
                </a>
            </li>
            <li <?php if($page == 'adduser') echo 'class="active" id="active"'; ?> >
                <a href="adduser.php">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li <?php if($page == 'view_user') echo 'class="active" id="active"'; ?> >
                <a href="view_user.php">
                    <i class="fa fa-angle-double-right"></i>
                    View User
                </a>
            </li>
            <li <?php if($page == 'deleted_users') echo 'class="active" id="active"'; ?> >
                <a href="deleted_users.php">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>

    <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
            <span class="title">Builders</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="form_builder.php">
                    <i class="fa fa-angle-double-right"></i>
                    Form Builder
                </a>
            </li>
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="form_builder2.php">
                    <i class="fa fa-angle-double-right"></i>
                    Form Builder 2
                </a>
            </li>
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="buttonbuilder.php">
                    <i class="fa fa-angle-double-right"></i>
                    Button Builder
                </a>
            </li>
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="gridmanager.php">
                    <i class="fa fa-angle-double-right"></i>
                    Page Builder
                </a>
            </li>
        </ul>
    </li>

    <li <?php if(($page == 'form_examples') || ($page == 'editor') || ($page == 'validation') || ($page == 'formelements') || ($page == 'form_layouts') || ($page == 'formwizard') || ($page == 'accordionformwizard'))  echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
            <span class="title">Forms</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'form_examples') echo 'class="active" id="active"'; ?> >
                <a href="form_examples.php">
                    <i class="fa fa-angle-double-right"></i>
                    Form Examples
                </a>
            </li>
            <li <?php if($page == 'editor') echo 'class="active" id="active"'; ?> >
                <a href="editor.php">
                    <i class="fa fa-angle-double-right"></i>
                    Form Editors
                </a>
            </li>
            <li <?php if($page == 'validation') echo 'class="active" id="active"'; ?> >
                <a href="validation.php">
                    <i class="fa fa-angle-double-right"></i>
                    Form Validation
                </a>
            </li>
            <li <?php if($page == 'formelements') echo 'class="active" id="active"'; ?> >
                <a href="formelements.php">
                    <i class="fa fa-angle-double-right"></i>
                    Form Elements
                </a>
            </li>
            <li <?php if($page == 'form_layouts') echo 'class="active" id="active"'; ?> >
                <a href="form_layouts.php">
                    <i class="fa fa-angle-double-right"></i>
                    Form Layouts
                </a>
            </li>
            <li <?php if($page == 'formwizard') echo 'class="active" id="active"'; ?> >
                <a href="formwizard.php">
                    <i class="fa fa-angle-double-right"></i>
                    Form Wizards
                </a>
            </li>
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="accordionformwizard.php">
                    <i class="fa fa-angle-double-right"></i>
                    Accordion Wizards
                </a>
            </li>
        </ul>
    </li>
    <li <?php if(($page == 'animatedicons') || ($page == 'buttons') || ($page == 'advanced_buttons') || ($page == 'tabs_accordions') || ($page == 'panels') || ($page == 'icon') || ($page == 'color') || ($page == 'grid') || ($page == 'carousel') || ($page == 'advanced_modals') || ($page == 'tagsinput') || ($page == 'nestable') || ($page == 'toastr') || ($page == 'notifications') || ($page == 'session_timeout') || ($page == 'portlet_draggable')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
            <span class="title">UI Features</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'animatedicons') echo 'class="active" id="active"'; ?> >
                <a href="animatedicons.php">
                    <i class="fa fa-angle-double-right"></i>
                    Animated Icons
                </a>
            </li>
            <li <?php if($page == 'buttons') echo 'class="active" id="active"'; ?> >
                <a href="buttons.php">
                    <i class="fa fa-angle-double-right"></i>
                    Buttons
                </a>
            </li>
            <li <?php if($page == 'advanced_buttons') echo 'class="active" id="active"'; ?> >
                <a href="advanced_buttons.php">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Buttons
                </a>
            </li>
            <li <?php if($page == 'tabs_accordions') echo 'class="active" id="active"'; ?> >
                <a href="tabs_accordions.php">
                    <i class="fa fa-angle-double-right"></i>
                    Tabs and Accordions
                </a>
            </li>
            <li <?php if($page == 'panels') echo 'class="active" id="active"'; ?> >
                <a href="panels.php">
                    <i class="fa fa-angle-double-right"></i>
                    Panels
                </a>
            </li>
            <li <?php if($page == 'icon') echo 'class="active" id="active"'; ?> >
                <a href="icon.php">
                    <i class="fa fa-angle-double-right"></i>
                    Font Icons
                </a>
            </li>
            <li <?php if($page == 'color') echo 'class="active" id="active"'; ?> >
                <a href="color.php">
                    <i class="fa fa-angle-double-right"></i>
                    Color Picker Slider
                </a>
            </li>
            <li <?php if($page == 'grid') echo 'class="active" id="active"'; ?> >
                <a href="grid.php">
                    <i class="fa fa-angle-double-right"></i>
                    Grid Layout
                </a>
            </li>
            <li <?php if($page == 'carousel') echo 'class="active" id="active"'; ?> >
                <a href="carousel.php">
                    <i class="fa fa-angle-double-right"></i>
                    Carousel
                </a>
            </li>
            <li <?php if($page == 'advanced_modals') echo 'class="active" id="active"'; ?> >
                <a href="advanced_modals.php">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Modals
                </a>
            </li>
            <li <?php if($page == 'tagsinput') echo 'class="active" id="active"'; ?> >
                <a href="tagsinput.php">
                    <i class="fa fa-angle-double-right"></i>
                    Tags Input
                </a>
            </li>
            <li <?php if($page == 'nestable') echo 'class="active" id="active"'; ?> >
                <a href="nestable.php">
                    <i class="fa fa-angle-double-right"></i>
                    Nestable List
                </a>
            </li>
            <li <?php if($page == 'toastr') echo 'class="active" id="active"'; ?> >
                <a href="toastr.php">
                    <i class="fa fa-angle-double-right"></i>
                    Toastr Notifications
                </a>
            </li>
            <li <?php if($page == 'notifications') echo 'class="active" id="active"'; ?> >
                <a href="notifications.php">
                    <i class="fa fa-angle-double-right"></i>
                    Notifications
                </a>
            </li>
            <li <?php if($page == 'session_timeout') echo 'class="active" id="active"'; ?> >
                <a href="session_timeout.php">
                    <i class="fa fa-angle-double-right"></i>
                    Session Timeout
                </a>
            </li>
            <li <?php if($page == 'portlet_draggable') echo 'class="active" id="active"'; ?> >
                <a href="portlet_draggable.php">
                    <i class="fa fa-angle-double-right"></i>
                    Draggable Portlets
                </a>
            </li>
        </ul>
    </li>
    <li <?php if(($page == 'general') || ($page == 'pickers') || ($page == 'x-editable') || ($page == 'timeline') || ($page == 'transitions') || ($page == 'sliders') || ($page == 'knob')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="lab" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
            <span class="title">UI Components</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'general') echo 'class="active" id="active"'; ?> >
                <a href="general.php">
                    <i class="fa fa-angle-double-right"></i>
                    General Components
                </a>
            </li>
            <li <?php if($page == 'pickers') echo 'class="active" id="active"'; ?> >
                <a href="pickers.php">
                    <i class="fa fa-angle-double-right"></i>
                    Pickers
                </a>
            </li>
            <li <?php if($page == 'x-editable') echo 'class="active" id="active"'; ?> >
                <a href="x-editable.php">
                    <i class="fa fa-angle-double-right"></i>
                    X-editable
                </a>
            </li>
            <li <?php if($page == 'timeline') echo 'class="active" id="active"'; ?> >
                <a href="timeline.php">
                    <i class="fa fa-angle-double-right"></i>
                    Timeline
                </a>
            </li>
            <li <?php if($page == 'transitions') echo 'class="active" id="active"'; ?> >
                <a href="transitions.php">
                    <i class="fa fa-angle-double-right"></i>
                    Transitions
                </a>
            </li>
            <li <?php if($page == 'sliders') echo 'class="active" id="active"'; ?> >
                <a href="sliders.php">
                    <i class="fa fa-angle-double-right"></i>
                    Sliders
                </a>
            </li>
            <li <?php if($page == 'knob') echo 'class="active" id="active"'; ?> >
                <a href="knob.php">
                    <i class="fa fa-angle-double-right"></i>
                    Circles Sliders
                </a>
            </li>
        </ul>
    </li>
    <li <?php if(($page == 'simple_table') || ($page == 'responsive_tables') || ($page == 'advanced_tables') || ($page == 'editable_table')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
            <span class="title">DataTables</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'simple_table') echo 'class="active" id="active"'; ?> >
                <a href="simple_table.php">
                    <i class="fa fa-angle-double-right"></i>
                    Simple tables
                </a>
            </li>
            <li <?php if($page == 'responsive_tables') echo 'class="active" id="active"'; ?> >
                <a href="responsive_tables.php">
                    <i class="fa fa-angle-double-right"></i>
                    Responsive Datatables
                </a>
            </li>
            <li <?php if($page == 'advanced_tables') echo 'class="active" id="active"'; ?> >
                <a href="advanced_tables.php">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Data Tables
                </a>
            </li>
            <li <?php if($page == 'editable_table') echo 'class="active" id="active"'; ?> >
                <a href="editable_table.php">
                    <i class="fa fa-angle-double-right"></i>
                    Editable Datatables
                </a>
            </li>
        </ul>
    </li>
    <li <?php if(($page == 'charts') || ($page == 'piecharts') || ($page == 'charts_animation') || ($page == 'jscharts') || ($page == 'sparklinecharts')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
            <span class="title">Charts</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'charts') echo 'class="active" id="active"'; ?> >
                <a href="charts.php">
                    <i class="fa fa-angle-double-right"></i>
                    Flot Charts
                </a>
            </li>
            <li <?php if($page == 'piecharts') echo 'class="active" id="active"'; ?> >
                <a href="piecharts.php">
                    <i class="fa fa-angle-double-right"></i>
                    Pie Charts
                </a>
            </li>
            <li <?php if($page == 'charts_animation') echo 'class="active" id="active"'; ?> >
                <a href="charts_animation.php">
                    <i class="fa fa-angle-double-right"></i>
                    Animated Charts
                </a>
            </li>
            <li <?php if($page == 'jscharts') echo 'class="active" id="active"'; ?> >
                <a href="jscharts.php">
                    <i class="fa fa-angle-double-right"></i>
                    JS Charts
                </a>
            </li>
            <li <?php if($page == 'sparklinecharts') echo 'class="active" id="active"'; ?> >
                <a href="sparklinecharts.php">
                    <i class="fa fa-angle-double-right"></i>
                    Sparkline Charts
                </a>
            </li>
        </ul>
    </li>
    <li <?php if($page == 'calendar') echo 'class="active" id="active"'; ?> >
        <a href="calendar.php">
            <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>
            Calendar
            <span class="badge badge-danger">7</span>
        </a>
    </li>
    <li <?php if(($page == 'mail_box') || ($page == 'compose') || ($page == 'view_mail')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="mail" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
            <span class="title">Email</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'mail_box') echo 'class="active" id="active"'; ?> >
                <a href="mail_box.php">
                    <i class="fa fa-angle-double-right"></i>
                    Inbox
                </a>
            </li>
            <li <?php if($page == 'compose') echo 'class="active" id="active"'; ?> >
                <a href="compose.php">
                    <i class="fa fa-angle-double-right"></i>
                    Compose
                </a>
            </li>
            <li <?php if($page == 'view_mail') echo 'class="active" id="active"'; ?> >
                <a href="view_mail.php">
                    <i class="fa fa-angle-double-right"></i>
                    Single Mail
                </a>
            </li>
        </ul>
    </li>
    <li <?php if($page == 'tasks') echo 'class="active" id="active"'; ?> >
        <a href="tasks.php">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>
            Tasks
            <span class="badge badge-danger">10</span>
        </a>
    </li>
    <li <?php if(($page == 'gallery') || ($page == 'masonry_gallery') || ($page == 'dropzone') || ($page == 'imagecropping') || ($page == 'multiple_upload') || ($page == 'imgmagnifier')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
            <span class="title">Gallery</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'gallery') echo 'class="active" id="active"'; ?> >
                <a href="gallery.php">
                    <i class="fa fa-angle-double-right"></i>
                    Gallery
                </a>
            </li>
            <li <?php if($page == 'masonry_gallery') echo 'class="active" id="active"'; ?> >
                <a href="masonry_gallery.php">
                    <i class="fa fa-angle-double-right"></i>
                    Masonry Gallery
                </a>
            </li>
            <li <?php if($page == 'dropzone') echo 'class="active" id="active"'; ?> >
                <a href="dropzone.php">
                    <i class="fa fa-angle-double-right"></i>
                    Dropzone
                </a>
            </li>
            <li <?php if($page == 'imagecropping') echo 'class="active" id="active"'; ?> >
                <a href="imagecropping.php">
                    <i class="fa fa-angle-double-right"></i>
                    Image Cropping
                </a>
            </li>
            <li <?php if($page == 'multiple_upload') echo 'class="active" id="active"'; ?> >
                <a href="multiple_upload.php">
                    <i class="fa fa-angle-double-right"></i>
                    Multiple File Upload
                </a>
            </li>
            <li <?php if($page == 'imgmagnifier') echo 'class="active" id="active"'; ?> >
                <a href="imgmagnifier.php">
                    <i class="fa fa-angle-double-right"></i>
                    Image Magnifier
                </a>
            </li>
        </ul>
    </li>
