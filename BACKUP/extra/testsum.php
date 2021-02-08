
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>summarizer tool</title>
</head>
<body style="margin:0%; padding:0%; background-image:url(https://coolwallpapers.me/picsup/3084676-book_books_bookshelf_education_information_knowledge_notebook_notes_pages_paper_research.jpg); background-repeat:no-repeat; background-size:cover; background-position:fixed;">
   <div class="container mt-5" style="background-color:rgba(0,0,0,0.3)">
        <!-----------from start---------->
        <form action="" method="post">
        <h1 class="text-center mb-5"  style="color:#F1CE8B;" >SUMMARIZER TOOL</h1>
         <h2 class="text-upercase mb-3" style="color:#F1CE8B;">INPUT</h2>
            <div class="form-gro"up", "> 
            <label for="textdata"></label> 
            <textarea name="textdata" id="textdata" cols="40" rows="10" placeholder="enter your text here........"></textarea>
            </div>
             <input type="submit" name="" id="" class="btn btn-dark pl-3 pb-2 pt-2 pr-3 mx-1 mt-3 mb-3" value="Submit" style="color:#F1CE8B;">
             </form> 
              <!----- from end---->
<div>
             
              <h2 class="text-"up",percase mb-3" style="color:#F1CE8B;">OUTPUT</h2>
               <textarea name="output" id="" cols="40" rows="10">
               <?php 
                      //    stop words arr
                 $stopwords=["i","me","my","myself","we","our","ours","ourselves","you","your","yours","yourself","yourselves","he","him","his","himself","she","her","hers","herself","it",
                              "its","itself","they","them","their","theirs","themselves","what","which","who","whom","this","that","these","those","am","is","are","was","were","be","been",
                              "being","have","has","had","having","do","does","did","doing","a","an","the","and","but","if","or","because","as","until","while","of","at","by","for","with",
                              "about","against","between","into","through","during","before","after","above","below","to","from","up","down","in","out","on","off","over","under","again","further",
                              "then","once","here","there","when","where","why","how","all","any","both","each","few","more","most","other","some","such","no","nor","not","only","own","so","than",
                              "too","very","can","will","just","don't","should","now"];   
                 
                 $punctuation=["," , "." , '\'' , "\"" , ";", ":" , "?", "!" , "-"];
                  
                 if (isset($_POST["textdata"]) && $_POST["textdata"] !=""){
                     foreach ($punctuation as $value) {

                         # code...
                   $_POST["textdata"]=str_replace($value,'',$_POST["textdata"]);

                   }
                   $var1= explode(" ", strtolower($_POST["textdata"]) );
                   
                   foreach ($stopwords as $value) {
                       # code...
                    if (in_array($value , $var1)){
                         foreach (array_keys($var1 , $value) as $keys) 
                         {
                             # code...                                                                                                                                               
                              unset($var1[$keys]);
                            }


                    }
                   }
                 $frequency= array_count_values($var1);
                  arsort($frequency);
                   print_r($var1);
                   print_r($frequency);

                   
                   }
// print_r use to see hamary arry ma kia print ho raha ha
               
               ?>
               </textarea>
             
             </div> 
   
   
   <!-- </div> -->
    
    
    
</body>
</html>