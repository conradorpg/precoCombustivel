<?php

// <-- Incluindo a conexão no processo -->

    include_once("connect.php");

    //$dados = $_FILES['arquivo'];
    //var_dump($dados);

    if(!empty($_FILES['arquivo'] ['tmp_name'])) {
        $arquivo = new DomDocument();
        $arquivo->load($_FILES['arquivo'] ['tmp_name']);
        //var_dump($arquivo);
        
        $linhas = $arquivo->getElementsByTagName("Row"); 
        //var_dump($linhas);
        
        $primeira_linha = true;
        
        foreach($linhas as $linha) {
            
           if($primeira_linha == false) {
            
               $fornecedor = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
               echo "Fornecedor: $fornecedor <br>";
               echo "<br>";        

               $bandeira = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
               echo "Bandeira: $bandeira <br>";
               echo "<br>";

               $endereco = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
               echo "Endereço: $endereco <br>";
               echo "<br>";

               $diesel = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
               echo "diesel: $diesel <br>";
               echo "<br>";

               $diesels10 = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
               echo "Diesel S-10: $diesels10 <br>";
               echo "<br>";

               $diesels10adt = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
               echo "Diesel S-10 Aditivada: $diesels10adt <br>";
               echo "<br>";

               $etanol = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
               echo "Etanol: $etanol <br>";
               echo "<br>";

               $etanoladt = $linha->getElementsByTagName("Data")->item(7)->nodeValue;
               echo "Etanol Aditivado: $etanoladt <br>";
               echo "<br>";

               $gasolina = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
               echo "Gasolina: $gasolina <br>";
               echo "<br>";

               $gasolinaadt = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
               echo "Gasolina: $gasolinaadt <br>";
               echo "<br>";  
               
               // <-- Incluir fornecedor no banco de dados -->
               
                $incluir_fornecedor = "INSERT INTO postos_combustivel (fornecedor, bandeira, endereco, diesel, diesels10, diesels10adt, etanol, etanoladt, gasolina, gasolinaadt) VALUES ('$fornecedor', '$bandeira', '$endereco', '$diesel', '$diesels10', '$diesels10adt', '$etanol', '$etanoladt', '$gasolina', '$gasolinaadt')";
               
                $incluir_fornecedor = mysqli_query($conn, $incluir_fornecedor);
               
                              
            } // <-- if($primeira_linha == false) -->
            
               $primeira_linha = false;
        
        } // <-- foreach($linhas as $linha) -->
        
    } // <-- if(!empty($_FILES['arquivo'] ['tmp_name'])) -->
?>
