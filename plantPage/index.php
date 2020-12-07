<!DOCTYPE html>
<html>
<head>
<title>Plantae! - Lar da botânica</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/v4-shims.css">
<link href="./fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet">
<link rel="icon" type="image/png" href="../src/favicon.png"/>
<link rel="stylesheet" href="../navBar/navbar.css">
<link rel="stylesheet" href="comments/style.css">
</head>

<div class="plantpage">
    <?php include '../navBar/navbar.php'?> 
    <article>
        <div class="left-side">
            <div class="textDiv">
                <h1>Nome da Planta</h1>
                <h3>Nome Cient</h3>
            </div>

            <div class="photoDiv">
                <div class="photo">
                    <img src="">
                </div>
            </div>
        </div>
            
        <div class="right-side">
            <div class="infos">

                <div class="option">
                    <div class="first">
                        <p class="title">Option</p>
                        <p class="subtitle">Solo</p>
                    </div>
                    <div class="others">
                        <form action="#">
                            <div class="nextOption">
                                <input type="radio" name="radio-group" id="id1"><label for="id1">Option 2</label>
                            </div>    
                            <div class="nextOption">
                                <input type="radio" name="radio-group" id="id2"><label for="id2">Option 2</label>
                            </div>  
                        </form>    
                    </div>
                </div>  

                <div class="option">
                    <div class="first">
                        <p class="title">Option</p>
                        <p class="subtitle">Solo</p>
                    </div>
                    <div class="others">
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id3"><label for="id3">Option 2</label>
                        </div>    
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id4"><label for="id4">Option 2</label>
                        </div>  
                    </div>
                </div>  

                <div class="option">
                    <div class="first">
                        <p class="title">Option</p>
                        <p class="subtitle">Solo</p>
                    </div>
                    <div class="others">
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id5"><label for="id5">Option 2</label>
                        </div>    
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id6"><label for="id6">Option 2</label>
                        </div>    
                    </div>
                </div>  
                
                <div class="option">
                    <div class="first">
                        <p class="title">Option</p>
                        <p class="subtitle">Solo</p>
                    </div>
                    <div class="others">
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id7"><label for="id7">Option 2</label>
                        </div>    
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id18"><label for="id8">Option 2</label>
                        </div>   
                    </div>
                </div>  

                <div class="option">
                    <div class="first">
                        <p class="title">Option</p>
                        <p class="subtitle">Solo</p>
                    </div>
                    <div class="others">
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id9"><label for="id9">Option 2</label>
                        </div>    
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id10"><label for="id10">Option 2</label>
                        </div>  
                    </div>
                </div>  

                <div class="option">
                    <div class="first">
                        <p class="title">Option</p>
                        <p class="subtitle">Solo</p>
                    </div>
                    <div class="others">
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id1"><label for="id1">Option 2</label>
                        </div>    
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id2"><label for="id2">Option 2</label>
                        </div>   
                    </div>
                </div>  

                <div class="option">
                    <div class="first">
                        <p class="title">Option</p>
                        <p class="subtitle">Solo</p>
                    </div>
                    <div class="others">
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id1"><label for="id1">Option 2</label>
                        </div>    
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id2"><label for="id2">Option 2</label>
                        </div>  
                    </div>
                </div>  

                <div class="option">
                    <div class="first">
                        <p class="title">Option</p>
                        <p class="subtitle">Solo</p>
                    </div>
                    <div class="others">
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id1"><label for="id1">Option 2</label>
                        </div>    
                        <div class="nextOption">
                            <input type="radio" name="radio-group" id="id2"><label for="id2">Option 2</label>
                        </div>  
                    </div>
                </div>  



            <div>
        </div>
    </article>
</div>

<?php include 'comments/index.php'?>

<script>
var coll = document.getElementsByClassName("first");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("others");
    var others = this.nextElementSibling;
    if (others.style.display === "block") {
        others.style.display = "none";
    } else {
        others.style.display = "block";
    }
  });
}
</script>