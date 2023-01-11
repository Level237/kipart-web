@extends('layouts.backoffice.agent.main-agent')
@section('title')
Listes des Tickets
@endsection
@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>{{ $detailAgency['name'] }}</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i> Agence</a></li>
                    <li class="breadcrumb-item active">Tout les Tickets</li>
                </ul>
                @foreach ($datas as $tickets)
                                    @forelse ($tickets as $ticket)
                <a href="{{ route('agent.select-ticket') }}"><button class="btn btn-primary mt-4">Appliquer un filtre</button></a>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card project_list">
                    <div class="table-responsive">

                        <table class="table table-hover c_table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Numero de place</th>
                                    <th>Telephone</th>
                                    <th>Trajet</th>
                                    <th>Date</th>
                                    <th>heure</th>
                                    <th>Classe</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td><strong>{{ $ticket->name }}</strong></td>
                                        <td><a href="#" title="">{{ $ticket->seatNumber }}</a></td>
                                        <td>{{ $ticket->telephone }}</td>
                                        @foreach ($ticket->Voyage as $travel)
                                        <td>{{ $travel->departure }} - {{ $travel->arrival }}</td>


                                        <td>{{ $travel->date }}</td>

                                        <td>{{ $travel->heure }}</td>

                                        <td>{{ $travel->classe }}</td>
                                        {{--  <td><span class="badge badge-warning">en attente</span></td>  --}}
                                        @endforeach
                                    </tr>



                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination pagination-primary mt-4">
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                    </ul>
                    @empty
                   <div class="mt-5 text-center">
                    <p class="text-center" style="color: gray">Aucun Ticket Disponible</p>
                   </div>
                @endforelse




            @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
