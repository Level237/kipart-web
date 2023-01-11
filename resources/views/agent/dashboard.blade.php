@extends('layouts.backoffice.agent.main-agent')
@section('title')
Dashboard::agent
@endsection
@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>{{ $detailSubAgency['name']}}</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i> Agence</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon traffic">
                    <div class="body">
                        <h6>Bus</h6>
                        <h2>{{ $countResource['numberOfBus'] }} <small class="info">Bus</small></h2>
                        <small>2% de plus que hier</small>
                        <div class="progress">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 2%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2">
                    <div class="body">
                        <h6>Trajet Favori</h6>
                        <h5>Douala-Yaoundé</h5>
                        <small>6% superieur a hier</small>
                        <div class="progress">
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 6%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon email">
                    <div class="body">
                        <h6>Reservation</h6>
                        <h2>39 <small class="info">Reservation</small></h2>
                        <small>50% de plus que hier</small>
                        <div class="progress">
                            <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon domains">
                    <div class="body">
                        <h6>Tickets</h6>
                        <h2>{{ $countResource['ticket'] }} <small class="info">vendus</small></h2>
                        <small>20% de plus que hier</small>
                        <div class="progress big_icon domains">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->

    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Tickets Recent</h2>

                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>{{ $countResource['total'] }}</h5>
                                <span>Total Tickets</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#FFC107">5,2,3,7,6,4,8,1</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>365</h5>
                                <span>Validé</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#46b6fe">8,2,6,5,1,4,4,3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>65</h5>
                                <span>En Attente</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#ee2558">4,4,3,9,2,1,5,7</div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>2,055</h5>
                                <span>Renvoyer</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#04BE5B">7,5,3,8,4,6,2,9</div>
                        </div>
                    </div>
                </div> --}}
            </div>
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
                                    @foreach ($datas as $tickets)
                                        @foreach ($tickets as $ticket)
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


                                        @endforeach
                                    @endforeach


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
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="row clearfix">


            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="chat-widget">
                            <ul class="list-unstyled">
                                <li class="left">
                                    <img src="" class="rounded-circle" alt="">
                                    <ul class="list-unstyled chat_info">
                                        <li><small>Buca 11:00AM</small></li>
                                        <li><span class="message bg-blue">Hello, Kipart</span></li>
                                        <li><span class="message bg-blue">Bonjour</span></li>
                                    </ul>
                                </li>
                                <li class="right">

                                    <ul class="list-unstyled chat_info">
                                        <li><small>11:10AM</small></li>
                                        <li><span class="message">Hello, Buca</span></li>
                                    </ul>
                                    <img src="{{ asset('admin/assets/images/kipart.png') }}" class="rounded-circle" alt="">
                                </li>
                                <li class="right">
                                    <ul class="list-unstyled chat_info">
                                        <li><small>11:11AM</small></li>
                                        <li><span class="message">Bonjour a vous</span></li>
                                    </ul>
                                </li>
                                <li class="left">
                                    <img src="{{ asset('admin/assets/images/buca.jpg') }}" class="rounded-circle" alt="">
                                    <ul class="list-unstyled chat_info">
                                        <li><small>Buca 11:13AM</small></li>
                                        <li><span class="message bg-blue">Merci de nous faire parvenir votre liste de passagers pour le voyage VIP de 17h45</span></li>
                                    </ul>
                                </li>
                                <li class="left">
                                    <li class="right">

                                        <ul class="list-unstyled chat_info">
                                        <li><small>KiPART 11:14AM</small></li>
                                        <li><span class="message">D'accord</span></li>
                                        <li><span class="message ">Nous vous envoyons toute de suite</span></li>
                                        <li><span class="message ">Merci!</span></li>
                                        <img src="{{ asset('admin/assets/images/kipart.png') }}" class="rounded-circle" alt="">
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Tim Hank</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Hossein Shams</a>
                                    <a class="dropdown-item" href="javascript:void(0);">John Smith</a>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter text here..." aria-label="Text input with dropdown button">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-mail-send"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
@endsection
