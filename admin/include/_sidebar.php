<ul id="menu" class="page-sidebar-menu">
    <li  <?php if($page == 'index') echo 'class="active" id="active"'; ?> >
        <a href="index.php">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">หน้าแรก</span>
        </a>

    </li>
    <li <?php if(($page == 'users') || ($page == 'adduser') || ($page == 'view_user') || ($page == 'deleted_users')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="folder" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
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
                <a href="committee.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลกรรมการ
                </a>
            </li>
            <li <?php if($page == 'view_user') echo 'class="active" id="active"'; ?> >
                <a href="member.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลสมาชิก
                </a>
            </li>
            <li <?php if($page == 'deleted_users') echo 'class="active" id="active"'; ?> >
                <a href="list_admin.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลผู้ดูแลระบบ
                </a>
            </li>
        </ul>
    </li>

    <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="money" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
            <span class="title">สัจจะออมทรัพย์</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="admin_member_add.php">
                    <i class="fa fa-angle-double-right"></i>
                    สมัครสมาชิกสัจจะฯ
                </a>
            </li>
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="deposit.php">
                    <i class="fa fa-angle-double-right"></i>
                    ฝาก
                </a>
            </li>
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="buttonbuilder.php">
                    <i class="fa fa-angle-double-right"></i>
                    ถอน
                </a>
            </li>
            <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                <a href="stopmember.php">
                    <i class="fa fa-angle-double-right"></i>
                    ยกเลิกบัญชี
                </a>
            </li>
        </ul>
    </li>

    <li <?php if(($page == 'form_examples') || ($page == 'editor') || ($page == 'validation') || ($page == 'formelements') || ($page == 'form_layouts') || ($page == 'formwizard') || ($page == 'accordionformwizard'))  echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="briefcase" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
            <span class="title">กองทุนหมู่บ้าน</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'form_examples') echo 'class="active" id="active"'; ?> >
                <a href="form_examples.php">
                    <i class="fa fa-angle-double-right"></i>
                    ยื่นกู้
                </a>
            </li>
            <li <?php if($page == 'editor') echo 'class="active" id="active"'; ?> >
                <a href="editor.php">
                    <i class="fa fa-angle-double-right"></i>
                    อนุมัติเงินกู้
                </a>
            </li>
            <li <?php if($page == 'validation') echo 'class="active" id="active"'; ?> >
                <a href="validation.php">
                    <i class="fa fa-angle-double-right"></i>
                    ทำสัญญากู้ยืมเงิน
                </a>
            </li>
            <li <?php if($page == 'formelements') echo 'class="active" id="active"'; ?> >
                <a href="formelements.php">
                    <i class="fa fa-angle-double-right"></i>
                    จ่ายเงินกู้
                </a>
            </li>
            <li <?php if($page == 'form_layouts') echo 'class="active" id="active"'; ?> >
                <a href="form_layouts.php">
                    <i class="fa fa-angle-double-right"></i>
                    ชำระเงินกู้และดอกเบี้ย
                </a>
            </li>

        </ul>
    </li>
    <li <?php if(($page == 'animatedicons') || ($page == 'buttons') || ($page == 'advanced_buttons') || ($page == 'tabs_accordions') || ($page == 'panels') || ($page == 'icon') || ($page == 'color') || ($page == 'grid') || ($page == 'carousel') || ($page == 'advanced_modals') || ($page == 'tagsinput') || ($page == 'nestable') || ($page == 'toastr') || ($page == 'notifications') || ($page == 'session_timeout') || ($page == 'portlet_draggable')) echo 'class="active"'; ?> >
        <a href="#">
            <i class="livicon" data-name="list" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
            <span class="title">ออกรายงาน</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if($page == 'animatedicons') echo 'class="active" id="active"'; ?> >
              <i class ="re">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รายงานข้อมูลพื้นฐาน</i>
                <a href="animatedicons.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลประวัติการเข้าใช้งาน
                </a>
            </li>
            <li <?php if($page == 'buttons') echo 'class="active" id="active"'; ?> >
                <a href="buttons.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลสมาชิก
                </a>
            </li>
            <li <?php if($page == 'advanced_buttons') echo 'class="active" id="active"'; ?> >
                <a href="advanced_buttons.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลกรรมการ
                </a>
            </li>
            <li <?php if($page == 'tabs_accordions') echo 'class="active" id="active"'; ?> >
              <i class ="re">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รายงานข้อมูลสัจจะออมทรัพย์</i>
                <a href="tabs_accordions.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลการฝาก
                </a>
            </li>
            <li <?php if($page == 'panels') echo 'class="active" id="active"'; ?> >
                <a href="panels.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลการถอน
                </a>
            </li>
            <li <?php if($page == 'icon') echo 'class="active" id="active"'; ?> >
                <a href="icon.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลการยกเลิกบัญชี
                </a>
            </li>
            <li <?php if($page == 'color') echo 'class="active" id="active"'; ?> >
              <i class ="re">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รายงานข้อมูลกองทุนหมู่บ้าน</i>
                <a href="color.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลการยื่นกู้
                </a>
            </li>
            <li <?php if($page == 'grid') echo 'class="active" id="active"'; ?> >
                <a href="grid.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลอนุมัติเงินกู้
                </a>
            </li>
            <li <?php if($page == 'carousel') echo 'class="active" id="active"'; ?> >
                <a href="carousel.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลการทำสัญญากู้ยืมเงิน
                </a>
            </li>
            <li <?php if($page == 'advanced_modals') echo 'class="active" id="active"'; ?> >
                <a href="advanced_modals.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลการจ่ายเงินกู้ให้ผู้กู้
                </a>
            </li>
            <li <?php if($page == 'tagsinput') echo 'class="active" id="active"'; ?> >
                <a href="tagsinput.php">
                    <i class="fa fa-angle-double-right"></i>
                    ข้อมูลการชำระเงินกู้และดอกเบี้ย
                </a>
            </li>
        </ul>
    </li>

    <li <?php if($page == 'calendar') echo 'class="active" id="active"'; ?> >
        <a href="calendar.php">
            <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>
            Calendar

        </a>
    </li>
