<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Quiz Application</title>
      <style>
      body{
            background: cornsilk;
            margin : 0;
            
      }
      h1{
            background-color:black;
            text-align:center;
            color:lightcoral;
            padding:10px;
            font-size:40px;
            margin-left:360px;
            margin-right:360px;
            border-radius:10px;
      }
      h2{
            background-color:black;
            text-align:center;
            color:lightcoral;
            padding:10px;
            font-size:40px;
            margin-left:500px;
            margin-right:500px;
            border-radius:17px;
            margin-bottom:100px;
      }
      input[type="radio"]{
            display: inline-flex;
            padding-right:12px;
            cursor:pointer;
            border: 2px solid white;
            border-radius: 100%;
      }
      
      div{
            margin-left: 200px;
      }
      p{
            font-weight:bold;
            font-size:24px;
      }
      #results{
           padding: auto;
      }  
      .bottom{
	background-color: black;
	color: white;
      
      } 
      .low-container{
	width:40%;
	overflow: hidden;
      padding-left: 120px;
	text-align: right;
      
      
	}  
      
      input[type="text"]{
            display: flex;
            padding:10px;
            padding-right:30px;
            
            border: 2px solid black;
            
      }
     
      </style>
</head>
<body>
  <section>
      
      <h1>Test Your Knowledge</h1>
      
      </section>
       <h2>PHP&HTML Quiz</h2> 
<div>
 <form action="index.php" method="POST" id="quiz">
     <p>1.HTML tags are enclosed in-</p>
     a.<input type="radio" name="q1" value="a" required># and # <br>
     b.<input type="radio" name="q1" value="b" required>, and ? <br>
     c.<input type="radio" name="q1" value="c"required>( and ) <br>
     d.<input type="radio" name="q1" value="d" required>< and > <br> <br>
     <div>
     <aside style="float:right;width:35%; background-color: black;color: crimson;padding:40px;text-align:left;font-size:20px;margin-right:50px;border-radius:10px;">
      The Score:
      <?php
      if (isset($_POST['submit'])){
     error_reporting(0);
     $q1=$_POST['q1'];
     $q2=$_POST['q2'];
     $q3=$_POST['q3'];
     $q4=$_POST['q4'];
     $q5=$_POST['q5'];
     $q6=$_POST['q6'];
     $q7=$_POST['q7'];
     $q8=$_POST['q8'];
    
     
     $q9=$_POST['q9'];
     $q10=$_POST['q10'];
         
     $totalCorrect = 0;
            
            if ($q1 == "d") { $totalCorrect++; }
            if ($q2 == "b") { $totalCorrect++; }
            if ($q3 == "b") { $totalCorrect++; }
            if ($q4 == "b") { $totalCorrect++; }
            if ($q5 == "c") { $totalCorrect++; }
            if ($q6 == "Hypertext Preprocessor") { $totalCorrect++; }
            if ($q7 == "Hypertext Markup Language") { $totalCorrect++; }
            
           if ($q8 == "b") { $totalCorrect++; } 

            if ($q9 == "<b>") { $totalCorrect++; }
            
            if ($q10 == "c") { $totalCorrect++; }
      echo "<div id='results'>$totalCorrect/10</div>";
      }
            
     ?>
      </aside>
      
     </div>
     <p>2.The < hr > tag in HTML is used for-</p>
     a.<input type="radio" name="q2" value="a" required>paragraph <br>
     b.<input type="radio" name="q2" value="b" required>horizontal ruler<br>
     c.<input type="radio" name="q2" value="c" required>vertical ruler <br>
     d.<input type="radio" name="q2" value="d" required>line braek <br> <br>
     
     <p>3.Which tag is used for the largest heading in HTML?</p>
     a.<input type="radio" name="q3" value="a" required> < h3 > <br>
     b.<input type="radio" name="q3" value="b" required> < h1 > <br>
     c.<input type="radio" name="q3" value="c" required> < h5 > <br>
     d.<input type="radio" name="q3" value="d" required> < h6 > <br>
     <P>4.Which of the following is the paragraph tag in HTML?</P>
     a.<input type="radio" name="q4" value="a" required> < b > <br>
     b.<input type="radio" name="q4" value="b" required> < p > <br>
     c.<input type="radio" name="q4" value="c"required> < par > <br>
     d.<input type="radio" name="q4" value="d" required> None of the above <br> <br>
     <p>5.Which of the following is the break tag in HTML?</p>
     a.<input type="radio" name="q5" value="a" required> < p > <br>
     b.<input type="radio" name="q5" value="b" required> < pre > <br>
     c.<input type="radio" name="q5" value="c" required> < br > <br>
     d.<input type="radio" name="q5" value="d" required> < b > <br> <br>
     <p>6.What PHP stands for?</p>
     <input type="text" name="q6" required> <br> <br>
     <p>7.What HTML stands for?</p>
     <input type="text" name="q7" required> <br> <br>
     <p>8.Variable name in PHP starts with -</p>
      a.<input type="radio" name="q8" value="a">! (Exclamation)<br>
     b.<input type="radio" name="q8" value="b">$ (Dollar)<br>
     c.<input type="radio" name="q8" value="c">& (Ampersand)<br>
     d.<input type="radio" name="q8" value="d"># (Hash)<br> <br>
     <p>9.Write the tag which represent bold text.</p>
     <input type="text" name="q9" required> <br> <br>
     <p>10.Which HTML tag do not need a cloosing tag?</p>
     a.<input type="radio" name="q10" value="a"  required>< img ><br> 
     b.<input type="radio" name="q10" value="b" required>method<br> 
     c.<input type="radio" name="q10" value="c" required>both a & b<br> 
     d.<input type="radio" name="q10" value="d" required>none of the above<br> <br> 
      <br>
     <input type="submit" name="submit" value="Submit" style="width:15%; background-color: saddlebrown;color: white;padding:10px;text-align:center;font-size:20px;margin-bottom:40px;cursor:pointer;border-radius:10px;">
    
     </form>

     </div>

     </div>
     
     <section class="bottom">
           <div class="low-container">
           <h5>Copyright © 2020 JEBA FAWJIA. All Right Reserved</h5>
    </div>
     </section>
    
     
</body>
</html>