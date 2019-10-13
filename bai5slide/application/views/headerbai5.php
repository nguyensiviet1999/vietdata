<?php 
		if($this->session->userdata('email')!='nguyensiviet1999@gmail.com' ){
			redirect('dangnhap','refresh');
		}
	 ?>
<nav class="navbar navbar-light bg-faded">
	          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
	            &#9776;
	          </button>
	          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
	            <a class="navbar-brand" href="<?= base_url() ?>Home">Trang Chu</a>
	            <ul class="nav navbar-nav">
	              
	              <li class="nav-item active">
	                <a class="nav-link" href="<?= base_url() ?>Tin/danhmuctin">Quản lý danh mục tin <span class="sr-only">(current)</span></a>
	              </li>
	              <li class="nav-item active">
	                <a class="nav-link" href="<?= base_url() ?>Tin/quanlytin">Quản lý tin<span class="sr-only">(current)</span></a>
	              </li>
					<li class="nav-item active">
	                <a class="nav-link" href="<?= base_url() ?>Slides">them Slide <span class="sr-only">(current)</span></a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="<?= base_url() ?>Do_edit">Sua slide</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="<?= base_url() ?>tin/quanlyJsonHeader">Sua Json Header</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="<?= base_url() ?>Home/quanlyExport">Quan ly Export</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="<?= base_url() ?>menudacap">Add menu da cap</a>
	              </li> 
	              <li class="nav-item">
	                <a class="nav-link" href="<?= base_url() ?>Testduongdantin">Duong dan than thien</a>
	              </li>
	                <li class="nav-item">
	                <a class="nav-link" href="<?= base_url() ?>Dangnhap/dangxuat">Đăng xuất tài khoản</a>	    
	            </ul>
	          </div>
	        </nav>