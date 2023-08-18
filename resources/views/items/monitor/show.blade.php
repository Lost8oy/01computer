<x-admin.wrapper>
    <x-slot name="title">
            {{ __('Monitors') }}
    </x-slot> 

    <div class="d-print-none with-border">
        <x-admin.breadcrumb href="{{route('monitor.index')}}" title="{{ __('View monitor') }}">{{ __('<< Back to all monitors') }}</x-admin.breadcrumb> 
    </div>
    <div class="w-full py-2">
        <div class="min-w-full border-b border-gray-200 shadow">
            <table class="table-fixed w-full text-sm">
                <tbody class="bg-white">
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Icon') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500"><img style="width: 100px" src="{{ asset($monitor->icon) }}" alt="" class="image"></td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Model') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->model}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Size') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->size}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Manufacturer') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->manufacturers->name}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Year') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->year}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Serial Number') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->serial_number}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Color') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->color}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Pixels') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->pixels}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Description') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->description}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Inventory Number') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->inventory_number}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Position') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->bool_position ? 'Container' : 'Shelf'}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Position Code') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->position_id}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Created') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$monitor->created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin.wrapper>

