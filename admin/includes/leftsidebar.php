            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>
                            <?php if($_SESSION['utype']=='1'):?>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                         
                            </li>
                            <?php endif;?>
<?php if($_SESSION['utype']=='1'):?>
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Sub-admins </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subadmins.php">Add Sub-admin</a></li>
                                    <li><a href="manage-subadmins.php">Manage Sub-admin</a></li>
                                </ul>
                            </li>
<?php endif;?>
               


                            <li class="has_sub">
                                
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Domains </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                               
                                	<li><a href="add-category.php">Add Domain</a></li>
                                    <?php if($_SESSION['utype']=='1'):?>
                                    <li><a href="manage-categories.php">Manage Domains</a></li>
                                    <?php endif;?>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Skills </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory.php">Add Skill</a></li>
                                    <?php if($_SESSION['utype']=='1'):?>
                                    <li><a href="manage-subcategories.php">Manage Skills</a></li>
                                    <?php endif;?>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Details</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php">Add Details</a></li>
                                    <li><a href="manage-posts.php">Manage Details</a></li>
                                    <?php if($_SESSION['utype']=='1'):?>

                                     <li><a href="trash-posts.php">Trash Details</a></li>
                                     <?php endif;?>
                                </ul>
                            </li>  
                     
                            <?php if($_SESSION['utype']=='1'):?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                
                                    <li><a href="aboutus.php">About us</a></li>
                                    <li><a href="contactus.php">Contact us</a></li>
                                   
                                </ul>
                            </li>
                            <?php endif;?>
    

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    

                </div>
                <!-- Sidebar -left -->

            </div>