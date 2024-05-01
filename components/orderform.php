<form action="dborders.php" method="POST" enctype="multipart/form-data" class="orderForm">
    <h2>SugarSparkles</h2>
    <label>Customer Name :</label>
    <input type="text" name="customername" placeholder="Name"><br>
    <br>
    <label>Line on top :</label>
    <input type="text" name="line" placeholder="Line"><br>
    <br>
    <label>Upload your design :</label>
    <input type="file" name="file">
    <br>
    <label>Describe your design :</label>
    <textarea name="details"></textarea>
    <br> 
    <label>Flavour :</label>
    <select name="flavour">
        <option value="Vanilla">Vanilla</option>
        <option value="Chocolate">Chocolate</option>
        <option value="Butterscotch">Butterscotch</option>
        <option value="Rashmalai">Rashmalai</option>
        <option value="Strawberry">Strawberry</option>
        <option value="Blueberry">Blueberry</option>
        <option value="Mango">Mango</option>
        <option value="Lemon">Lemon</option>
    </select>
    <br>
    <label>Contact : </label>
    <input type="number" name="contact" placeholder="Contact"><br>
    <br>
    <br>
    <button class="ABC" type="submit" name="submit"> <i class="fa-solid fa-right-to-bracket fa-fade" style="color: #ffffff;"></i>   Submit</button>
</form>