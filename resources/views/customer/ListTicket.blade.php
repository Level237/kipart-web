@extends("layouts.backoffice.customer.main")

@section("title")
Listes des Tickets

@endsection

@section("content")
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Listes des Tickets</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><i class="zmdi zmdi-home"></i>Accueil</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        <li class="breadcrumb-item active">Listes des Tickets</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                        <table class="table table-hover c_table theme-color">
                            <thead>
                                <tr>
                                    <th>Nom Passager</th>
                                    <th>Numero de Place</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Depart</th>
                                    <th>Arrivée</th>
                                    <th>Classe</th>
                                    <th>Agence</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tickets as $datas)
                                    @forelse ($datas as $ticket)
                                        <tr>
                                            
                                            @foreach ($ticket->Passager as $passager)
                                                <td>{{ $passager->nom }}</td>
                                               
                                                <td>{{ $passager->seatNumber }}</td>
                                            @endforeach
                                           
                                            @foreach ($ticket->Voyage as $voyage)
                                                <td>{{ $voyage->date }}</td>
                                                <td>{{ $voyage->heure }}</td>
                                                <td>{{ $voyage->departure }}</td>
                                                <td>{{ $voyage->arrival}}</td>
                                                <td>{{ $voyage->classe}}</td>
                                                <td>{{ $voyage->agence}}</td>
                                            @endforeach
                                            <td>
                                                <a href="{{ route('display.ticket',$ticket->id) }}"><button class="btn btn-default btn-sm">  <i class="zmdi zmdi-eye"></i></button></a>
                                                <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                               
                                            </td>
                                        </tr>
                                    @empty
                                    <td>Aucun Ticket disponible</td>
                                    @endforelse
                                @endforeach
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection