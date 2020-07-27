$(document).ready(function () {
  function filterColumn(i) {
    $("#example")
      .DataTable()
      .column(i)
      .search($("#col" + i + "_filter").val())
      .draw();
  }
  $("input.column_filter").on("keyup click", function () {
    filterColumn($(this).attr("data-column"));
  });

  $("#column_filter").change(function () {
    filterColumn2($(this).val());
  });
  function filterColumn2(i) {
    $("#example").DataTable().column(5).search(i, false, false, true).draw();
  }

  ///////////////////////
  function filterColumn(i) {
    $("#example2")
      .DataTable()
      .column(i)
      .search($("#col" + i + "_filter").val())
      .draw();
  }
  $("input.column_filter").on("keyup click", function () {
    filterColumn($(this).attr("data-column"));
  });

  $("#column_filter").change(function () {
    filterColumn2($(this).val());
  });
  function filterColumn2(i) {
    $("#example2").DataTable().column(5).search(i, false, false, true).draw();
  }
  ///////////////////////
  var list_siswa = $("#example").DataTable({
    processing: true,
    language: {
      processing:
        '<p class="btn btn-danger" type="button" disabled=""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</p>',
    },
    responsive: true,
    dom: "lrtip",
    pagingType: "simple",
    ajax: {
      url: "siswa/tampilkan_siswa",
      dataSrc: "",
    },

    columns: [
      { data: null },
      { data: "nama" },
      { data: "nipd" },
      { data: "nisn" },
      { data: "jk" },
      { data: "rombel_saat_ini" },
      { data: "agama" },
      {
        data: function (row, type, set) {
          return (
            '<button class="btn btn-info btn-sm editRecord" onclick="lihat_modal_siswa(' +
            row.no_urut +
            ')" data-toggle="modal" data-target=".view_modal_data">Lihat</button>' +
            " " +
            '<button class="btn btn-danger btn-sm deleteRecord" data-id="' +
            row.no_urut +
            '" data-nama="' +
            row.nama +
            '" id="ajax-request">Hapus</button>'
          );
        },
      },
    ],
  });

  list_siswa
    .on("order.dt search.dt", function () {
      list_siswa
        .column(0, {
          search: "applied",
          order: "applied",
        })
        .nodes()
        .each(function (cell, i) {
          cell.innerHTML = i + 1;
        });
    })
    .draw();

  $("#list_siswa").on("click", ".deleteRecord", function () {
    var UserId = $(this).data("id");
    var username = $(this).data("nama");
    $("#deleteUserModal").modal("show");

    $("#delete_user").text("" + username);
    $("#deleteUserId").val(UserId);
  });
  $("#deleteUserForm").on("submit", function () {
    var UserId = $("#deleteUserId").val();
    var token = $('input[name="csrf_token_web"]').attr("value");
    $.ajax({
      type: "POST",
      url: "siswa/hapus",
      dataType: "JSON",
      data: { id: UserId, csrf_token_web: token },
      success: function (data) {
        $("#" + UserId).remove();
        $("#deleteUserId").val("");
        $("#deleteUserModal").modal("hide");
        list_siswa.ajax.reload(function () {});
      },
    });
    return false;
  });

  var list_siswa2 = $("#example2").DataTable({
    processing: true,
    language: {
      processing:
        '<p class="btn btn-danger" type="button" disabled=""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</p>',
    },
    responsive: true,
    dom: "lrtip",
    pagingType: "simple",
    ajax: {
      url: "siswa/tampilkan_siswa",
      dataSrc: "",
    },
    columnDefs: [{ className: "surat_center", targets: [0, 2, 3, 4, 5, 6, 7] }],

    columns: [
      { data: null },
      { data: "nama" },
      { data: "nipd" },
      { data: "nisn" },
      { data: "jk" },
      { data: "rombel_saat_ini" },
      { data: "agama" },
      {
        data: function (row, type, set) {
          return (
            '<button class="btn btn-info btn-sm editRecord" onclick="lihat_modal_siswa(' +
            row.no_urut +
            ')" data-toggle="modal" data-target=".view_modal_data">Lihat</button>'
          );
        },
      },
    ],
  });

  list_siswa2
    .on("order.dt search.dt", function () {
      list_siswa2
        .column(0, {
          search: "applied",
          order: "applied",
        })
        .nodes()
        .each(function (cell, i) {
          cell.innerHTML = i + 1;
        });
    })
    .draw();
});
