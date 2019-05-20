@extends('admin.app')
@section('admin_css')
 <link rel="stylesheet" type="text/css" href="{{ asset('public/css/admin.css') }}">
@endsection

	
@section('content')



@include('admin.partials.uppernav')


<div class="container-fluid">
  <div class="row">
    
    @include('admin.partials.sidenav')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <form method="POST" action="{{ route('admin.category.store') }}">
            <div class="container-fluid">
               <label><strong>Caegroy Create</strong></label>
              <div class="form-group ">
                <label>categories Title</label>
                <input type="text" name="title" class="form-control title">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control description" id="description" name="description" col="5"></textarea>
                
              </div>
              <div class="form-group">
                <label class="form-control-label">categories</label>
                 <select name="parent_id[]" class="form-control parent_id" multiple="multiple" id="parent_id">
                   <option value="0">Top Level</option>
                   @if($categories)
                   @foreach($categories as $category)
                   <option value="{{ $category->id }}">{{ $category->title }}</option>
                   @endforeach
                   @endif
                 </select>

              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Create Category" class="btn btn-info">
              </div>
              
            </div>
        </form>
    </main>
  </div>
</div>
@endsection  

@section('admin_js')

<script type="text/javascript">
$(document).ready(function() {
  ClassicEditor
        .create( document.querySelector( '#description' ) )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( err => {
            console.error( err.stack );
        } );

});
</script>
@endsection 