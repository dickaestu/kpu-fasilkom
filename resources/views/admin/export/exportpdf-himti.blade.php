<title>Data Pemilih
</title>
<table align="center">
  <tr>
    <td>
      <center>
        <img class="ml-auto" src="{{('assets/images/logoumb.png')}}" width="160" height="140">
      </center>
    </td>
    <td>
      <center>
        <font size="3">
          <b>KPU Fakultas Ilmu Komputer 2020
          </b>
        </font>
        <BR>
          <font size="2">Jalan Meruya Selatan No. 1, Meruya Selatan, Kembangan, Meruya Sel., Kembangan, Jakarta
          </font>
          <font size="2">Barat, Daerah Khusus Ibukota Jakarta 11650
          </font>
          <BR>
            </center>
          <td>
            <center>
              <img class="ml-auto" src="{{('assets/images/himti.png')}}" width="140" height="140">
            </center>
          </td>
          </td>
        </tr>
      <tr>
        <td colspan="4">
          <hr>
        </td>
      </tr>
      <h2 align="center">Laporan Suara HIMTI
      </h2>
</table>
  <br>
  <table border="1" style="width:100%">
    <thead>
      <tr>
        <th  style="background-color: red;">No
        </th>
        <th  style="background-color: red;">Nim
        </th>
        <th  style="background-color: red;">Nama Pemilih
        </th>
        <th  style="background-color: red;">Vote
        </th>
      </tr>
    </thead>
    <tbody align="center">
      @foreach($items as $item)
      <tr>
        <td>{{$loop->iteration}}
        </td>
        <td>{{$item->user->nim}}
        </td>
        <td>{{$item->user->name}}
        </td>
        <td>{{$item->kandidat->nama}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <br>
  <table align="right" align="center">
    <td>
      <right>
        <center>
          <font size="3">Jakarta, {!! Carbon\Carbon::now()->format('d-m-Y') !!}
          </font>
          <BR>
            <font size="3">KPU
            </font>
            <BR>
              </right>
            </center>
          </td>
