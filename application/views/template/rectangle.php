<h3 class="stepHeadline">Step 2 : Insert your value</h3>
<p>You have selected rectangle please input required values.</p>
<form>
    <input type="hidden" name="shape" value="rectangle">
    <input type="hidden" name="action" value="claculateArea">
    <div class="form-group row no-gutters">
        <label for="rectangleLength" class="col-sm-3 col-xs-12">Rectangle Length</label>
        <input type="text" class="form-control col-sm-9 col-xs-12" id="rectangleLength" name="rectangleLength" placeholder="Rectangle Length">
    </div>
    <div class="form-group row no-gutters">
        <label for="formGroupExampleInput2" class="col-sm-3 col-xs-12">Rectangle Width</label>
        <input type="text" class="form-control col-sm-9 col-xs-12" id="rectangleWidth" name="rectangleWidth" placeholder="Rectangle Width">
    </div>
</form>
<div class="buttonBar">

    <button type="button" class="btn btn-secondary" onclick="calculateArea(this)">Go to step 3</button> or <button type="button" class="btn" onclick="getShapeTemplate()">cancel</button>
</div>