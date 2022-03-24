@extends('admin.layouts.master')
@section('title', 'Sınıf Düzenle')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sınıf Bilgileri Düzeneme</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Sınıf Düzenle</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sınıf</h3>
                        </div>
                        <div class="card-body">
                            <!-- Date -->
                            <form class="form-group-lg"  action="{{ route('sinif-duzenle') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>ID:</label>
                                    <input type="number" name="id" value="{{ $sinif->id }}" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>Şehir:</label>
                                    <input type="text" name="sinav_ili" value="{{ $sinif->sinav_ili }}" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>Üniversite:</label>
                                    <input type="text" name="universite" value="{{ $sinif->universite }}" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>Fakulte:</label>
                                    <input type="text" name="fakulte" value="{{ $sinif->fakulte }}" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>Sınıf:</label>
                                    <input type="text" name="sinif" value="{{ $sinif->sinif }}" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>Kapasite:</label>
                                    <input type="number" name="kapasite" value="{{ $sinif->kapasite }}" class="form-control"/>
                                </div>

                                <div class="form-group d-flex justify-content-end mt-lg-5">
                                    <button type="submit" class="btn btn-block btn-primary w-25">Kaydet</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </section>
@endsection
