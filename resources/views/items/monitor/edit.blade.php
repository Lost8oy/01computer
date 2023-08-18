<x-admin.wrapper>
    <x-slot name="title">
            {{ __('Monitors') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{route('monitor.index')}}" title="{{ __('Update Monitor') }}">{{ __('<< Back to all monitors') }}</x-admin.breadcrumb>
        <x-admin.form.errors/>
    </div>
    <div class="w-full py-2 bg-white overflow-hidden">

        <form method="POST" action="{{ route('monitor.update', $monitor->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="py-2">
            <img src="{{ asset($monitor->icon) }}" width="200px" style="display: block;
            margin: 0 auto;">
            <input type="file" name="icon" class="form-control" placeholder="icon" style="display: block;
            margin: 10px auto">
        </div>

        <div class="py-2">
        <x-admin.form.label for="model" class="{{$errors->has('model') ? 'text-red-400' : ''}}">{{ __('Model') }}</x-admin.form.label>

        <x-admin.form.input id="model" class="{{$errors->has('model') ? 'border-red-400' : ''}}"
                            type="text"
                            name="model"
                            value="{{ old('model', $monitor->model) }}"
                            />
        </div>

        <div class="py-2">
        <x-admin.form.label for="size" class="{{$errors->has('size') ? 'text-red-400' : ''}}">{{ __('Size') }}</x-admin.form.label>

        <x-admin.form.input id="size" class="{{$errors->has('size') ? 'border-red-400' : ''}}"
                            type="text"
                            name="size"
                            value="{{ old('size', $monitor->size) }}"
                            />
        </div>

        <div class="py">
            <x-admin.form.label for="manufacturer_id" class="{{$errors->has('manufacturer_id') ? 'text-red-400' : ''}}">{{ __('Manifacturer') }}</x-admin.form.label>

            <select id="manufacturer_id" name="manufacturer_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                <option value="{{ old('manufacturer_id', $monitor->manufacturer_id) }}">{{$monitor->manufacturers->name}}</option>
                @foreach ($manufacturers->all() as $manufacturer)
                <option value="{{$manufacturer->id}}">
                    {!! $manufacturer->name !!}
                </option>
                @endforeach
            </select>
        </div>

        <div class="py-2">
        <x-admin.form.label for="year" class="{{$errors->has('year') ? 'text-red-400' : ''}}">{{ __('Year') }}</x-admin.form.label>

        <x-admin.form.input id="year" class="{{$errors->has('year') ? 'border-red-400' : ''}}"
                            type="text"
                            name="year"
                            value="{{ old('year', $monitor->year) }}"
                            />
        </div>

        <div class="py-2">
        <x-admin.form.label for="serial_number" class="{{$errors->has('model') ? 'text-red-400' : ''}}">{{ __('Serial Number') }}</x-admin.form.label>

        <x-admin.form.input id="serial_number" class="{{$errors->has('serial_number') ? 'border-red-400' : ''}}"
                            type="text"
                            name="serial_number"
                            value="{{ old('serial_number', $monitor->serial_number) }}"
                            />
        </div>

        <div class="py-2">
        <x-admin.form.label for="color" class="{{$errors->has('color') ? 'text-red-400' : ''}}">{{ __('Color') }}</x-admin.form.label>

        <x-admin.form.input id="color" class="{{$errors->has('color') ? 'border-red-400' : ''}}"
                            type="text"
                            name="color"
                            value="{{ old('color', $monitor->color) }}"
                            />
        </div>

        <div class="py-2">
        <x-admin.form.label for="pixels" class="{{$errors->has('pixels') ? 'text-red-400' : ''}}">{{ __('Pixels') }}</x-admin.form.label>

        <x-admin.form.input id="pixels" class="{{$errors->has('pixels') ? 'border-red-400' : ''}}"
                            type="text"
                            name="pixels"
                            value="{{ old('pixels', $monitor->pixels) }}"
                            />
        </div>

        <div class="py-2">
        <x-admin.form.label for="description" class="{{$errors->has('description') ? 'text-red-400' : ''}}">{{ __('Description') }}</x-admin.form.label>

        <x-admin.form.input id="description" class="{{$errors->has('description') ? 'border-red-400' : ''}}"
                            type="text"
                            name="description"
                            value="{{ old('description', $monitor->description) }}"
                            />
        </div>

        <div class="py-2">
        <x-admin.form.label for="inventory_number" class="{{$errors->has('inventory_number') ? 'text-red-400' : ''}}">{{ __('Inventory Number') }}</x-admin.form.label>

        <x-admin.form.input id="inventory_number" class="{{$errors->has('inventory_number') ? 'border-red-400' : ''}}"
                            type="text"
                            name="inventory_number"
                            value="{{ old('inventory_number', $monitor->inventory_number) }}"
                            />
        </div>

        <div class="py-2">
            <label for="bool_position" class="inline-flex items-center">
                <select id="bool_position" name="bool_position" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                    <option id="1" value="{{ old('bool_position', $monitor->bool_position) }}">{{$monitor->bool_position ? 'Container' : 'Shelf'}}</option>
                    <option id="2" value="1">Container</option>
                    <option id="3" value="0">Shelf</option>
                </select>
            </label>
        </div>

        <div class="py-2">
            <x-admin.form.label for="position_id" class="{{$errors->has('position_id') ? 'text-red-400' : ''}}">{{ __('Position Code') }}</x-admin.form.label>

            <select id="position_select" name="position_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                <option value="{{ old('position_id', $monitor->position_id) }}">{{ $monitor->bool_position ? $monitor->containers->code : $monitor->shelves->code }}</option>
            </select>
        </div>
        

            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Update') }}</x-admin.form.button>
            </div>

            <script type = "text/javascript">
                @php
                    $host = 'localhost';
                    $username = 'root';
                    $password = '';
                    $database = '01computer';

                    $conn = new mysqli($host, $username, $password, $database);
                
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    
                    $sql = "SELECT id, code FROM containers";
                    $result = $conn->query($sql);

                    $containers = array();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $containers[] = $row;
                        }
                    }

                    $sql2 = "SELECT id, code FROM shelves";
                    $result = $conn->query($sql2);

                    $shelves = array();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $shelves[] = $row;
                        }
                    }

                    $conn->close();
                @endphp
                
                const shelves = @php echo json_encode($shelves); @endphp;
                const containers = @php echo json_encode($containers); @endphp;
                document.addEventListener('DOMContentLoaded', function () {
                    const position = document.getElementById('bool_position');
                    const positionSelect = document.getElementById('position_select');
                    const manufacturer = document.getElementById('manufacturer_id');
                    var option = document.createElement("option");

                    if (position.value == 0) {
                            shelves.forEach(element => {
                                var option = document.createElement("option");
                                option.value = element.id;
                                option.text = element.code;
                                positionSelect.appendChild(option);
                            });
                        };
                        if (position.value == 1) {
                            containers.forEach(element => {
                                var option = document.createElement("option");
                                option.value = element.id;
                                option.text = element.code;
                                positionSelect.appendChild(option);
                            });
                        };
                        
                    position.addEventListener('change', function () {
                        positionSelect.innerHTML = '<option value="" disabled selected>Please select the position </option>';
                        if (position.value == 0) {
                            shelves.forEach(element => {
                                var option = document.createElement("option");
                                option.value = element.id;
                                option.text = element.code;
                                positionSelect.appendChild(option);
                            });
                        };
                        if (position.value == 1) {
                            containers.forEach(element => {
                                var option = document.createElement("option");
                                option.value = element.id;
                                option.text = element.code;
                                positionSelect.appendChild(option);
                            });
                        };
                    });
                        const optionOne = manufacturer.options[0];
                        for (j = 1; j < manufacturer.length; j++) {
                            const optionTwo = manufacturer.options[j];
                            if (optionOne.value == optionTwo.value) {
                                manufacturer.removeChild(manufacturer.options[j]);
                            }
                        }
                        const positionOne = position.options[0];
                        for (i = 1; i < position.length; i++) {
                            const positionTwo = position.options[i];
                            if (positionOne.value == positionTwo.value) {
                                position.removeChild(position.options[i]);
                            }
                        }
                        const positionCodeOne = positionSelect.options[0];
                        for (i = 1; i < positionSelect.length; i++) {
                            const positionCodeTwo = positionSelect.options[i];
                            if (positionCodeOne.value == positionCodeTwo.value) {
                                positionSelect.removeChild(positionSelect.options[i]);
                            }
                        }
                })
            </script>
        </form>
    </div>
</x-admin.wrapper>
