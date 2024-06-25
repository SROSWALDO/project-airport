@extends('layout.base')

@section('content')
<div class="contenedor font-Poppins">
    <div class="slider w-full bg-blue-900 relative shadow-2xl h-[90px] items-center flex justify-center">
        <div class="logo absolute left-2 ml-5 flex">

        </div>
        <a href="/home">
            <div class="toRegisters flex  justify-center rounded-sm text-white mr-8 cursor-pointer hover:scale-105 transition-all">

                <button class="text-lg ml-1 transition-all w-[140px] p-1  bg-slate-400 rounded ">Registrar Vuelo</button>
            </div>
        </a>



        <a href="/logout">
            <div class="toRegisters absolute right-3 top-8 flex bg-red-600 hover:bg-red-700 w-[130px] p-[2px] justify-center rounded-xl text-white mr-8 cursor-pointer transition-all">
                <p class="text-lg mr-2">Log out</p>

            </div>
        </a>
    </div>

    <div class="tables-container bg-gray-100 w-full">
        <div class="content bg-gray-100 mt-24 w-[1500px] shadow-lg m-auto h-auto">
            <div class="searchbar shadow-lg flex justify-center">
                <input class="m-2 w-[950px] text-center" type="text" placeholder="Search..." />
            </div>
            <div class="overflow-x-auto mt-6">

                <div class="table-wrapper max-h-[490px] overflow-y-auto">
                    <table class="min-w-full bg-white shadow-md rounded-lg">
                        <thead class='bg-white text-black'>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Equipo</th>
                                <th class="py-2 px-4 border-b">Matricula</th>
                                <th class="py-2 px-4 border-b">Comandante</th>
                                <th class="py-2 px-4 border-b">Licencia del comandante</th>
                                <th class="py-2 px-4 border-b">Subcomandante</th>
                                <th class="py-2 px-4 border-b">Liencia del subcomandante</th>
                                <th class="py-2 px-4 border-b">Creado en</th>

                            </tr>
                        </thead>
                        <tbody class='text-sm'>

                            <tr class="text-black text-center " >
                                <td class="py-2 px-4 border-b">1</td>
                                <td class="py-2 px-4 border-b">Caza-801</td>
                                <td class="py-2 px-4 border-b">MVH350</td>
                                <td class="py-2 px-4 border-b">Arturo Elias Ayub</td>
                                <td class="py-2 px-4 border-b">A298-E756-A647</td>
                                <td class="py-2 px-4 border-b">Carlos Bremmer Sanchez</td>
                                <td class="py-2 px-4 border-b">C463-B432-S156</td>
                                <td class="py-2 px-4 border-b"> 06/25/2024</td>

                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="flex justify-center items-center min-h-[300px]">
                    <p>No data available</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
