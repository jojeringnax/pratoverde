$(document).ready( function() {
    var ingredientsForm = $('select#ingredients');
    $('div.ingredient').click( function() {
        var ingredientNameDiv = $(this);
        var inputsWrapper = $(this).next('div.quantity_unit_wrapper');
        var inputQuantity = inputsWrapper.children('input.quantity');
        var inputUnit = inputsWrapper.children('input.unit');
        var ingredientNameAndQuanAndUnit = ingredientNameDiv.html() + ' - ' + inputQuantity.val() + ' ' + inputUnit.val();
        var optionNeed = ingredientsForm.children('option#' + ingredientNameDiv.html());
        var valueForIngredientsFull = ingredientNameDiv.html() + ',' + inputQuantity.val() + ',' + inputUnit.val();

        inputsWrapper.children().change( function() {
            valueForIngredientsFull = ingredientNameDiv.html() + ',' + inputQuantity.val() + ',' + inputUnit.val();
            ingredientNameAndQuanAndUnit = ingredientNameDiv.html() + ' - ' + inputQuantity.val() + ' ' + inputUnit.val();
            ingredientsForm.children('option#' + ingredientNameDiv.html()).val(valueForIngredientsFull);
            ingredientsForm.children('option#' + ingredientNameDiv.html()).html(ingredientNameAndQuanAndUnit);
        });

        if (ingredientNameDiv.hasClass('active')) {
            ingredientNameDiv.removeClass('active');
            inputQuantity.prop('disabled', true);
            inputUnit.prop('disabled', true);
            optionNeed.remove();
        } else {
            ingredientNameDiv.addClass('active');
            inputQuantity.prop('disabled', false);
            inputUnit.prop('disabled', false);
            ingredientsForm.append('<option id="' + ingredientNameDiv.html() + '" value="' + valueForIngredientsFull + '" selected>' + ingredientNameAndQuanAndUnit + '</option>');
        }
    });

});