let flags = document.querySelectorAll(".flag");
flags.forEach(function (flag) {
  flag.addEventListener("click", function () {
    let modalId = "myModal" + flag.dataset.id;
    const myModal = new bootstrap.Modal(document.getElementById(modalId));
    myModal.show();
  });
});


