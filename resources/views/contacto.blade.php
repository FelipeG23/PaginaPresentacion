@include('layout.menu')
@yield('section')

<div class="container">
                <div class="row mbn-40">

                    <!--Contact Info Wrapper Start-->
                    <div class="col-12 mb-40">
                        <div class="row mbn-20">

                            <!--Contact Info Start-->
                            <div class="contact-info col-md-4 col-12 mb-20">
                                <h5 class="title">Visítame:</h5>
                                <p class="info h4">Cl. 32 #16-64, Bogotá</p>
                            </div>
                            <!--Contact Info End-->

                            <!--Contact Info Start-->
                            <div class="contact-info col-md-4 col-12 mb-20">
                                <h5 class="title">Llámame:</h5>
                                <p class="info h4">+57 314 397 9659</p>
                            </div>
                            <!--Contact Info End-->

                            <!--Contact Info Start-->
                            <div class="contact-info col-md-4 col-12 mb-20">
                                <h5 class="title">Conectémonos:</h5>
                                <p class="info info-social">
                                    <a href="https://www.facebook.com/felipegonzalez09" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/_Moscas" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/felipe-gonzalez-3931b0170" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="https://github.com/FelipeG23" title="Github"><i class="fa fa-github"></i></a>
                                </p>
                            </div>
                            <!--Contact Info End-->

                        </div>
                    </div>
                    <!--Contact Info Wrapper End-->

                    <!--Contact Form & Map Wrapper Start-->
                    <div class="col-12 mb-40">
                        <div class="row mbn-30">

                            <!--Contact Form Start-->
                            <div class="contact-form col-lg-7 col-12 mb-30">
                                <h4 class="title mb-15">Déjame un mensaje</h4>
                                <form id="formularioContacto" method="GET">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="GET">

								@method('GET')

                                    <div class="row mbn-20">
                                        <div class="col-sm-6 col-12 mb-20">
                                            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                                        </div>
                                        <div class="col-sm-6 col-12 mb-20">
                                            <input type="email" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-6 col-12 mb-20">
                                            <input type="tel" id="telefono" name="phone" placeholder="Telefono">
                                        </div>
                                        <div class="col-sm-6 col-12 mb-20">
                                            <input type="text" id="asunto" name="asunto" placeholder="Asunto">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input type="submit" value="Enviar" class="btn">
                                        </div>
                                    </div>
									<div id='texto_notificacion'>
									</div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
							<br/>
                            <!--Contact Form End-->

                            <!--Contact Map Start-->
                            <div class="contact-map col-lg-5 col-12 mb-30">
                                <h4 class="title mb-15">Buscame en la universidad</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.849459502934!2d-74.07456058573682!3d4.620933243631944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9983e91aa633%3A0x171936456e1c4821!2sUnipanamericana%20-%20sede%20Sin%C3%BA!5e0!3m2!1ses-419!2sco!4v1568174607126!5m2!1ses-419!2sco" width="550" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                            <!--Contact Map End-->

                        </div>
                    </div>
                    <!--Contact Form & Map Wrapper End-->

                </div>
            </div>
	<script src="../resources/js/envioCorreo.js"></script>
			
@include('layout.footer')

