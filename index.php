<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 
      require_once 'Dog.php';
      $dog1 = new Dog("Marley", "boxer");

      // set a attribute name and breed for dog1 object 
      $dog1->name = "Marley";
      $dog1->breed = "boxer";
       // var_dump function added to output the dog1 obeject. 
      var_dump($dog1);
      $dog1-> display();
      /*
      // Create a write file
      $myfile = fopen("file.txt", "w");
      // Write to file 
      $txt = "Sahil\n";
      fwrite($myfile, $txt);
      $txt = "Ahmed\n";
      fwrite($myfile, $txt);
      
      fclose($myfile); 
      // append file txt. a mode means all the content is          added at the end of file. 
      $fh = fopen("file.txt", 'a');
      fwrite($fh, "is learning PHP");
      fclose($fh);
      // read file using foreach loop 
      $read = file('file.txt');
      foreach ($read as $line){
        echo $line;
      }
      */

    
?> 
    
  </body>
</html>