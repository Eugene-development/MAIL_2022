@component('mail::message')
    # Получено коммерческое предложение
    Имя сотрудника : {{$request->name}}
    Должность : {{$request->position}}
    Почта: {{$request->email}}
    Телефонж: {{$request->phone}}
    Предложение: {{$request->comment}}
@endcomponent
