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
    $("#example").DataTable().column(3).search(i, false, false, true).draw();
  }

  var list_guru = $("#example").DataTable({
    processing: true,
    language: {
      processing:
        '<p class="btn btn-danger" type="button" disabled=""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</p>',
    },
    responsive: true,
    dom: "lrtip",
    pagingType: "simple",
    ajax: {
      url: "guru/table_guru",
      dataSrc: "",
    },

    columns: [
      { data: null },
      { data: "nama" },
      { data: "jenis_ptk" },
      { data: "status_kepegawaian" },
      { data: "tempat_lahir" },
      { data: "tanggal_lahir" },
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

  list_guru
    .on("order.dt search.dt", function () {
      list_guru
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

  $("#list_guru").on("click", ".deleteRecord", function () {
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
      url: "guru/hapus",
      dataType: "JSON",
      data: { id: UserId, csrf_token_web: token },
      success: function (data) {
        $("#" + UserId).remove();
        $("#deleteUserId").val("");
        $("#deleteUserModal").modal("hide");
        list_guru.ajax.reload(function () {});
      },
    });
    return false;
  });
});
