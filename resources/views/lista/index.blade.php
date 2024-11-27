<x-app-layout>


    <div class="flex h-screen">
        <!-- Menú lateral -->
        <div id="sidebar" class="transition-all duration-300 text-white h-full flex flex-col" style="width: 5%; background-color: #3737ec;">
            <button 
                class="p-4 text-white  focus:outline-none"
                onclick="toggleSidebar()">
                <!-- Icono del botón -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul id="menu-options" class="mt-4 space-y-4 text-center text-sm opacity-0 overflow-hidden transition-all duration-300">
    <li>
        <a href="{{ url()->current() }}" class="block py-2 px-4 hover:bg-blue-600 rounded">
            {{ __('Home') }}
        </a>
    </li>
 

    <li>
    <a href="#" class="block py-2 px-4 hover:bg-blue-700 rounded" onclick="toggleDropdown(event)">
        {{ __('Lista') }}
    </a>
    <ul 
        id="dropdown-list" 
        class="hidden mt-2 space-y-2 bg-blue-500 border border-gray-200 rounded-lg shadow-lg transition-all duration-300">
        <li>
            <a href="{{ route('empleados.index') }}" 
               class="block py-2 px-4 text-white hover:bg-blue-700 rounded">
                {{ __('Empleados') }}
            </a>
        </li>
        <li>
            <a href="{{ route('cargos.index') }}" 
               class="block py-2 px-4 text-white hover:bg-blue-700 rounded">
                {{ __('Cargos') }}
            </a>
        </li>
    </ul>





</ul>

        </div>

       

  
        <div class="text-center flex-1 bg-white p-6 min-h-screen w-full" 
     style="background-image: url('{{ asset('images/fondo.jpg') }}'); 
            background-position: bottom right; 
            background-size: 45%; /* Ajusta el tamaño de la imagen de fondo */
            background-repeat: no-repeat;">
   <br>
   <h1 class="font-bold mb-4" style="font-size: 2rem; line-height: 1.2;">
    Bienvenido! <br><span class="text-blue-500">{{ Auth::user()->name }}</span>
</h1>


   <br> <br>
    <p class="text-lg text-gray-600 mb-8">
        Añade los datos personales de tus empleados y después agrega sus cargos en la empresa.
    </p>

    <br><br><br><br>
    <button
        id="addEmployeeButton"
        class="bg-blue-600 text-white px-3 py-3 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center justify-center space-x-3 mx-auto"

    >
        <img src="{{ asset('images/agregar-usuario.png') }}" alt="Logo" style="width: 60px; height: 60px;" class="rounded-full">

    </button>
    <div id="addEmployeeModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-md w-200"> 
     
        <div class="bg-gray-400 px-6 py-3 rounded-t-lg flex justify-between items-center">
            <h2 class="text-sm font-semibold text-gray-800 text-left">Registrar Nuevo Empleado</h2> <!-- Letra más pequeña y alineada a la izquierda -->
     
            <button class="modal-close-button" onclick="toggleModal(false)">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"> <!-- Ícono de cierre -->
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
    </svg>
</button>



        </div>
        <p class="text-gray-500 text-sm mt-4">Empieza aquí</p>
</div>

        <div class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl">
        <!-- Header del modal -->
        <div class="flex items-center justify-between px-6 py-3 border-b">
            <h2 class="text-lg font-semibold text-gray-800">Nuevo empleado</h2>
            <button onclick="toggleModal(false)" class="text-gray-500 hover:text-gray-800">
                &times;
            </button>
        </div>
        
        <!-- Contenido del modal -->
        <div class="p-6">
            <form id="addEmployeeForm" method="POST" action="{{ route('employees.store') }}">
                @csrf

                <!-- Contenedor de campos en dos columnas -->
                <div class="grid grid-cols-2 gap-6">
                    <!-- Campo Nombres -->
                    <div>
                        <label for="nombres" class="block text-sm font-medium text-gray-600 mb-1">Nombres</label>
                        <input type="text" id="nombres" name="nombres" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" 
                               placeholder="Escribe el nombre de tu empleado" required>
                    </div>

                    <!-- Campo Apellidos -->
                    <div>
                        <label for="apellidos" class="block text-sm font-medium text-gray-600 mb-1">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" 
                               placeholder="Escribe los apellidos de tu empleado" required>
                    </div>

                    <!-- Campo Identificación -->
                    <div>
                        <label for="identificacion" class="block text-sm font-medium text-gray-600 mb-1">Identificación</label>
                        <input type="text" id="identificacion" name="identificacion" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" 
                               placeholder="Escribe un número de identificación" required>
                    </div>

                    <!-- Campo Teléfono -->
                    <div>
                        <label for="telefono" class="block text-sm font-medium text-gray-600 mb-1">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" 
                               placeholder="Escribe un número de teléfono" required>
                    </div>

              

                <!-- Botones -->
                <div class="flex justify-end space-x-4 mt-6">
                    <button type="button" onclick="toggleModal(false)" 
                            class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                        Cancelar
                    </button>
                    <button type="submit" 
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>




 
   
    <script>
        document.getElementById('addEmployeeButton').addEventListener('click', () => toggleModal(true));

function toggleModal(show) {
    const modal = document.getElementById('addEmployeeModal');
    modal.classList.toggle('hidden', !show);
}

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const menuOptions = document.getElementById('menu-options');
            
            if (sidebar.style.width === '15%') {
                sidebar.style.width = '5%';
                menuOptions.style.opacity = '0';
                menuOptions.style.height = '0';
                menuOptions.style.overflow = 'hidden';
            } else {
                sidebar.style.width = '15%';
                menuOptions.style.opacity = '1';
                menuOptions.style.height = 'auto';
                menuOptions.style.overflow = 'visible';
            }
        }
        function toggleDropdown(event) {
    event.preventDefault();
    const dropdownList = document.getElementById('dropdown-list');

    if (dropdownList.classList.contains('hidden')) {
        dropdownList.classList.remove('hidden');
        dropdownList.style.height = '0px'; // Inicia cerrado
        setTimeout(() => {
            dropdownList.style.height = `${dropdownList.scrollHeight}px`; // Ajusta a su contenido
        }, 10); // Permite que la transición funcione
    } else {
        dropdownList.style.height = `${dropdownList.scrollHeight}px`; // Asegura que tenga altura al cerrar
        setTimeout(() => {
            dropdownList.style.height = '0px';
        }, 10);
        dropdownList.addEventListener('transitionend', () => {
            dropdownList.classList.add('hidden');
        }, { once: true });
    }
}


       
    </script>
</x-app-layout>
