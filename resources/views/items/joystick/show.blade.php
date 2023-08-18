<x-admin.wrapper>
    <x-slot name="title">
            {{ __('Joysticks') }}
    </x-slot>

    <div class="d-print-none with-border">
        <x-admin.breadcrumb href="{{route('joystick.index')}}" title="{{ __('View joystick') }}">{{ __('<< Back to all joysticks') }}</x-admin.breadcrumb> 
    </div> 
    <div class="w-full py-2">
        <div class="min-w-full border-b border-gray-200 shadow">
            <table class="table-fixed w-full text-sm">
                <tbody class="bg-white">
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Icon') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500"><img style="width: 100px" src="{{ asset($joystick->icon) }}" alt="" class="image"></td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Model') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->model}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Manufacturer') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->manufacturers->name}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Year') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->year}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Serial Number') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->serial_number}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Description') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->description}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Inventory Number') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->inventory_number}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Position') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->bool_position ? 'Container' : 'Shelf'}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Position Code') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->position_id}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Created') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$joystick->created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin.wrapper>

