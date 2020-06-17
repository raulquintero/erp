<?php namespace Resources\Database\Models;

use Illuminate\Database\Capsule\Manager as DB;

class MenuModelDelete {

    public function getMenu($id = 0){

	
		$menu = '
				<li class="inactive">
					<a href="/">
						<span>Home</span>
					</a>
				</li>

				<li class="inactive">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						<span>STORE</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						
						<li class="dropdown-submenu">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">Productos</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">Por Categorias</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Ropa</a>
											<ul class="dropdown-menu">
												<li>
													<a href="/productos/ropa-mujer">Mujer</a>
												</li>
												<li>
													<a href="/productos/ropa-hombre">Hombre</a>
												</li>
												<li>
													<a href="/productos/ropa-ninos">Ninos</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="/productos/hogar">Hogar</a>
										</li>
										<li>
											<a href="/productos-electronica">Electronica</a>
										</li>
									</ul>
								</li>
							</ul>	
						</li>
						<li class="dropdown-submenu">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">Servicios</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">Por Categorias</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a href="#" data-toggle="dropdown" class="dropdown-toggle">Ropa</a>
											<ul class="dropdown-menu">
												<li>
													<a href="/productos/ropa-mujer">Mujer</a>
												</li>
												<li>
													<a href="/productos/ropa-hombre">Hombre</a>
												</li>
												<li>
													<a href="/productos/ropa-ninos">Ninos</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="/productos/hogar">Hogar</a>
										</li>
										<li>
											<a href="/productos-electronica">Electronica</a>
										</li>
									</ul>
								</li>
							</ul>	
						</li>
						<li class="inactive">
							<a href="/store/inventarios">
								<span>Inventarios</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/store/entradas">
								<span>Entradas</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/store/salidas">
								<span>Salidas</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/store/pos">
								<span>PoS</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="inactive">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						<span>Nomina</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="inactive">
							<a href="/nomina/empleados.html">
								<span>Empleados</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/nomina/generate">
								<span>Generar Nomina</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/nomina/view">
								<span>Consultar Nomina</span>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="inactive">
					<a href="/timeclock">
						<span>Checador</span>
					</a>
				</li>
				<li class="inactive">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						<span>Admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="inactive">
							<a href="/dashboard">
								<span>Dashboard</span>
							</a>
						</li>
						<li class="inactive" style="border: 1px solid #e8e8e8"></li>
						<li class="inactive">
							<a href="/users">
								<span>Users</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/productos">
								<span>Productos</span>
							</a>
						</li>
						<li class="inactive" style="border: 1px solid #e8e8e8"></li>
						<li class="inactive">
							<a href="/membership">
								<span>Membresia</span>
							</a>
						</li>
					</ul>
				</li>
				
				<li class="inactive">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						<span>AppCibercomm</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="inactive">
							<a href="/store">
								<span>Store</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/nomina">
								<span>Nomina</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/reportes">
								<span>Reportes</span>
							</a>
						</li>
						<li class="inactive">
							<a href="/checador">
								<span>Checador Virtual</span>
							</a>
						</li>
						
						<li class="inactive" style="border: 1px solid #e8e8e8"></li>
						<li class="inactive">
							<a href="/modules/store">
								<span>Agregar Modulos</span>
							</a>
						</li>
					</ul>
				</li>
				
               
				
        ';
        return $menu;
    }
   
	public function getMenu2( $id = 0)
	{
		$menu =  [
			["id" => "1","option" => "Home","url" => "/","sublinks" => null],
			["id" => "2","option" => "Store","url" => "#","sublinks" => [
				["id" => "4","option" => "productos","url" => "/","sublinks" => null],
				["id" => "5","option" => "servicios","url" => "/","sublinks" => null],
				["id" => "6","option" => "Inventarios","url" => "/store/inventarios","sublinks" => null],
				["id" => "6","option" => "entradas","url" => "/store/entradas","sublinks" => null],
				["id" => "6","option" => "salidas","url" => "/store/salidas","sublinks" => null],
				["id" => "6","option" => "pos","url" => "/store/pos","sublinks" =>  [
					["id" => "4","option" => "todos","url" => "/","sublinks" => null],
					["id" => "5","option" => "aqui","url" => "/","sublinks" => null],
					["id" => "6","option" => "Inventarios","url" => "/store/inventarios","sublinks" => null],
					["id" => "6","option" => "entradas","url" => "/store/entradas","sublinks" => null],
					["id" => "6","option" => "salidas","url" => "/store/salidas","sublinks" => null],
					["id" => "6","option" => "pos","url" => "/store/pos","sublinks" => null],
					]
					],
				]
			],
			["id" => "3","option" => "Info","url" => "/","sublinks" => [
				["id" => "7","option" => "domicilio","url" => "/","sublinks" => null],
				["id" => "8","option" => "telefono","url" => "/","sublinks" => null],
				]
			]
		
		];
		return $menu;
			// id, 
	}

}