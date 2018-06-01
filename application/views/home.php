<div class="row justify-content-center box">
    <div class="col-sm-5 col-xs-12">
        <h3>Welcome to shape calculator</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a</p>
    </div>
    <div class="col-sm-5 col-xs-12">
        <div class="canvas">
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
                            <input type="radio" class="form-check-input" name="shape" id="ellipse" value="ellipse">
                            Ellipse
                        </label>
                    </div>

                </fieldset>
            </form>
            <div class="buttonBar">

                <button type="button" class="btn btn-secondary" onclick="getDimentionTemplate(this)">Go to step 2</button> 
            </div>
        </div>
    </div>
    <div class="col-sm-2 col-xs-12 adSection"><img src="<?php echo base_url('includes/images/adVertical.png') ?>" class="img img-fluid"></div>
</div>
