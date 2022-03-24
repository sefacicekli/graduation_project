@extends('user.layouts.master')
@section('title', 'Import')
@section('head')
    <style>
        <!--
        /* Font Definitions */
        @font-face {
            font-family: "Cambria Math";
            panose-1: 2 4 5 3 5 4 6 3 2 4;
        }

        @font-face {
            font-family: Tahoma;
            panose-1: 2 11 6 4 3 5 4 4 2 4;
        }

        @font-face {
            font-family: "Segoe UI";
            panose-1: 2 11 5 2 4 2 4 2 2 3;
        }

        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal {
            margin: 0in;
            font-size: 12.0pt;
            font-family: "Times New Roman", serif;
        }

        span.Gvdemetni27ptKaln {
            mso-style-name: "Gövde metni \(2\) + 7 pt\.Kalın";
            font-family: "Tahoma", sans-serif;
            font-variant: normal !important;
            color: black;
            position: relative;
            top: 0pt;
            letter-spacing: 0pt;
            font-weight: bold;
            font-style: normal;
            text-decoration: none;
        }

        span.Gvdemetni2 {
            mso-style-name: "Gövde metni \(2\)_";
            mso-style-link: "Gövde metni \(2\)";
            font-family: "Tahoma", sans-serif;
            background: white;
        }

        p.Gvdemetni20, li.Gvdemetni20, div.Gvdemetni20 {
            mso-style-name: "Gövde metni \(2\)";
            mso-style-link: "Gövde metni \(2\)_";
            margin: 0in;
            text-indent: -44.0pt;
            line-height: 11.5pt;
            background: white;
            font-size: 9.5pt;
            font-family: "Tahoma", sans-serif;
        }

        @page WordSection1 {
            size: 595.3pt 841.9pt;
            margin: 70.9pt 70.9pt 70.9pt 70.9pt;
        }

        div.WordSection1 {
            page: WordSection1;
        }

        -->
    </style>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Import Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user') }}">Home</a></li>
                        <li class="breadcrumb-item active">Import Form</li>
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
                <div class="col-12">
                    <div class="card" style="background-color: #fffffc;">
                        <div class="card-header">
                            Import Excel
                        </div>
                        <a href="{{ route('documentsExam') }}" style="cursor: pointer; position: absolute; top: 80px; right: 28px; padding-left: 50px; line-height: 43px; z-index: 100;">
                            <i class="fa fa-print nav-icon" style="font-size: 30px  "></i>
                        </a>
                        <div id="data" class="card-body d-flex justify-content-center" style="height: 825px;">
                            <table id="simple_table" style="float: left;border-collapse:collapse;border:none;margin-left:4.8pt;margin-right: 4.8pt;">
                                <tbody>
                                <tr>
                                    <td class="text-center" style="width:160.65pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:127.25pt;">
                                        <img class="" src="{{ asset('img/image001.png') }}" alt="">
                                    </td>
                                    <td style="width:209.95pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:127.25pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><span style="font-size:15px;">T.C.</span></strong></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><span style="font-size:15px;">HATAY MUSTAFA KEMAL &Uuml;NİVERSİTESİ</span></strong></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><span style="font-size:15px;">ULUSLARARASI &Ouml;ĞRENCİ SE&Ccedil;ME VE YERLEŞTİRME SINAVI&nbsp;</span></strong></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><span style="font-size:15px;">(HMK&Uuml;Y&Ouml;S-2022)</span></strong></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><span style="font-size:15px;">SINAV GİRİŞ BELGESİ</span></strong></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><span style="font-size:13px;">&nbsp;</span></p>
                                    </td>
                                    <td style="text-align: center;width:140.05pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:127.25pt;">
                                        <img src="{{ asset('img/user5-128x128.jpg') }}" alt="">
                                    </td>
                                </tr>
                                    <tr>
                                        <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                            <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">Aday Numarası&nbsp;</span></strong><span style="font-size:13px;">/ Application Number</span></p>
                                        </td>
                                        <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                            <p style='margin:0cm;text-indent:0cm;line-height:normal;background:  transparent;font-size:13px;font-family:"Tahoma",sans-serif;'><span style='font-family:"Tahoma",sans-serif;color:black;font-weight:bold;font-style:normal;text-decoration:none;'><span style='font-size:13px;font-family:"Times New Roman",serif;font-weight:normal;'>{{$student->aday_no}}</span></span></p>
                                        </td>
                                    </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">T.C. Kimlik/Y.U. Numarası&nbsp;</span></strong><span style="font-size:13px;">/ FR Number</span></p>
                                    </td>
                                        <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                            <p style='margin:0cm;text-indent:0cm;line-height:normal;background:  transparent;font-size:13px;font-family:"Tahoma",sans-serif;'><span style='font-family:"Tahoma",sans-serif;color:black;font-weight:bold;font-style:normal;text-decoration:none;'><span style='font-size:13px;font-family:"Times New Roman",serif;font-weight:normal;'>{{ $student->kimlik_no }}</span></span></p>
                                        </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">ADI &nbsp;ve SOYADI&nbsp;</span></strong><span style="font-size:13px;">/ Name and Surname</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:297.25pt;'><span style="font-size:13px;">&nbsp;</span></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Tahoma",sans-serif;color:black;font-weight:bold;font-style:normal;text-decoration:none;'><span style="font-size:13px;font-weight:normal;">{{ $student->ad }} {{ $student->soyad }}</span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">Baba Adı</span></strong><span style="font-size:13px;">/Father name</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Tahoma",sans-serif;color:black;font-weight:bold;font-style:normal;text-decoration:none;'><span style="font-size:13px;font-weight:normal;">{{ $student->baba_adi }}</span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">Doğum Yeri</span></strong><span style="font-size:13px;">/ Place of Birth</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Tahoma",sans-serif;color:black;font-weight:bold;font-style:normal;text-decoration:none;'><span style="font-size:13px;font-weight:normal;">{{ $student->dogum_yeri }}&nbsp;</span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">Doğum Tarihi&nbsp;</span></strong><span style="font-size:13px;">/Date of Brith</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Tahoma",sans-serif;color:black;font-weight:bold;font-style:normal;text-decoration:none;'><span style="font-size:13px;font-weight:normal;">{{ $student->dogum_tarihi }}</span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">Uyruğu&nbsp;</span></strong><span style="font-size:13px;">/ Nationalty</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Tahoma",sans-serif;color:black;font-weight:bold;font-style:normal;text-decoration:none;'><span style="font-size:13px;font-weight:normal;">{{ $student->uyruk }}</span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">SINAV İLİ &nbsp;/</span></strong><span style="font-size:13px;">Exam Province</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size:13px;">&nbsp;</span></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size:13px;">{{ $student->sinav_ili }}</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">SINAV YERİ /</span></strong><span style="font-size:13px;">Exam Place</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size:13px;">&nbsp;</span></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size:13px;">{{ $student->sinav_yeri }}</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">SINIF NO /&nbsp;</span></strong><span style="font-size:13px;">Class Number</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:278.5pt;'><span style="font-size:13px;">&nbsp;</span></p>
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size:13px;">{{ $student->sinif }}</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">SIRA NUMARASI /&nbsp;</span></strong><span style="font-size:13px;">Seat Number</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size:13px;">{{ $student->sira }}</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:160.65pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:13px;">SINAV TARİHİ/ SAATİ&nbsp;</span></strong><span style="font-size:13px;">Exam Date / Time</span></p>
                                    </td>
                                    <td colspan="2" style="width:350.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.1pt;">
                                        <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size:13px;">21/06/2022 &nbsp; / &nbsp; &nbsp; &nbsp; 10:30</span></p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </section>
@endsection

