<div class="four wide column" id="example1">
    <div class="ui secondary vertical pointing menu">
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/index.php" ? "active" : "");?>" href="index.php">Dashboard</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/donors.php" ? "active" : "");?>" href="donators.php">Donators</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/programs.php" ? "active" : "");?>" href="./programs.php">Programs</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/member-hierarchy.php" ? "active" : "");?>" href="member-hierarchy.php">Member Hierarchy</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/children.php" ? "active" : "");?>" href="./children.php">Children</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/newsletter.php" ? "active" : "");?>" href="./newsletter.php">Newsletter</a>
    </div>
</div>