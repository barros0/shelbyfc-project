@extends('layouts.email')

@section('title','Recebemos o teu contacto')

@section('content')

    <div class="u-row-container" style="padding: 0px;background-color: transparent">
        <div class="u-row"
             style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
            <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <table>
                    <tr>
                        <td style="padding: 0px;background-color: transparent;" align="center">
                            <table style="width:600px;">
                                <tr style="background-color: #ffffff;">

                                    <td align="center" width="600"
                                        style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"
                                        valign="top">
                                        <div class="u-col u-col-100"
                                             style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                            <div style="height: 100%;width: 100% !important;">

                                                <div
                                                    style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">


                                                    <table style="font-family:'Lato',sans-serif;" role="presentation">
                                                        <tbody>
                                                        <tr>
                                                            <td style="overflow-wrap:break-word;word-break:break-word;padding:40px 40px 30px;font-family:'Lato',sans-serif;"
                                                                align="left">

                                                                <div
                                                                    style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                                                    <p style="font-size: 14px; line-height: 140%;"><span
                                                                            style="font-size: 18px; line-height: 25.2px; color: #666666;">Olá, {{$contact->name}}</span>
                                                                    </p>
                                                                    <p style="font-size: 14px; line-height: 140%;">
                                                                        &nbsp;</p>
                                                                    <p style="font-size: 14px; line-height: 140%;"><span
                                                                            style="font-size: 18px; line-height: 25.2px; color: #666666;">Foi enviado um novo contacto a partir do website.</span>
                                                                    </p>
                                                                    <p style="font-size: 14px; line-height: 140%;">
                                                                        &nbsp;</p>
                                                                    <p style="font-size: 14px; line-height: 140%;"><span
                                                                            style="font-size: 18px; line-height: 25.2px; color: #666666;">Podes verificar na administração: </span>
                                                                    </p>
                                                                    <p>
                                                                        Nome: {{$contact->name}}</p>
                                                                    <p>
                                                                        Email: {{$contact->email}}</p>
                                                                    <p>
                                                                        Telefone: {{$contact->phone}}</p>
                                                                    <p>
                                                                        Assunto: {{$contact->subject}}</p>
                                                                    <p>
                                                                        Mensagem: {{$contact->message}}</p>

                                                                    <br>
                                                                    ás: {{$contact->created_at}}
                                                                    </p>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
