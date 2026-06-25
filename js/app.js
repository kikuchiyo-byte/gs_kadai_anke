
$(".group").hide(); 

$("#mode").change(function () {
  const val = $(this).val();

  // 全部隠す & disabled にする
  $(".group").hide().find("input").prop("disabled", true);

  // 選択されたグループだけ表示 & disabled を解除
  $("." + val).show().find("input").prop("disabled", false);
});
