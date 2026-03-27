<x-main-layout>
   
    <x-slot:title>
        Пример
    </x-slot>
    <p>Контент страницы</p>
    
    @for($i=0; $i < 10; $i++)
        @php
        $type = rand(1,3)
        @endphp
      <x-status :type=$type> 
        @if($type==1)
            Новый
        @elseif($type==2)
            Подтверждено
        @else
            Отклонено
        @endif
      </x-status>
    @endfor
</x-main-layout>