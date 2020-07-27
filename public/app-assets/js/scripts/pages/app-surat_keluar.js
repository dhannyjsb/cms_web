/*=========================================================================================
    File Name: app-user.js
    Description: User page
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {
  var isRtl;
  if ($("html").attr("data-textdirection") == "rtl") {
    isRtl = true;
  } else {
    isRtl = false;
  }
  bsCustomFileInput.init();

  //  Rendering badge in status column
  var customBadgeHTML = function (params) {
    var color = "";
    if (params.value == "active") {
      color = "success";
      return (
        "<div class='badge badge-pill badge-light-" +
        color +
        "' >" +
        params.value +
        "</div>"
      );
    } else if (params.value == "blocked") {
      color = "danger";
      return (
        "<div class='badge badge-pill badge-light-" +
        color +
        "' >" +
        params.value +
        "</div>"
      );
    } else if (params.value == "deactivated") {
      color = "warning";
      return (
        "<div class='badge badge-pill badge-light-" +
        color +
        "' >" +
        params.value +
        "</div>"
      );
    }
  };

  //SUBMIT PROFILE

  //RADIO
});

(function (window, document, $) {
  "use strict";

  // Date dd/mm/yyyy
  $(".date-inputmask").inputmask("dd/mm/yyyy");

  //Phone mask
  $(".phone-inputmask").inputmask("(999) 9999-9999");

  // Another Date mm-dd-yyyy
  $(".international-inputmask").inputmask("+9(999)999-9999");

  //Phone with extra
  $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999");

  // Purchase Order
  $(".purchase-inputmask").inputmask("aaaa 9999-****");

  // Credit Card Number
  $(".cc-inputmask").inputmask("9999 9999 9999 9999");

  // SSN
  $(".ssn-inputmask").inputmask("999-99-9999");

  $(".tahun_pelajaran-inputmask").inputmask("9999/9999");
  // ISBN
  $(".isbn-inputmask").inputmask("999-99-999-9999-9");

  // Currency in USD
  $(".currency-inputmask").inputmask("$9999");

  // Percentage
  $(".percentage-inputmask").inputmask("99%");

  // Decimal
  $(".decimal-inputmask").inputmask({
    alias: "decimal",
    radixPoint: ".",
  });

  // Email mask
  $(".email-inputmask").inputmask({
    mask:
      "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
    greedy: false,
    onBeforePaste: function (pastedValue, opts) {
      pastedValue = pastedValue.toLowerCase();
      return pastedValue.replace("mailto:", "");
    },
    definitions: {
      "*": {
        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
        cardinality: 1,
        casing: "lower",
      },
    },
  });

  // Optional Mask
  $(".optional-inputmask").inputmask("(99) 9999[9]-9999");

  // JIT Masking
  $(".jit-inputmask").inputmask("mm-dd-yyyy", {
    jitMasking: true,
  });

  // Oncomplete
  $(".oncomplete-inputmask").inputmask("d/m/y", {
    oncomplete: function () {
      alert("inputmask complete");
    },
  });

  // Onincomplete
  $(".onincomplete-inputmask").inputmask("d/m/y", {
    onincomplete: function () {
      alert("inputmask incomplete");
    },
  });

  // Oncleared
  $(".oncleared-inputmask").inputmask("d/m/y", {
    oncleared: function () {
      alert("inputmask cleared");
    },
  });
})(window, document, jQuery);
