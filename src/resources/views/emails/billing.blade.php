<!DOCTYPE html>
<html style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Заказ с сайта</title>

    <style type="text/css">
        img {
            max-width: 100%;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100%;
            line-height: 1.6em;
        }

        body {
            background-color: #f6f6f6;
        }

        @media only screen and (max-width: 840px) {
            body {
                padding: 0 !important;
            }

            h1 {
                font-weight: 800 !important;
                margin: 20px 0 5px !important;
            }

            h2 {
                font-weight: 800 !important;
                margin: 20px 0 5px !important;
            }

            h3 {
                font-weight: 800 !important;
                margin: 20px 0 5px !important;
            }

            h4 {
                font-weight: 800 !important;
                margin: 20px 0 5px !important;
            }

            h1 {
                font-size: 22px !important;
            }

            h2 {
                font-size: 18px !important;
            }

            h3 {
                font-size: 16px !important;
            }

            .container {
                padding: 0 !important;
                width: 100% !important;
            }

            .content {
                padding: 0 !important;
            }

            .content-wrap {
                padding: 5px !important;
            }

            .invoice {
                width: 100% !important;
            }
        }
    </style>
</head>

<body itemscope itemtype="http://schema.org/EmailMessage"
      style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;"
      bgcolor="#f6f6f6">

<table class="body-wrap"
       style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; width: 100%; background-color: #f6f6f6; margin: 0;"
       bgcolor="#f6f6f6">
    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; margin: 0;"
            valign="top"></td>
        <td class="container" width="600"
            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
            valign="top">
            <div class="content"
                 style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; max-width: 800px; display: block; margin: 0 auto; padding: 15px;">
                <table class="main" width="100%" cellpadding="0" cellspacing="0"
                       style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;"
                       bgcolor="#fff">
                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                        <td class="content-wrap aligncenter"
                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; text-align: center; margin: 0; padding: 5px;"
                            align="center" valign="top">
                            <table width="100%" cellpadding="0" cellspacing="0"
                                   style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; margin: 0; padding: 0 0 20px;"
                                        valign="top">
                                        <h3 class="aligncenter"
                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,'Lucida Grande',sans-serif; box-sizing: border-box; font-size: 32px; color: #000; line-height: 1.2em; font-weight: 500; text-align: center; margin: 40px 0 0;"
                                            align="center">ЗАКАЗ от {{ $request->date }}</h3>
                                    </td>
                                </tr>
                                {{-- <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; margin: 0; padding: 0 0 20px;"
                                        valign="top">
                                        <h2 class="aligncenter"
                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,'Lucida Grande',sans-serif; box-sizing: border-box; font-size: 24px; color: #000; line-height: 1.2em; font-weight: 400; text-align: center; margin: 40px 0 0;"
                                            align="left">
                                           {{ $request->date }}
                                        </h2>
                                    </td>
                                </tr> --}}
                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                                    <td class="content-block aligncenter"
                                        style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;"
                                        align="center" valign="top">
                                        <table class="invoice"
                                               style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; text-align: left; width: 95%; margin: 1px auto;">
                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; margin: 0; padding: 5px 0;"
                                                    valign="top">
                                                    <br style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;"/>
{{--                                                    Дата - {{$row['created_at']}}<br>--}}



                                                    Имя - {{$request->information['name']}} <br>
                                                    Телефон - {{$request->information['phone']}} <br>
{{--                                                    Почта - {{$request->information['email']}} <br>--}}
                                                    Адрес - {{$request->information['address']}} <br>
                                                    Комментарий - {{$request->information['comments']}}
                                                </td>
                                            </tr>
                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; margin: 0; padding: 10px 0;"
                                                    valign="top">
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0"
                                                           style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; width: 100%; margin: 0;">


                                                        @forelse ($request->products as $row)

                                                            <tr style="font-family: 'Hlvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"
                                                                    valign="top">
                                                                    <strong>"{{$row['value']}}"</strong><br>
                                                                     ID {{$row['id']}}<br>
                                                                     Количество - {{$row['quantity']}} {{$row['unit']['value']}}.<br>
                                                                     Цена - {{$row['price']['value']}} ₽/{{$row['unit']['value']}}
                                                                </td>
{{--                                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"--}}
{{--                                                                    valign="top">--}}
{{--                                                                    <strong>"{{$row['name']}}"</strong><br>--}}
{{--                                                                    ID {{$row['id']}}<br>--}}
{{--                                                                    Количество - {{$row['quantity']}} {{$row['unit']}}.<br>--}}
{{--                                                                    Цена - {{$row['price']}} ₽/{{$row['unit']}} (со скидкой - {{$row['discount_price']}} ₽/{{$row['unit']}})--}}
{{--                                                                </td>--}}
                                                                <td class="alignright"
                                                                    style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"
                                                                    align="right" valign="top">
                                                                     Итого: {{$row['price']['value'] *  $row['quantity']}} ₽
{{--                                                                    align="right" valign="top"> {{$row['discount_price'] * $row['quantity']}} ₽--}}
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            Список продукции пуст
                                                        @endforelse



                                                        <tr class="total"
                                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; margin: 0;">
                                                            <td class="alignright" width="80%"
                                                                style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #333; border-top-style: solid; border-bottom-color: #333; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 5px 0;"
                                                                align="right" valign="top">Итого:
                                                            </td>
                                                            <td class="alignright"
                                                                style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #333; border-top-style: solid; border-bottom-color: #333; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 5px 0;"
                                                                align="right" valign="top">{{$request->totalSum}} ₽
                                                            </td>
                                                        </tr>
                                                     </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block aligncenter"
                                        style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;"
                                        align="center" valign="top">
                                        <a href="https://xn----7sbc2ahzelejid.xn--p1ai"
                                           style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #348eda; text-decoration: underline; margin: 0;">Сайт компании "Орбита-строй"</a>
                                    </td>
                                </tr>
                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block aligncenter"
                                        style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;"
                                        align="center" valign="top">

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="footer"
                     style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;">
                    <table width="100%"
                           style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="aligncenter content-block"
                                style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;"
                                align="center" valign="top">Есть вопросы? Email <a href="mailto:"
                                                                                style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;">support@</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;"
            valign="top"></td>
    </tr>
</table>
</body>
</html>
