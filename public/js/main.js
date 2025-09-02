/**
 * @Application CGD
 * Main utility funcational scripts
 */

//-- Load Bootstrap Modal (Bootstrap 5 version)
function loadModal(data, width) {
    var modalId = "myModal";
    if (document.getElementById("myModal")) {
        modalId = "subModal";
    }
    // Remove any existing modal with the same id
    let existing = document.getElementById(modalId);
    if (existing) existing.remove();

    // Build modal structure
    let modalHtml = `
        <div class="modal fade" id="${modalId}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog ${width === 'l' ? 'modal-lg' : (width === 's' ? 'modal-sm' : '')}">
                ${data}
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML("beforeend", modalHtml);

    // Initialize modal
    let modalEl = document.getElementById(modalId);
    let modal = new bootstrap.Modal(modalEl, {
        backdrop: 'static',
        keyboard: false
    });

    // Focus on first input
    modalEl.addEventListener('shown.bs.modal', function () {
        let firstInput = modalEl.querySelector("input[type=text],textarea,select");
        if (firstInput) firstInput.focus();
    });

    // Reset body overflow on close
    modalEl.addEventListener('hidden.bs.modal', function () {
        document.body.style.overflow = "auto";
        modalEl.remove();
    });

    // Show modal
    document.body.style.overflow = "hidden";
    modal.show();
}

//-- Load Bootstrap second Modal
function loadBackModal (data) {
    $("body").css("overflow", "hidden");
    $('<div class="modal fade" id="newModel" role="dialog" style="z-index:1040">' + data + '</div>').modal({backdrop: 'static', keyboard: false})
    .on('hidden.bs.modal', function (e) {
        unLoadModal();
    });
}
//-- Unload Bootstrap Modal
function unLoadModal () {
    if ($("#subModal").length > 0) {
        $("#subModal").modal("hide");
        $("#subModal").remove();
    }
    else {
        $("#myModal").modal("hide");
        $("#myModal").remove();
        $(".modal-backdrop").remove();
        $("body").css("overflow", "auto");
    }
}
//-- Pre Loader
function preLoader() {
    var pre_loader = "<div id='pre_loader'><div id='preload-text'>Loading...</div></div>";
    $('body').append(pre_loader);
    $('body').css('pointer-events', 'none');
}
//-- Close Pre Loader
function closePreLoader() {
    $('#pre_loader').remove();
    $('body').css('pointer-events', 'visible');
}
//-- Floating header
function Tablehead() {
    var $table = $('table.fixed-head');
    $table.floatThead({
        responsiveContainer: function($table){
            return $table.closest('.table-responsive');
        }
    });
}

//-- Default load
$(function() {
    // for bind with enter key
    var keyStop = {
        8: ":not(input:text, textarea, input:file, input:password)", // stop backspace = back
        13: "input:text, input:password", // stop enter = submit
        end: null
    };
    $(document).bind("keydown", function(event){
        var selector = keyStop[event.which];
        if(selector !== undefined && $(event.target).is(selector)) {
            $('#search').click();
            event.preventDefault(); //stop event
        }
        return true;
    });
});

/**
Commented on 27/12/2022 if not using then we remove this commented code
// Loading Icon
var g_loading = "<div class='text-center'><img src='"+WEB_ROOT+"images/ajax-submit.png' /></div>";
var g_position = "<div class='text-center'><img src='"+WEB_ROOT+"images/ajax-loader.gif' /></div>";
var g_big_loading = "<div class='text-center'><img src='"+WEB_ROOT+"images/loading.gif' /></div>";

$(function() {
   // for bind with enter key
  var keyStop = {
   8: ":not(input:text, textarea, input:file, input:password)", // stop backspace = back
   13: "input:text, input:password", // stop enter = submit
   end: null
  };
  $(document).bind("keydown", function(event){
    var selector = keyStop[event.which];
    if(selector !== undefined && $(event.target).is(selector)) {
      $('#search').click();
      event.preventDefault(); //stop event
    }
    return true;
  });
});

$(function(){
  $('#between_dates').prop('checked',false);
});

function change_location(id){
  $.post(WEB_ROOT+"Index/change_Location",{"id":id});
  window.location.reload();
}
// Tree view
$(function() {
  tree();
});
function tree() {
  $('.tree ul > li').show();
  $('.tree ul > li > ul > li').hide();
  applyBasicTree();
};

// Apply Basic Tree
function applyBasicTree() {
  $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
  $('.tree li.parent_li > span').on('click', function (e) {
    var children = $(this).parent('li.parent_li').find(' > ul > li');
    if (children.is(":visible")) {
      children.hide('fast');
      $(this).attr('title', 'Expand this branch').find(' > span').addClass('glyphicon-plus-sign').removeClass('glyphicon-minus-sign');
    }
    else {
      children.show('fast');
      $(this).attr('title', 'Collapse this branch').find(' > span').addClass('glyphicon-minus-sign').removeClass('glyphicon-plus-sign');
    }
    e.stopPropagation();
  });
}

// Expand All
function expandAll () {
  $('.tree ul > li').show();
  var children = $(this).parent('li.parent_li').find(' > ul > li');
  children.show('fast');
  $(this).attr('title', 'Collapse').find(' > span').addClass('glyphicon-minus-sign').removeClass('glyphicon-plus-sign');
}

// Collapse All
function collapseAll () {
  $('.tree ul > li').show();
  $('.tree ul > li > ul > li').hide();
  $('.tree ul > li span > span').removeClass('glyphicon-minus-sign');
  $('.tree ul > li span > span').addClass('glyphicon-plus-sign');
}

var loading = '<div class="container-fluid"><div class="row"><div class="col-md-12"><div class="loader"><p>Loading...</p><div class="loader-inner"></div><div class="loader-inner"></div><div class="loader-inner"></div></div></div></div></div>';
var progressbar = '<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" style="width:100%"></div></div>';
var lodinggears = '<i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>';
// tree view end
// verification status details js
function verification_document_check(){
  var filelength = ($('#document').prop('files').length);
  if(filelength > 3){
    alert('Plese select less then 4 files only');
    return false
  }
}
// Without Dot
function isNumberKeys(evt) {
  var charCode = (evt.which) ? evt.which : evt.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;
}
// With Dot
function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : evt.keyCode
  if (charCode > 31 && (charCode < 45 || charCode > 57))
  return false;
  return true;
}
//Table last record over flow action js
$(document).click(function (event) {
    $('.dropdown-menu[data-parent]').hide();
});
*/