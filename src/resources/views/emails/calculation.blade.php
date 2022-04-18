@component('mail::message')
    # Получена заявка на обсчёт
    Тип ремонтая : {{$request->type}}
    Площадь: {{$request->square}}
    Демонтаж: {{$request->destroy}}
    Желаемые работы: {{$request->work}}
@endcomponent
