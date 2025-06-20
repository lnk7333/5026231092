@extends('template')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Keranjang Belanja</h4>
        </div>
        <div class="card-body">
            <a href="/keranjang/tambah" class="btn btn-success mb-3">
                <i class="fas fa-plus-circle"></i> Beli
            </a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th>Kode Pembelian</th>
                        <th>Kode Barang</th>
                        <th>Jumlah Pembelian</th>
                        <th>Harga per Item</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                @foreach($keranjang as $k)
                <tr>
                    <td>{{ $k->ID }}</td>
                    <td>{{ $k->KodeBarang }}</td>
                    <td>{{ $k->Jumlah }}</td>
                    <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="/keranjang/hapus/{{ $k->ID }}">Batal</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $keranjang->links() }}
                    </div>

                    @if ($keranjang->currentPage() === $keranjang->lastPage())
                        <h4>Total Harga Keseluruhan: Rp {{ number_format($totalKeseluruhan, 0, ',', '.') }}</h4>
                    @endif
                </div>
            </div>
        </div>
    @endsection
