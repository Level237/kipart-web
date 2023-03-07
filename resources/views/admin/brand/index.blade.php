@extends('layouts.backoffice.admin.main-admin')
@section('title')
Listes des BrandGirls
@endsection
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Brand</strong> Girls</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover c_table">
                                <thead>
                                    <tr>

                                        <th>Nom</th>
                                        <th>Nombre d'Utilisateurs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas->brandGirls as $brand)
                                        <tr>

                                            <td><span class="list-name">{{ $brand->nameB }}</span>
                                                {{-- <span class="text-muted">Florida, United States</span> --}}
                                            </td>

                                            <td>
                                                <span class="badge badge-success">{{ $brand->count }}</span>
                                            </td>
                                        </tr>
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
