<section class="content-header">
	<ol class="breadcrumb">
		<li><i class="fa fa-cogs"></i> Registro</li>
		<li class="active">Horario para Doctor</li>
	</ol>   
</section>

<section class="content">
	<div class="box box-primary">
		<div class="box-body">     
			<div class="row">
				<?php       
					if(isset($lista_doctores) && !empty($lista_doctores)){
						foreach ($lista_doctores as $key) {   
							echo
							'<div class="col-lg-3">
								<div class="well profile">                             
									<div class="col-lg-12 text-center">
										<figure>
											<a href="'.base_url().'registro/'.$accion.'-doctor/doctor-'.codificar($key->id_usuario_doctor).'">
												<img src="'.base_url().$key->url_imagen_perfil.'" width="200" class="img-circle img-responsive text-center">
											</a>
											<h5>'.mysql_to_utf8($key->nombre_doctor, 'titulo').'</h5>
										</figure>
									</div>                 
								</div>
							</div>';
						}
					} 
				?>
			</div>
		</div>
	</div>
</section><!---->