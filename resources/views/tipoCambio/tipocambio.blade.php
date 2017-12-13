@extends('welcome')

@section('content') 
    


	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				<a href="http://nexim.sytes.net:8000" >NEXIM ERP </a><i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./bootstrap-3/assets/img/avatar2.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">Eloim Cosio v</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="#!" class="btn-sideBar-SubMenu" >
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Tablas
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="{{route('tipocambio.index')}}" ><i class="zmdi zmdi-money zmdi-hc-fw"></i> Empresas</a>
						</li>
						<li>
							<a href="" ><i class="zmdi zmdi-money zmdi-hc-fw"></i> Tablas Generales</a>
						</li>
						<li>
							<a href="" ><i class="zmdi zmdi-money zmdi-hc-fw"></i> Crear Clentes/ Proveedores</a>
						</li>
						<li>
							<a href="" ><i class="zmdi zmdi-money zmdi-hc-fw"></i> Crear Trabajador</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-money zmdi-hc-fw"></i> Plan de Cuentas</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-money zmdi-hc-fw"></i> Mantenimiento de Impuestos</a>
						</li>
						<li>
							<a href="" data-toggle="modal" data-target="#modalTC"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Tipo de Cambio</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administration <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="period.html"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Period</a>
						</li>
						<li>
							<a href="subject.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Subject</a>
						</li>
						<li>
							<a href="section.html"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Section</a>
						</li>
						<li>
							<a href="salon.html"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Salon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Users <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admin.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Admin</a>
						</li>
						<li>
							<a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Teacher</a>
						</li>
						<li>
							<a href="student.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Student</a>
						</li>
						<li>
							<a href="representative.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Representative</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Payments <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registration.html"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registration</a>
						</li>
						<li>
							<a href="payments.html"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings School <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="school.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> School Data</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
       


        <!-- area de trabajo tipo cambio -->
	






 <?php
    $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
 ?>
 <script>
      $(function() {      
        m_act('month');
        y_act('year');   
        enviar2datos($('#month').val(),$('#year').val(),'db/datosbd.php','#result');$('#modtc').val('1');
 });

 </script>

	
<!---  -->
<!-- cuadro tp -->
 <section id="sectiontp">
    <div background-color="blue" >
        <h1 class=><i class="zmdi zmdi-account zmdi-hc-fw"></i> Usuario <small>Administrador</small></h1>
    </div>
    <div id="cuadro"> 
			
			<p class="labelc" align="center">Mantenimiento Tipo de Cambio</p>

      <hr><div ></div>
     <input type="hidden">
		<div>
            <table  width="100%" >
                <tr>
                    <td ></td>
                    <td ><label class="labelM">Mes</label></td>
                    <td>
                        <select onkeypress="return foco(event,'year')" class="imputM" onchange="enviar2datos($('#month').val(),$('#year').val(),'db/datosbd.php','#result');" name="month" id="month" >
                         <?php for($i=0;$i<12;$i++){$a=$i+1;if($a<10)    $a='0'.$a;echo "<option value=\"$a\">$meses[$i]</option>";}?>
                        </select>
                    </td>

                    <td width="6%" align="center"><label class="labelM">Año</label></td>
                    <td>
                        <input type="number" onchange="enviar2datos($('#month').val(),$('#year').val(),'db/datosbd.php','#result');" id="year" name="year" class="imputM" style="text-align:center;" required min="1990"   step="1">
                     
                    </td>
                    
                    <td width="20%" align="center"><button class="btn-sunat" style="font-size:12px;" onclick="enviar2datos(user,'','datos_tipocambio.php','#tcid')" ><img src="images/Sunat-Logo.png" width="14px" >Conexión Sunat</button></td>
                    <td width="2%"></td>            
                </tr>                                  
            </table>     
            </div>   


			
			<hr><input type="hidden" id="tipocambiodetail">    
           
                <table  border="0" align="center">
                    <tr>
                        <td width="6%"></td>
                        <td align="center" width="15%"><label class="labelM">Fecha</label></td>
                        <td width="2%"></td>
                        <td align="center" width="15%"><label class="labelM">Compra S/.</label></td>
                        <td width="2%"></td>
                        <td align="center" width="15%"><label class="labelM">Venta S/.</label></td>
                        <td width="2%"></td>
                        <td align="center" width="15%"><label class="labelM">Ponderado Cierre</label></td>
                        <td width="4%"></td>
                    </tr>
                    <tr>
                        <td width="4%"></td>
                        <td align="center" width="15%"><input type="date" tabindex="1" onkeypress="return focosel(event,'textcompra')" class="imputM" style="text-align:right; width:142px; " name="textfech" id="textfech"></td>
                        <td width="2%"></td>
                        <td align="center" width="15%"><input type="text" tabindex="2" onkeypress="return focosel(event,'textventa')" class="imputM"  placeholder="0.0000" aria-describedby="basic-addon1" style="text-align:right" name="textcompra" id="textcompra"></td>
                        <td width="2%"></td>
                        <td align="center" width="15%"><input type="text"   tabindex="3"  onkeypress="foco(event,'fo5')" class="imputM" placeholder="0.0000" aria-describedby="basic-addon1" style="text-align:right" name="textventa" id="textventa"></td>
                        <td width="2%"></td>
                        <td align="center" width="15%"><input type="checkbox" class="imputM" style="width:18px; height:18px;" class="checkcie" id="checkcierre"></td>
                        <input id="yellow" name="yellow" type="hidden" />

                    </tr>
                </table>

   




