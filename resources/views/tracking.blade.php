<!DOCTYPE>
<html>
    <head>        
        <title>Tracking Surat</title>
        @vite(['resources/js/app.js'])
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f7f7f7;
            }
            /* Style for the header */
            .header {
                background-color: skyblue;
                padding: 100px;
            }

            /* Position the header at the top of the page */
            .header {
                background-color: skyblue;
                padding: 100px;
                z-index: 999; /* Add a higher z-index to make sure it stays on top of other elements */
                min-height: 100vh;
            }

            .container {
                max-width: 800px;
                margin: 150px auto 50px; /* Add some top margin to create space for the header */
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            /* Style for the container */
            .ytta {
                display: flex;
                justify-content: flex-end;
            }

            /* Style for the list items */
            .ytta ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: flex-end;
            }

            .ytta li {
                display: inline-block;
                margin-left: 50px;
            }
            /* .ytta a {
                text-decoration: none;
                color: red;
                padding: 5px 10px;
                border: 3px solid #000000;
                border-radius: 7px;
                font-weight: bold;
            } */

            .ytta a:hover {
                background-color: #007bff;
                color: #fff;
            }
            .container {
                max-width: 800px;
                margin: 50 auto;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            
            h1 {
                text-align: center;
                margin-bottom: 20px;
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }
            
            input[type="text"] {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            
            .btn {
                display: inline-block;
                padding: 10px 20px;
                background-color: blue;
                color: white;
                font-size: 16px;
                text-decoration: none;
                border-radius: 4px;
            }
            
            .result {
                margin-top: 20px;
                background-color: #f2f2f2;
                padding: 20px;
            }
            
            .result p {
                margin: 0;
            }
            
            .result.success {
                color: green;
            }
            
            .result.error {
                color: red;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <div class="ytta">
                <ul>
                    <li><a class="btn btn-primary" href="{{route ('login.action') }}">Login</a></li>
                    <ul class="dropdown">
                </ul>
            </div>
        <div class="container">
            <h1>Tracking Surat</h1>
            <form id="selectionForm">
                <select id="mySelect1" class="form-select mb-2">
                    <option value="asing">Surat Pengantar Asing</option>
                    <option value="np">Surat Pengantar Non Permanen</option> 
                    <option value="pindah">Surat Pengantar Pindah</option> 
                    <option value="kawin">Surat Pengantar Kawin</option>
                    <option value="kelahiran">Surat Pengantar Kelahiran</option>
                    <option value="kematian">Surat Pengantar Kematian</option> 
                    <option value="keterangan_baik">Surat Pengantar Keterangan Baik</option> 
                </select>
                <div class="search-container">
                    <input type="text" id="idnya_searchbar" class="form-control mb-2" placeholder="Search...">
                    <button type="button" onclick="redirectToSelectedValues()" class="btn btn-primary w-full">Search</button>
                </div>
            </form>
        </div>
        <div id="loadingSpinner" class="spinner-border text-primary" role="status" style="{{ session('isLoading') ? 'display: block;' : 'display: none;' }}">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div id="resultContainer" style="{{ session('isLoading') ? 'display: none;' : 'display: block;' }}">
            @if(isset($data) && count($data) > 0)
                    @foreach($data as $item)
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">Berhasil</div>
                                <div class="card-body">
                                    <h5 class="card-title">Data Ditemukan</h5>
                                    <ul>
                                        <li>Jenis Surat: {{ $nama_tb }}</li>
                                        <li>Tanggal: {{ $item->tanggal }}</li>
                                        <li>Nama: {{ $item->nama }}</li>
                                        <li>Status Surat: {{ $item->status_surat }}</li>
                                        @if ($nama_tb == 'asing')
                                            <li>Kitas: {{ $item->kitas }}</li>
                                            <li>Paspor: {{ $item->paspor }}</li>
                                        @elseif ($nama_tb == 'np')
                                            <li>Kelurahan: {{ $item->kelurahan }}</li>
                                            <li>Alamat: {{ $item->alamat }}</li>
                                        @elseif ($nama_tb == 'pindah')
                                            <li>Alamat Asal: {{ $item->alamat_asal }}</li>
                                            <li>Alamat Tujuan: {{ $item->alamat_tujuan }}</li>
                                            <li>Alamat Pindah: {{ $item->alamat_pindah }}</li>
                                        @elseif ($nama_tb == 'kelahiran')
                                            <li>Tempat & Tgl. Lahir: {{ $item->tempat_tanggal_lahir }}</li>
                                        @elseif ($nama_tb == 'kematian')
                                            <li>Tanggal Meninggal: {{ $item->tanggal_meninggal }}</li>
                                            <li>Ahli Waris: {{ $item->ahli_waris }}</li>
                                        @elseif ($nama_tb == 'kawin')
                                            <li>Nama Suami: {{ $item->nama_suami }}</li>
                                            <li>Alamat Suami: {{ $item->alamat_suami }}</li>
                                            <li>Tgl. Lahir Suami: {{ $item->tanggal_lahir_suami }}</li>
                                            <li>Nama Istri: {{ $item->nama_istri }}</li>
                                            <li>Alamat Istri: {{ $item->alamat_istri }}</li>
                                            <li>Tgl. Lahir Istri: {{ $item->tanggal_lahir_istri }}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                    @endforeach
            @elseif(!isset($data))
            @else
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Gagal</div>
                <div class="card-body">
                  <h5 class="card-title">Data tidak ditemukan</h5>
                  <p class="card-text">Data dengan nama dan tipe surat tersebut tidak ditemukan</p>
                </div>
              </div>
            @endif
        </div>
    </body>
    <script>
        function redirectToSelectedValues() {
            var nama_tb = document.getElementById('mySelect1').value;
            var nama = document.getElementById('idnya_searchbar').value;
            let url = ''
            console.log(nama)
            if(nama == ''){
                url = "{{ route('tracking') }}"
            }
            else{
                url = "{{ route('redirect', [':name', ':tb_name']) }}";
            }
            url = url.replace(':tb_name', nama_tb);
            url = url.replace(':name', nama);

            document.getElementById('loadingSpinner').style.display = 'block';
            document.getElementById('resultContainer').style.display = 'none';

            sessionStorage.setItem('isLoading', 1);
            window.location.href = url;
        }
        window.onload = function(){
            sessionStorage.setItem('isLoading', 0);
            document.getElementById('loadingSpinner').style.display = 'none';
            document.getElementById('resultContainer').style.display = 'block';
        }
    </script>
</html>
