$(function() {
    // grid with row numbers and inline editing
				
    $(".grid.all").loadGrid({
        nRowsShowing:10,
        inlineEditing:true,
        stickyRows:false,
        order_by : "purchase_date",
        maxLength:true,
        adding:true,
        deleting:true,
        showRowNumbers:true,
        confirmDelete:"txn_i",
        dateRange:"purchase_date",
        pagerLocation:"both",
        width:1000
    });
				
    // default grid
    $(".grid.default").loadGrid({
        adding : true,
        loadComplete : function() {
            var $grid = $(this);
            var json = $grid.exportAsJson();
        },
        width:1000
    });

});
			
	
