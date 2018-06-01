<h3 class="stepHeadline">Step 1 : Select your shape</h3>
<p>Please select the shape that you would like to calculate the area of and press the button "Go to step 2"</p>
<form id="selectShapeForm">
    <fieldset class="form-group">

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="shape" id="rectangle" value="rectangle" checked>
                Rectangle
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="shape" id="circle" value="circle">
                Circle
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="shape" id="square" value="square">
                Square
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="shape" id="eclipse" value="ellipse">
                Ellipse
            </label>
        </div>

    </fieldset>
</form>
<div class="buttonBar">

    <button type="button" class="btn btn-secondary" onclick="getDimentionTemplate(this)">Go to step 2</button> 
</div>