<h3 class="stepHeadline">Step 2 : Insert your value</h3>
<p>You have selected circle please input required values.</p>
<form>
    <input type="hidden" name="shape" value="circle">
    <input type="hidden" name="action" value="claculateArea">
    <div class="form-group row no-gutters">
        <label for="circleRadius" class="col-sm-3 col-xs-12">Circle Radius</label>
        <input type="text" class="form-control col-sm-9 col-xs-12" id="circleRadius" name="circleRadius" placeholder="Circle Radius">
    </div>

</form>
<div class="buttonBar">

    <button type="button" class="btn btn-secondary" onclick="calculateArea(this)">Go to step 3</button> or <button type="button" class="btn" onclick="getShapeTemplate()">cancel</button>
</div>


