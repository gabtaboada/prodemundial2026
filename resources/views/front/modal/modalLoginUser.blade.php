<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">


					<button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="margin-top:-20px;"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="../FrontImages/logogrande.png" alt=" " class="img-responsive" />
						<div class="contact-form">
								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" id="tokenLogin"/>
								<div>
									<span><label>Mail</label></span>
									<span>
										<input name="userName" type="text" class="textbox" required="">
									</span>
								</div>
								<div>
									<span><label>Contraseña</label></span>	
									<span>
										<input name="userName" type="password" class="textbox" required="">
									</span>
								</div>
							    <div>
									<span>
										<input type="submit" value="Ingresar" class="myButton" id="EnviarLogin">
									</span>
							    </div>								

						</div>		
						<div class="contact-form">
							<div>
								<span><label><a href="" style="text-decoration:none;">¿Olvidaste tu contraseña?</a></label></span>	
							</div>
							<div>
								<span><label><a href="" style="text-decoration:none;">Crear usuario</a></label></span>	
							</div>							
						</div>
						

						
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 