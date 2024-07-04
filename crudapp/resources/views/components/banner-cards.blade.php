<div class="container">
    <div class="list-topics-content">
        <ul>

            @for ($i = 0; $i < 5; $i++)
                @switch($i)
                    @case(0)
                        <x-card-items title="Resturent" itemCount="213 listing" icon="flaticon-restaurant" link="#" />
                    @break

                    @case(1)
                        <x-card-items title="destination" itemCount="210 listing" icon="flaticon-travel" link="#" />
                    @break

                    @case(2)
                        <x-card-items title="hotels" itemCount="200 listing" icon="flaticon-building" link="#" />
                    @break

                    @case(3)
                        <x-card-items title="healthcaree" itemCount="180 listing" icon="flaticon-pills" link="#" />
                    @break

                    @case(4)
                        <x-card-items title="automotion" itemCount="220 listing" icon="flaticon-transport" link="#" />
                    @break

                    @default
                @endswitch
            @endfor
        </ul>
    </div>
</div>
