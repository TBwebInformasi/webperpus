@section('navigasi')

<div class="letakpencarian">
<table border="1">

	<thead>
		<tr>
			<th>	<form>
  <input class="search" type="text" placeholder="Judul Buku" required>	
  <input class="button" type="button" value="Cari"> </form>	
 </th>
			
			 			<th>	<form>
  <input class="search" type="text" placeholder="Penerbit" required>	
  <input class="button" type="button" value="Cari"> </form> </th>
						<th>	<form>
  <input class="search" type="text" placeholder="Kategori" required>	
  <input class="button" type="button" value="Cari">	</form> </th>
						<th>	<form>
  <input class="search" type="text" placeholder="Tahun" required>	
  <input class="button" type="button" value="Cari"> </form>	</th>
</tr>
</thead>
</table>
</div>

			
					
	@stop