@extends('layouts.app')
@section('content')
	 <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-2 col-md-3" >
                <div class="container filter">
                    <div class="filter-head">
                        <h3>Servicios</h3>
                        <a class="btn-filter" id="btn-filter" role="button" aria-expanded="false"
                            aria-controls="collapseExample">
                            Filtrar   <span class="icon-filter"> </span>
                        </a>
                        
                    </div>
                    <div class="filter-content">
                        <ul class="nav flex-column" >
                                <a class="" href="#" style="color: white;">Active</a>
                                <a class="" href="#" style="color: white;">Link</a>
                                <a class="" href="#" style="color: white;">Link</a>
                                <a class="" href="#" style="color: white;">Disabled</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card border-orange">
                                <div class="card-header txt-white bg-orange border-orange">Herrero</div>
                                <div class="card-body text-bluedark">
                                    <h5 class="card-title">Nombre de la empresa</h5>
                                    <p class="card-text">Descripcion
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-warning">
                                    <a class="btn-footer" href="#"><span class="icon-whatsapp"></span></a>
                                    <a class="btn-footer" href="#"><span class="icon-telegram"></span></a>
                                    <a class="btn-footer" href="#"><span class="icon-facebook2"></span></a>
                                    <a class="btn-footer" href="#"><span class="icon-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card border-orange">
                                <div class="card-header txt-white bg-orange border-orange">Header</div>
                                <div class="card-body text-bluedark">
                                    <h5 class="card-title">Success card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-warning">Footer</div>
                            </div>
                        </div>
                
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card border-orange">
                                <div class="card-header txt-white bg-orange border-orange">Header</div>
                                <div class="card-body text-bluedark">
                                    <h5 class="card-title">Success card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-warning">Footer</div>
                            </div>
                        </div>
                
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card border-orange">
                                <div class="card-header txt-white bg-orange border-orange">Header</div>
                                <div class="card-body text-bluedark">
                                    <h5 class="card-title">Success card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-warning">Footer</div>
                            </div>
                        </div>
                    </div>
                    <!--Paginacion-->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection