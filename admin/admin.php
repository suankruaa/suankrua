<?php
$page = 'blank';
$title = 'Blank Page';
$css = <<<EOT
EOT;
require_once('include/_header.php');
?>
<aside class="right-side">
    <section class="content-header">
        <h1>Blank page</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Pages</li>
            <li class="active">Blank page</li>
        </ol>
        <h1>ยินดีต้อนรับคุณ <?=$s_login_username?></h1>
        อีเมล์<?=$s_login_email?>
    </section>
    <section class="content"></section>

</aside>
<!-- right-side -->
<?php
require_once('include/_footer.php');
?>
</body>
</html>
