@extends('layouts.app')

@section('title', 'Sobre Nós - Meu Site Laravel')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-6">Sobre Nós</h1>
                
                <div class="space-y-4">
                    <p class="text-gray-600">
                        Bem-vindo à nossa empresa! Somos uma equipe apaixonada por criar soluções inovadoras
                        para nossos clientes.
                    </p>
                    
                    <p class="text-gray-600">
                        Nossa missão é fornecer produtos e serviços de alta qualidade que atendam às necessidades
                        específicas de cada cliente, sempre mantendo os mais altos padrões de excelência.
                    </p>
                    
                    <div class="mt-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Nossos Valores</h2>
                        <ul class="list-disc list-inside space-y-2 text-gray-600">
                            <li>Excelência em tudo que fazemos</li>
                            <li>Inovação constante</li>
                            <li>Compromisso com o cliente</li>
                            <li>Integridade e transparência</li>
                            <li>Trabalho em equipe</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 