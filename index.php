<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 
      include 'Animal.php';
      include 'Dog.php';
      

      // set a attribute name and breed for dog1 object 
      // $dog1->name = "Marley";
      // $dog1->breed = "boxer";

      // $dog2->set_name = "Milo";
      // $dog2->set_breed = "German Shepard";

      $dog3 = new Dog("Bella", 4, "grey", "Chihuahua");
      // echo $dog3->name;
      echo $dog3->get_name();
       // var_dump function added to output the dog1 object. 
      var_dump($dog3);
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