@section('navigasi')

	<!-- <form>
  <input class="search" type="text" placeholder="Cari..." required>	
  <input class="button" type="button" value="Cari">	
 <style type="text/css">
		form {
			width:900px;
			padding-left:900px;
					}
		.search {
			padding:8px 15px;
			background:rgba(50, 50, 50, 0.2);
			border:0px solid #dbdbdb;
		}
		.button {
			position:relative;
			padding:6px 15px;
			left:-8px;
			border:2px solid #53bd84;
			background-color:#53bd84;
			color:#fafafa;
		}
		.button:hover  {
			background-color:#fafafa;
			color:blue;
		}
				  
		::-webkit-input-placeholder { /* For WebKit browsers */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		:-moz-placeholder { /* For Mozilla Firefox 4 to 18 */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		::-moz-placeholder { /* For Mozilla Firefox 19+ */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		:-ms-input-placeholder { /* For Internet Explorer 10+ */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}	  
	</style>	
</form> -->
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