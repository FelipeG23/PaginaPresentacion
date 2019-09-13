@extends('layout.body')

@section("contenido")
<div class="section  ">
			
            <div class="container">
				
				
				
                <!--Main Slider Content Start-->
                <div class="container-fluid">
					<div class="isotope-filter">
						<button data-filter="*" class="is-checked">Todos</button>
						<button data-filter=".javaee" class="">Java EE</button>
						<button data-filter=".javaSt" class="">Java Stand Alone</button>
						<button data-filter=".forks" class="">Forks</button>
						<button data-filter=".laravel" class="">Laravel</button>
					</div>
					
					
                    <div class="isotope-grid row mbn-30" style="position: relative; height: 1028.86px;">

                    <!--Resizer Start-->
                    <div class="resizer col-1"></div>
                    <!--Resizer End-->
	
					
	
	
                    <!--Portfolio Start-->
                    <div class="isotope-item javaee col-lg-4 col-sm-6 col-12 mb-30" style="position: absolute; left: 0px; top: 0px;">
                        <a href="https://github.com/FelipeG23/AsignacionSalones" target="_blank" class="portfolio">
                            <img src="img/AsignacionSalones.jpg" alt="">
                            <div class="content">
                                <h4 class="title">Proyecto</h4>
                                <span class="category">Asignación de Salones</span>
                            </div>
                        </a>
                    </div>
                    <!--Portfolio End-->
					
					<!--Portfolio Start-->
                    <div class="isotope-item javaSt col-lg-4 col-sm-6 col-12 mb-30" style="position: absolute; left: 0px; top: 0px;">
                        <a href="https://github.com/FelipeG23/Algebra" target="_blank" class="portfolio">
                            <img src="img/Algebra.jpg" alt="">
                            <div class="content">
                                <h4 class="title">Proyecto</h4>
                                <span class="category">Juego De Matrices - Algebra Lineal</span>
                            </div>
                        </a>
                    </div>
                    <!--Portfolio End-->
					<!--Portfolio Start-->
                    <div class="isotope-item javaSt col-lg-4 col-sm-6 col-12 mb-30" style="position: absolute; left: 0px; top: 0px;">
                        <a href="https://github.com/FelipeG23/ArbolGenealogico" target="_blank" class="portfolio">
                            <img src="img/Arbol.jpg" alt="">
                            <div class="content">
                                <h4 class="title">Proyecto</h4>
                                <span class="category">Recrear un árbol genealogico - Mediante Árboles Logicos</span>
                            </div>
                        </a>
                    </div>
                    <!--Portfolio End-->
					<!--Portfolio Start-->
                    <div class="isotope-item forks col-lg-4 col-sm-6 col-12 mb-30" style="position: absolute; left: 0px; top: 0px;">
                        <a href="https://github.com/FelipeG23/msgraph-sdk-javascript" target="_blank" class="portfolio">
                            <img src="img/Graphs.jpg" alt="">
                            <div class="content">
                                <h4 class="title">Fork</h4>
                                <span class="category">Microsoft Graph client</span>
                            </div>
                        </a>
                    </div>
                    <!--Portfolio End-->
					<div class="isotope-item forks col-lg-4 col-sm-6 col-12 mb-30" style="position: absolute; left: 0px; top: 0px;">
                        <a href="https://github.com/FelipeG23/colombia-holidays" target="_blank" class="portfolio">
                            <img src="img/Colombia.jpg" alt="">
                            <div class="content">
                                <h4 class="title">Fork</h4>
                                <span class="category">Calculo de Días Festivos en Colombia</span>
                            </div>
                        </a>
                    </div>
                    <!--Portfolio End--><!--Portfolio End-->
					<div class="isotope-item laravel col-lg-4 col-sm-6 col-12 mb-30" style="position: absolute; left: 0px; top: 0px;">
                        <a href="https://github.com/FelipeG23/PaginaPresentacion" target="_blank" class="portfolio">
                            <img src="img/laravel.png" alt="">
                            <div class="content">
                                <h4 class="title">Proyecto</h4>
                                <span class="category">Mi propia página hecha en Laravel</span>
                            </div>
                        </a>
                    </div>
                    <!--Portfolio End-->

                   
                </div>
              </div>
                    
                </div>
                <!--Main Slider Content End-->

            </div>
        </div>
		
@endsection