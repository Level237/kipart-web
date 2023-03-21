@extends("layouts.backoffice.customer.main")

@section("title")
Ticket

@endsection

@section("content")



<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Detail Ticket</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Details Ticket</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href="profile-edit.html" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-edit"></i></a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="card mcard_3">
                    <div class="body">
                        @php
                            echo $response;
                        @endphp
                        @foreach($data as $tickets)
                            @foreach($tickets as $ticket)

                            @foreach($ticket->Voyage as $voyage)
                           
                                <h4 class="m-t-10">{{ $voyage->departure}} - {{  $voyage->arrival }}</h4>
                                <h5 class="m-t-10">{{ $voyage->date }}</h5>
                            @endforeach
                           
                            <div class="row">
                            <div class="col-12 mb-4">
                                
                                <a href="https://thememakker.com/" class="btn btn-success">Telecharger votre Ticket</a>
                            </div>

                            @foreach($ticket->Passager as $passager)
                                <div class="col-4">
                                    <small>Nom</small>
                                    <h5>{{ $passager->nom }}</h5>
                                </div>
                                <div class="col-4">
                                    <small>CNI</small>
                                    <h5>{{ $passager->cniNumber }}</h5>
                                </div>
                                <div class="col-4">
                                    <small>Telephone</small>
                                    <h5>{{ $passager->telephone }}</h5>
                                </div>
                            @endforeach
                           
                        </div>
                            @endforeach
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
