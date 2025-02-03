@component('mail::message')
    # Запрос на Проект Мебели (Новострой)
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Проект имеется? - {{$request->project}}
    Комментарий: {{$request->comment}}
@endcomponent
