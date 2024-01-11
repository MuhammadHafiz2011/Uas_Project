@extends('front.app')

@section('title', 'Beranda')

@section('content')
    <section class="w-fit h-fit">
        <div class="relative">
            <img src="{{ asset('img/hero.jpg') }}" alt="hero-header" class="h-[450px] max-w-full lg:h-auto object-fit:cover object-position:center">
            <div class="absolute inset-0 lg:top-1/2 lg:left-1/2 lg:transform lg:-translate-x-1/2 lg:-translate-y-1/2 h-fit">
                <div class="mt-40 px-5 lg:mt-0">
                    <div class="mx-auto text-center">
                        <div>
                            <h2 class="bg-clip-text text-transparent bg-gradient-to-r from-customYellow via-primaryLight to-lightBlue text-5xl lg:text-7xl uppercase font-extrabold tracking-[5px]">
                                Sistem Penyewaan Buku Politeknik</h2>
                            <p class="text-customYellow uppercase font-light"></p>
                        </div>
                        <p class="hidden mt-5 text-primaryLight lg:text-lg text-center lg:block">
                        </p>
                    </div>
                    <div class="mt-5">
                        <form action="#" class="mx-auto">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full my-20">
<!-- Untuk Menampilkan Data Testimoni -->
            <section class="w-full my-20">
        <div class="container">
            <h2 class="text-3xl font-semibold mb-8">Testimonial</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Penyewa
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Testimoni
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($testimonis as $testimoni)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $testimoni->penyewa->nama }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-wrap">
                                    <div class="text-sm text-gray-500">
                                        {{ $testimoni->testimoni }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Untuk Menampilkan Data Penyewaan -->
    <section class="w-full my-20">
        <div class="container">
            <h2 class="text-3xl font-semibold mb-8">Data Penyewaan</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Penyewa
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tanggal Penyewaan
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tanggal Pengembalian
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Buku yang Disewa
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($transaksis as $transaksi)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $transaksi->penyewa->nama }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        {{ $transaksi->tanggal_penyewaan }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        {{ $transaksi->tanggal_pengembalian }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-wrap">
                                    <div class="text-sm text-gray-500">
                                        {{ $transaksi->buku->judul }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
                <!-- Add other grid items here -->
            </div>
        </div>
    </section>
@endsection
