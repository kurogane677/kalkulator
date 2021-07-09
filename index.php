<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="flex-container-coloumn card">
    <div class="display">
        <h1 id="hasil">0</h1>
    </div>

    <div class="flex-container-row">
        <div class="button">7</div>
        <div class="button">8</div>
        <div class="button">9</div>
        <div class="button negatif">+/-</div>
    </div>
    
    <div class="flex-container-row">
        <div class="button">4</div>
        <div class="button">5</div>
        <div class="button">6</div>
        <div class="button operator">-</div>
    </div>
    
    <div class="flex-container-row">
        <div class="button">1</div>
        <div class="button">2</div>
        <div class="button">3</div>
        <div class="button operator">+</div>
    </div>
    
    <div class="flex-container-row">
        <div class="button clear">C</div>
        <div class="button">0</div>
        <div class="button double equals">=</div>
    </div>
</div>

    <div class="history card">
        <h2>Riwayat Perhitungan</h2>
        <table>
           <thead>
               <tr>
                   <th>Angka Pertama</th>
                   <th>Operator</th>
                   <th>Angka Kedua</th>
                   <th>Hasil</th>
               </tr>
           </thead>
           <tbody id="historyList"></tbody>
       </table>
    </div>

<script src="js/kalkulator.js"> </script>
<script src="js/storage.js"> </script>
</body>
</html>