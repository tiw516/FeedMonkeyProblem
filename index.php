<!doctype html>
<html lang="en">


<body>

  <div class="container mt-5">
    <form id="numberInput" action="" method="post" enctype="multipart/form-data" class="mb-3">
    <label for="banana">Banana:</label>
    <input type="number" id="banana" name="banana">
    <label for="apple">Apple:</label>
    <input type="number" id="apple" name="apple">
    <input type="submit">
    </form>
    <div id="result"></div>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
   document.getElementById("numberInput").addEventListener("submit", (e) => {
    e.preventDefault();
    var bananaNumber = parseInt(document.getElementById('banana').value, 10);   
    var appleNumber = parseInt(document.getElementById('apple').value, 10);   
    
    var nestedArray = new Array(bananaNumber);

    for (var i = 0; i < nestedArray.length; i++) {
      nestedArray[i] = new Array(appleNumber);
    }

    for(var i = 0; i < nestedArray.length; i++) {
      for(var j = 0; j < nestedArray[i].length; j++) {
        nestedArray[i][j] = false;
      }
    }

    var feedNum = 0;

    for(var i = 0; i < nestedArray.length; i++) {
      for(var j = 0; j < nestedArray[i].length; j++) {

        console.log("num", i, j);
        console.log("fruit", bananaNumber, appleNumber);


        if (bananaNumber - i >= 0 && appleNumber - j >= 0 && nestedArray[i][j] == false)
        {
          console.log("in");
          console.log("num", i, j);
          nestedArray[i][j] = true;
          feedNum++;
          bananaNumber = bananaNumber - i;
          appleNumber = appleNumber - j;
        }

        console.log("out");
        console.log("fruit", bananaNumber, appleNumber);

        if (bananaNumber == 0 && appleNumber == 0)
        {
          break;
        }
      }
    }

    return document.getElementById("result").innerHTML="Here are the numbers: " + (feedNum-1);

   });  

  </script>

  
</body>

</html>