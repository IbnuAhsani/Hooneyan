<!DOCTYPE html> 
<html> 
<head> 
 <title>Latihan 7 Praktikum PW</title>   
   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
   <style> 
  table, th, td  
   { 
       border: 1px solid black; 
   } 
 </style> 
 <div align="center"> 
</head> 
<body> 
  <br> 
  <h3> Kuis </h3> 
  <br> 
  <table class = "table"> 
    <tr> 
      <th>ID</th> 
      <th>Name</th> 
      <th>Email</th> 
    </tr> 
   <tr> 
   <script> 
    $(document).ready(function() 
     { 
        $.ajax( 
         { 
          url: "http://localhost/CI/index.php/Welcome/index", 
          success: function(data)  
         { 
           var tr = data.report 
            for (var i = 0; i < data.length; i++)  
             { 
              tr = $('<tr/>'); 
              tr.append("<td>" + data[i].id + "</td>"); 
              tr.append("<td>" + data[i].name + "</td>"); 
              tr.append("<td>" + data[i].email + "</td>"); 
              $('.table').append(tr); 
             } 
         } 
        }); 
     }); 
   </script> 
</body> 
</html>