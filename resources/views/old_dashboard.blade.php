@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    {{-- <!-- Content Header (Page header) --> --}}
    <div class="content-header">
        <div class="container-fluid">

            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>{{-- <!-- /.col --> --}}


        </div>{{-- <!-- /.container-fluid --> --}}
    </div>
    {{-- <!-- /.content-header --> --}}

    {{-- <!-- Main content --> --}}
    <section class="content">
        <div class="container-fluid">

            {{-- <!-- Main row --> --}}
            <div class="row">
                {{--          @if($sessiondata)--}}

                {{--          @endif--}}
            </div>
            {{-- <!-- /.row (main row) --> --}}
        </div><!-- /.container-fluid -->
    </section>
    {{-- <!-- /.content --> --}}

@endsection

