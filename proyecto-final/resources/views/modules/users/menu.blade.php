<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ url('storage/users/mace.png') }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENÚ</li>
			<li>
				<a href="{{ route('home') }}">
					<i class="fa fa-home"></i> <span>Inicio</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-user"></i> <span>Usuarios</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Registro</a></li>
					<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ url('branches') }}">
					<i class="fa fa-home"></i> <span>Sucursales</span>
				</a>
			</li>
			<li>
				<a href="{{ url('categories') }}">
					<i class="fa fa-home"></i> <span>Categorias</span>
				</a>
			</li>
			<li>
				<a href="{{ url('products') }}">
					<i class="fa fa-home"></i> <span>Productos</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>