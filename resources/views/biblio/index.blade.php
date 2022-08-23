<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">

                                        <div class="BarraPesquisa">
                                            <form action="biblioteca/database/pesquisa" method="POST">
                                               {{-- precisa do csrf pra funcionar --}}
                                                @csrf
                                                <input type="search" name="pesquisa" id="search">
                                                <button id="pesquisa">Pesquisar</button>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="grid">
                        <div class="iten">1</div>
                        <div class="iten">2</div>
                        <div class="iten">3</div>
                        <div class="iten">4</div>
                        <div class="iten">5</div>
                        <div class="iten">6</div>
                        <div class="iten">7</div>
                        <div class="iten">8</div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>