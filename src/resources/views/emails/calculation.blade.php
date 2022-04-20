@component('mail::message')
    # Получена заявка на обсчёт
    Тип ремонта : {{$request->type}}
    Площадь: {{$request->square}}
    Демонтаж: {{$request->destroy}}
    Желаемые работы: {{$request->work}}
@endcomponent
