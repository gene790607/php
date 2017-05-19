<?php
if($X = $_GET['xx']){
    $X = $_GET['xx'];
    $Y = $_GET['yy'];
    $r = $X + $Y;
    $r = $X + $Y;
    //echo " $X + $Y = $r";
}
?>

<form>
    <input type="text" name="xx" id="x" value="<?php echo $X ?>">
    <select>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="yy" id="y" value="<?php echo $Y ?>">
    <input type="submit" value="=" >
    <?php
        echo $r;
    ?>
</form>



