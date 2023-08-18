<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Computers') }}
    </x-slot>

    @can('computer create')
    <x-admin.add-link href="{{ route('computer.create') }}">
        {{ __('Add Computer') }}
    </x-admin.add-link>
    @endcan

    <div class="py-2">
        <div class="min-w-full border-b border-gray-200 shadow overflow-x-auto">
            <x-admin.grid.search action="{{ route('computer.index') }}" />
            <x-admin.grid.table>
                <x-slot name="head">
                    <tr>
                        <x-admin.grid.th>
                            {{ __('Icon') }}
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Model', 'attribute' => 'model'])
                        </x-admin.grid.th> 
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Submodel', 'attribute' => 'submodel'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Manufacturer', 'attribute' => 'manufacturer_id'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Year', 'attribute' => 'Year'])
                        </x-admin.grid.th>
                        @canany(['computer edit', 'computer delete'])
                        <x-admin.grid.th>
                            {{ __('Actions') }}
                        </x-admin.grid.th>
                        @endcanany
                    </tr>
                </x-slot>
                <x-slot name="body">
                @foreach($computers as $computer)
                    <tr>
                        <x-admin.grid.td>
                            <div class="text-sm text-gray-900">
                                <a href="{{route('computer.show', $computer->id)}}" class="no-underline hover:underline text-cyan-600"><img style="width: 100px" src="{{ asset($computer->icon) }}" alt="" class="image"></a>
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div class="text-sm text-gray-900">
                                <a href="{{route('computer.show', $computer->id)}}" class="no-underline hover:underline text-cyan-600">{{ $computer->model }}</a>
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div class="text-sm text-gray-900">
                                <a href="{{route('computer.show', $computer->id)}}" class="no-underline hover:underline text-cyan-600">{{ $computer->submodel }}</a>
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div class="text-sm text-gray-900">
                                <a href="{{route('computer.show', $computer->id)}}" class="no-underline hover:underline text-cyan-600">{{ $computer->manufacturers->name }}</a>
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div class="text-sm text-gray-900">
                                <a href="{{route('computer.show', $computer->id)}}" class="no-underline hover:underline text-cyan-600">{{ $computer->year }}</a>
                            </div>
                        </x-admin.grid.td>
                        @canany(['computer edit', 'computer delete'])
                        <x-admin.grid.td>
                            <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
                                <div class="flex">
                                    @can('computer edit')
                                    <a href="{{route('computer.edit', $computer->id)}}" class="inline-flex items-center px-4 py-2 mr-4 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                        {{ __('Edit') }}
                                    </a>
                                    @endcan

                                    @can('computer delete')
                                    @csrf
                                    @method('DELETE')
                                    <button class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                        {{ __('Delete') }}
                                    </button>
                                    @endcan
                                </div>
                            </form>
                        </x-admin.grid.td>
                        @endcanany
                    </tr>
                    @endforeach
                    @if($computers->isEmpty())
                        <tr>
                            <td colspan="2">
                                <div class="flex flex-col justify-center items-center py-4 text-lg">
                                    {{ __('No Result Found') }}
                                </div>
                            </td>
                        </tr>
                    @endif
                </x-slot>
            </x-admin.grid.table>
        </div>
        <div class="py-8">
            {{ $computers->appends(request()->query())->links() }}
        </div>
    </div>
</x-admin.wrapper>
