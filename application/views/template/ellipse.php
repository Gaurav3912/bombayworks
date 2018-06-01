<h3 class="stepHeadline">Step 2 : Insert your value</h3>
<p>You have selected eclipse please input required values.</p>
<form>
    <input type="hidden" name="shape" value="ellipse">
    <input type="hidden" name="action" value="claculateArea">
    <div class="form-group row no-gutters">
        <label for="eclipseMajorRadius" class="col-sm-3 col-xs-12">Major Radius</label>
        <input type="text" class="form-control col-sm-9 col-xs-12" id="ellipseMajorRadius" name="ellipseMajorRadius" placeholder="Ellipse Major Radius">
    </div>
    <div class="form-group row no-gutters">
        <label for="eclipseMinorRadius" class="col-sm-3 col-xs-12">Minor Radius</label>
        <input type="text" class="form-control col-sm-9 col-xs-12" id="ellipseMinorRadius" name="ellipseMinorRadius" placeholder="Ellipse Minor Radius">
    </div>
    
</form>
<div class="buttonBar">

    <button type="button" class="btn btn-secondary" onclick="calculateArea(this)">Go to step 3</button> or <button type="button" class="btn" onclick="getShapeTemplate()">cancel</button>
</div>