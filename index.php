<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 
      require_once 'Dog.php';
      

      // set a attribute name and breed for dog1 object 
      // $dog1->name = "Marley";
      // $dog1->breed = "boxer";

      $dog2->set_name = "Milo";
      $dog2->set_breed = "German Shepard";
      
    
       // var_dump function added to output the dog1 object. 
      var_dump($dog2);
      // $dog1-> display();
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