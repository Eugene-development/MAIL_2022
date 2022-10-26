@component('mail::message')
    # Получен запрос на Сотрудничество
    Имя: {{$request->name}}
    Должность: {{$request->position}}
    Почта: {{$request->email}}
    Телефон: {{$request->phone}}
    Предложение: {{$request->sentence}}
@endcomponent
