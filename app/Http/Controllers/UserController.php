<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function examDocument()
    {
        session_start();
        $students =  Student::where('kimlik_no', session('kimlik_no'))->get();
        $student = $students[0];
        return view('user.pages.exam-document', compact('student'));
    }

    public function document()
    {
        $students =  Student::where('kimlik_no', session('kimlik_no'))->get();
        $student = $students[0];

        $path = 'C:\laragon\www\graduation_project\public\img\image001.png';
        $path2 = 'C:\laragon\www\graduation_project\public\img\user5-128x128.jpg';
        $image = base64_encode(file_get_contents($path));
        $image2 = base64_encode(file_get_contents($path2));

        $dompdf = new Dompdf();
        $html = '
                <!DOCTYPE html>
                <html lang="tr">
                <head>
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <style>
                        *{
                            font-family: DejaVu Sans, sans-serif;
                            padding-top: 0;
                            padding-bottom: 0;
                        }

                        tr {
                        line-height: 6px;
                        }
                        td:last-child {
                        line-height: 2px;
                        }
                        tr{
                        font-size: 14px;
                        }
                  </style>
                </head>
                <body>
                    <table style="width: 700px" border="1" cellspacing="0" cellpadding="2" align="center">
                  <tbody>
                  <tr>
                    <td style="text-align: center;"><img width="80%" src="data:image/png;base64,' . $image . '" alt=""> </td>
                    <td style="text-align: center; line-height: 24px">
                      <p><strong>T.C. <br> HATAY MUSTAFA KEMAL <br> ÜNİVERSİTESİ <br> ULUSLARARASI ÖĞRENCİ SEÇME <br> VE YERLEŞTİRME SINAVI <br> (HMKÜYÖS-2022) <br> SINAV GİRİŞ BELGESİ</strong></p>
                    </td>
                    <td style="text-align: center; width: 200px">
                      <img width="100%" src="data:image/png;base64,' . $image2 . '" alt="">
                    </td>
                  </tr>

                  <tr>
                    <td><p><strong>Aday Numarası </strong>/ Application <br><br><br> Number</p></td>
                    <td colspan="2" ><p>' . $student->aday_no .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>T.C. Kimlik/Y.U. Numarası </strong>/ <br><br><br> FR Number</p></td>
                    <td colspan="2" ><p>' . $student->kimlik_no .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>ADI ve SOYADI </strong>/ Name and <br><br><br> Surname</p></td>
                    <td colspan="2" ><p>' .  $student->ad . ' ' . $student->soyad .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>Baba Adı</strong>/Father name</p></td>
                    <td colspan="2" ><p>' . $student->baba_adi .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>Doğum Yeri</strong>/ Place of Birth</p></td>
                    <td colspan="2" ><p>' . $student->dogum_yeri .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>Doğum Tarihi </strong>/Date of Brith</p></td>
                    <td colspan="2" ><p>' . $student->dogum_tarihi .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>Uyruğu </strong>/ Nationalty</p></td>
                    <td colspan="2" ><p>' . $student->uyruk .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>SINAV İLİ /</strong>Exam Province</p></td>
                    <td colspan="2" ><p>' . $student->sinav_ili .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>SINAV YERİ /</strong>Exam Place</p></td>
                    <td colspan="2" ><p>' . $student->sinav_yeri .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>SINIF NO / </strong>Class Number</p></td>
                    <td colspan="2" ><p>' . $student->sinif .'</p></td>
                  </tr>

                  <tr>
                    <td><p><strong>SIRA NUMARASI / </strong>Seat <br><br><br> Number</p></td>
                    <td colspan="2" ><p>' . $student->sira .'</p></td>
                  </tr>
                  <tr>
                    <td><p><strong>SInav TARİHİ / </strong>EXAM <br><br><br> DATE / TİME</p></td>
                    <td colspan="2" ><p>21/06/2022   /  10:30</p></td>
                  </tr>

                  </tbody>
                </table>
                </body>
                </html>'

        ;
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('a4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return back()->with($dompdf->stream('HMKÜYÖS - 2022 SINAV GİRİŞ BELGESİ'));

    }
}
