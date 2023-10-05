@component('mail::message')
    # Заявка с сайта zov.top на обсчёт
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Комментарий: {{$request->message}}
    Промокод - {{$request->promo}}
@endcomponent
