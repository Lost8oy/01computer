<x-admin.wrapper>
    <x-slot name="title">
            {{ __('Menu Items') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{route('menu.index')}}" title="{{ __('Update Menu Item') }}">{{ __('<< Back to Menu Items') }}</x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>
    <div class="w-full py-2 bg-white overflow-hidden">

        <form method="POST" action="{{ route('menu.update', $menu->id) }}">
        @csrf
        @method('PUT')

            <div class="py-2">
            <x-admin.form.label for="name" class="{{$errors->has('name') ? 'text-red-400' : ''}}">{{ __('Name') }}</x-admin.form.label>

            <x-admin.form.input id="name" class="{{$errors->has('name') ? 'border-red-400' : ''}}"
                                type="text"
                                name="name"
                                value="{{ old('name', $menu->name) }}"
                                />
            </div>

            <div class="py-2">
            <x-admin.form.label for="link" class="{{$errors->has('link') ? 'text-red-400' : ''}}">{{ __('Link') }}</x-admin.form.label>

            <x-admin.form.input id="link" class="{{$errors->has('link') ? 'border-red-400' : ''}}"
                                type="text"
                                name="link"
                                value="{{ old('link', $menu->link) }}"
                                />
                <div class="item-list">
                        You can also enter an internal path such as <em class="placeholder">/home</em> or an external URL such as <em class="placeholder">http://example.com</em>. 
                        Add prefix <em class="placeholder">&lt;admin&gt;</em> to link for admin page. Enter <em class="placeholder">&lt;nolink&gt;</em> to display link text only.
                </div>
            </div>

            <div class="py-2 w-40">
            <x-admin.form.label for="weight" class="{{$errors->has('weight') ? 'text-red-400' : ''}}">{{ __('Weight') }}</x-admin.form.label>

            <x-admin.form.input id="weight" class="{{$errors->has('weight') ? 'border-red-400' : ''}}"
                                type="number"
                                name="weight"
                                value="{{ old('weight', $menu->weight) }}"
                                />
            </div>

            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Update') }}</x-admin.form.button>
            </div>
        </form>
    </div>
</x-admin.wrapper>
