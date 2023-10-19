@component('mail::message')
    # Получен запрос на перекись
    Имя: {{$request->name}}
    Почта: {{$request->email}}
    Телефон: {{$request->phone}}
    Вид: {{$request->brand}}
    Тара: {{$request->container}}
    Объём : {{$request->volume}}
    Комментарий : {{$request->comment}}
@endcomponent
