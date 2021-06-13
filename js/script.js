
// -----------------------add buttons----------------

$(".add-chronic").click(function() {
	$(".ChronicAddBtnHidden").toggle();
	$(".add-chronic").toggle();
	$(".delete-chronic").toggle();
});

$(".add-drug").click(function() {
	$(".DrugAddBtnHidden").toggle();
	$(".add-drug").toggle();
	$(".delete-drug").toggle();
});

$(".add-food").click(function() {
	$(".FoodAddBtnHidden").toggle();
	$(".add-food").toggle();
	$(".delete-food").toggle();
});

$(".add-medicine").click(function() {
	$(".MedicineAddBtnHidden").toggle();
	$(".add-medicine").toggle();
	$(".delete-medicine").toggle();
});

// --------------delete buttons---------------

$(".delete-chronic").click(function() {
	$(".ChronicDeleteBtnHidden").toggle();
	$(".delete-chronic").toggle();
	$(".add-chronic").toggle();
});

$(".delete-drug").click(function() {
	$(".DrugDeleteBtnHidden").toggle();
	$(".delete-drug").toggle();
	$(".add-drug").toggle();
});

$(".delete-food").click(function() {
	$(".FoodDeleteBtnHidden").toggle();
	$(".delete-food").toggle();
	$(".add-food").toggle();
});

$(".delete-medicine").click(function() {
	$(".MedicineDeleteBtnHidden").toggle();
	$(".delete-medicine").toggle();
	$(".add-medicine").toggle();
});

// --------------add back buttons---------------

$(".add-chronic-back").click(function() {
	$(".ChronicAddBtnHidden").toggle();
	$(".add-chronic").toggle();
	$(".delete-chronic").toggle();
});

$(".add-drug-back").click(function() {
	$(".DrugAddBtnHidden").toggle();
	$(".add-drug").toggle();
	$(".delete-drug").toggle();
});

$(".add-food-back").click(function() {
	$(".FoodAddBtnHidden").toggle();
	$(".add-food").toggle();
	$(".delete-food").toggle();
});

$(".add-medicine-back").click(function() {
	$(".MedicineAddBtnHidden").toggle();
	$(".add-medicine").toggle();
	$(".delete-medicine").toggle();
});

// --------------delete back buttons---------------

$(".delete-chronic-back").click(function() {
	$(".ChronicDeleteBtnHidden").toggle();
	$(".delete-chronic").toggle();
	$(".add-chronic").toggle();
});

$(".delete-drug-back").click(function() {
	$(".DrugDeleteBtnHidden").toggle();
	$(".delete-drug").toggle();
	$(".add-drug").toggle();
});

$(".delete-food-back").click(function() {
	$(".FoodDeleteBtnHidden").toggle();
	$(".delete-food").toggle();
	$(".add-food").toggle();
});

$(".delete-medicine-back").click(function() {
	$(".MedicineDeleteBtnHidden").toggle();
	$(".delete-medicine").toggle();
	$(".add-medicine").toggle();
});

// ---------------profile btns---------------

$("#editbackbtn").click(function() {
	$(".formRow").toggle();
	$(".displayInfo").toggle();
});

$("#btnEdit").click(function() {
	$(".formRow").toggle();
	$(".displayInfo").toggle();
});
