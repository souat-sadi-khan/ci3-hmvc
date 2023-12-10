<?php 
    define('SEGMENT_ONE', $this->uri->segment(1));
    define('SEGMENT_TWO', $this->uri->segment(2));
    define('SEGMENT_THREE', $this->uri->segment(3));
?>
<!-- Main Sidebar -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard -->
        <li class="nav-item <?= SEGMENT_ONE == 'dashboard' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('dashboard') ?>">
                <i class="fas fa-columns menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
		
		 <!-- Free Trial -->
      
        <li class="nav-item <?= SEGMENT_ONE == 'free-trial' ? 'active' : '' ?><?= SEGMENT_ONE == 'email-body' ? 'active' : '' ?>">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <i class="fas fa-text-width menu-icon"></i>
                <span class="menu-title">Free Trial (Website)</span>
                <i class="fas fa-chevron-down menu-arrow"></i>
            </a>
            <div class="collapse <?= SEGMENT_ONE == 'free-trial' ? 'show' : '' ?><?= SEGMENT_ONE == 'email-body' ? 'show' : '' ?>" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'free-trial' ? 'active' : '' ?>" href="<?php echo base_url(); ?>free-trial"> 
                            Trial Details 
                        </a>
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'email-body' ? 'active' : '' ?>" href="<?php echo base_url(); ?>email-body"> 
                            Email Body 
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        
        <!-- Domain -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'domain' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/domain') ?>">
                <i class="fas fa-globe menu-icon"></i>
                <span class="menu-title">Domain</span>
            </a>
        </li>
        
        <!-- Domain Configure -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'domain-configure'  ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/domain-configure') ?>">
                <i class="fas fa-cogs menu-icon"></i>
                <span class="menu-title">Domain Configure</span>
            </a>
        </li>

        <!-- Setup Wizard -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'setup-wizard' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/setup-wizard') ?>">
                <i class="fas fa-tv menu-icon"></i>
                <span class="menu-title">Setup Wizard</span>
            </a>
        </li>

        <!-- Comment Boxes -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'comment-box' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/comment-box') ?>">
                <i class="fas fa-question-circle menu-icon"></i>
                <span class="menu-title">Comment Boxes</span>
            </a>
        </li>
        
        <!-- Download Centre -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'download-centre' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/download-centre') ?>">
                <i class="fas fa-hdd menu-icon"></i>
                <span class="menu-title">Download Centre</span>
            </a>
        </li>
		
		<!-- Research Category -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'research-category' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/research-category') ?>">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">Research Category</span>
            </a>
        </li>
		
		<!-- Research Article -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'research-article' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/research-article') ?>">
                <i class="fas fa-newspaper menu-icon"></i>
                <span class="menu-title">Research Article</span>
            </a>
        </li>

        <!-- ICS Legal Help Guide Category -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'ics-legal-help-guide-category' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/ics-legal-help-guide-category') ?>">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">Help Guide Category</span>
            </a>
        </li>

        <!-- ICS Legal Help Guides -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'ics-legal-help-guide' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/ics-legal-help-guide') ?>">
                <i class="fas fa-book menu-icon"></i>
                <span class="menu-title">ICS Legal Help Guides</span>
            </a>
        </li>
		
		<!-- Email Integration -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'email-integration-information' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/email-integration-information') ?>">
                <i class="far fa-envelope menu-icon"></i>
                <span class="menu-title">Email Integration</span>
            </a>
        </li>
		
		<!-- Advertise Management -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'advertise-management' ? 'active' : '' ?>">
            <a class="nav-link collapsed" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <i class="fas fa-sign-in-alt menu-icon"></i>
                <span class="menu-title">Advertise Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'advertise-management' ? 'show' : '' ?>" id="maps">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'advertise-management' && SEGMENT_THREE == 'admin-login' ? 'active' : '' ?>" href="<?= site_url('admin/advertise-management/admin-login') ?>">
                            Admin Login Page
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'advertise-management' && SEGMENT_THREE == 'super-user-login' ? 'active' : '' ?>" href="<?= site_url('admin/advertise-management/super-user-login') ?>">
                            Super User Login Page
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'advertise-management' && SEGMENT_THREE == 'super-user-register' ? 'active' : '' ?>" href="<?= site_url('admin/advertise-management/super-user-register') ?>">
                            Super User Register Page
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'advertise-management' && SEGMENT_THREE == 'client-login' ? 'active' : '' ?>" href="<?= site_url('admin/advertise-management/client-login') ?>">
                            Client Login Page
                        </a>
                    </li>
                </ul>
            </div>
        </li>
		
		<!-- Social Media -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'social-media' ? 'active' : '' ?>">
            <a class="nav-link collapsed" data-toggle="collapse" href="#social_media_lav_links" aria-expanded="false" aria-controls="maps">
                <i class="fas fa-share-alt menu-icon"></i>
                <span class="menu-title">Social Media</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'social-media' ? 'show' : '' ?>" id="social_media_lav_links">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'social-media' && SEGMENT_THREE == 'facebook' ? 'active' : '' ?>" href="<?= site_url('admin/social-media/facebook') ?>">
                            Facebook Information
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'social-media' && SEGMENT_THREE == 'instagram' ? 'active' : '' ?>" href="<?= site_url('admin/social-media/instagram') ?>">
                            Instagram Information
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'social-media' && SEGMENT_THREE == 'linkedIn' ? 'active' : '' ?>" href="<?= site_url('admin/social-media/linkedIn') ?>">
                            LinkedIn Information
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Users -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'users' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/users') ?>">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>

        <!-- My Profile -->
        <li class="nav-item <?= SEGMENT_ONE == 'my-profile' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('my-profile') ?>">
                <i class="fas fa-id-card menu-icon"></i>
                <span class="menu-title">My profile</span>
            </a>
        </li>
		
		<!-- Trial Access Demo -->
        <li class="nav-item <?= SEGMENT_ONE == 'admin' && SEGMENT_TWO == 'trial-access-demo' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('admin/trial-access-demo') ?>">
                <i class="fas fa-keyboard menu-icon"></i>
                <span class="menu-title">Trial Access Demo</span>
            </a>
        </li>
		
		<!-- Tech ICS Admin Panel -->
        <li class="nav-item">
            <a target="_blank" class="nav-link" href="https://www.techics.com/administrator/login_credential/<?php echo "Admin"?>/<?php echo "Shajjad123"?>">
                <i class="fas fa-globe menu-icon"></i>
                <span class="menu-title">Tech ICS Admin</span>
            </a>
        </li>
		
		<!-- ICS Legal Admin Panel -->
        <li class="nav-item">
            <a target="_blank" class="nav-link" href="https://icslegal.com/ADM_381/administrator/login_credential/<?php echo "icslegal"?>/<?php echo "Shajjad_ICS123$"?>">
                <i class="fas fa-globe menu-icon"></i>
                <span class="menu-title">ICS Legal Admin</span>
            </a>
        </li>
		
		
		<!-- Hybrid Website Admin Panel -->
        <li class="nav-item">
            <a target="_blank" class="nav-link" href="https://hybrid.techics.com/administrator/login_credential/<?php echo "admin"?>/<?php echo "TechICS_321$"?>">
                <i class="fas fa-globe menu-icon"></i>
                <span class="menu-title">Hybrid Website Admin</span>
            </a>
        </li>
		
		<!-- Chat Website Admin Panel -->
        <li class="nav-item">
            <a target="_blank" class="nav-link" href="https://techics.chat/administrator/login_credential/<?php echo "admin"?>/<?php echo "12345678"?>">
                <i class="fas fa-globe menu-icon"></i>
                <span class="menu-title">Chat Website Admin</span>
            </a>
        </li>
		
		<!-- ICS Legal Blog -->
        <li class="nav-item">
            <a target="_blank" class="nav-link" href="https://icslegal.com/blog/administrator2019">
                <i class="fas fa-globe menu-icon"></i>
                <span class="menu-title">ICS Legal Blog</span>
            </a>
        </li>
		
		<!-- Retail Store -->
        <li class="nav-item">
            <a target="_blank" class="nav-link" href="https://retail.techics.com/wp-login.php">
                <i class="fas fa-globe menu-icon"></i>
                <span class="menu-title">Retail Store</span>
            </a>
        </li>
		
		<!-- Retail Store -->
        <li class="nav-item">
            <a target="_blank" class="nav-link" href="https://doc.techics.com/administrator/sign_in/<?php echo "info@techics.com"?>/<?php echo "doc_321$$"?>">
                <i class="fas fa-globe menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
		
		
    </ul>
</nav>