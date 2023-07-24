<!DOCTYPE html>
<html>
<head>
<title>Laporan Rekapitulasi</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
    
    th {
      background-color: #00BFFF;
    }
    
    tr:nth-child(even) {
      background-color: #Ffffff;
    }
  </style>
</head>
    <body>
    <div class="page-heading">
                <h3>Laporan Rekapitulasi 2023</h3>
            </div>
    <table>
<tr>
@foreach ($rowCounts as $key => $value) {
    <th>{{$key}}</th>
}
@endforeach
</tr>
<tr>
@foreach ($rowCounts as $data) {
   <td>{{$data}}</td>
}
@endforeach
</tr>
</table>
     
    </body>
</html>