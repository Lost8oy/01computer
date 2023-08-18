<x-admin.wrapper>
    <x-slot name="title">
            {{ __('Keyboards') }}
    </x-slot>

    <div class="d-print-none with-border">
        <x-admin.breadcrumb href="{{route('keyboard.index')}}" title="{{ __('View keyboard') }}">{{ __('<< Back to all keyboards') }}</x-admin.breadcrumb> 
    </div>
    <div class="w-full py-2">
        <div class="min-w-full border-b border-gray-200 shadow">
            <table class="table-fixed w-full text-sm">
                <tbody class="bg-white">
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Icon') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500"><img style="width: 100px" src="{{ asset($keyboard->icon) }}" alt="" class="image"></td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Model') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->model}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Switch') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->switch}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Manufacturer') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->manufacturers->name}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Year') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->year}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Serial Number') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->serial_number}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Layout') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->layout}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Description') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->description}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Inventory Number') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->inventory_number}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Position') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->bool_position ? 'Container' : 'Shelf'}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Position Code') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->position_id}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Created') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$keyboard->created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin.wrapper>

