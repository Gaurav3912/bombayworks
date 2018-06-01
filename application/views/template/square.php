<h3 class="stepHeadline">Step 2 : Insert your value</h3>
<p>You have selected square please input required values.</p>
<form>
    <input type="hidden" name="shape" value="square">
    <input type="hidden" name="action" value="claculateArea">
    <div class="form-group row no-gutters">
        <label for="squareWidth" class="col-sm-3 col-xs-12">Square Width</label>
        <input type="text" class="form-control col-sm-9 col-xs-12" id="squareWidth" name="squareWidth" placeholder="Square Width">
    </div>
    
</form>
<div class="buttonBar">

    <button type="button" class="btn btn-secondary" onclick="calculateArea(this)">Go to step 3</button> or <button type="button" class="btn" onclick="getShapeTemplate()">cancel</button>
</div>
