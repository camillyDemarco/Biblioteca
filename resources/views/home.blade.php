@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <!-- Top Section -->
    <section class="bg-pink-100 py-10">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold">Sua Biblioteca online</h1>
            
        </div>
        <div class="flex justify-center">
            <img src="/images/biblioteca.jfif" alt="Books" class="rounded-lg shadow-lg" />
        </div>
    </section>


    <section class="py-10">
        <h2 class="text-3xl font-bold mb-6">Livros em destaque</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <!-- Repeat this block for each book -->
            <div class="book-card">
                <img src="/images/livro.jfif" alt="Deus que destroi sonhos" class="rounded-lg" />
                <h3 class="text-xl mt-2">Deus que destroi sonhos</h3>
                <p class="text-gray-600">$17.55</p>
            </div>
        </div>
    </section>


    <!-- Shop by Category Section -->
    <section class="py-10">
        <h2 class="text-3xl font-bold mb-6">Compre por categoria</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-8">
            <!-- Repeat for each category -->
            <div class="category-card">
                <img src="/images/livro.jfif" alt="Category" class="rounded-lg" />
                <h3 class="text-xl mt-2">cristão</h3>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="py-10 bg-gray-800 text-white">
        <div class="flex justify-between">
            <p>&copy; 2024 Bookory. All Rights Reserved.</p>
            <p>&copy; Camilly, Ana beatriz, Desiree</p>
            <ul class="flex space-x-4">
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
            </ul>
        </div>
    </footer>
</div>
@endsection