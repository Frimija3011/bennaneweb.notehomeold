@extends('layouts.app')

@section('content')

<!--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
        
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-shopping-cart"></i> Courses</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="container">
        
        <div class="row"> 
            @if (sizeof($all_notes) > 0)
            <a class="btn btn-warning" href="{{ route('new-course') }}" >Nouvelle note</a>
                <table class="table">
                    <thead>
                      <tr>
                          <th style="width: 40%">Titre</th>
                          <th style="width: 25%">M.A.J</th>
                          <th style="width: 35%">Partage</th>
                      </tr>
                    </thead>
                    <tbody style="background-color: {{ $category->couleur_category }}; color: black;">
                        @foreach ($all_notes as $note)
                            <tr>
                                <input type="hidden" name="idNote" value="{{ $note->id }}" />
                                <td><a href="{{ route('detail-course', ['id' => $note->id]) }}">{{ $note->titre }}</a></td>
                                <td><median><i class="fa fa-calendar"></i> {{ $note->updated_at ? date('d/m/Y', strtotime($note->updated_at)) : 'Aucune' }} <i class="fa fa-clock-o"></i> 
                                    <strong>{{ $note->updated_at ? date('H:i', strtotime($note->updated_at)) : ' modification' }}</strong></median></td>
                                <td>
                                  @foreach($partages as $partage)
                                      @if ($partage == $note->id)
                                          <span style="font-size: medium">
                                              <i class="fa fa-users" style="font-size: medium"></i>
                                          </span>
                                      @endif
                                  @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
              </table>
            @else
                <a class="btn btn-warning" href="{{ route('new-course') }}" >Nouvelle note</a>
            @endif
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