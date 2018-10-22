@extends ('myLayouts.master')
@extends ('myLayouts.styles')

<!-- @section('edits')
<style type="text/css">
  background-color:powderblue;
</style>
@endsection -->


@section('content')
      <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('material-kit-html-v2.0.4/assets/img/bg2.jpg') }}'">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="brand text-center">
                <h1>Your title here</h1>
                <h3 class="title text-center">Subtitle</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main main-raised">
        <div class="container">
          <div class="section text-center">
            <h2 class="title">Your main section here</h2>
          </div>
        </div>
      </div>
@endsection
