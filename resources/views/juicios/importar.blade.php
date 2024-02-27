@extends('theme.app')
@section('content')
<section id="services" class="services mt-5">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="section-header mt-5">
        <h2>Importar Datos <i class="bi bi-collection-play-fill"></i></h2>
        <p class="fw-semibold">Aquí podra descargar la plantilla en excel de los datos requeridos de los archivos PE-04 y Juicios Evaluactivos e Importar estos datos para llenar y actualizar los reportes de cada Programa de Formación.</p>
      </div>
    </div>
</section>

<main id="main">
    <section id="featured-services" class="featured-services mb-5">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-xxl-4 col-xl-5 col-md-6 d-flex" data-aos="zoom-out">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-database-fill-up"></i></div>
                        <h4>Importar Datos PE-04</h4>
                        <p class="fw-semibold">
                            <a href="{{asset('template/Template_Programas_PE04.xlsx')}}">
                                Descargar Aquí <i class="bi bi-file-earmark-arrow-down-fill"></i></a>
                        </p>
                        <form action="" method="post" role="form" enctype="multipart/form-data"
                        class="row needs-validation py-3 px-2" novalidate>
                            @csrf
                            <input type="file" name="pe04" id="pe04" class="form-control border-2 shadow-sm" accept=".xlsx" required>
                            <div class="invalid-feedback fw-semibold">
                                <i class="bi bi-exclamation-circle-fill"></i>
                                Se requiere el archivo excel para poder generar la importación
                            </div>

                            <button type="submit" class="btn cta-btn shadow-sm">Importar Datos <i class="bi bi-cloud-upload"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-database-fill-up"></i></div>
                        <h4>Importar Datos Juicios Evaluativos</h4>
                        <p class="fw-semibold">
                            Descargar plantilla excel para organizar los datos requeridos de los Juicios Evaluativos
                            <a href="{{asset('')}}">
                                Descargar Aquí <i class="bi bi-file-earmark-arrow-down-fill"></i></a>
                        </p>
                        <form action="{{route('juicio.import')}}" method="post" role="form" enctype="multipart/form-data"
                        class="row needs-validation py-3 px-2" novalidate>
                            @csrf
                            <input type="file" multiple name="juiciosEvaluativos[]" id="juiciosEvaluativos" class="form-control border-2 shadow-sm" required accept=".xls , .xlsx">
                            <div class="invalid-feedback fw-semibold">
                                <i class="bi bi-exclamation-circle-fill"></i>
                                Se requiere el archivo excel para poder generar la importación
                            </div>

                            <button type="submit" class="btn cta-btn shadow-sm">Importar Datos <i class="bi bi-cloud-upload"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
 @if (isset($errors) && $errors->any())
   <script>
       Swal.fire({
            icon: 'error',
            title: 'Error al Importar',
            text: 'Los datos o columnas no coinciden con el formato',
        })
   </script>
@elseif ($message = Session::get('success')){
    <script>
        Swal.fire('Proceso finalizado correctamente!')
    </script>
}
@endif 
@endsection
