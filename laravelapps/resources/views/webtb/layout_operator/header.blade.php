@section('header')

<nav>
    <ul>
        <li><a href="alamatnya">Cari Buku</a></li>
        <li><a href="{{ url('/coba2')}}">List Buku</a>
            <ul>
            	</ul>
        </li>
         <li><a href="alamatnya" onClick="return confirm ('Yakin?')">Home</a></li>
    </ul>
</nav>
@stop