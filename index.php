<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usman Khan Assignment 5</title>
        <link rel="stylesheet"type="text/css" href=style.css>
    </head>
    <body>
        <h1>Assignment 5</h1>
        <h1>SYST10199 – Web Programming</h1>
        <h1>Instructor: Sukhbir Tatla</h1>
        <h1>Usman Khan</h1>
        <hr><br>
        <h1>Welcome to Tim Hortons</h1>
        <img src="tims.png" alt="tim hortons img." width="200" heigt="121">
        <p>Give us some numbers.....</p>
        <form action="order.php" method="post">
            <label for="size">Choose a Size:</label>
            <select name="size" id="size">
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value= "xLarge">Extra Large</option>
            </select><br><br>
            Number of coffees <input type="number" name="coffee" min="1">
            <span></span><br><br>
            How many creams<input type="number" name="creams" min="0">
            <span></span><br><br>
            How many sugars<input type="number" name="sugar" min="0">
            <span></span><br><br>
            <input type="submit" value="Order Coffee">
        </form>
    </body>
</html>