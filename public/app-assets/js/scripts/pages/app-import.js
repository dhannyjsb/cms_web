/*=========================================================================================
    File Name: app-user.js
    Description: User page
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {
  combo_reload();
  reload_hidden();
  var isRtl;
  if ($("html").attr("data-textdirection") == "rtl") {
    isRtl = true;
  } else {
    isRtl = false;
  }
  bsCustomFileInput.init();
  $("#combo_tahun").change(function () {
    reload_hidden();
  });
  function reload_hidden() {
    $.ajax({
      url: "tahun_pelajaran",
      method: "get",
      async: false,
      dataType: "json",
      success: function (data) {
        for (i = 0; i < data.length; i++) {
          if (data[i].tahun_status == 1) {
            $("input[name=tahun_sedang_aktif]").val(data[i].tahun_id).change();
          }
        }
      },
    });
  }
  function combo_reload() {
    $.ajax({
      url: "tahun_pelajaran",
      method: "get",
      async: true,
      dataType: "json",
      success: function (data) {
        var html = "";
        var i;
        for (i = 0; i < data.length; i++) {
          if (data[i].tahun_status == 1) {
            html +=
              "<option data-icon='fa fa-codepen' value=" +
              data[i].tahun_pelajaran +
              " selected>" +
              data[i].tahun_pelajaran +
              "</option>";
          } else {
            html +=
              "<option data-icon='fa fa-codepen' value=" +
              data[i].tahun_pelajaran +
              ">" +
              data[i].tahun_pelajaran +
              "</option>";
          }
        }
        $("#combo_tahun").html(html);
      },
    });
  }

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

  //  Rendering bullet in verified column
  var customBulletHTML = function (params) {
    var color = "";
    if (params.value == true) {
      color = "success";
      return "<div class='bullet bullet-sm bullet-" + color + "' >" + "</div>";
    } else if (params.value == false) {
      color = "secondary";
      return "<div class='bullet bullet-sm bullet-" + color + "' >" + "</div>";
    }
  };

  // Renering Icons in Actions column
  var customIconsHTML = function (params) {
    var usersIcons = document.createElement("span");
    var editIconHTML =
      "<a href='app-user-edit.html'><i class= 'users-edit-icon feather icon-edit-1 mr-50'></i></a>";
    var deleteIconHTML = document.createElement("i");
    var attr = document.createAttribute("class");
    attr.value = "users-delete-icon feather icon-trash-2";
    deleteIconHTML.setAttributeNode(attr);
    // selected row delete functionality
    deleteIconHTML.addEventListener("click", function () {
      deleteArr = [params.data];
      // var selectedData = gridOptions.api.getSelectedRows();
      gridOptions.api.updateRowData({
        remove: deleteArr,
      });
    });
    usersIcons.appendChild($.parseHTML(editIconHTML)[0]);
    usersIcons.appendChild(deleteIconHTML);
    return usersIcons;
  };

  //  Rendering avatar in username column
  var customAvatarHTML = function (params) {
    return (
      "<span class='avatar'><img src='" +
      params.data.avatar +
      "' height='32' width='32'></span>" +
      params.value
    );
  };

  // ag-grid
  /*** COLUMN DEFINE ***/

  var columnDefs = [
    {
      headerName: "ID",
      field: "id",
      width: 125,
      filter: true,
      checkboxSelection: true,
      headerCheckboxSelectionFilteredOnly: true,
      headerCheckboxSelection: true,
    },
    {
      headerName: "Username",
      field: "username",
      filter: true,
      width: 175,
      cellRenderer: customAvatarHTML,
    },
    {
      headerName: "Email",
      field: "email",
      filter: true,
      width: 225,
    },
    {
      headerName: "Name",
      field: "name",
      filter: true,
      width: 200,
    },
    {
      headerName: "Country",
      field: "country",
      filter: true,
      width: 150,
    },
    {
      headerName: "Role",
      field: "role",
      filter: true,
      width: 150,
    },
    {
      headerName: "Status",
      field: "status",
      filter: true,
      width: 150,
      cellRenderer: customBadgeHTML,
      cellStyle: {
        "text-align": "center",
      },
    },
    {
      headerName: "Verified",
      field: "is_verified",
      filter: true,
      width: 125,
      cellRenderer: customBulletHTML,
      cellStyle: {
        "text-align": "center",
      },
    },
    {
      headerName: "Department",
      field: "department",
      filter: true,
      width: 150,
    },
    {
      headerName: "Actions",
      field: "transactions",
      width: 150,
      cellRenderer: customIconsHTML,
    },
  ];

  /*** GRID OPTIONS ***/
  var gridOptions = {
    defaultColDef: {
      sortable: true,
    },
    enableRtl: isRtl,
    columnDefs: columnDefs,
    rowSelection: "multiple",
    floatingFilter: true,
    filter: true,
    pagination: true,
    paginationPageSize: 20,
    pivotPanelShow: "always",
    colResizeDefault: "shift",
    animateRows: true,
    resizable: true,
  };
  if (document.getElementById("myGrid")) {
    /*** DEFINED TABLE VARIABLE ***/
    var gridTable = document.getElementById("myGrid");

    /*** GET TABLE DATA FROM URL ***/
    agGrid
      .simpleHttpRequest({
        url: "../../../app-assets/data/users-list.json",
      })
      .then(function (data) {
        gridOptions.api.setRowData(data);
      });

    /*** FILTER TABLE ***/
    function updateSearchQuery(val) {
      gridOptions.api.setQuickFilter(val);
    }

    $(".ag-grid-filter").on("keyup", function () {
      updateSearchQuery($(this).val());
    });

    /*** CHANGE DATA PER PAGE ***/
    function changePageSize(value) {
      gridOptions.api.paginationSetPageSize(Number(value));
    }

    $(".sort-dropdown .dropdown-item").on("click", function () {
      var $this = $(this);
      changePageSize($this.text());
      $(".filter-btn").text("1 - " + $this.text() + " of 50");
    });

    /*** EXPORT AS CSV BTN ***/
    $(".ag-grid-export-btn").on("click", function (params) {
      gridOptions.api.exportDataAsCsv();
    });

    //  filter data function
    var filterData = function agSetColumnFilter(column, val) {
      var filter = gridOptions.api.getFilterInstance(column);
      var modelObj = null;
      if (val !== "all") {
        modelObj = {
          type: "equals",
          filter: val,
        };
      }
      filter.setModel(modelObj);
      gridOptions.api.onFilterChanged();
    };
    //  filter inside role
    $("#users-list-role").on("change", function () {
      var usersListRole = $("#users-list-role").val();
      filterData("role", usersListRole);
    });
    //  filter inside verified
    $("#users-list-verified").on("change", function () {
      var usersListVerified = $("#users-list-verified").val();
      filterData("is_verified", usersListVerified);
    });
    //  filter inside status
    $("#users-list-status").on("change", function () {
      var usersListStatus = $("#users-list-status").val();
      filterData("status", usersListStatus);
    });
    //  filter inside department
    $("#users-list-department").on("change", function () {
      var usersListDepartment = $("#users-list-department").val();
      filterData("department", usersListDepartment);
    });
    // filter reset
    $(".users-data-filter").click(function () {
      $("#users-list-role").prop("selectedIndex", 0);
      $("#users-list-role").change();
      $("#users-list-status").prop("selectedIndex", 0);
      $("#users-list-status").change();
      $("#users-list-verified").prop("selectedIndex", 0);
      $("#users-list-verified").change();
      $("#users-list-department").prop("selectedIndex", 0);
      $("#users-list-department").change();
    });

    /*** INIT TABLE ***/
    new agGrid.Grid(gridTable, gridOptions);
  }
  // users language select
  if ($("#users-language-select2").length > 0) {
    $("#users-language-select2").select2({
      dropdownAutoWidth: true,
      width: "100%",
    });
  }
  // users music select
  if ($("#users-music-select2").length > 0) {
    $("#users-music-select2").select2({
      dropdownAutoWidth: true,
      width: "100%",
    });
  }
  // users movies select
  if ($("#users-movies-select2").length > 0) {
    $("#users-movies-select2").select2({
      dropdownAutoWidth: true,
      width: "100%",
    });
  }
  // users birthdate date
  if ($(".birthdate-picker").length > 0) {
    $(".birthdate-picker").pickadate({
      format: "dd/mm/yyyy",
    });
  }
  // Input, Select, Textarea validations except submit button validation initialization
  if ($(".users-edit").length > 0) {
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
  }

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
