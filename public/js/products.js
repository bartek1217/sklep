function change_product_quantity_add(id) {
    var quantity = parseFloat($("#product_quantity_" + id).val()) + parseFloat(1);
    $("#product_quantity_" + id).val(quantity);
}

function change_product_quantity_subtract(id) {
    var quantity = parseFloat($("#product_quantity_" + id).val()) - parseFloat(1);
    if (parseFloat(quantity) > 0) {
        $("#product_quantity_" + id).val(quantity);
    }
    else {
        $("#product_quantity_" + id).val(1);
    }
}

function change_product_quantity(id) {
    if ((parseFloat($("#product_quantity_" + id).val()) < 1) || !$.isNumeric(parseFloat($("#product_quantity_" + id).val()))) {
        $("#product_quantity_" + id).val('1');
    }
}

function add_to_basket(id) {
    var product_quantity = $("#product_quantity_" + id).val();
    $.ajax({
        url: "/basket/add",
        dataType: "json",
        data: { id, product_quantity },
        success: function (data) {
            $('#basket_price').text(data);
            alert('Twój produkt został dodany do koszyka!');
        },
        error: function (data) {
            console.log(data);
            alert('Nie możesz zamówić ilości produktów więksszej niż jest dostępne.');
        }
    });
}