  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  	<!-- Brand Logo -->
  	<a href="index3.html" class="brand-link">
  		<img src="<?= base_url() ?>assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  		<span class="brand-text font-weight-light">AdminLTE 3</span>
  	</a>

  	<!-- Sidebar -->
  	<div class="sidebar">
  		<!-- Sidebar user panel (optional) -->
  		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  			<div class="image">
  				<img src="<?= base_url() ?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
  			</div>
  			<div class="info">
  				<a href="#" class="d-block"><?= $this->session->userdata('name'); ?></a>
  			</div>
  		</div>

  		<!-- Sidebar Menu -->
  		<nav class="mt-2">
  			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  				<li class="nav-item has-treeview menu-open">
  					<a href="<?php echo base_url() . 'dashboard/index' ?>" class="nav-link active">
  						<i class="nav-icon fas fa-tachometer-alt"></i>
  						<p>
  							Dashboard
  						</p>
  					</a>
  				</li>
  				<li class="nav-header">CUSTOMER</li>
  				<li class="nav-item has-treeview">
  					<a href="<?php echo base_url() . 'administrator/customer'; ?>" class="nav-link">
  						<i class="nav-icon fas fa-users"></i>
  						<p>
  							Daftar Customer
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="#" class="nav-link">
  						<i class="nav-icon fas fa-book"></i>
  						<p>
  							Keluhan Customer
  							<i class="fas fa-angle-left right"></i>
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="#" class="nav-link">
  						<i class="nav-icon fas fa-money-check-alt"></i>
  						<p>
  							Tagihan
  							<i class="fas fa-angle-left right"></i>
  						</p>
  					</a>
  					<ul class="nav nav-treeview">
  						<li class="nav-item">
  							<a href="pages/charts/chartjs.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Daftar Tagihan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/tagihan_log'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Generate Tagihan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/blast_email'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Blast Email Tagihan</p>
  							</a>
  						</li>
  					</ul>
  				</li>
  				<li class="nav-header">MASTER</li>
  				<li class="nav-item has-treeview">
  					<a href="#" class="nav-link">
  						<i class="nav-icon fas fa-chart-pie"></i>
  						<p>
  							Master Data
  							<i class="right fas fa-angle-left"></i>
  						</p>
  					</a>
  					<ul class="nav nav-treeview">
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/operator'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Operator</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/media_koneksi'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Media Koneksi</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/jenis_perangkat'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Jenis Perangkat</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/merek_perangkat'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Merek Perangkat</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/jenis_pelanggan'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Jenis Pelanggan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/jenis_tempat'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Jenis Tempat</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/pendidikan_terakhir'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Pendidikan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/jenis_kepemilikan'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Jenis Kepemilikan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/jenis_ipaddress'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Jenis IP</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/type_ipaddress'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Type IP Address</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/layanan'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Jenis Layanan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/status_sdm'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Status SDM</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/bank'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Master Bank</p>
  							</a>
  						</li>
  					</ul>
  				</li>
  				<li class="nav-header">PRODUK</li>
  				<li class="nav-item has-treeview">
  					<a href="#" class="nav-link">
  						<i class="nav-icon fas fa-chart-pie"></i>
  						<p>
  							Jenis Layanan
  							<i class="right fas fa-angle-left"></i>
  						</p>
  					</a>
  					<ul class="nav nav-treeview">
  						<li class="nav-item">
  							<a href="pages/charts/chartjs.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Kategori</p>
  							</a>
  						</li>

  					</ul>
  				</li>
  				<li class="nav-header">KEUANGAN</li>
  				<li class="nav-item has-treeview">
  					<a href="#" class="nav-link">
  						<i class="nav-icon far fa-envelope"></i>
  						<p>
  							Transaksi
  							<i class="fas fa-angle-left right"></i>
  						</p>
  					</a>
  					<ul class="nav nav-treeview">
  						<li class="nav-item">
  							<a href="pages/mailbox/mailbox.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Pemasukan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="pages/mailbox/compose.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Pengeluaran</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="pages/mailbox/read-mail.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Read</p>
  							</a>
  						</li>
  					</ul>
  				</li>
  				<li class="nav-header">PENGATURAN</li>
  				<li class="nav-item has-treeview">
  					<a href="#" class="nav-link">
  						<i class="nav-icon fas fa-cogs"></i>
  						<p>
  							Konfigurasi
  							<i class="fas fa-angle-left right"></i>
  						</p>
  					</a>
  					<ul class="nav nav-treeview">
  						<li class="nav-item">
  							<a href="pages/examples/invoice.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Invoice</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="<?php echo base_url() . 'administrator/blast_email'; ?>" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p> Email </p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="pages/examples/e-commerce.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Website</p>
  							</a>
  						</li>
  					</ul>
  				</li>
  				<li class="nav-header">LAPORAN</li>
  				<li class="nav-item has-treeview">
  					<a href="#" class="nav-link">
  						<i class="nav-icon fas fa-book"></i>
  						<p>
  							Jenis Laporan
  							<i class="fas fa-angle-left right"></i>
  						</p>
  					</a>
  					<ul class="nav nav-treeview">
  						<li class="nav-item">
  							<a href="pages/examples/invoice.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Pembayaran </p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="pages/examples/profile.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Tagihan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="pages/examples/e-commerce.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Pemasukan</p>
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="pages/examples/e-commerce.html" class="nav-link">
  								<i class="far fa-circle nav-icon"></i>
  								<p>Pengeluaran</p>
  							</a>
  						</li>
  					</ul>
  				</li>
  			</ul>
  		</nav>
  		<!-- /.sidebar-menu -->
  	</div>
  	<!-- /.sidebar -->
  </aside>