<!-- grid -->
                    <table id="grid" border="2" align="center" >
                    <thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Fecha</th>
											<th class="text-center">Compra</th>
                                            <th class="text-center">Venta</th>
										</tr>
					</thead>
                    <tr>
                       <td>.......</td>
                        <td>.......</td>
                        <td>.......</td>
                        <td>.......</td>
                        
                    </tr>
                  </table>

 <!-- end grid -->

			 <div id="result" > 
                                
                 </div>                    
                 <table width="100%" border="0" >
                    <tr>
                        <td align="center" width="5%">
                            <div style="background-color: blue;width: 12px;height: 12px;" ></div>
                        </td>
                        <td  width="45%">
                            <label class="labelM">T.C. Prom Ponderado Cierre</label>
                        </td>
                        <td width="50%"></td>
                    </tr>
                </table>



				 <div class="row" style="margin-left:8px;">
                     <div class="col-xs-12">
                       <table border="0" align="center" width="100%">
                            <tr>
                                <td align="left" width="1%"><label class="labelM">Creacion:</label></td>
                                <td align="center" width="5%"><input type="text" class="imputf" placeholder="" aria-describedby="basic-addon1" style="font-family:'Arial Narrow';height:18px;text-align:center;font-size:12px;" name="textuser" id="textuser"></td>
                                <td style="width:0.2%"></td>
                                <td align="center" width="9%"><input type="text" class="imputp" placeholder="" aria-describedby="basic-addon1" style="height:18px;text-align:center;font-family:'Arial Narrow';font-size:12px;" name="textfecha" id="textfecha"></td>
                                <td width="1%" rowspan="3"></td>
                                <td align="center" width="25%" rowspan="2">
                                   <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" name="SUBA" class="btn btn-raised btn-primary" style="height:35px;font-size:8px;width:47px;" id="agregar" onclick="est_agregar()" ><div class="row"></div><div class="row"><img height="22px" src="images/ico/add24.png"></div>Nuevo</button>
                                    
									<button type="button" class="btn btn-raised btn-success"  style="height:35px;font-size:8px;width:47px;" id="editar"  onclick="est_editar()"><div class="row"><img height="22px"src="images/ico/edit24.png"></div>Modificar</button>
                                    <button type="button" class="btn btn-raised btn-warning" style="height:35px;font-size:8px;width:47px;" id="borrar"  onclick="$.confirm('¿Esta seguro de borrar el registro?', 'Mensaje del Sistema').done(function (){borrartc();})"><div class="row"></div><div class="row"><img height="22px" src="images/ico/delete24.png"></div>Borrar</button>
                                    <button type="button" class="btn btn-raised btn-warning"  style="height:35px;font-size:8px;width:47px;" id="cancelar" onclick="est_cancel()"><div class="row"><img  height="22px" src="images/ico/edit-not-validated24.png"></div>Cancelar</button>
                                    <button type="button" class="btn btn-raised btn-primary"  style="height:35px;font-size:8px;width:47px;" id="fo5"  onclick="$.confirm('¿Esta seguro de guardar el registro?', 'Mensaje del Sistema').done(function (){ savetc();})"><div class="row"><img  height="22px" src="images/ico/edit-validated24.png"></div>Grabar</button>
                                    <button type="button" class="btn btn-raised btn-info"  style="height:35px;font-size:8px;width:47px;" id="reporte" onClick=""><div class="row"><img height="22px" src="images/ico/Reports24.png"></div>Imprimir</button>
                                    <button type="button" align="center" class="btn btn-raised btn-default"  style="height:35px;font-size:8px;width:40px;"id="salir" onclick="$('#tipocambio').dialog('close');$('#modtc').val('0');" data-dismiss="modal"><div class="row"><img height="22px" src="images/ico/close24.png"></div>Salir</button>
                                    </div>
                                </td>
                            </tr>
                           
                            <tr id="foot">
                                 <td ><label class="labelM">Modificacion:</label></td>
                                 <td align="center" width="5%"><input type="text" align="center" class="imputf" placeholder="" aria-describedby="basic-addon1" style="height:18px;font-size:8px;text-align:center;font-family:'Arial Narrow';"  name="usuariom" id="usuariom"></td>
                                 <td  width="0%"></td>
                                 <td align="center" width="9%"><input type="text" align="center" class="imputp" placeholder="" aria-describedby="basic-addon1" style="height:18px;font-size:8px;text-align:center;font-size:12px;font-family:'Arial Narrow';" name="fecham" id="fecham"></td>              
                             </tr>
                        </table> 
                    </div>


                  </div>
				</div> 
                </div>
                </section>



                
	<!-- end area tipo cambio -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->

	<script>
		$.material.init();
	</script>

 </section>

	@endsection
    