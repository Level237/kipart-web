@extends('layouts.backoffice.agent.main-agent')
@section('title', 'Dashboard-Admin')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>{{ $detailAgency['name'] }}</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i> Agence</a></li>
                    <li class="breadcrumb-item active">Filter</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-6">
                <select class="form-control show-tick">
                    <option value="">-- Please select --</option>
                    <option value="10">Ticket Acheté Aujourdh'ui</option>
                    <option value="20">Ticket acheté hier</option>

                </select>
            </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary">Selectionner</button>
                </div>


        </div>
    </div>
</section>

@endsection
