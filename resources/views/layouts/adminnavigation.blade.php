<nav class="bg-white border-b border-gray-100">
    <div class="navbar bg-base-100 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                @isset($menus)
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a href="{{ URL::to('/dashboard') }}">
                            {{ $menus[0]['name'] }}
                        </a>
                    </li>
                    <li id="admin">
                        <a id="adminB">
                            <strong> Admin </strong>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                            </svg>
                        </a>
                    </li>
                    <li id="items">
                        <a id="itemsB">
                            <strong> Items </strong>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                            </svg>
                        </a>
                        <div id="items" style="position: absolute;">
                        </div>
                    </li>
                </ul>
                @endisset
            </div>
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
 
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a href="{{ route('profile.edit') }}" class="justify-between">
                            {{ __('Profile') }}
                        </a>
                    </li>
                    <li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
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
        
        $sql = "SELECT name, link FROM menus";
        $result = $conn->query($sql);

        $menus = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $menus[] = $row;
            }
        }

        $conn->close();
    @endphp
    
    const menus = @php echo json_encode($menus); @endphp;
    document.addEventListener('DOMContentLoaded', function () {
        const admin = document.getElementById('admin');
        const items = document.getElementById('items');
        const adminB = document.getElementById('adminB');
        const itemsB = document.getElementById('itemsB');
        let n = 0;
        let n2 = 0;

        admin.addEventListener('click', () => {
            n++;
            if (n%2==1) {
                adminB.innerHTML = ` <strong> Admin </strong> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg>`;
                for (let i=1; i<5; i++){
                    const menu = menus[i];
                    const li = document.createElement('li');
                    const a = document.createElement('a');
                    
                    a.href = `{{ URL::to('${menu.link}') }}`;
                    a.innerHTML = `${menu.name}`;
                    a.style.display = "inline-block";
                    a.style.width = "100%";
                    admin.appendChild(li);
                    li.appendChild(a);
                }
            }
            else {
                adminB.innerHTML = ` <strong> Admin </strong> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
<path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>`;
                while (admin.childNodes.length > 2) {
                    admin.removeChild(admin.lastChild);
                }
            }
        });

        items.addEventListener('click', () => {
            n2++;
            if (n2%2==1) {
                itemsB.innerHTML = ` <strong> Items </strong> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg>`;
                for (let i=5; i < menus.length; i++){
                const menu = menus[i];
                const li = document.createElement('li');
                const a = document.createElement('a');
                    
                    a.href = `{{ URL::to('${menu.link}') }}`;
                    a.innerHTML = `${menu.name}`;
                    a.style.display = "inline-block";
                    a.style.width = "100%";
                    items.appendChild(li);
                    li.appendChild(a);
            }
            }
            else {
                itemsB.innerHTML = ` <strong> Items </strong> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
<path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>`;
                while (items.childNodes.length > 2) {
                    items.removeChild(items.lastChild);
                }
            }
        });
    })
</script>
