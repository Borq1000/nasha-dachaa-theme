// Старый вариант
$("#zaezdModal").modal("hide");

// Новый вариант для Bootstrap 5
let zaezdModal = bootstrap.Modal.getInstance(
  document.getElementById("zaezdModal")
);
zaezdModal.hide();
