@component('mail::message')
# Получена почта для получения рекламного предложения
Почта клиента: {{$request->email}}
Вид перекиси : {{$request->brand}}
Тара для перекиси : {{$request->container}}
Запрашиваемый объём : {{$request->volume}}
@endcomponent
