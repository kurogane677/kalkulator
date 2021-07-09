<!DOCTYPE html>
<html>
 
<head>
   <!-- <title>Session Storage</title> -->
   <title>Local Storage</title>
</head>
 
<body>
   <p>Anda sudah menekan tombol sebanyak <span id="count"></span> kali</p>
   <button id="button">Click Disini!</button>
   <button id="clear">Hapus Storage</button>
 
   <script>
       const cacheKey = "NUMBER";
       if (typeof(Storage) !== "undefined") {
 
           //Local Storage
           if (localStorage.getItem(cacheKey) === "undefined") {
               // Jika belum maka akan atur dengan nilai awal yakni 0
               localStorage.setItem(cacheKey, 0);
            }

           const button = document.querySelector("#button");
           const clearButton = document.querySelector("#clear")
           const count = document.querySelector("#count");
           button.addEventListener('click', function(event) {
               let number = localStorage.getItem(cacheKey);
               number++;
               localStorage.setItem(cacheKey, number);
               count.innerText = localStorage.getItem(cacheKey);
            });
            
            clearButton.addEventListener('click', function(event) {
                localStorage.removeItem(cacheKey);
            });
            
            //Session Storage
            // pengecekkan apakah data sessionStorage dengan key NUMBER tersedia atau belum
            // if (sessionStorage.getItem(cacheKey) === "undefined") {
            //     // Jika belum maka akan atur dengan nilai awal yakni 0
            //     sessionStorage.setItem(cacheKey, 0);
            // }
            //    const button = document.querySelector("#button");
            //    const count = document.querySelector("#count");
            //    button.addEventListener('click', function(event) {
        //        let number = sessionStorage.getItem(cacheKey);
        //        number++;
        //        sessionStorage.setItem(cacheKey, number);
        //        count.innerText = sessionStorage.getItem(cacheKey);
        //    })
       } else {
           alert("Browser tidak mendukung Web Storage")
       }
   </script>
</body>
 
</html>