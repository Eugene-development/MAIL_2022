@component('mail::message')
    # Получена заявка на обсчёт
    Телефон клиента : {{$request->phone}}
    Тип ремонта : {{$request->type}}
    Площадь: {{$request->square}}
    Демонтаж: {{$request->destroy}}
    Желаемые работы: {{$request->work}}
@endcomponent
