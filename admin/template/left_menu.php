<style>
	  .btn + .btn {
	   margin-left: 0px; 
	}
	
	.btn-block+.btn-block {
	     margin-top: 1px; 
	}
</style>
<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<?php
			  $b_name_file = basename($_SERVER['SCRIPT_FILENAME']);
			  $b_name_arr  = explode(".",$b_name_file);
			  $b_name      = $b_name_arr[0];
			?>
                        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				
              
                                <li class="start">
					<a href="../home">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					</a>
				</li>
              
				<li class="start active open">
					<a href="javascript:;">
					<i class="fa fa-cogs"></i>
					<span class="title">Menu</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>					
				</li>
                
                <li class="start"><a href="../adminusers/index.php?cmd=list"><i class="icon-rocket"></i>Admin Users</a></li>
                <li class="start"><a href="../users/index.php?cmd=list"><i class="icon-rocket"></i>Users</a></li>
                <li class="start"><a href="../contry/index.php?cmd=list"><i class="icon-rocket"></i>Contry</a></li>
                <li class="start"><a href="../city/index.php?cmd=list"><i class="icon-rocket"></i>City</a></li>
                <li class="start"><a href="../type/index.php?cmd=list"><i class="icon-rocket"></i>Type</a></li>
                <li class="start"><a href="../breed/index.php?cmd=list"><i class="icon-rocket"></i>Breed</a></li>
                <li class="start"><a href="../breedgender/index.php?cmd=list"><i class="icon-rocket"></i>BreedGender</a></li>
                <li class="start"><a href="../genderage/index.php?cmd=list"><i class="icon-rocket"></i>GenderAge</a></li>
                <li class="start"><a href="../ad/index.php?cmd=list"><i class="icon-rocket"></i>Ad</a></li>
                <li class="start"><a href="../favorite/index.php?cmd=list"><i class="icon-rocket"></i>Favorite Group</a></li>
                <li class="start"><a href="../choice/index.php?cmd=list"><i class="icon-rocket"></i>Choice</a></li>
                <li class="start"><a href="../favorite_sent_notification/index.php?cmd=list"><i class="icon-rocket"></i>Favorite sent notification</a></li>
                <li class="start"><a href="../guideinfo/index.php?cmd=list"><i class="icon-rocket"></i>Guide info</a></li> 
                <li class="start"><a href="../terms_services/index.php?cmd=list"><i class="icon-rocket"></i>Terms services</a></li> 
                
                
                <li class="start"></li>
                <li class="start"></li>
                <li class="start"><a href="../adimage/index.php?cmd=list"><i class="icon-rocket"></i>adimage</a></li>
                <li class="start"><a href="../advideo/index.php?cmd=list"><i class="icon-rocket"></i>advideo</a></li>
                <li class="start"><a href="../storage/index.php?cmd=list"><i class="icon-rocket"></i>storage</a></li>
                <li class="start"><a href="../storage2/index.php?cmd=list"><i class="icon-rocket"></i>storage2</a></li>
                <li class="start"><a href="../storage3/index.php?cmd=list"><i class="icon-rocket"></i>storage3</a></li>
                <li class="start"><a href="../profileimage/index.php?cmd=list"><i class="icon-rocket"></i>Profile image</a></li>
                
			</ul>
			<!-- END SIDEBAR MENU -->
           
	
          
			
		</div>
	</div>
