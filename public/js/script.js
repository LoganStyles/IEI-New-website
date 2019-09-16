// A $( document ).ready() block.
$( document ).ready(function() {
    // Hide submenus
    //$('#body-row .collapse').collapse('hide');     
    if ((screen.width<768)) {
        $('.navbar-toggler').attr('data-toggle','collapse');
        $('.navbar-toggler').attr('data-target','#sidebar-container');
    }else{
        $('.navbar-toggler').attr('data-toggle','sidebar-colapse');
    }
    
    $('.list-group-item.list-group-item-action').click(function() {
        $(this).find('.submenu-icon').toggleClass('fa-angle-double-down fa-angle-double-right');
    });
    // Collapse click
    $('[data-toggle=sidebar-colapse]').click(function() {
        SidebarCollapse();
    });
    
    function SidebarCollapse () {
        $('.menu-collapsed').toggleClass('d-none');
        $('.sidebar-submenu').toggleClass('d-none');
        $('.submenu-icon').toggleClass('d-none');
        $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
        
        // Treating d-flex/d-none on separators with title
        var SeparatorTitle = $('.sidebar-separator-title');
        if ( SeparatorTitle.hasClass('d-flex') ) {
            SeparatorTitle.removeClass('d-flex');
        } else {
            SeparatorTitle.addClass('d-flex');
        }
    }
    if($('.texteditor').length){
        $('.texteditor').jqte();
    }    
    $('.btn.submit').click(function(e){
        e.preventDefault();
        $('.content').val($(".texteditor.content").parent().parent().find(".jqte_editor").html());        
        $('.content_title').val($(".texteditor.content_title").parent().parent().find(".jqte_editor").html());
        $('.question').val($(".texteditor.question").parent().parent().find(".jqte_editor").html());        
        $('.answer').val($(".texteditor.answer").parent().parent().find(".jqte_editor").html());
        $('.profile').val($(".texteditor.profile").parent().parent().find(".jqte_editor").html());
        $('.form-horizontal').submit();
    })
    $(".del").click(function(){
        if(confirm("Are you sure you want to delete item?")){
            $(location).attr('href',$(this).data('href') );
        }else{
            return false;
        }
    });
    if($('.datatable').length){
        $('.datatable').dataTable();
    }
});