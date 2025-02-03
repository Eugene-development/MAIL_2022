@component('mail::message')
    # Установка с сайта Новострой
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Адрес: {{$request->address}}
    Комментарий: {{$request->comment}}
@endcomponent
