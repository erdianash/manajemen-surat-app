<!DOCTYPE>
<html>
<head>
    
    <title>Tracking Surat</title>
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
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
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
.ytta a {
    text-decoration: none;
    color: red;
    padding: 5px 10px;
    border: 3px solid #000000;
    border-radius: 7px;
    font-weight: bold;
}

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
                <li><a href="{{route ('login.action') }}">Login</a></li>
                <ul class="dropdown">
    </ul>
    </div>
    <div class="container">
        <h1>Tracking Surat</h1>
        
        <form id="selectionForm">
    <select id="mySelect1">
        <option value="asing">Surat Pengantar Asing</option>
        <option value="np">Surat Pengantar Non Permanen</option> 
        <option value="pindah">Surat Pengantar Pindah</option> 
        <option value="kawin">Surat Pengantar Kawin</option>
        <option value="kelahiran">Surat Pengantar Kelahiran</option>
        <option value="kematian">Surat Pengantar Kematian</option> 
        <option value="keterangan_baik">Surat Pengantar Keterangan Baik</option> 
    </select>
    <button type="button" onclick="getTrackingSurat()">Redirect</button>
    <div class="search-container">
    <input type="text" id="idnya_searchbar" class="search-input" placeholder="Search...">
    <button type="button" onclick="redirectToSelectedValues()">Search</button>
  </div>
  <script>
    document.getElementById("idnya_searchbar").addEventListener("click", function() {
      var searchTerm = document.getElementById("idnya_searchbar").value;
      alert("Apakah anda mencari nama " + searchTerm);
      
      // Lakukan operasi pencarian lainnya di sini
    });
  </script>
    <script>
    function redirectToSelectedValues() {
        var nama_tb = document.getElementById('mySelect1').value;
        var nama = document.getElementById('idnya_searchbar').value;
        var url = "{{ route('redirect', [':nama_tb', ':nama']) }}";
        url = url.replace(':nama_tb', nama_tb);
        url = url.replace(':nama', nama);
        //window.location.href = url;

        // Mengambil URL dari window.location.href
console.log(window.location.href);

// Mengambil nilai dari search bar
const searchValue = document.getElementById('idnya_searchbar').value;
console.log(searchValue);

// Mengambil nilai dari selection
const selectionValue = document.getElementById('mySelect1').value;
console.log(selectionValue);

    }
</script>
       
</form>
        

        
    
</body>
</html>
