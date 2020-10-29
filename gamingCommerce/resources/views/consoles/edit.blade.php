@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Consoles
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($consoles, ['route' => ['consoles.update', $consoles->id], 'method' => 'patch']) !!}

                        @include('consoles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection