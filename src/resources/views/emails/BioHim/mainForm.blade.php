@component('mail::message')
    # Получен запрос на перекись
    Почта: {{$request->email}}
    Телефон: {{$request->phone}}
    Вид: {{$request->brand}}
    Тара: {{$request->container}}
    Объём : {{$request->volume}}
@endcomponent
