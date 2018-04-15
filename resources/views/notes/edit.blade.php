@extends('layouts.app')

@section('content')

    <script type="text/javascript" src="{{ asset('assets/bower_components/ckeditor/ckeditor.js') }}"></script>
        
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-shopping-cart"></i> Courses</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="container">
        
        <div class="row"> 
            <form id="newEditForm" action="{{ route('update-course') }}" method="post">
                <input type="text" class="form-control" name="titreNote" id="titre" style="margin-bottom: 15px" placeholder="Titre de la note" />
                <textarea class="" placeholder="Tapez votre contenu ici" id="areaNote" name="contenuNote"></textarea> 
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <input type="hidden" name="idNote" id="idNote" value="{{ isset($note) ? $note->id : 0 }}" />
                <script>                
                    CKEDITOR.replace( 'areaNote' );
                </script>
                <button type="submit" name="addNote" class="form-control btn btn-warning Bold" style="color: black !important" >
                    <i class="fa fa-save"></i> Enregistrer
                </button>
            </form>
            
        </div>
        
        <div class="row col-md-12" style="margin-top: 30px">

            <!-- Affichage des alertes -->	
            @if(session()->has('info'))
                <div class="alert alert-success">{{ session('info') }}</div>
            @endif

            <div id="divIframe" style="margin-top: -25px">            
                <iframe class="hidden-lg" id="iframe" style="width: 100%; height: 230px; border: none"></iframe>
                <iframe class="hidden-xs hidden-sm hidden-md hidden-print" id="iframe" style="width: 90%; height: 230px; margin-left: 10px; margin-right: -10px; border: none"></iframe>
            </div>  

        </div>        
    </div>
@endsection