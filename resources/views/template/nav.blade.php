<style>
    body{
        background: rgb(166, 255, 0)
    }
    .card:hover{
        background: rgb(20, 255, 165)
    }
</style>

<div class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="navbar-brand"><b>MudxyyyMart</b></a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav ms-auto">
                @guest
                    <a href="{{ route('home') }}"
                        class="nav-link card {{ Request::is('/') ? 'text-dark' : 'text-secondary' }}"><b>Home</b></a>
                    <a href="{{ route('login') }}"
                        class="nav-link card ms-2 {{ Request::is('login') ? 'text-dark' : 'text-secondary' }}"><b>Login</b></a>
                @endguest
                @auth
                    @if (auth()->user()->role == 'admin')
                        <a href="{{ route('adm.index') }}"
                            class="nav-link {{ Request::is('index') ? 'text-warning' : 'text-white' }} ">Kelola User</a>
                        <a href="{{ route('prk.index') }}"
                            class="nav-link {{ Request::is('produkindex') ? 'text-warning' : 'text-white' }}">Kelola
                            Produk</a>
                        <a href="{{ route('ktg.index') }}"
                            class="nav-link {{ Request::is('ktgindex') ? 'text-warning' : 'text-white' }}">Kelola
                            Kategori</a>
                        <a href="{{ route('transaksi.validasi') }}"
                            class="nav-link {{ Request::is('tv') ? 'text-warning' : 'text-white' }}">Kelola
                            Transaksi</a>
                        <a href="{{ route('adm.homee') }}"
                            class="nav-link {{ Request::is('homee') ? 'text-warning' : 'text-white' }}">Statistik</a>
                        <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                    @else
                        <a href="{{ route('ker') }}"
                            class="nav-link {{ Request::is('ker') ? 'text-warning' : 'text-white' }}">Keranjang</a>
                        <a href="{{ route('sum') }}"
                            class="nav-link {{ Request::is('sum') ? 'text-warning' : 'text-white' }}">Summary</a>
                        <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(() => {
        document.querySelector('.alert').remove()
    }, 2000);
</script>
